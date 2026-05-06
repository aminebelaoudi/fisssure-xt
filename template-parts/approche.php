<!-- ═══════════════════════════════════════════════════════════
     APPROACH
════════════════════════════════════════════════════════════ -->
<section class="simple" id="approche" aria-labelledby="approche-title">
  <div class="wrap">
    <div class="sec-head c reveal">
      <span class="sec-tag"><?php esc_html_e( 'Notre différence', 'fissuredrainxt' ); ?></span>
      <h2 class="sh lt" id="approche-title"><?php esc_html_e( 'Une Approche Simple,', 'fissuredrainxt' ); ?><br><?php esc_html_e( 'Transparente', 'fissuredrainxt' ); ?></h2>
      <div class="sec-line c"></div>
      <p class="sec-p lt" style="text-align:center;margin:0 auto;"><?php esc_html_e( 'Des travaux sans surprises — de la première visite jusqu\'au remblayage final, chaque étape est documentée et expliquée.', 'fissuredrainxt' ); ?></p>
    </div>
  </div>

  <div style="max-width:var(--max-w);margin:0 auto;padding:0 24px;">
    <div class="simple-grid">
      <?php
      $steps = array(
        array( 'n' => '01', 'ico' => '🔍', 't' => 'Diagnostic terrain',   'd' => 'Visite sur place par un technicien expérimenté. Inspection complète de la fondation, du périmètre et du drain existant — sans frais, sans engagement.' ),
        array( 'n' => '02', 'ico' => '📋', 't' => 'Soumission détaillée', 'd' => 'Soumission écrite claire : travaux inclus, matériaux, délai d\'exécution et garantie — aucun coût caché, aucune surprise à la fin des travaux.', 'delay' => 'reveal-d1' ),
        array( 'n' => '03', 'ico' => '📆', 't' => 'Planification rapide', 'd' => 'Disponibilité en 5 à 10 jours ouvrables selon la saison. Vous êtes informé à chaque étape — avant, pendant et après le chantier.', 'delay' => 'reveal-d2' ),
        array( 'n' => '04', 'ico' => '⚙️', 't' => 'Exécution propre',     'd' => 'Notre équipe protège votre propriété : excavation précise, gestion des eaux, protection du gazon, arbres et aménagement respectés.', 'delay' => 'reveal-d3' ),
        array( 'n' => '05', 'ico' => '🧹', 't' => 'Remise en état',       'd' => 'Remblayage en pierre concassée et sable, gazon ensemencé ou gazon en rouleau selon l\'entente. Le chantier est laissé propre, toujours.', 'delay' => 'reveal-d4' ),
        array( 'n' => '06', 'ico' => '📄', 't' => 'Garantie & suivi',     'd' => 'Garantie écrite de 25 ans remise à la fin des travaux. Nous demeurons disponibles pour toute question dans les mois qui suivent.', 'delay' => 'reveal-d5' ),
      );
      foreach ( $steps as $s ) :
        $delay = isset( $s['delay'] ) ? ' ' . esc_attr( $s['delay'] ) : '';
      ?>
      <div class="simple-card reveal<?php echo $delay; ?>">
        <div class="sc-num"><?php echo esc_html( $s['n'] ); ?></div>
        <span class="sc-icon" aria-hidden="true"><?php echo esc_html( $s['ico'] ); ?></span>
        <h3 class="sc-t"><?php echo esc_html( $s['t'] ); ?></h3>
        <p class="sc-desc"><?php echo esc_html( $s['d'] ); ?><?php if ( $s['n'] === '06' ) : ?><sup class="ast">*</sup><?php endif; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
