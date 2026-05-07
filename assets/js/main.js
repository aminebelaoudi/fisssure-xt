/* ============================================================
   FISSURE ET DRAIN XT — main.js v2.0
   ============================================================ */

/* ── MOBILE NAV ── */
function tMob() {
  const m = document.getElementById('mobM');
  if (!m) return;
  m.style.display = m.style.display === 'block' ? 'none' : 'block';
}

document.addEventListener('click', function(e) {
  const m = document.getElementById('mobM');
  const hbg = document.querySelector('.hbg');
  if (m && m.style.display === 'block' && !m.contains(e.target) && hbg && !hbg.contains(e.target)) {
    m.style.display = 'none';
  }
});

/* ── FAQ ── */
function fT(el) {
  const it = el.parentElement;
  const was = it.classList.contains('open');
  document.querySelectorAll('.fitem').forEach(function(i) { i.classList.remove('open'); });
  if (!was) it.classList.add('open');
}

/* ── LEAD MACHINE STATE ── */
var S = { p: [], t: null, u: null };
var E = {
  infiltration: { lo: 4500, hi: 12000 },
  fissure:      { lo: 800,  hi: 2500  },
  moisissure:   { lo: 3000, hi: 8000  },
  inspection:   { lo: 0,    hi: 0     }
};

function lmT(el, g) {
  if (g === 'p') {
    el.classList.toggle('sel');
    var v = el.dataset.v, i = S.p.indexOf(v);
    i === -1 ? S.p.push(v) : S.p.splice(i, 1);
  } else {
    var vs = g === 't'
      ? ['maison', 'semi', 'condo', 'comm']
      : ['urgent', 'planifie', 'devis'];
    document.querySelectorAll('.lopt[data-v]').forEach(function(c) {
      if (vs.includes(c.dataset.v)) c.classList.remove('sel');
    });
    el.classList.add('sel');
    g === 't' ? (S.t = el.dataset.v) : (S.u = el.dataset.v);
  }
}

function lmC() {
  if (!S.p.length) return '—';
  var lo = 0, hi = 0;
  S.p.forEach(function(p) {
    if (E[p]) { lo += E[p].lo; hi += E[p].hi; }
  });
  if (lo === 0 && hi === 0) return 'Inspection — sans frais';
  return lo.toLocaleString('fr-CA') + '\u00a0$ \u2013 ' + hi.toLocaleString('fr-CA') + '\u00a0$';
}

