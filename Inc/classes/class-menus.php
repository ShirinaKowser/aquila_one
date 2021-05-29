<?php
/**
 * Register Menus
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('init', [ $this, 'register_menus' ]);
    }

    public function register_menus()
    {
        register_nav_menus([
              'aquila-header-menu' => esc_html__('Header Menu', 'Aquila'),
              'aquila-footer-menu' => esc_html__('Footer Menu', 'Aquila'),
          ]);
    }
    public function get_menu_id($location)
    {

        // Get all locations
        $locations = get_nav_menu_locations();
        echo '<pre>';
        print_r($locations);
        wp_die();
        // Get object id by location.
        $menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

        return ! empty($menu_id) ? $menu_id : '';
    }
}
