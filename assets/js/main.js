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

/* ── PREMIUM ANIMATIONS v2.4 ── */
(function() {
  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── 1. SCROLL PROGRESS BAR ── */
  var prog = document.createElement('div');
  prog.className = 'fd-prog';
  document.body.appendChild(prog);

  /* ── 2. PARALLAX + rAF SCROLL LOOP ── */
  var heroBg   = document.querySelector('.hero-photo-bg');
  var lastSY   = 0;
  var ticking  = false;

  function onScroll() {
    lastSY = window.scrollY;
    if (!ticking) {
      requestAnimationFrame(function() {
        var total = document.body.scrollHeight - window.innerHeight;
        if (total > 0) prog.style.width = (lastSY / total * 100) + '%';
        if (heroBg && lastSY < window.innerHeight * 1.6) {
          heroBg.style.transform = 'translate3d(0,' + (lastSY * 0.32) + 'px,0) scale(1.07)';
        }
        ticking = false;
      });
      ticking = true;
    }
  }

  if (!reduced) window.addEventListener('scroll', onScroll, { passive: true });

  /* ── 3. SPLIT TEXT UTILITY ── */
  function splitWords(el, outerCls, innerCls) {
    if (!el) return;
    var nodes = Array.from(el.childNodes);
    el.innerHTML = '';
    nodes.forEach(function(node) {
      if (node.nodeType !== 3) { el.appendChild(node.cloneNode(true)); return; }
      node.textContent.split(/(\s+)/).forEach(function(part) {
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

  /* ── 4. HERO H1 — GSAP SplitText style ── */
  if (!reduced) {
    var heroH1 = document.querySelector('.hero h1');
    if (heroH1) {
      splitWords(heroH1, 'ht-word', 'ht-inner');
      heroH1.querySelectorAll('.ht-inner').forEach(function(w, i) {
        setTimeout(function() { w.classList.add('ht-in'); }, 180 + i * 80);
      });
    }
  }

  /* ── 5. SECTION H2 SPLIT TEXT ── */
  if (!reduced) {
    document.querySelectorAll('.shead h2, .psec-h2').forEach(function(h) {
      splitWords(h, 'sh-word', 'sh-inner');
    });
  }

  /* ── 6. REVEAL CLASS ASSIGNMENT ── */
  var singles = [
    '.shead', '.hgrid > div:first-child', '.hgrid > .hright-btns',
    '.ustrip', '.cband', '.sband', '.zlayout', '.fwrap',
    '.linner > .lleft', '.linner > .lw',
    '.psec-hero-inner > .psec-left', '.psec-hero-inner > .psec-form-wrap'
  ];
  singles.forEach(function(sel) {
    document.querySelectorAll(sel).forEach(function(el) {
      if (!el.classList.contains('reveal') && !el.classList.contains('reveal-left') && !el.classList.contains('reveal-right')) {
        el.classList.add('reveal');
      }
    });
  });

  /* Two-column directional reveals */
  var twoCols = [
    ['.gleft',                              'reveal-left'],
    ['.gright',                             'reveal-right'],
    ['.linner > .lleft',                    'reveal-left'],
    ['.linner > .lw',                       'reveal-right'],
    ['.psec-hero-inner > .psec-left',       'reveal-left'],
    ['.psec-hero-inner > .psec-form-wrap',  'reveal-right']
  ];
  twoCols.forEach(function(pair) {
    document.querySelectorAll(pair[0]).forEach(function(el) {
      el.classList.remove('reveal');
      el.classList.add(pair[1]);
    });
  });

  var groups = [
    '.pgrid > .pcard', '.vgrid > .vcard', '.prgrid > .prcard', '.tmgrid > .tmcard',
    '.zchips > .zchip', '.fwrap > .fitem', '.ftgrid > div',
    '.psec-perks > li', '.psec-trust > .psec-tbdg'
  ];
  groups.forEach(function(sel) {
    document.querySelectorAll(sel).forEach(function(el, idx) {
      el.classList.add('reveal');
      el.style.transitionDelay = (Math.min(idx, 10) * 75) + 'ms';
    });
  });

  /* ── 7. COUNTER ANIMATION ── */
  var counted = typeof WeakSet !== 'undefined' ? new WeakSet() : null;

  function animCounter(el) {
    if (counted && counted.has(el)) return;
    if (counted) counted.add(el);
    var target = parseInt(el.textContent, 10);
    if (isNaN(target)) return;
    var duration = 1500 + Math.min(target, 500);
    var startTime = null;
    function easeOut(t) { return 1 - Math.pow(1 - t, 3); }
    function step(ts) {
      if (!startTime) startTime = ts;
      var p = Math.min((ts - startTime) / duration, 1);
      el.textContent = Math.round(easeOut(p) * target);
      if (p < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }
    requestAnimationFrame(step);
  }

  /* ── 8. FALLBACK (no IntersectionObserver or reduced-motion) ── */
  if (reduced || !('IntersectionObserver' in window)) {
    document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(function(el) { el.classList.add('visible'); });
    document.querySelectorAll('.sh-word .sh-inner').forEach(function(el) { el.classList.add('sh-in'); });
    document.querySelectorAll('.sn').forEach(animCounter);
    return;
  }

  /* ── 9. INTERSECTION OBSERVER ── */
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (!entry.isIntersecting) return;
      var el = entry.target;
      el.classList.add('visible');
      obs.unobserve(el);
      /* H2 words stagger */
      el.querySelectorAll && el.querySelectorAll('.sh-word .sh-inner').forEach(function(w, i) {
        setTimeout(function() { w.classList.add('sh-in'); }, i * 65);
      });
      /* Counters */
      el.querySelectorAll && el.querySelectorAll('.sn').forEach(animCounter);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -5% 0px' });

  /* Dedicated counter observer on sband (it's already a reveal target) */
  var sbObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (!entry.isIntersecting) return;
      entry.target.querySelectorAll('.sn').forEach(animCounter);
      sbObs.unobserve(entry.target);
    });
  }, { threshold: 0.35 });
  document.querySelectorAll('.sband').forEach(function(el) { sbObs.observe(el); });

  document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(function(el) { obs.observe(el); });

  /* ── 10. CARD 3D TILT ── */
  if (window.innerWidth > 900) {
    document.querySelectorAll('.pcard,.vcard,.prcard').forEach(function(card) {
      card.addEventListener('mousemove', function(e) {
        var r   = card.getBoundingClientRect();
        var dx  = ((e.clientX - r.left) / r.width  - 0.5) * 10;
        var dy  = ((e.clientY - r.top)  / r.height - 0.5) * 10;
        card.style.transform    = 'perspective(900px) rotateX(' + (-dy) + 'deg) rotateY(' + dx + 'deg) scale(1.025)';
        card.style.boxShadow    = '0 24px 48px rgba(0,0,0,.38)';
        card.style.zIndex       = '2';
        card.style.transition   = 'transform .1s ease, box-shadow .1s ease';
      });
      card.addEventListener('mouseleave', function() {
        card.style.transform    = '';
        card.style.boxShadow    = '';
        card.style.zIndex       = '';
        card.style.transition   = '';
      });
    });
  }

  /* ── 11. MAGNETIC BUTTONS ── */
  if (window.innerWidth > 900) {
    document.querySelectorAll('.nbtn, .hright-btn-primary, .sqt').forEach(function(btn) {
      btn.addEventListener('mousemove', function(e) {
        var r  = btn.getBoundingClientRect();
        var dx = (e.clientX - (r.left + r.width  / 2)) * 0.25;
        var dy = (e.clientY - (r.top  + r.height / 2)) * 0.25;
        btn.style.transform = 'translate(' + dx + 'px,' + dy + 'px) translateY(-2px)';
      });
      btn.addEventListener('mouseleave', function() {
        btn.style.transform = '';
      });
    });
  }

})();
