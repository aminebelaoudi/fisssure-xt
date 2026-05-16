<?php
/**
 * Meta box — Images de la page Service Drain Français
 * Permet de changer l'image hero et les 3 images galerie depuis WP Admin.
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Enregistrement ────────────────────────────────────────────────────────────
function fdxt_drain_register_metabox() {
    add_meta_box(
        'fdxt_drain_images',
        '🖼  Images — Page Drain Français',
        'fdxt_drain_metabox_cb',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes_page', 'fdxt_drain_register_metabox' );

// ── Contenu du panneau ────────────────────────────────────────────────────────
function fdxt_drain_metabox_cb( $post ) {

    $tpl = get_post_meta( $post->ID, '_wp_page_template', true );
    if ( $tpl !== 'page-service-drain-francais.php' ) {
        echo '<p style="color:#999;font-style:italic">Ce panneau est actif uniquement sur le template <strong>Page Service Drain Français</strong>.</p>';
        return;
    }

    wp_nonce_field( 'fdxt_drain_images_save', 'fdxt_drain_images_nonce' );

    $fields = array(
        '_fdxt_drain_hero_img'  => array( 'label' => 'Image Hero', 'hint' => 'Arrière-plan de la section principale' ),
        '_fdxt_drain_gal_img_1' => array( 'label' => 'Galerie — Image 1', 'hint' => '' ),
        '_fdxt_drain_gal_img_2' => array( 'label' => 'Galerie — Image 2', 'hint' => '' ),
        '_fdxt_drain_gal_img_3' => array( 'label' => 'Galerie — Image 3', 'hint' => '' ),
    );

    echo '<div style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;padding:4px 0">';

    foreach ( $fields as $meta_key => $cfg ) {
        $url = esc_url( get_post_meta( $post->ID, $meta_key, true ) );
        ?>
        <div class="fdxt-img-field" style="border:1px solid #ddd;border-radius:5px;padding:12px;background:#fafafa">

            <p style="margin:0 0 4px;font-weight:600;font-size:12px;color:#1e1e1e"><?php echo esc_html( $cfg['label'] ); ?></p>
            <?php if ( $cfg['hint'] ) : ?>
            <p style="margin:0 0 8px;font-size:11px;color:#888"><?php echo esc_html( $cfg['hint'] ); ?></p>
            <?php endif; ?>

            <div class="fdxt-img-preview" style="background:#eee;border-radius:3px;min-height:64px;margin-bottom:8px;overflow:hidden">
                <img src="<?php echo $url; ?>"
                     style="width:100%;height:80px;object-fit:cover;display:<?php echo $url ? 'block' : 'none'; ?>">
            </div>

            <input type="hidden"
                   name="<?php echo esc_attr( $meta_key ); ?>"
                   class="fdxt-img-url"
                   value="<?php echo $url; ?>">

            <div style="display:flex;gap:6px;flex-wrap:wrap">
                <button type="button" class="button button-small fdxt-choose-img">Choisir une image</button>
                <button type="button"
                        class="button button-small fdxt-remove-img"
                        style="color:#b32d2e;<?php echo $url ? '' : 'display:none'; ?>">✕ Supprimer</button>
            </div>

        </div>
        <?php
    }

    echo '</div>';
    echo '<p style="margin:12px 0 0;font-size:11px;color:#999">Les images sont choisies depuis la Médiathèque WordPress. Si aucune image n\'est sélectionnée, l\'image par défaut du thème est utilisée.</p>';
}

// ── Scripts Media Uploader ────────────────────────────────────────────────────
function fdxt_drain_admin_footer_scripts() {
    $screen = get_current_screen();
    if ( ! $screen || $screen->base !== 'post' || $screen->post_type !== 'page' ) return;
    wp_enqueue_media();
    ?>
    <script>
    jQuery(function($){

        $(document).on('click', '.fdxt-choose-img', function(){
            var $wrap   = $(this).closest('.fdxt-img-field');
            var $url    = $wrap.find('.fdxt-img-url');
            var $img    = $wrap.find('.fdxt-img-preview img');
            var $remove = $wrap.find('.fdxt-remove-img');

            var frame = wp.media({
                title   : 'Choisir une image',
                button  : { text : 'Utiliser cette image' },
                multiple: false,
                library : { type: 'image' }
            });

            frame.on('select', function(){
                var att = frame.state().get('selection').first().toJSON();
                $url.val(att.url);
                $img.attr('src', att.url).css('display', 'block');
                $remove.css('display', '');
            });

            frame.open();
        });

        $(document).on('click', '.fdxt-remove-img', function(){
            var $wrap = $(this).closest('.fdxt-img-field');
            $wrap.find('.fdxt-img-url').val('');
            $wrap.find('.fdxt-img-preview img').attr('src', '').css('display', 'none');
            $(this).css('display', 'none');
        });

    });
    </script>
    <?php
}
add_action( 'admin_footer', 'fdxt_drain_admin_footer_scripts' );

// ── Sauvegarde ────────────────────────────────────────────────────────────────
function fdxt_drain_save_meta( $post_id ) {

    if ( ! isset( $_POST['fdxt_drain_images_nonce'] ) ) return;
    if ( ! wp_verify_nonce(
        sanitize_text_field( wp_unslash( $_POST['fdxt_drain_images_nonce'] ) ),
        'fdxt_drain_images_save'
    ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $keys = array(
        '_fdxt_drain_hero_img',
        '_fdxt_drain_gal_img_1',
        '_fdxt_drain_gal_img_2',
        '_fdxt_drain_gal_img_3',
    );

    foreach ( $keys as $key ) {
        if ( array_key_exists( $key, $_POST ) ) {
            $value = sanitize_text_field( wp_unslash( $_POST[ $key ] ) );
            update_post_meta( $post_id, $key, esc_url_raw( $value ) );
        }
    }
}
add_action( 'save_post_page', 'fdxt_drain_save_meta' );
