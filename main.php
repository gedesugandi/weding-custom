<?php

namespace WEDKU;

if (!defined('ABSPATH')) exit;
class E_WEDKU
{
    public function __construct()
    {
        add_action('init', [$this, 'check_for_install']);
        add_action('wp_enqueue_scripts', [$this, 'Style_Wding'], 999);
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
    }
    private function include_widgets_files()
    {
        require_once(__DIR__ . '/widget/generator-link.php');
        require_once(__DIR__ . '/widget/modal-popup.php');
    }
    public function register_widgets()
    {
        $this->include_widgets_files();
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widget\Generator_link());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widget\CSWeding_modal_popup());
    }
    public function check_for_install()
    {
        E_WEDKU::show_redo_warning();
        return;
    }
    function Style_Wding()
    {
        wp_register_style("WEDKU", PLUGINS_URLS . "/assets/wedku.style.css", "");
        wp_enqueue_style('WEDKU');
    }
    private function show_redo_warning()
    {
        if (!defined('ELEMENTOR_VERSION')) {
            $link = "https://pl.wordpress.org/plugins/elementor/";
            $plugin = "Elementor Page Builder";
?>
            <div class="notice notice-warning is-dismissible">
                <p>Please install <a href="<?php echo $link; ?>"><?php echo $plugin; ?></a> to use REDO JSComposer
                    Additional.</p>
            </div>
<?php
        }
    }
}
