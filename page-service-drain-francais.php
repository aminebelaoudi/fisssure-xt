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

// Custom inline styles for this template
function fdxt_drain_service_styles() {
  ?>
  <style>
    .prgrid--5{grid-template-columns:repeat(5,1fr)}
    @media(max-width:1100px){.prgrid--5{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:480px){.prgrid--5{grid-template-columns:1fr}}
    .specs-grid{display:grid;grid-template-columns:1fr 1fr;gap:0}
    .specs-card{padding:40px}
    .specs-card.old{background:var(--gray7);border-right:2px solid var(--gray6)}
    .specs-card.new{background:var(--w)}
    .specs-icon{font-size:36px;margin-bottom:12px;display:block}
    .specs-label{font-family:var(--fd);font-size:11px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--gray4);margin-bottom:4px}
    .specs-name{font-family:var(--fd);font-size:26px;font-weight:900;text-transform:uppercase;color:var(--dk);line-height:1.1;margin-bottom:16px}
    .specs-item{display:flex;align-items:flex-start;gap:10px;padding:10px 0;border-bottom:1px solid var(--gray6);font-size:13px;color:var(--gray2);line-height:1.5}
    .specs-item:last-child{border:none}
    .specs-x{color:#c0392b;font-weight:800;flex-shrink:0;margin-top:1px}
    .specs-check{color:var(--y);font-weight:800;flex-shrink:0;margin-top:1px}
    .specs-badge{display:inline-block;background:var(--y);color:var(--dk);font-family:var(--fd);font-size:10px;font-weight:800;padding:3px 9px;border-radius:2px;letter-spacing:.06em;text-transform:uppercase;margin-bottom:14px}
    .sigrid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
    .sicard{display:flex;align-items:flex-start;gap:16px;background:var(--w);border:1px solid var(--gray6);padding:28px;border-radius:var(--r);transition:.2s}
    .sicard:hover{border-color:var(--y);box-shadow:0 4px 20px rgba(245,168,0,.1)}
    .siicon{width:48px;height:48px;min-width:48px;background:var(--gray7);display:flex;align-items:center;justify-content:center;font-size:20px;border-radius:var(--r)}
    .sicard h4{font-family:var(--fd);font-size:17px;font-weight:800;text-transform:uppercase;letter-spacing:.02em;color:var(--dk);margin-bottom:4px;line-height:1.2}
    .sicard p{font-size:13px;color:var(--gray3);line-height:1.6;font-weight:300}
    .strip-prix{background:var(--dk);padding:40px 32px;text-align:center;border-top:3px solid var(--y);border-bottom:3px solid var(--y)}
    .strip-prix-inner{max-width:var(--max-w);margin:0 auto;display:flex;align-items:center;justify-content:center;gap:32px;flex-wrap:wrap}
    .strip-prix .st{font-family:var(--fd);font-size:14px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--y)}
    .strip-prix .spn{font-family:var(--fd);font-size:48px;font-weight:900;color:var(--w);line-height:1;letter-spacing:-.02em}
    .strip-prix .spt{font-family:var(--fd);font-size:14px;font-weight:600;text-transform:uppercase;color:rgba(255,255,255,.55);letter-spacing:.04em;margin-top:4px}
    .strip-prix .spc{font-size:13px;color:rgba(255,255,255,.4);max-width:360px;line-height:1.6;font-weight:300}
    @media(max-width:768px){
      .specs-grid{grid-template-columns:1fr;gap:12px}
      .specs-card.old{border-right:none;border-bottom:2px solid var(--gray6)}
      .sigrid{grid-template-columns:1fr;gap:12px}
      .spc{max-width:none}
    }
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

<!-- ═══ PRIX STRIP ═══ -->
<div class="strip-prix">
  <div class="strip-prix-inner">
    <div>
      <div class="st"><?php esc_html_e( 'À partir de', 'fissuredrainxt' ); ?></div>
      <div><span class="spn">160</span><span class="spt" style="font-size:18px;color:var(--y)"> $</span><span class="spt"> /pi.lin.</span></div>
    </div>
    <div>
      <div class="spc"><?php esc_html_e( 'Installation complète incluant excavation, matériaux, main-d\'œuvre certifiée RBQ et remblayage. Soumission gratuite et détaillée.', 'fissuredrainxt' ); ?></div>
    </div>
    <div>
      <a href="/soumission" class="nbtn" style="background:var(--y);color:var(--dk);padding:14px 32px;font-size:15px;letter-spacing:.08em"><?php esc_html_e( 'Obtenir ma soumission →', 'fissuredrainxt' ); ?></a>
    </div>
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
    <div class="sigrid">
      <div class="sicard">
        <div class="siicon">💧</div>
        <div>
          <h4><?php esc_html_e( 'Infiltration d\'eau au sous-sol', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'De l\'eau qui apparaît sur le plancher ou remonte par les fissures du béton après une pluie — signe que le drain ne capte plus l\'eau efficacement.', 'fissuredrainxt' ); ?></p>
        </div>
      </div>
      <div class="sicard">
        <div class="siicon">🧱</div>
        <div>
          <h4><?php esc_html_e( 'Humidité chronique des murs', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'Des taches d\'humidité ou d\'efflorescence blanche sur les murs de fondation intérieurs indiquent une infiltration persistante non évacuée.', 'fissuredrainxt' ); ?></p>
        </div>
      </div>
      <div class="sicard">
        <div class="siicon">👃</div>
        <div>
          <h4><?php esc_html_e( 'Odeur de moisissure', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'Une odeur musquée persistante dans le sous-sol révèle que l\'humidité stagne et que des moisissures commencent à se développer.', 'fissuredrainxt' ); ?></p>
        </div>
      </div>
      <div class="sicard">
        <div class="siicon">🌊</div>
        <div>
          <h4><?php esc_html_e( 'Sol détrempé autour de la maison', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'Des zones boueuses ou constamment humides près de la fondation à l\'extérieur signalent un refoulement ou une rupture du drain.', 'fissuredrainxt' ); ?></p>
        </div>
      </div>
      <div class="sicard">
        <div class="siicon">🔴</div>
        <div>
          <h4><?php esc_html_e( 'Fissures de fondation', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'Les fissures horizontales ou verticales dans le béton sont aggravées par la pression hydraulique que le drain devrait normalement soulager.', 'fissuredrainxt' ); ?></p>
        </div>
      </div>
      <div class="sicard">
        <div class="siicon">🏚️</div>
        <div>
          <h4><?php esc_html_e( 'Drain en argile d\'avant 1980', 'fissuredrainxt' ); ?></h4>
          <p><?php esc_html_e( 'Les drains en argile se fissurent, s\'effondrent et se bouchent avec le temps. Si votre maison a plus de 40 ans, une inspection s\'impose.', 'fissuredrainxt' ); ?></p>
        </div>
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

<!-- ═══ COMPARAISON MATÉRIAUX ═══ -->
<section class="sec sec-alt">
  <div class="cont">
    <div class="shead c">
      <span class="stag dk"><?php esc_html_e( 'Qualité de matériaux', 'fissuredrainxt' ); ?></span>
      <h2 class="sh"><?php esc_html_e( 'Ancien drain vs', 'fissuredrainxt' ); ?><br><span style="color:var(--y)"><?php esc_html_e( 'normes actuelles', 'fissuredrainxt' ); ?></span></h2>
      <div class="sline c"></div>
      <p class="sp" style="margin:18px auto 0"><?php esc_html_e( 'Les matériaux utilisés il y a 30 à 50 ans ne répondent plus aux normes actuelles. Voici pourquoi un remplacement fait une différence durable.', 'fissuredrainxt' ); ?></p>
    </div>
    <div class="specs-grid">
      <div class="specs-card old">
        <span class="specs-icon">❌</span>
        <div class="specs-label"><?php esc_html_e( 'Ancien drain (1980 et avant)', 'fissuredrainxt' ); ?></div>
        <div class="specs-name"><?php esc_html_e( 'Drain en argile', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-x">✕</span><?php esc_html_e( 'Tuyau en argile cuite — se fissure avec le gel-dégel', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-x">✕</span><?php esc_html_e( 'Pas de géotextile anti-racines', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-x">✕</span><?php esc_html_e( 'Pierre drainante non calibrée, s\'envase avec le temps', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-x">✕</span><?php esc_html_e( 'Durée de vie : 30–50 ans (souvent déjà dépassée)', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-x">✕</span><?php esc_html_e( 'Sections effondrées impossibles à diagnostiquer sans caméra', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="specs-card new">
        <div class="specs-badge"><?php esc_html_e( 'Installé par Fissure et Drain XT', 'fissuredrainxt' ); ?></div>
        <span class="specs-icon">✅</span>
        <div class="specs-label"><?php esc_html_e( 'Nouveau drain (normes RBQ)', 'fissuredrainxt' ); ?></div>
        <div class="specs-name"><?php esc_html_e( 'PVC perforé triple paroi', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-check">✓</span><?php esc_html_e( 'Tuyau PVC triple paroi — résistant au gel et à la pression', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-check">✓</span><?php esc_html_e( 'Géotextile anti-racines enveloppant le drain', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-check">✓</span><?php esc_html_e( 'Pierre drainante lavée calibrée ½–¾ po', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-check">✓</span><?php esc_html_e( 'Garantie de 25 ans incluse et transférable', 'fissuredrainxt' ); ?></div>
        <div class="specs-item"><span class="specs-check">✓</span><?php esc_html_e( 'Rapport vidéo avant/après remis au client', 'fissuredrainxt' ); ?></div>
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
        <div class="fa"><?php esc_html_e( 'Le coût varie selon la superficie à excaver, l\'accessibilité du périmètre et le type de sol. À titre indicatif, comptez à partir de 160 $/pi.lin. pour une installation complète incluant excavation, matériaux, main-d\'œuvre et remblayage. La soumission détaillée est gratuite et sans engagement.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Quelle est la durée des travaux ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Pour une maison unifamiliale standard, comptez 2 à 5 jours ouvrables selon la superficie à excaver et l\'accessibilité. L\'équipe protège votre terrain et remet tout en état à la fin du chantier.', 'fissuredrainxt' ); ?></div>
      </div>
      <div class="fitem">
        <div class="fq" onclick="fT(this)"><?php esc_html_e( 'Peut-on réparer un drain sans excavation ?', 'fissuredrainxt' ); ?><div class="ficon">+</div></div>
        <div class="fa"><?php esc_html_e( 'Dans certains cas, un drain obstrué peut être nettoyé par hydro-jet ou par caméra avec outil de coupe. Cependant, si le drain est effondré, fracturé ou en argile, l\'excavation et le remplacement complet sont nécessaires. L\'inspection détermine la meilleure approche.', 'fissuredrainxt' ); ?></div>
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
        <div class="fa"><?php esc_html_e( 'Oui, nous intervenons à l\'année. Les travaux d\'excavation en hiver sont possibles avec l\'équipement adapté. Les délais peuvent être légèrement allongés selon les conditions, mais nous maintenons notre engagement de qualité et de propreté du chantier.', 'fissuredrainxt' ); ?></div>
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
            <div class="tmcity"><?php esc_html_e( 'Montréal, Notre-Dame-de-Grâce', 'fissuredrainxt' ); ?></div>
          </div>
        </div>
      </div>
      <div class="tmcard">
        <span class="tmtag"><?php esc_html_e( 'Drain français', 'fissuredrainxt' ); ?></span>
        <div class="tmstars">★★★★★</div>
        <p class="tmtxt"><?php esc_html_e( '"Maison des années 70 avec drain en argile effondré. Remplacement complet en 3 jours. Terrain remis en état impeccable. Le rapport vidéo avant/après est très rassurant. Merci à toute l\'équipe."', 'fissuredrainxt' ); ?></p>
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
