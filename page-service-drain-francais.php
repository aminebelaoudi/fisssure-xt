<?php
/**
 * Template Name: Page Service Drain Français
 *
 * Page complète dédiée à l'installation et réparation de drain français.
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

function fdxt_drain_service_styles() {
  ?>
  <style>
    .prgrid--5{grid-template-columns:repeat(5,1fr)}
    @media(max-width:1100px){.prgrid--5{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:480px){.prgrid--5{grid-template-columns:1fr}}
  </style>
  <?php
}
add_action( 'wp_head', 'fdxt_drain_service_styles' );
?>

<!-- ═══ URGENCY STRIP ═══ -->
<div class="ustrip">⚠️ &nbsp;<?php esc_html_e( 'Eau active dans votre sous-sol ?', 'fissuredrainxt' ); ?> &nbsp;<?php esc_html_e( 'Appelez pour une intervention prioritaire →', 'fissuredrainxt' ); ?> <a href="tel:15147307107">(514) 730-7107</a></div>

<!-- ═══ HERO DRAIN ═══ -->
<section class="hero" style="min-height:0;padding:130px 32px 70px">
  <div class="hero-photo-bg" style="background-image:url('https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69fbb4c24ef91f2f59390ce7.png')"></div>
  <div class="hgrid cont" style="grid-template-columns:1.2fr 1fr">
    <div>
      <div class="hpills">
        <div class="hpill"><div class="hpulse"></div><?php esc_html_e( 'RBQ 5863-7364-01', 'fissuredrainxt' ); ?></div>
        <div class="hpill"><div class="hpulse" style="animation-delay:.6s"></div><?php esc_html_e( 'Garantie 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super;color:rgba(245,168,0,.75)">*</sup></div>
        <div class="hpill"><div class="hpulse" style="animation-delay:1.2s"></div><?php esc_html_e( 'À partir de 160 $/pi.lin.', 'fissuredrainxt' ); ?></div>
      </div>
      <h1><?php esc_html_e( 'Drain français —', 'fissuredrainxt' ); ?><br><span><?php esc_html_e( 'installation &', 'fissuredrainxt' ); ?></span><br><em><?php esc_html_e( 'réparation', 'fissuredrainxt' ); ?></em></h1>
      <div class="hdash"></div>
      <p class="hsub"><?php esc_html_e( "Le drain français est votre première ligne de défense contre les infiltrations d'eau. Défectueux ou absent, les conséquences sont coûteuses. Nos spécialistes certifiés RBQ installent ou réparent votre drain aux normes les plus strictes du Québec.", 'fissuredrainxt' ); ?></p>
    </div>
    <div class="hright-btns">
      <a href="/soumission" class="hright-btn-primary">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        <?php esc_html_e( 'Soumission gratuite', 'fissuredrainxt' ); ?>
      </a>
      <a href="tel:15147307107" class="hright-btn-secondary">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 1.96A19.79 19.79 0 013.1 4.18 2 2 0 015.06 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L9.09 9.91a16 16 0 006.86 6.86l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
        <?php esc_html_e( 'Parler à un expert', 'fissuredrainxt' ); ?>
      </a>
      <div class="hright-badges">
        <span class="hright-badge"><span>✓</span> <?php esc_html_e( 'Inspection gratuite', 'fissuredrainxt' ); ?></span>
        <span class="hright-badge"><span>✓</span> <?php esc_html_e( 'RBQ certifié', 'fissuredrainxt' ); ?></span>
        <span class="hright-badge"><span>✓</span> <?php esc_html_e( 'Garantie 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super;color:rgba(245,168,0,.75)">*</sup></span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CERTIF BAND ═══ -->
<div class="cband">
  <div class="cinner">
    <div class="citem"><img class="cico cico-lg" src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69d419d24ba93ac572be3c77.png" alt="" width="26" height="26"><?php esc_html_e( 'RBQ 5863-7364-01', 'fissuredrainxt' ); ?></div>
    <div class="csep" aria-hidden="true"></div>
    <div class="citem"><img class="cico cico-lg" src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69a7b543618c8dbaeda9de00.png" alt="" width="26" height="26"><?php esc_html_e( 'Garantie 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super;color:rgba(245,168,0,.75)">*</sup> <?php esc_html_e( 'transférable', 'fissuredrainxt' ); ?></div>
    <div class="csep" aria-hidden="true"></div>
    <div class="citem"><svg class="cico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg><?php esc_html_e( 'Écoresponsable', 'fissuredrainxt' ); ?></div>
    <div class="csep" aria-hidden="true"></div>
    <div class="citem"><img class="cico" src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69a8d01c7bdf384a29516b35.svg" alt="" width="26" height="26"><?php esc_html_e( 'Intervention rapide', 'fissuredrainxt' ); ?></div>
    <div class="csep" aria-hidden="true"></div>
    <div class="citem"><svg class="cico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9,12 11,14 15,10"/></svg><?php esc_html_e( 'Assurance complète', 'fissuredrainxt' ); ?></div>
  </div>
</div>

<!-- ═══ STATS ═══ -->
<div class="sband">
  <div class="sgrid cont">
    <div><div><span class="sn">25</span><span class="su"> ans</span></div><div class="sl"><?php esc_html_e( 'de garantie', 'fissuredrainxt' ); ?></div></div>
    <div><div><span class="sn">500</span><span class="su">+</span></div><div class="sl"><?php esc_html_e( 'projets complétés', 'fissuredrainxt' ); ?></div></div>
    <div><div><span class="sn">48</span><span class="su">h</span></div><div class="sl"><?php esc_html_e( 'délai d\'intervention', 'fissuredrainxt' ); ?></div></div>
    <div><div><span class="sn">5</span><span class="su">★</span></div><div class="sl"><?php esc_html_e( 'satisfaction client', 'fissuredrainxt' ); ?></div></div>
  </div>
</div>

<!-- ═══ QU'EST-CE QU'UN DRAIN FRANÇAIS ═══ -->
<section class="sec">
  <div class="cont">
    <div class="shead">
      <span class="stag"><?php esc_html_e( 'Comprendre', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Qu\'est-ce qu\'un', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'drain français ?', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline"></div>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center">
      <div>
        <p style="font-size:16px;color:var(--gray3);line-height:1.8;margin-bottom:20px;font-weight:300"><?php esc_html_e( 'Le drain français est un système de drainage souterrain installé à la base de votre fondation. Composé d\'un tuyau perforé entouré de pierre drainante et de géotextile, il capte l\'eau souterraine et l\'évacue loin de votre maison — vers le réseau municipal ou un puisard.', 'fissuredrainxt' ); ?></p>
        <p style="font-size:16px;color:var(--gray3);line-height:1.8;margin-bottom:24px;font-weight:300"><?php esc_html_e( 'Quand il fonctionne correctement, votre sous-sol reste au sec et votre fondation est protégée des pressions hydrauliques qui causent fissures et affaissements.', 'fissuredrainxt' ); ?></p>
        <ul class="vlist">
          <li><span class="varr">→</span><?php esc_html_e( 'Tuyau perforé haute performance avec géotextile anti-racines', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Pierre drainante calibrée et filtrante pour une évacuation optimale', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Raccordement au réseau municipal ou puisard selon votre configuration', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Conforme aux normes RBQ et au Code de construction du Québec', 'fissuredrainxt' ); ?></li>
        </ul>
      </div>
      <div style="background:var(--gray7);border-radius:var(--r);padding:40px;border-left:4px solid var(--y)">
        <div style="font-family:var(--fd);font-size:72px;font-weight:900;color:var(--y);line-height:1;margin-bottom:8px">%</div>
        <div style="font-family:var(--fd);font-size:28px;font-weight:900;text-transform:uppercase;color:var(--dk);line-height:1.1;margin-bottom:16px"><?php esc_html_e( '80 % des problèmes', 'fissuredrainxt' ); ?><br><?php esc_html_e( 'd\'humidité au sous-sol', 'fissuredrainxt' ); ?></div>
        <p style="font-size:14px;color:var(--gray3);line-height:1.7;font-weight:300"><?php esc_html_e( 'sont causés par un drain français défectueux ou inexistant. Une inspection par caméra permet de confirmer l\'état exact sans excavation.', 'fissuredrainxt' ); ?></p>
        <div style="margin-top:20px;padding-top:20px;border-top:1px solid var(--gray6)">
          <span style="font-family:var(--fd);font-size:14px;font-weight:700;color:var(--dk)"><?php esc_html_e( 'À partir de 160 $/pi.lin.', 'fissuredrainxt' ); ?></span>
          <span style="font-size:12px;color:var(--gray4);display:block;margin-top:4px"><?php esc_html_e( 'Installation complète incluant excavation, matériaux et remblayage', 'fissuredrainxt' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNES D'UN DRAIN DÉFECTUEUX ═══ -->
<section class="sec sec-alt">
  <div class="cont">
    <div class="shead c">
      <span class="stag dk"><?php esc_html_e( 'Signes avant-coureurs', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Votre drain vous', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'envoie des signaux', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline c"></div>
      <p class="sp" style="margin:18px auto 0"><?php esc_html_e( 'Voici les indicateurs les plus fréquents d\'un drain français qui ne remplit plus son rôle.', 'fissuredrainxt' ); ?></p>
    </div>
    <div class="pgrid">
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Infiltration d\'eau au sous-sol', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'De l\'eau qui apparaît sur le plancher ou remonte par les fissures du béton après une pluie — signe que le drain ne capte plus l\'eau efficacement.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Humidité chronique des murs', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'Des taches d\'humidité ou d\'efflorescence blanche sur les murs de fondation intérieurs indiquent une infiltration persistante non évacuée.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Odeur de moisissure', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'Une odeur musquée persistante dans le sous-sol révèle que l\'humidité stagne et que des moisissures commencent à se développer.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Sol détrempé autour de la maison', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'Des zones boueuses ou constamment humides près de la fondation à l\'extérieur signalent un refoulement ou une rupture du drain.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Fissures de fondation', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'Les fissures horizontales ou verticales dans le béton sont aggravées par la pression hydraulique que le drain devrait normalement soulager.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="pcard">
        <div class="pacc"></div>
        <h4 class="pt"><?php esc_html_e( 'Drain en argile d\'avant 1980', 'fissuredrainxt' ); ?></h4>
        <p class="pd"><?php esc_html_e( 'Les drains en argile se fissurent, s\'effondrent et se bouchent avec le temps. Si votre maison a plus de 40 ans, une inspection s\'impose.', 'fissuredrainxt' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ NOTRE PROCESSUS D'INSTALLATION ═══ -->
<section class="sec sec-dk">
  <div class="cont">
    <div class="shead">
      <span class="stag"><?php esc_html_e( 'Notre méthode', 'fissuredrainxt' ); ?></span>
      <h2 class="sh lt"><?php esc_html_e( 'Installation complète', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'en 5 étapes', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline"></div>
      <p class="sp lt" style="margin-top:16px"><?php esc_html_e( 'De l\'inspection à la remise en état, voici comment nous procédons pour chaque chantier.', 'fissuredrainxt' ); ?></p>
    </div>
    <div class="prgrid prgrid--5">
      <?php
      $steps = array(
        array( 'num' => '01', 't' => 'Inspection & diagnostic', 'd' => 'Caméra HD et visite terrain pour évaluer l\'état du drain existant et localiser précisément les problèmes.' ),
        array( 'num' => '02', 't' => 'Excavation du périmètre', 'd' => 'Dégagement complet de la fondation sur toute sa profondeur. Protection des arbres et aménagements paysagers.' ),
        array( 'num' => '03', 't' => 'Installation du drain', 'd' => 'Pose du tuyau perforé avec pente contrôlée, géotextile anti-racines et pierre drainante calibrée.' ),
        array( 'num' => '04', 't' => 'Raccordement & test', 'd' => 'Raccordement au réseau municipal ou puisard. Test d\'écoulement complet avant remblayage.' ),
        array( 'num' => '05', 't' => 'Remblayage & finition', 'd' => 'Remblayage en pierre concassée et sable. Gazon ensemencé ou rouleau. Terrain laissé propre et sécuritaire.' ),
      );
      $total = count( $steps );
      foreach ( $steps as $i => $s ) :
      ?>
      <div class="prcard"<?php echo $i === $total - 1 ? '' : ' style="border-right:1px solid rgba(255,255,255,.07)"'; ?>>
        <div class="prbar"></div>
        <span class="prnum"><?php echo esc_html( $s['num'] ); ?></span>
        <span class="prstep"><?php esc_html_e( 'Étape', 'fissuredrainxt' ); ?> <?php echo esc_html( $s['num'] ); ?></span>
        <h4 class="prt"><?php echo esc_html( $s['t'] ); ?></h4>
        <p class="prd"><?php echo esc_html( $s['d'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SERVICES INCLUS ═══ -->
<section class="sec">
  <div class="cont">
    <div class="shead c">
      <span class="stag dk"><?php esc_html_e( 'Ce qui est inclus', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Installation complète', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'clé en main', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline c"></div>
      <p class="sp" style="margin:18px auto 0"><?php esc_html_e( 'Tout ce que comprend notre service d\'installation ou de réparation de drain français — sans frais cachés, sans surprise.', 'fissuredrainxt' ); ?></p>
    </div>
    <div class="vgrid">
      <div class="vcard">
        <div class="vcard-photo">
          <img src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69fbb4c24ef91f2f59390ce7.png" alt="<?php esc_attr_e( 'Installation de drain français', 'fissuredrainxt' ); ?>">
          <span class="vcard-photo-tag"><?php esc_html_e( 'À partir 160 $/pi.lin.', 'fissuredrainxt' ); ?></span>
        </div>
        <span class="vnum">01</span>
        <h3 class="vt"><?php esc_html_e( 'Travaux inclus', 'fissuredrainxt' ); ?></h3>
        <ul class="vlist">
          <li><span class="varr">✓</span><?php esc_html_e( 'Inspection par caméra HD avant travaux', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Excavation complète du périmètre de fondation', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Tuyau perforé triple paroi avec géotextile', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Pierre drainante lavée et filtrante', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Raccordement au réseau ou puisard', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Remblayage et restauration du terrain', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">✓</span><?php esc_html_e( 'Rapport vidéo avant/après', 'fissuredrainxt' ); ?></li>
        </ul>
        <span class="vbdg"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg> <?php esc_html_e( 'Garantie 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super">*</sup></span>
      </div>
      <div class="vcard">
        <div class="vcard-photo">
          <img src="https://assets.cdn.filesafe.space/AEU385dO0vBFBDc6uJ07/media/69cd5f090f0dab5b9ded3c07.png" alt="<?php esc_attr_e( 'Services complémentaires', 'fissuredrainxt' ); ?>">
        </div>
        <span class="vnum">02</span>
        <h3 class="vt"><?php esc_html_e( 'Services complémentaires', 'fissuredrainxt' ); ?></h3>
        <ul class="vlist">
          <li><span class="varr">→</span><?php esc_html_e( 'Imperméabilisation de fondation (membrane Delta-MS)', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Réparation de fissures par injection époxy', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Drain de toit et gouttières', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Pompe de puisard avec batterie de secours', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Gazon en rouleau pour finition premium', 'fissuredrainxt' ); ?></li>
          <li><span class="varr">→</span><?php esc_html_e( 'Inspection pré-achat / pré-vente', 'fissuredrainxt' ); ?></li>
        </ul>
        <span class="vbdg" style="background:var(--dk);color:var(--w)"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg> <?php esc_html_e( 'Devis personnalisé', 'fissuredrainxt' ); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ GARANTIE ═══ -->
<section id="garantie" style="overflow:hidden">
  <div class="ggrid">
    <div class="gleft">
      <span class="stag"><?php esc_html_e( 'Notre engagement', 'fissuredrainxt' ); ?></span>
      <h2 class="sh lt" style="margin-bottom:14px"><?php esc_html_e( 'Une garantie qui veut', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'vraiment dire', 'fissuredrainxt' ); ?></span><br><?php esc_html_e( 'quelque chose', 'fissuredrainxt' ); ?></h2>
      <div class="sline lt" style="margin-bottom:28px"></div>
      <p style="font-size:16px;color:rgba(255,255,255,.45);line-height:1.75;margin-bottom:28px;font-weight:300;max-width:480px"><?php esc_html_e( 'Nous ne donnons pas de garantie par obligation. Si un problème survient après nos interventions sur votre drain, nous revenons le régler. Point.', 'fissuredrainxt' ); ?></p>
      <ul class="glist">
        <li class="gitem"><div class="gck">✓</div><?php esc_html_e( 'Drain français — garantie complète de 25 ans contre toute malfaçon liée à l\'exécution des travaux', 'fissuredrainxt' ); ?></li>
        <li class="gitem"><div class="gck">✓</div><?php esc_html_e( 'Matériaux certifiés sélectionnés pour leur durabilité dans les conditions québécoises', 'fissuredrainxt' ); ?></li>
        <li class="gitem"><div class="gck">✓</div><?php esc_html_e( 'Transférable au nouveau propriétaire — valeur ajoutée réelle lors de la revente', 'fissuredrainxt' ); ?></li>
        <li class="gitem"><div class="gck">✓</div><?php esc_html_e( 'Certifiée RBQ 5863-7364-01 — conforme à toutes les exigences réglementaires', 'fissuredrainxt' ); ?></li>
      </ul>
    </div>
    <div class="gright">
      <div class="gbig">25</div>
      <div class="glblbig"><?php esc_html_e( 'Ans de garantie', 'fissuredrainxt' ); ?></div>
      <p style="font-size:14px;color:rgba(26,26,26,.6);max-width:260px;margin:0 auto 28px;font-weight:300;line-height:1.65"><?php esc_html_e( 'Sur votre drain français — la meilleure garantie du secteur à Montréal, Laval et Rive-Nord', 'fissuredrainxt' ); ?></p>
      <a href="/soumission" class="nbtn" style="display:inline-block;background:var(--dk);color:var(--y);padding:15px 30px;font-family:var(--fd);font-size:15px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;transition:.2s;border-radius:3px;border:none"><?php esc_html_e( 'Obtenir ma soumission →', 'fissuredrainxt' ); ?></a>
    </div>
  </div>
</section>

<!-- ═══ FAQ DRAIN FRANÇAIS ═══ -->
<section class="sec sec-alt" id="faq-drain">
  <div class="cont">
    <div class="shead c">
      <span class="stag dk"><?php esc_html_e( 'Questions fréquentes', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Tout savoir sur', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'le drain français', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline c"></div>
    </div>
    <div class="fwrap">
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Quels sont les signes d\'un drain français défectueux ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Les signes les plus courants sont l\'infiltration d\'eau au sous-sol après une pluie, l\'humidité persistante des murs de fondation, les odeurs de moisissure, les taches d\'efflorescence blanche sur le béton et le sol détrempé autour de la maison. Une inspection par caméra confirme l\'état exact sans excavation.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Combien coûte l\'installation d\'un drain français ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Le coût varie selon la superficie à excaver, l\'accessibilité du périmètre et le type de sol. À titre indicatif, comptez à partir de 160 $/pi.lin. pour une installation complète incluant excavation, matériaux, main-d\'œuvre et remblayage.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Quelle est la durée des travaux ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Pour une maison unifamiliale standard, comptez 2 à 5 jours ouvrables selon la superficie à excaver et l\'accessibilité. L\'équipe protège votre terrain et remet tout en état à la fin du chantier.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Peut-on réparer un drain sans excavation ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Dans certains cas, un drain obstrué peut être nettoyé par hydro-jet ou par caméra avec outil de coupe. Cependant, si le drain est effondré, fracturé ou en argile, l\'excavation et le remplacement complet sont nécessaires.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'La garantie est-elle transférable si je vends ma maison ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Oui. Notre garantie de 25 ans est transférable au nouveau propriétaire sur avis écrit. C\'est un atout considérable lors de la revente — l\'acheteur sait que le drain a été installé par des professionnels certifiés RBQ.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Faites-vous une inspection avant les travaux ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Absolument. Nous recommandons et incluons une inspection par caméra HD avant tout travail. Le rapport vidéo vous est remis — vous savez exactement pourquoi les travaux sont recommandés. Aucune pression, aucune surprise.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Intervenez-vous en hiver ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Oui, nous intervenons à l\'année. Les travaux d\'excavation en hiver sont possibles avec l\'équipement adapté. Les délais peuvent être légèrement allongés selon les conditions, mais nous maintenons notre engagement de qualité.', 'fissuredrainxt' ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TÉMOIGNAGES ═══ -->
<section class="sec sec-alt" id="temoignages">
  <div class="cont">
    <div class="shead c">
      <span class="stag dk"><?php esc_html_e( 'Ce que disent nos clients', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Ils ont fait installer', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'leur drain français', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline c"></div>
    </div>
    <div class="tmgrid">
      <div class="tmcard">
        <span class="tmtag"><?php esc_html_e( 'Drain français', 'fissuredrainxt' ); ?></span>
        <div class="tmstars">★★★★★</div>
        <p class="tmtxt"><?php esc_html_e( '"Nous avions un problème d\'humidité chronique depuis des années. L\'équipe a tout expliqué clairement avant de commencer. Le sous-sol est enfin complètement au sec — la garantie 25 ans nous donne une tranquillité d\'esprit totale."', 'fissuredrainxt' ); ?></p>
        <div class="tmauth">
          <div class="tmav">FT</div>
          <div>
            <div class="tmname"><?php esc_html_e( 'François T.', 'fissuredrainxt' ); ?></div>
            <div class="tmcity"><?php esc_html_e( 'Montréal, NDG', 'fissuredrainxt' ); ?></div>
          </div>
        </div>
      </div>
      <div class="tmcard">
        <span class="tmtag"><?php esc_html_e( 'Drain français', 'fissuredrainxt' ); ?></span>
        <div class="tmstars">★★★★★</div>
        <p class="tmtxt"><?php esc_html_e( '"Maison des années 70 avec drain en argile effondré. Remplacement complet en 3 jours. Terrain remis en état impeccable. Le rapport vidéo avant/après est très rassurant."', 'fissuredrainxt' ); ?></p>
        <div class="tmauth">
          <div class="tmav">JR</div>
          <div>
            <div class="tmname"><?php esc_html_e( 'Jean-Pierre R.', 'fissuredrainxt' ); ?></div>
            <div class="tmcity"><?php esc_html_e( 'Rosemère', 'fissuredrainxt' ); ?></div>
          </div>
        </div>
      </div>
      <div class="tmcard">
        <span class="tmtag"><?php esc_html_e( 'Drain français', 'fissuredrainxt' ); ?></span>
        <div class="tmstars">★★★★★</div>
        <p class="tmtxt"><?php esc_html_e( '"Inspection par caméra avant les travaux — ils ont pris le temps de me montrer l\'état du drain existant. Intervention professionnelle, terrain remis parfaitement. Je recommande sans hésiter."', 'fissuredrainxt' ); ?></p>
        <div class="tmauth">
          <div class="tmav">SC</div>
          <div>
            <div class="tmname"><?php esc_html_e( 'Sophie C.', 'fissuredrainxt' ); ?></div>
            <div class="tmcity"><?php esc_html_e( 'Repentigny', 'fissuredrainxt' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA FINAL ═══ -->
<section class="psec-cta">
  <div class="cont">
    <div class="psec-cta-inner">
      <div>
        <h2 class="psec-cta-h"><?php esc_html_e( 'Prêt à protéger votre fondation ?', 'fissuredrainxt' ); ?></h2>
        <p class="psec-cta-sub"><?php esc_html_e( 'Obtenez une soumission gratuite et sans engagement pour l\'installation ou la réparation de votre drain français.', 'fissuredrainxt' ); ?></p>
      </div>
      <div class="psec-cta-btns">
        <a href="/soumission" class="psec-cta-btn-primary"><?php esc_html_e( 'Demander ma soumission', 'fissuredrainxt' ); ?></a>
        <a href="tel:15147307107" class="psec-cta-btn-secondary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          (514) 730-7107
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
