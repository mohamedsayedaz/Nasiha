<?php 
    require_once('wp-bootstrap-navwalker.php');

    /**
    *Add Stylesheet function
    *This Function Used To add stylesheet file to the website
    *written by Mohamed
    **/
    function add_stylesheet(){
        wp_enqueue_style('style',get_template_directory_uri() . '/style.css');
        wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.css' );
    }
    /**
    *Add script files function
    *This Function Used To add script files to the website
    *written by Mohamed
    **/
    function add_scriptfile(){
        wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.js' , array('jquery'),false,true);
        wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery'),false,true);
        wp_enqueue_script('propper' , get_template_directory_uri() . '/js/popper.js' , array(),false,true);
    }
    /**
    *Add Custom Menu
    *this function enable menu tab in the site
    **/
    function add_custom_menu(){
        register_nav_menus(array(
            'Main-Menu' => 'Navigation Menu'
        ));
    }
    /**
    *Bootstrap Menu
    **/
    function add_bootstrap_menu(){
        wp_nav_menu(array(
            'theme_location' => 'Main-Menu',
            'menu_class'     => 'navbar-nav mr-auto',
            'depth'          => 1,
            'container'      => false,
            'walker'         => new wp_bootstrap_navwalker
        ));
    }
    /*****************************************************************************
    *Hooks this part just link my functions with appropriate hooks to be executed*
    ******************************************************************************/
    //Stylesheets
    add_action('wp_enqueue_scripts','add_stylesheet');
    //Scripts
    add_action('wp_enqueue_scripts','add_scriptfile');
    //Feature Images
    add_theme_support('post-thumbnails');
    //Activate Menu
    add_action('init','add_custom_menu');

    //Numeric Pagination
    function add_numeric_pagination(){
        global $wp_query;
        //Get all pages
        $all_pages = $wp_query->max_num_pages; 
        //Get Current Page
        $current_page = max(1,get_query_var('paged'));
        //Check if total pages > 1
        if($all_pages > 1){
            return paginate_links(array(
                'base'      => get_pagenum_link() . '%_%',
                'format'    => 'page/%#%',
                'current'   => $current_page,
                'mid_size'  => 5
            ));
        }
    }
?>