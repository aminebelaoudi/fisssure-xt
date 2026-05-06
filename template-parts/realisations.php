<!-- ═══════════════════════════════════════════════════════════
     RÉALISATIONS
════════════════════════════════════════════════════════════ -->
<section class="sec sec-dk2" id="realisations" aria-labelledby="real-title">
  <div class="wrap">
    <div class="sec-head c reveal">
      <span class="sec-tag"><?php esc_html_e( 'Portfolio', 'fissuredrainxt' ); ?></span>
      <h2 class="sh lt" id="real-title"><?php esc_html_e( 'Nos Réalisations', 'fissuredrainxt' ); ?></h2>
      <div class="sec-line c"></div>
      <p class="sec-p lt" style="text-align:center;margin:0 auto;"><?php esc_html_e( 'Plus de 900 projets complétés à travers la région métropolitaine. Chaque chantier reflète notre engagement pour un travail bien fait.', 'fissuredrainxt' ); ?></p>
    </div>
  </div>

  <div style="max-width:var(--max-w);margin:0 auto;padding:0 24px;">
    <div class="real-grid">
      <?php
      $projects = array(
        array( 'cls' => 'real-ph-1', 'icon' => '🚰', 'alt' => 'Drain français complet — Montréal',        'badge' => 'Complété 2024', 'title' => 'Drain français complet',       'sub' => 'Montréal · 80 pi.lin. · Garantie 25 ans*' ),
        array( 'cls' => 'real-ph-2', 'icon' => '⚡', 'alt' => 'Réparation fissures fondation — Laval',    'badge' => 'Complété 2024', 'title' => 'Réparation 3 fissures',        'sub' => 'Laval · Injection polyuréthane HD · Étanche à vie', 'delay' => 'reveal-d1' ),
        array( 'cls' => 'real-ph-3', 'icon' => '🧱', 'alt' => 'Imperméabilisation extérieure — Rive-Nord','badge' => 'Complété 2024', 'title' => 'Imperméabilisation complète',    'sub' => 'Rive-Nord · Delta-MS + drain complet', 'delay' => 'reveal-d2' ),
        array( 'cls' => 'real-ph-4', 'icon' => '📷', 'alt' => 'Inspection caméra drain — Repentigny',     'badge' => 'Complété 2023', 'title' => 'Inspection caméra HD',          'sub' => 'Repentigny · Drain argile brisé détecté' ),
        array( 'cls' => 'real-ph-5', 'icon' => '🚰', 'alt' => 'Drain + imperméabilisation — Terrebonne',  'badge' => 'Complété 2023', 'title' => 'Drain + Imperméabilisation',    'sub' => 'Terrebonne · 120 pi.lin. · Terrain remis à neuf', 'delay' => 'reveal-d1' ),
        array( 'cls' => 'real-ph-6', 'icon' => '🚰', 'alt' => 'Drain français complet — Rosemère',        'badge' => 'Complété 2023', 'title' => 'Drain français & drain de toit','sub' => 'Rosemère · Maison 1978 · Drainage complet', 'delay' => 'reveal-d2' ),
      );
      foreach ( $projects as $p ) :
        $delay = isset( $p['delay'] ) ? ' ' . esc_attr( $p['delay'] ) : '';
      ?>
      <div class="real-card reveal<?php echo $delay; ?>">
        <div class="real-card-ph <?php echo esc_attr( $p['cls'] ); ?>"
             data-icon="<?php echo esc_attr( $p['icon'] ); ?>"
             role="img"
             aria-label="<?php echo esc_attr( $p['alt'] ); ?>"></div>
        <div class="real-ov" aria-hidden="true"></div>
        <div class="real-info">
          <span class="real-badge"><?php echo esc_html( $p['badge'] ); ?></span>
          <div class="real-title"><?php echo esc_html( $p['title'] ); ?></div>
          <div class="real-sub"><?php echo esc_html( $p['sub'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div style="text-align:center;margin-top:36px;" class="reveal">
    <a href="#widget-soumission" class="btn-y"><?php esc_html_e( 'Démarrer mon projet →', 'fissuredrainxt' ); ?></a>
  </div>
</section>
