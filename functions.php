<?php

include_once get_template_directory() . '/library/upfront_functions.php';
include_once get_template_directory() . '/library/class_upfront_debug.php';
include_once get_template_directory() . '/library/class_upfront_server.php';
include_once get_template_directory() . '/library/class_upfront_theme.php';

class Spirit extends Upfront_ChildTheme {

	protected $_exports_images = true;

	public function initialize() {
		add_filter('upfront_augment_theme_layout', array($this, 'augment_layout'));
		$this->add_actions_filters();
		$this->populate_pages();
	}

	public function get_prefix(){
		return 'Spirit';
	}

	public static function serve(){
		return new self();
	}

	public function populate_pages() {
		
	}

	protected function add_actions_filters() {
		// Include current theme style
		add_action('wp_head', array($this, 'enqueue_styles'), 200);
	}

	public function enqueue_styles() {
		wp_enqueue_style('current_theme', get_stylesheet_uri());
	}
    public function augment_layout ($layout) {
        if (empty($layout['regions'])) return $layout;
        $layout['regions'] = $this->augment_regions($layout['regions']);
        return $layout;
    }

    public function augment_regions ($regions) {
        if (!empty($this->_slider_imported)) return $regions;

        if (empty($regions) || !is_array($regions)) return $regions;
        foreach ($regions as $idx => $region) {
            if (empty($region['properties']) || !is_array($region['properties'])) continue;
            foreach($region['properties'] as $pidx => $prop) {
                if (empty($prop['name']) || empty($prop['value']) || 'background_slider_images' !== $prop['name']) continue;
                foreach ($prop['value'] as $order_id => $attachment_src) {
                    if (is_numeric($attachment_src)) continue; // A hopefully existing image.
                    $regions[$idx]['properties'][$pidx]['value'][$order_id] = $this->_import_slider_image($attachment_src);
                }
            }
        }

        $this->_slider_imported = true;
        return $regions;
    }
}

Spirit::serve();




/**
 * Temporary version check nag
 */
if (!is_admin()) {
    function upfront_version_check_script () {
        if (function_exists('upfront_exporter_is_running') && upfront_exporter_is_running()) return false; // Not in exporter
        if (version_compare(wp_get_theme('upfront')->Version, '1.0-alpha-1', 'ge')) return false;
?>
<style type="text/css">
.mfp-bg.uf-upgrade-notice {
    background:#fff;
    background:rgba(255,255,255,.75);
}
.uf-upgrade-notice .mfp-close {
    display:none;
}
.upfront-version_compatibility-nag {
    margin: 0 auto;
    width: 90%;
    max-width: 600px;
    background: #fff;
    text-align: center;
    padding: 40px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,.15);
    box-sizing: border-box;
}
.upfront-version_compatibility-nag p {
    font:normal 100 22px/1.7 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    margin-bottom: 2em;
    color:#777D82;
}
.upfront-version_compatibility-nag a {
    font:normal 100 18px 'Open Sans', Helvetica Neueu, Helvetica, Arial, sans-serif; 
    border-radius: 5px;
    margin: 10px 20px;
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.00) 0%, rgba(0,0,0,0.05) 100%);
    box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.10);
}
.upfront-version_compatibility-nag a.update {
    color: #fff;
    background: #1FCD8F;
    padding: 15px 30px;

}
.upfront-version_compatibility-nag a.boot,
.upfront-version_compatibility-nag a.cancel {
    color: #777D82;
    background: #F0F0F0;
}

.upfront-version_compatibility-nag a.update:hover, 
.upfront-version_compatibility-nag a.boot:hover {
    background-image: linear-gradient(-180deg, rgba(0,0,0,0.08) 0%, rgba(0,0,0,0.00) 100%);
}
</style>
<script type="text/javascript">
;(function ($, undefined) {

    /**
     * Overridden Upfront.Application.start
     *
     * Actual application starting.
     *
     * @return {Boolean}
     */
    function application_override () {
        _nag = $.magnificPopup.open({
            items: {
                src: '' + 
                    '<div class="upfront-version_compatibility-nag">' +
                        '<p>You have recently upgraded your theme. Please Upgrade to <b>Upfront 1.0</b> in order to be able to edit this theme.</p>' +
                        '<div>' +
                            '<a class="cancel" href="#cancel">Cancel</a>' +
                            '<a class="update" href="<?php echo esc_url(admin_url("themes.php")); ?>">Upgrade Upfront</a>' +
                        '</div>' +
                    '</div>' +
                '',
                type: 'inline'
            },
            mainClass: 'uf-upgrade-notice'
        });
        $(".upfront-version_compatibility-nag")
            .find('a[href="#cancel"]')
                .off("click")
                .on('click', function (e){
                    if (e.preventDefault) e.preventDefault();
                    if (e.stopPropagation) e.stopPropagation();

                    $.magnificPopup.close();
                    return false;
                })
            .end()
        ;
        return false;
    }

    (function boot () {
        if (!((window.Upfront || {}).Events || {}).on) return setTimeout(boot);
        Upfront.Events.on("application:loaded:layout_editor", function () {
            // Monkeypatch the Application.start method so we can't run whatsoever
            Upfront.Application.start = application_override;
        });
    })();

})(jQuery);
</script>
<?php
    }
    add_action('wp_footer', 'upfront_version_check_script');
}