function lmG(n) {
  [1, 2, 3, 4].forEach(function(i) {
    var el = document.getElementById('lm' + i);
    if (el) el.style.display = i === n ? 'block' : 'none';
  });

  // update progress bar
  [1, 2, 3, 4].forEach(function(i) {
    var seg = document.getElementById('ps' + i);
    if (seg) {
      seg.className = 'lpseg' + (i <= n ? ' d' : '') + (i === n ? ' a' : '');
    }
  });

  if (n === 3) {
    var estEl = document.getElementById('lEst');
    if (estEl) estEl.textContent = lmC();

    var pM = {
      infiltration: "Infiltration d'eau",
      fissure:      'Fissure de fondation',
      moisissure:   'Humidité/moisissures',
      inspection:   'Inspection préventive'
    };
    var tM = {
      maison: 'Maison unifamiliale',
      semi:   'Semi-détachée',
      condo:  'Condo / multiplex',
      comm:   'Commercial'
    };
    var uM = {
      urgent:   '🚨 Urgent',
      planifie: '📅 Planifié',
      devis:    '💬 Comparaison'
    };

    var sumEl = document.getElementById('lSum');
    if (sumEl) {
      sumEl.innerHTML =
        '<div class="srow"><span class="sk">Problème(s)</span><span class="sv">' +
          (S.p.map(function(p) { return pM[p]; }).join(', ') || '—') +
        '</span></div>' +
        '<div class="srow"><span class="sk">Propriété</span><span class="sv">' + (tM[S.t] || '—') + '</span></div>' +
        '<div class="srow"><span class="sk">Urgence</span><span class="' + (S.u === 'urgent' ? 'surg' : 'sv') + '">' + (uM[S.u] || '—') + '</span></div>';
    }

    var prioEl = document.getElementById('lPrio');
    if (prioEl) prioEl.style.display = S.u === 'urgent' ? 'flex' : 'none';
  }

  var sec = document.getElementById('soumission');
  if (sec) sec.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function lmSub() {
  var fn = document.getElementById('lFn') ? document.getElementById('lFn').value.trim() : '';
  var ph = document.getElementById('lPh') ? document.getElementById('lPh').value.trim() : '';
  if (!fn || !ph) {
    alert('Veuillez entrer votre prénom et votre numéro de téléphone.');
    return;
  }
  var refEl = document.getElementById('lRef');
  if (refEl) refEl.textContent = Math.floor(1000 + Math.random() * 8999);
  lmG(4);
}

/* ── STICKY NAV SCROLL ── */
(function() {
  var nav = document.querySelector('nav');
  if (!nav) return;
  window.addEventListener('scroll', function() {
    if (window.scrollY > 60) {
      nav.style.boxShadow = '0 2px 20px rgba(0,0,0,.4)';
    } else {
      nav.style.boxShadow = 'none';
    }
  }, { passive: true });
})();

/* ── ANIMATIONS v3.0 — GSAP + ScrollTrigger ── */
(function () {
  'use strict';

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── HELPERS ── */
  function splitTextNodes(el, outerCls, innerCls) {
    if (!el) return;
    var nodes = Array.from(el.childNodes);
    el.innerHTML = '';
    nodes.forEach(function (node) {
      if (node.nodeType !== 3) { el.appendChild(node.cloneNode(true)); return; }
      node.textContent.split(/(\s+)/).forEach(function (part) {
        if (!part) return;
        if (/^\s+$/.test(part)) { el.appendChild(document.createTextNode('\u00a0')); return; }
        var outer = document.createElement('span'); outer.className = outerCls;
        var inner = document.createElement('span'); inner.className = innerCls;
        inner.textContent = part;
        outer.appendChild(inner);
        el.appendChild(outer);
      });
    });
  }

  /* ── SCROLL PROGRESS BAR (always, lightweight) ── */
  if (!reduced) {
    var prog = document.createElement('div');
    prog.className = 'fd-prog';
    document.body.appendChild(prog);
  }

  /* ══════════════════════════════════════════════════
     GSAP MODE — full premium
  ══════════════════════════════════════════════════ */
  if (!reduced && typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {

    /* Signal CSS to neutralize all opacity:0 classes — GSAP owns the animations */
    document.documentElement.classList.add('gsap-loaded');

    gsap.registerPlugin(ScrollTrigger);
    gsap.defaults({ ease: 'power3.out' });

    /* 1 — Progress bar scrub */
    if (prog) {
      ScrollTrigger.create({
        start: 'top top',
        end: 'bottom bottom',
        onUpdate: function (self) {
          prog.style.width = (self.progress * 100) + '%';
        }
      });
    }

    /* 2 — Hero parallax disabled — inset overflow used instead to avoid edge artifacts */

    /* 3 — Hero H1 — animate as block (preserves span=yellow, text=white, all spacing) */
    var heroH1 = document.querySelector('.hero h1');
    if (heroH1) {
      gsap.from(heroH1, { opacity: 0, y: 38, duration: 1.1, delay: 0.15, ease: 'power4.out' });
    }

    /* 4 — Hero right panel slide-in */
    var heroRight = document.querySelector('.hgrid > .hright-btns');
    if (heroRight) {
      gsap.from(heroRight, { opacity: 0, x: 55, duration: 1.1, delay: 0.4 });
    }

    /* 5 — Hero sub-elements (badge, desc, tel) */
    gsap.utils.toArray('.hero .hbadge, .hero .hdesc, .hero .htel').forEach(function (el, i) {
      gsap.from(el, { opacity: 0, y: 20, duration: 0.9, delay: 0.55 + i * 0.14 });
    });

    /* 6 — Section H2 — word-by-word reveal */
    document.querySelectorAll('.shead h2').forEach(function (h2) {
      splitTextNodes(h2, 'sh-word', 'sh-inner');
      gsap.fromTo(h2.querySelectorAll('.sh-inner'),
        { yPercent: 110, opacity: 0 },
        { yPercent: 0, opacity: 1, duration: 0.8, stagger: 0.065, ease: 'power3.out',
          immediateRender: false,
          scrollTrigger: { trigger: h2, start: 'top 92%' } }
      );
    });

    /* 7 — Section p / ssub under shead */
    document.querySelectorAll('.shead > p, .shead > .ssub').forEach(function (p) {
      gsap.from(p, {
        opacity: 0, y: 18, duration: 0.7,
        immediateRender: false,
        scrollTrigger: { trigger: p, start: 'top 95%' }
      });
    });

    /* 8 — Stats counters */
    document.querySelectorAll('.sband .sn').forEach(function (el) {
      var target = parseInt(el.textContent, 10);
      if (isNaN(target)) return;
      var obj = { val: 0 };
      el.textContent = '0';
      gsap.to(obj, {
        val: target, duration: 2.2, ease: 'power2.out',
        scrollTrigger: { trigger: el, start: 'top 92%' },
        onUpdate: function () { el.textContent = Math.round(obj.val); },
        onComplete: function () { el.textContent = target; }
      });
    });

    /* 9 — Card grid stagger reveals */
    ['.pgrid > .pcard', '.vgrid > .vcard', '.prgrid > .prcard', '.tmgrid > .tmcard'].forEach(function (sel) {
      var cards = gsap.utils.toArray(sel);
      if (!cards.length) return;
      gsap.from(cards, {
        opacity: 0, y: 55, scale: 0.97, duration: 0.85, stagger: 0.1,
        ease: 'power3.out',
        immediateRender: false,
        scrollTrigger: { trigger: cards[0].parentElement, start: 'top 92%' }
      });
    });

    /* 10 — Chips, perks, FAQ stagger */
    var itemDefs = [
      ['.zchips > .zchip',        -22, 0  ],
      ['.psec-perks > li',         -18, 0  ],
      ['.fwrap > .fitem',            0, 30 ],
      ['.psec-trust > .psec-tbdg',   0, 24]
    ];
    itemDefs.forEach(function (def) {
      var items = gsap.utils.toArray(def[0]);
      if (!items.length) return;
      gsap.from(items, {
        opacity: 0, x: def[1], y: def[2], duration: 0.65, stagger: 0.07,
        ease: 'power3.out',
        immediateRender: false,
        scrollTrigger: { trigger: items[0].parentElement, start: 'top 92%' }
      });
    });

    /* 11 — Two-column directional reveals */
    gsap.utils.toArray('.gleft, .linner > .lleft, .psec-hero-inner > .psec-left').forEach(function (el) {
      gsap.from(el, {
        opacity: 0, x: -55, duration: 1.0,
        immediateRender: false,
        scrollTrigger: { trigger: el, start: 'top 92%' }
      });
    });
    /* .psec-form-wrap excluded — contains iframe, must stay visible immediately */
    gsap.utils.toArray('.gright, .linner > .lw').forEach(function (el) {
      gsap.from(el, {
        opacity: 0, x: 55, duration: 1.0,
        immediateRender: false,
        scrollTrigger: { trigger: el, start: 'top 92%' }
      });
    });

    /* 12 — Trust certif band */
    gsap.from('.cband', {
      opacity: 0, y: 22, duration: 0.9,
      immediateRender: false,
      scrollTrigger: { trigger: '.cband', start: 'top 95%' }
    });

    /* 13 — ustrip alert bar */
    gsap.from('.ustrip', {
      opacity: 0, y: -18, duration: 0.7, delay: 0.1
    });

    /* 14 — Footer columns */
    var ftCols = gsap.utils.toArray('.ftgrid > div');
    if (ftCols.length) {
      gsap.from(ftCols, {
        opacity: 0, y: 28, duration: 0.8, stagger: 0.1,
        immediateRender: false,
        scrollTrigger: { trigger: '.ftgrid', start: 'top 98%' }
      });
    }

    /* ── SAFETY: recalculate positions after images are loaded ── */
    window.addEventListener('load', function () {
      ScrollTrigger.refresh();
    });

    /* ── SAFETY NET: force-show anything still hidden after 4s ── */
    setTimeout(function () {
      document.querySelectorAll('[style*="opacity: 0"],[style*="opacity:0"]').forEach(function (el) {
        el.style.removeProperty('opacity');
        el.style.removeProperty('transform');
        el.style.removeProperty('filter');
      });
    }, 4000);

    /* 15 — Card hover lift only (CSS handles translateY, no mouse-tracking tilt) */

    /* 16 — Magnetic buttons (desktop only) */
    if (window.innerWidth > 900) {
      gsap.utils.toArray('.nbtn, .hright-btn-primary, .sqt').forEach(function (btn) {
        btn.addEventListener('mousemove', function (e) {
          var r = btn.getBoundingClientRect();
          var dx = (e.clientX - (r.left + r.width  / 2)) * 0.28;
          var dy = (e.clientY - (r.top  + r.height / 2)) * 0.28;
          gsap.to(btn, { x: dx, y: dy - 2, duration: 0.35, ease: 'power2.out' });
        });
        btn.addEventListener('mouseleave', function () {
          gsap.to(btn, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.4)' });
        });
      });
    }

    return; /* GSAP mode complete */
  }

  /* ══════════════════════════════════════════════════
     FALLBACK — IntersectionObserver (no GSAP / reduced-motion)
  ══════════════════════════════════════════════════ */
  var singles = [
    '.shead', '.hgrid > div:first-child', '.hgrid > .hright-btns',
    '.ustrip', '.cband', '.sband', '.zlayout', '.fwrap',
    '.linner > .lleft', '.linner > .lw',
    '.psec-hero-inner > .psec-left', '.psec-hero-inner > .psec-form-wrap'
  ];
  singles.forEach(function (sel) {
    document.querySelectorAll(sel).forEach(function (el) { el.classList.add('reveal'); });
  });

  var leftRight = [
    ['.gleft',                             'reveal-left'],
    ['.gright',                            'reveal-right'],
    ['.linner > .lleft',                   'reveal-left'],
    ['.linner > .lw',                      'reveal-right'],
    ['.psec-hero-inner > .psec-left',      'reveal-left']
    /* .psec-form-wrap intentionally excluded — iframe must show immediately */
  ];
  leftRight.forEach(function (pair) {
    document.querySelectorAll(pair[0]).forEach(function (el) {
      el.classList.remove('reveal');
      el.classList.add(pair[1]);
    });
  });

  var groups = [
    '.pgrid > .pcard', '.vgrid > .vcard', '.prgrid > .prcard', '.tmgrid > .tmcard',
    '.zchips > .zchip', '.fwrap > .fitem', '.ftgrid > div',
    '.psec-perks > li', '.psec-trust > .psec-tbdg'
  ];
  groups.forEach(function (sel) {
    document.querySelectorAll(sel).forEach(function (el, idx) {
      el.classList.add('reveal');
      el.style.transitionDelay = (Math.min(idx, 10) * 75) + 'ms';
    });
  });

  var all = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  if (reduced || !('IntersectionObserver' in window)) {
    all.forEach(function (el) { el.classList.add('visible'); });
    return;
  }

  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('visible');
      obs.unobserve(entry.target);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -5% 0px' });

  all.forEach(function (el) { obs.observe(el); });

}());
