<?php defined( 'ABSPATH' ) || exit; ?>
<!-- LEAD MACHINE -->
<section class="lsec" id="soumission">
  <div class="linner cont">

    <!-- Left: pitch -->
    <div class="lleft">
      <span class="stag"><?php esc_html_e( 'Soumission gratuite · Sans engagement', 'fissuredrainxt' ); ?></span>
      <h2><?php esc_html_e( 'Protégez votre', 'fissuredrainxt' ); ?><br><span><?php esc_html_e( 'maison maintenant', 'fissuredrainxt' ); ?></span></h2>
      <p><?php esc_html_e( 'Un expert vous contacte dans les 2 heures en semaine. Inspection gratuite sur place. Aucune pression. Aucune surprise.', 'fissuredrainxt' ); ?></p>
      <ul class="lperks">
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Inspection et diagnostic gratuits sur place', 'fissuredrainxt' ); ?></li>
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Soumission détaillée et transparente, sans frais cachés', 'fissuredrainxt' ); ?></li>
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Équipe certifiée RBQ avec assurance responsabilité complète', 'fissuredrainxt' ); ?></li>
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Garantie de 25 ans', 'fissuredrainxt' ); ?><sup style="font-size:9px;vertical-align:super;color:rgba(245,168,0,.75)">*</sup> <?php esc_html_e( 'sur les travaux d\'installation', 'fissuredrainxt' ); ?></li>
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Intervention rapide selon disponibilité', 'fissuredrainxt' ); ?></li>
        <li class="lperk"><div class="pck">✓</div><?php esc_html_e( 'Démarche écoresponsable — matériaux durables et certifiés', 'fissuredrainxt' ); ?></li>
      </ul>
      <div class="lphone">
        <div class="lpico">📞</div>
        <div>
          <div class="lplbl"><?php esc_html_e( 'Urgence ? Appelez directement', 'fissuredrainxt' ); ?></div>
          <a href="tel:15147307107"><div class="lpnum"><?php esc_html_e( '(514) 730-7107', 'fissuredrainxt' ); ?></div></a>
        </div>
      </div>
    </div>

    <!-- Right: multi-step widget -->
    <div class="lw">
      <div class="lbrand">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>"
             alt="<?php esc_attr_e( 'Fissure et Drain XT', 'fissuredrainxt' ); ?>"
             height="34" loading="lazy">
        <a href="tel:15147307107" class="lbtel"><?php esc_html_e( '(514) 730-7107', 'fissuredrainxt' ); ?></a>
      </div>
      <div class="lbody">

        <!-- Progress bar -->
        <div class="lprog">
          <div class="lpseg d" id="ps1"></div>
          <div class="lpseg" id="ps2"></div>
          <div class="lpseg" id="ps3"></div>
          <div class="lpseg" id="ps4"></div>
        </div>

        <!-- Step 1: Problem selection -->
        <div id="lm1">
          <span class="ltag"><?php esc_html_e( 'Étape 1 sur 3', 'fissuredrainxt' ); ?></span>
          <div class="lttl"><?php esc_html_e( 'Quel est votre problème ?', 'fissuredrainxt' ); ?></div>
          <p class="lstl"><?php esc_html_e( 'Sélectionnez tout ce qui s\'applique', 'fissuredrainxt' ); ?></p>
          <div class="lopts">
            <button class="lopt" data-v="infiltration" onclick="lmT(this,'p')">
              <span class="loico">💧</span>
              <div class="lott"><?php esc_html_e( 'Infiltration d\'eau', 'fissuredrainxt' ); ?></div>
              <div class="lotd"><?php esc_html_e( 'Eau au sous-sol', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="fissure" onclick="lmT(this,'p')">
              <span class="loico">⚡</span>
              <div class="lott"><?php esc_html_e( 'Fissure', 'fissuredrainxt' ); ?></div>
              <div class="lotd"><?php esc_html_e( 'Mur de fondation', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="moisissure" onclick="lmT(this,'p')">
              <span class="loico">🌫️</span>
              <div class="lott"><?php esc_html_e( 'Humidité / Moisissures', 'fissuredrainxt' ); ?></div>
              <div class="lotd"><?php esc_html_e( 'Odeurs, taches', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="inspection" onclick="lmT(this,'p')">
              <span class="loico">📷</span>
              <div class="lott"><?php esc_html_e( 'Inspection préventive', 'fissuredrainxt' ); ?></div>
              <div class="lotd"><?php esc_html_e( 'Avant achat / prévention', 'fissuredrainxt' ); ?></div>
            </button>
          </div>
          <div class="lurg">
            <div class="lugdot"></div>
            <span class="lugt"><?php esc_html_e( 'Eau active maintenant ? Appelez le (514) 730-7107 — nous priorisons les urgences.', 'fissuredrainxt' ); ?></span>
          </div>
          <button class="lbtn" onclick="lmG(2)"><?php esc_html_e( 'Continuer →', 'fissuredrainxt' ); ?></button>
          <div class="ltrust">
            <span class="lti"><?php esc_html_e( 'Sans engagement', 'fissuredrainxt' ); ?></span>
            <span class="lti"><?php esc_html_e( 'Gratuit', 'fissuredrainxt' ); ?></span>
            <span class="lti"><?php esc_html_e( 'RBQ certifié', 'fissuredrainxt' ); ?></span>
          </div>
        </div>

        <!-- Step 2: Property type + urgency -->
        <div id="lm2" style="display:none">
          <button class="lback" onclick="lmG(1)">← <?php esc_html_e( 'Retour', 'fissuredrainxt' ); ?></button>
          <span class="ltag"><?php esc_html_e( 'Étape 2 sur 3', 'fissuredrainxt' ); ?></span>
          <div class="lttl"><?php esc_html_e( 'Type de propriété', 'fissuredrainxt' ); ?></div>
          <p class="lstl"><?php esc_html_e( 'Pour mieux estimer vos travaux', 'fissuredrainxt' ); ?></p>
          <div class="lopts">
            <button class="lopt" data-v="maison" onclick="lmT(this,'t')">
              <span class="loico">🏠</span>
              <div class="lott"><?php esc_html_e( 'Maison unifamiliale', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="semi" onclick="lmT(this,'t')">
              <span class="loico">🏘️</span>
              <div class="lott"><?php esc_html_e( 'Semi-détachée', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="condo" onclick="lmT(this,'t')">
              <span class="loico">🏢</span>
              <div class="lott"><?php esc_html_e( 'Condo / multiplex', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="comm" onclick="lmT(this,'t')">
              <span class="loico">🏗️</span>
              <div class="lott"><?php esc_html_e( 'Commercial', 'fissuredrainxt' ); ?></div>
            </button>
          </div>
          <span class="lslbl"><?php esc_html_e( 'Niveau d\'urgence', 'fissuredrainxt' ); ?></span>
          <div class="lopts one">
            <button class="lopt" data-v="urgent" onclick="lmT(this,'u')">
              <div class="lott">🚨 <?php esc_html_e( 'Urgent — eau active ou dommages visibles', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="planifie" onclick="lmT(this,'u')">
              <div class="lott">📅 <?php esc_html_e( 'Planifié — dans les prochaines semaines', 'fissuredrainxt' ); ?></div>
            </button>
            <button class="lopt" data-v="devis" onclick="lmT(this,'u')">
              <div class="lott">💬 <?php esc_html_e( 'Comparaison de prix seulement', 'fissuredrainxt' ); ?></div>
            </button>
          </div>
          <button class="lbtn" onclick="lmG(3)"><?php esc_html_e( 'Voir mon estimation →', 'fissuredrainxt' ); ?></button>
        </div>

        <!-- Step 3: Estimate + contact fields -->
        <div id="lm3" style="display:none">
          <button class="lback" onclick="lmG(2)">← <?php esc_html_e( 'Retour', 'fissuredrainxt' ); ?></button>
          <span class="ltag"><?php esc_html_e( 'Votre estimation', 'fissuredrainxt' ); ?></span>
          <div class="estc">
            <div class="estlbl"><?php esc_html_e( 'ESTIMATION INDICATIVE', 'fissuredrainxt' ); ?></div>
            <div class="estval" id="lEst">—</div>
            <div class="estnote"><?php esc_html_e( 'Fourchette approximative · Confirmation sur place gratuite', 'fissuredrainxt' ); ?></div>
          </div>
          <div class="stbl" id="lSum"></div>
          <div class="pban" id="lPrio" style="display:none">⚡ <?php esc_html_e( 'Dossier prioritaire — un expert vous rappelle dans l\'heure', 'fissuredrainxt' ); ?></div>
          <span class="lslbl"><?php esc_html_e( 'Pour recevoir votre soumission détaillée', 'fissuredrainxt' ); ?></span>
          <div class="frow">
            <div class="fld">
              <label for="lFn"><?php esc_html_e( 'Prénom', 'fissuredrainxt' ); ?></label>
              <input type="text" id="lFn" name="prenom" placeholder="<?php esc_attr_e( 'Jean', 'fissuredrainxt' ); ?>" autocomplete="given-name">
            </div>
            <div class="fld">
              <label for="lLn"><?php esc_html_e( 'Nom', 'fissuredrainxt' ); ?></label>
              <input type="text" id="lLn" name="nom" placeholder="<?php esc_attr_e( 'Tremblay', 'fissuredrainxt' ); ?>" autocomplete="family-name">
            </div>
          </div>
          <div class="frow">
            <div class="fld">
              <label for="lPh"><?php esc_html_e( 'Téléphone', 'fissuredrainxt' ); ?></label>
              <input type="tel" id="lPh" name="telephone" placeholder="<?php esc_attr_e( '(514) 000-0000', 'fissuredrainxt' ); ?>" autocomplete="tel">
            </div>
            <div class="fld">
              <label for="lVi"><?php esc_html_e( 'Ville', 'fissuredrainxt' ); ?></label>
              <input type="text" id="lVi" name="ville" placeholder="<?php esc_attr_e( 'Montréal', 'fissuredrainxt' ); ?>" autocomplete="address-level2">
            </div>
          </div>
          <div class="fld">
            <label for="lEm"><?php esc_html_e( 'Courriel (optionnel)', 'fissuredrainxt' ); ?></label>
            <input type="email" id="lEm" name="courriel" placeholder="<?php esc_attr_e( 'courriel@example.com', 'fissuredrainxt' ); ?>" autocomplete="email">
          </div>
          <button class="lbtn" onclick="lmSub()"><?php esc_html_e( 'Envoyer ma demande →', 'fissuredrainxt' ); ?></button>
          <p class="fhint"><?php esc_html_e( 'Réponse garantie en moins de 2 heures en semaine', 'fissuredrainxt' ); ?></p>
        </div>

        <!-- Step 4: Success -->
        <div id="lm4" style="display:none">
          <div class="swrap">
            <div class="sring">
              <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <div class="sttl"><?php esc_html_e( 'Demande reçue !', 'fissuredrainxt' ); ?></div>
            <p class="sstl"><?php esc_html_e( 'Dossier #', 'fissuredrainxt' ); ?><strong id="lRef">—</strong> <?php esc_html_e( 'créé. Un expert vous contacte sous 2h en semaine.', 'fissuredrainxt' ); ?></p>
            <div class="promcard">
              <div class="promlbl"><?php esc_html_e( 'CE QUE VOUS POUVEZ ATTENDRE', 'fissuredrainxt' ); ?></div>
              <div class="promrow"><div class="promck">✓</div><?php esc_html_e( 'Appel de confirmation dans les 2 heures (heures d\'affaires)', 'fissuredrainxt' ); ?></div>
              <div class="promrow"><div class="promck">✓</div><?php esc_html_e( 'Visite gratuite sur place, sans engagement', 'fissuredrainxt' ); ?></div>
              <div class="promrow"><div class="promck">✓</div><?php esc_html_e( 'Soumission détaillée remise sur place', 'fissuredrainxt' ); ?></div>
              <div class="promrow"><div class="promck">✓</div><?php esc_html_e( 'Aucune pression, aucune obligation', 'fissuredrainxt' ); ?></div>
            </div>
            <a href="tel:15147307107" class="scall">📞 <?php esc_html_e( '(514) 730-7107', 'fissuredrainxt' ); ?></a>
            <p class="sref"><?php esc_html_e( 'Lun–Ven 7h–18h · Sam 8h–16h', 'fissuredrainxt' ); ?></p>
          </div>
        </div>

      </div><!-- /.lbody -->
    </div><!-- /.lw -->

  </div>
</section>
