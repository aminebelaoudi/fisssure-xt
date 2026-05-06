/**
 * FISSURE ET DRAIN XT — main.js
 * Nav · Hamburger · Stats Counter · FAQ · Multi-Step Form · Scroll Reveal
 */

/* ─── MOBILE MENU ─────────────────────────────────────────── */
function toggleMob() {
  const menu = document.getElementById('mobMenu');
  const ham  = document.getElementById('hamburger');
  const open = menu.classList.toggle('open');
  ham.classList.toggle('open', open);
  document.body.style.overflow = open ? 'hidden' : '';
}

function closeMob() {
  const menu = document.getElementById('mobMenu');
  const ham  = document.getElementById('hamburger');
  menu.classList.remove('open');
  ham.classList.remove('open');
  document.body.style.overflow = '';
}

// Close menu on outside click
document.addEventListener('click', function(e) {
  const menu = document.getElementById('mobMenu');
  if (menu.classList.contains('open') && !menu.contains(e.target) && e.target.id !== 'hamburger') {
    closeMob();
  }
});

/* ─── STICKY NAV SCROLL ───────────────────────────────────── */
(function() {
  var nav = document.querySelector('nav');
  if (!nav) return;
  window.addEventListener('scroll', function() {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });
})();

/* ─── SMOOTH ANCHOR SCROLL (offset for sticky nav) ───────── */
document.querySelectorAll('a[href^="#"]').forEach(function(link) {
  link.addEventListener('click', function(e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    closeMob();
    var offset = 100;
    var top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top: top, behavior: 'smooth' });
  });
});

/* ─── SCROLL REVEAL ───────────────────────────────────────── */
(function() {
  var items = document.querySelectorAll('.reveal');
  if (!items.length) return;
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  items.forEach(function(el) { io.observe(el); });
})();

/* ─── STATS COUNTER ───────────────────────────────────────── */
(function() {
  var stats = document.querySelectorAll('.stat-n[data-to]');
  if (!stats.length) return;
  var started = false;

  function runCounters() {
    if (started) return;
    started = true;
    stats.forEach(function(el) {
      var target = parseInt(el.getAttribute('data-to'), 10);
      var suffix = el.getAttribute('data-suffix') || '';
      var duration = 1600;
      var start = performance.now();
      function update(now) {
        var elapsed = Math.min((now - start) / duration, 1);
        var eased = 1 - Math.pow(1 - elapsed, 3);
        el.textContent = Math.round(eased * target) + suffix;
        if (elapsed < 1) requestAnimationFrame(update);
        else el.textContent = target + suffix;
      }
      requestAnimationFrame(update);
    });
  }

  var band = document.querySelector('.stats');
  if (!band) return;
  var io = new IntersectionObserver(function(entries) {
    if (entries[0].isIntersecting) { runCounters(); io.disconnect(); }
  }, { threshold: 0.4 });
  io.observe(band);
})();

/* ─── FAQ ACCORDION ───────────────────────────────────────── */
function faqT(el) {
  var item = el.closest('.faq-item');
  var isOpen = item.classList.contains('open');
  // close all
  document.querySelectorAll('.faq-item.open').forEach(function(i) { i.classList.remove('open'); });
  if (!isOpen) item.classList.add('open');
}

/* ─── HERO CARD OPTION PICK ───────────────────────────────── */
function hcPick(el) {
  el.closest('.hc-opts').querySelectorAll('.hc-opt').forEach(function(o) { o.classList.remove('sel'); });
  el.classList.add('sel');
}

/* ─── MULTI-STEP FORM ─────────────────────────────────────── */
var _formData = {};

// Pick an option within a group
function cPick(el, group) {
  var container = el.closest('.opts-grid, .opts-col');
  container.querySelectorAll('.opt, .opt-row').forEach(function(o) { o.classList.remove('sel'); });
  el.classList.add('sel');
  _formData[group] = el.querySelector('.opt-t, .opt-row-t').textContent.trim();
  updateRecap();
}

// Navigate steps (1-indexed)
function cGo(step) {
  var allSteps = document.querySelectorAll('.wstep');
  var totalSteps = allSteps.length - 1; // last step is success

  // Validate before advancing
  var current = document.querySelector('.wstep.on');
  if (current && step > parseInt(current.id.replace('ws',''), 10)) {
    if (!validateStep(current)) return;
  }

  allSteps.forEach(function(s) { s.classList.remove('on'); });
  var next = document.getElementById('ws' + step);
  if (next) next.classList.add('on');

  // Update progress bar
  var bars = document.querySelectorAll('.fwp');
  bars.forEach(function(b, i) {
    b.classList.remove('d', 'a');
    if (i < step - 1) b.classList.add('d');
    else if (i === step - 1) b.classList.add('a');
  });

  // Populate recap on step 3
  if (step === 3) updateRecap();
}

function updateRecap() {
  var recap = document.getElementById('formRecap');
  if (!recap) return;
  var parts = [];
  if (_formData.service) parts.push('<strong>Service:</strong> ' + _formData.service);
  if (_formData.urgence) parts.push('<strong>Urgence:</strong> ' + _formData.urgence);
  if (parts.length) {
    recap.innerHTML = parts.join(' &nbsp;·&nbsp; ');
    recap.classList.add('show');
  }
}

function validateStep(stepEl) {
  var id = stepEl ? stepEl.id : '';
  if (id === 'ws3') {
    var nom = document.getElementById('fNom');
    var tel = document.getElementById('fTel');
    var ok = true;
    [nom, tel].forEach(function(f) {
      if (!f) return;
      if (!f.value.trim()) { f.classList.add('err'); ok = false; }
      else f.classList.remove('err');
    });
    if (!ok) {
      var alert = stepEl.querySelector('.w-alert');
      if (alert) { alert.style.display = 'flex'; }
      return false;
    }
  }
  return true;
}

function cSubmit() {
  var nom  = document.getElementById('fNom');
  var tel  = document.getElementById('fTel');
  var ok = true;

  [nom, tel].forEach(function(f) {
    if (!f) return;
    if (!f.value.trim()) { f.classList.add('err'); ok = false; }
    else f.classList.remove('err');
  });

  if (!ok) return;

  // Disable button to prevent double-submit
  var btn = document.querySelector('#ws3 .btn-cta');
  if (btn) { btn.disabled = true; btn.textContent = 'Envoi en cours...'; }

  // Simulate async (replace with real fetch/form submission)
  setTimeout(function() {
    _formData.nom = nom ? nom.value.trim() : '';
    var allSteps = document.querySelectorAll('.wstep');
    allSteps.forEach(function(s) { s.classList.remove('on'); });
    var suc = document.getElementById('wsSuc');
    if (suc) suc.classList.add('on');
    // Update progress bars to full
    document.querySelectorAll('.fwp').forEach(function(b) { b.classList.add('d'); b.classList.remove('a'); });
    // Update success name
    var sucName = document.getElementById('sucName');
    if (sucName && _formData.nom) sucName.textContent = _formData.nom.split(' ')[0];
  }, 800);
}

/* ─── INPUT: clear error on type ─────────────────────────── */
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.fld input').forEach(function(inp) {
    inp.addEventListener('input', function() { this.classList.remove('err'); });
  });

  // Show hero card alert if no service selected after a short delay
  setTimeout(function() {
    var urgency = document.querySelector('.hero-card .urgency');
    if (urgency) urgency.style.display = 'flex';
  }, 3000);
});
