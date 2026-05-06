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

/* ── REVEAL ANIMATIONS ── */
(function() {
  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Auto-attach reveal classes so templates don't need manual edits
  var singles = [
    '.shead', '.hgrid > div:first-child', '.hgrid > .hright-btns', '.ustrip',
    '.cband', '.sband', '.gleft', '.gright', '.zlayout', '.fwrap',
    '.linner > .lleft', '.linner > .lw', '.psec-hero-inner > .psec-left', '.psec-hero-inner > .psec-form-wrap'
  ];
  singles.forEach(function(sel) {
    document.querySelectorAll(sel).forEach(function(el) {
      el.classList.add('reveal');
    });
  });

  var groups = [
    '.pgrid > .pcard', '.vgrid > .vcard', '.prgrid > .prcard', '.tmgrid > .tmcard',
    '.zchips > .zchip', '.fwrap > .fitem', '.ftgrid > div', '.psec-perks > li', '.psec-trust > .psec-tbdg'
  ];
  groups.forEach(function(sel) {
    document.querySelectorAll(sel).forEach(function(el, idx) {
      el.classList.add('reveal');
      el.style.transitionDelay = (Math.min(idx, 10) * 70) + 'ms';
    });
  });

  var els = document.querySelectorAll('.reveal');
  if (!els.length) return;

  if (reduced || !('IntersectionObserver' in window)) {
    els.forEach(function(el) { el.classList.add('visible'); });
    return;
  }

  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

  els.forEach(function(el) { obs.observe(el); });
})();
