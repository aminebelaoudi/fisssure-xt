<!-- ═══════════════════════════════════════════════════════════
     WHY US
════════════════════════════════════════════════════════════ -->
<section class="sec sec-dk" id="pourquoi" aria-labelledby="why-title">
  <div class="wrap">
    <div class="sec-head c reveal">
      <span class="sec-tag"><?php esc_html_e( 'Pourquoi nous choisir', 'fissuredrainxt' ); ?></span>
      <h2 class="sh lt" id="why-title"><?php esc_html_e( 'Ce Qui Nous Distingue', 'fissuredrainxt' ); ?></h2>
      <div class="sec-line c"></div>
    </div>
    <div class="why-grid reveal">
      <div class="why-col">
        <div class="why-title" role="heading" aria-level="3"><?php esc_html_e( 'Expertise ciblée', 'fissuredrainxt' ); ?></div>
        <ul class="why-list">
          <?php
          $col1 = array(
            'Spécialistes drainage et fondation — pas des généralistes',
            'Plus de 900 projets réalisés depuis nos débuts',
            'Connaissance des sols québécois et du gel-dégel saisonnier',
            'Diagnostic précis avant tout devis — pas d\'estimation à l\'aveugle',
            'Équipements modernes pour chantier propre et rapide',
          );
          foreach ( $col1 as $item ) : ?>
          <li class="why-item"><?php echo esc_html( $item ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="why-col">
        <div class="why-title" role="heading" aria-level="3"><?php esc_html_e( 'Travaux structurés', 'fissuredrainxt' ); ?></div>
        <ul class="why-list">
          <?php
          $col2 = array(
            'Soumission détaillée par poste de travail — transparent et lisible',
            'Aucun surcoût post-signature sauf modification demandée par le client',
            'Techniciens RBQ licenciés présents sur chaque chantier',
            'Suivi en temps réel — vous êtes informé à chaque étape clé',
            'Rapport de travaux remis à la fin pour vos dossiers',
          );
          foreach ( $col2 as $item ) : ?>
          <li class="why-item"><?php echo esc_html( $item ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="why-col">
        <div class="why-title" role="heading" aria-level="3"><?php esc_html_e( 'Garantie encadrée', 'fissuredrainxt' ); ?></div>
        <ul class="why-list">
          <?php
          $col3 = array(
            'Garantie de 25 ans émise par écrit — document légal conservable',
            'Transférable à tout nouvel acheteur lors de la revente',
            'Matériaux sélectionnés pour la durabilité, pas le plus bas prix',
            'Membre ACQ, APCHQ et plan de garantie GCR',
          );
          foreach ( $col3 as $item ) : ?>
          <li class="why-item"><?php echo esc_html( $item ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     UNCERTAIN / CONSEIL
════════════════════════════════════════════════════════════ -->
<section class="uncertain" id="conseil" aria-labelledby="conseil-title">
  <div class="uncertain-in">
    <span class="sec-tag" style="display:block;text-align:center;"><?php esc_html_e( 'Vous avez des doutes ?', 'fissuredrainxt' ); ?></span>
    <h2 id="conseil-title"><?php esc_html_e( 'Vous n\'êtes pas certain', 'fissuredrainxt' ); ?><br><?php esc_html_e( 'de ce dont vous avez besoin ?', 'fissuredrainxt' ); ?></h2>
    <div class="uncertain-line" aria-hidden="true"></div>
    <p><?php esc_html_e( 'C\'est normal. Chaque situation est différente. Nos techniciens effectuent une visite gratuite sur place pour évaluer votre fondation, identifier les problèmes réels et vous proposer une solution adaptée à votre budget — sans pression et sans engagement.', 'fissuredrainxt' ); ?></p>
    <div class="uncertain-btns">
      <a href="#widget-soumission" class="btn-y">📋 <?php esc_html_e( 'Demander une visite gratuite', 'fissuredrainxt' ); ?></a>
      <a href="tel:15147307107" class="btn-dk">📞 <?php esc_html_e( 'Parler à un expert', 'fissuredrainxt' ); ?></a>
    </div>
    <p style="font-size:12px;color:var(--gr4);margin-top:18px;"><?php esc_html_e( 'Lun–Ven 7h–18h · Sam 8h–16h · Réponse garantie en 2h', 'fissuredrainxt' ); ?></p>
  </div>
</section>
