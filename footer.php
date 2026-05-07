<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_template_part( 'template-parts/certif-logos' ); ?>
<!-- FOOTER -->
<footer role="contentinfo">
  <div class="ftinner">
    <div class="ftgrid">

      <!-- Brand -->
      <div>
        <div class="ftlogo">
          <?php if ( has_custom_logo() ) :
              the_custom_logo();
          else : ?>
            <img src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69aa39e7618c8d4bca1229d0.png"
                 alt="<?php esc_attr_e( 'Fissure et Drain XT', 'fissuredrainxt' ); ?>"
                 width="140" height="44" loading="lazy">
          <?php endif; ?>
        </div>
        <p class="ftdesc"><?php esc_html_e( 'Spécialistes en installation de drain français, imperméabilisation de fondation et réparation de fissures à Montréal, Laval et sur la Rive-Nord. RBQ 5863-7364-01.', 'fissuredrainxt' ); ?></p>
        <ul class="ftcerts">
          <li class="ftcert"><?php esc_html_e( 'Permis RBQ 5863-7364-01 en règle', 'fissuredrainxt' ); ?></li>
          <li class="ftcert"><?php esc_html_e( 'Assurance responsabilité complète', 'fissuredrainxt' ); ?></li>
          <li class="ftcert"><?php esc_html_e( 'Entrepreneur écoresponsable', 'fissuredrainxt' ); ?></li>
          <li class="ftcert"><?php esc_html_e( 'Garantie 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super;color:rgba(245,168,0,.75)">*</sup> <?php esc_html_e( 'transférable', 'fissuredrainxt' ); ?></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <div class="ftch"><?php esc_html_e( 'Services', 'fissuredrainxt' ); ?></div>
        <ul class="ftlinks">
          <li><a href="#services"><?php esc_html_e( 'Drain français', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#services"><?php esc_html_e( 'Imperméabilisation', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#services"><?php esc_html_e( 'Réparation fissures', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#services"><?php esc_html_e( 'Inspection caméra', 'fissuredrainxt' ); ?></a></li>
          <li><a href="/soumission"><?php esc_html_e( 'Soumission gratuite', 'fissuredrainxt' ); ?></a></li>
        </ul>
      </div>

      <!-- Zones -->
      <div>
        <div class="ftch"><?php esc_html_e( 'Zones', 'fissuredrainxt' ); ?></div>
        <ul class="ftlinks">
          <li><a href="#zones"><?php esc_html_e( 'Montréal', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#zones"><?php esc_html_e( 'Laval', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#zones"><?php esc_html_e( 'Rive-Nord', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#zones"><?php esc_html_e( 'Laurentides', 'fissuredrainxt' ); ?></a></li>
          <li><a href="#zones"><?php esc_html_e( 'Lanaudière', 'fissuredrainxt' ); ?></a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <div class="ftch"><?php esc_html_e( 'Contact', 'fissuredrainxt' ); ?></div>
        <div class="ftcontact">
          <div class="ftci">
            <div class="ftciic"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--y)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
            <div>
              <div style="color:rgba(255,255,255,.55);font-size:10px;font-family:var(--fd);font-weight:700;letter-spacing:.1em;text-transform:uppercase;margin-bottom:2px"><?php esc_html_e( 'Téléphone', 'fissuredrainxt' ); ?></div>
              <a href="tel:15147307107" style="color:var(--y);font-family:var(--fd);font-size:16px;font-weight:800">(514) 730-7107</a>
            </div>
          </div>
          <div class="ftci">
            <div class="ftciic"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--y)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <div>
              <div style="color:rgba(255,255,255,.55);font-size:10px;font-family:var(--fd);font-weight:700;letter-spacing:.1em;text-transform:uppercase;margin-bottom:2px"><?php esc_html_e( 'Territoire', 'fissuredrainxt' ); ?></div>
              <?php esc_html_e( 'Montréal · Laval · Rive-Nord', 'fissuredrainxt' ); ?><br>
              <?php esc_html_e( 'Laurentides · Lanaudière', 'fissuredrainxt' ); ?>
            </div>
          </div>
          <div class="ftci">
            <div class="ftciic"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--y)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
            <div>
              <div style="color:rgba(255,255,255,.55);font-size:10px;font-family:var(--fd);font-weight:700;letter-spacing:.1em;text-transform:uppercase;margin-bottom:2px"><?php esc_html_e( 'Heures', 'fissuredrainxt' ); ?></div>
              <?php esc_html_e( 'Lun–Ven : 7h–18h · Sam : 8h–16h', 'fissuredrainxt' ); ?>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /ftgrid -->

    <div class="ftbot">
      <div class="ftcopy">&copy; <?php echo esc_html( gmdate('Y') ); ?> <?php esc_html_e( 'Fissure et Drain XT — Tous droits réservés', 'fissuredrainxt' ); ?></div>
      <div class="ftrb">RBQ : 5863-7364-01</div>
      <div class="ftl2">
        <a href="<?php echo esc_url( get_privacy_policy_url() ?: home_url('/') ); ?>"><?php esc_html_e( 'Politique de confidentialité', 'fissuredrainxt' ); ?></a>
        <a href="#garantie"><?php esc_html_e( 'Modalités de garantie', 'fissuredrainxt' ); ?></a>
        <a href="/soumission"><?php esc_html_e( 'Soumission gratuite', 'fissuredrainxt' ); ?></a>
      </div>
    </div>
  </div>
</footer>

<!-- STICKY MOBILE -->
<div class="smob">
  <a href="tel:15147307107" class="scl">📞 <?php esc_html_e( 'Appeler', 'fissuredrainxt' ); ?></a>
  <a href="/soumission" class="sqt"><?php esc_html_e( 'Soumission gratuite →', 'fissuredrainxt' ); ?></a>
</div>

<!-- CLAUSE GARANTIE -->
<div class="clause-sec" id="garantie-clause">
  <div class="clause-in">
    <sup style="color:rgba(255,255,255,.5);font-weight:700;font-size:10px">*</sup>
    <?php esc_html_e( 'La garantie couvre exclusivement les malfaçons et vices de construction liés à l\'exécution des travaux par Fissure et Drain XT. Elle ne couvre pas les dommages causés par les mouvements de terrain, les vices du sol, les séismes, les inondations exceptionnelles, les travaux effectués par des tiers ou toute modification non autorisée après l\'exécution des travaux. Garantie transférable au nouveau propriétaire sur avis écrit. RBQ 5863-7364-01.', 'fissuredrainxt' ); ?>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
