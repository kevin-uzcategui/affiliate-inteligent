<?php
/*
Plugin Name:  Affiliate Inteligent
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Affiliate Inteligent
Version:      1.0.0
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  afi
Domain Path:  /languages
*/

define("VERSION_AFFILIATE_INTELIGENT", "1.0.1");

/* Add enqueue */
function ai_enqueue() {

	wp_enqueue_style( 'ai_generate_style', 
        plugins_url('affiliate-inteligent') . '/afi-generate.css', 
        array(), 
        VERSION_AFFILIATE_INTELIGENT
    );
}
add_action( 'wp_enqueue_scripts', 'ai_enqueue');

function ai_admin_enqueue() {

    wp_enqueue_script( 'ai_admin_script', 
        plugins_url('affiliate-inteligent') . '/afi-admin.js', 
        array(), 
        VERSION_AFFILIATE_INTELIGENT
    ); 

    wp_localize_script('ai_admin_script','url_vars',['ajax_url'=>admin_url('admin-ajax.php')]); 

}
add_action( 'admin_enqueue_scripts', 'ai_admin_enqueue');


add_action( 'wp_head', "affidiate" );

function affidiate(){
    ?>
        <script>window._epn = {campaign: 5338796121};</script>
        <script src="https://epnt.ebay.com/static/epn-smart-tools.js"></script>
        <?php

            $print_product = "";

            if(pll_current_language('locale') === "es_ES"):
                $print_product = '<div class="content-product">
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DdQzmbp">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/S74e5dfa0cc91444899a20cf63de7079ep.jpg_350x350-1.jpg">
                            <div class="content-product__content-info">
                                <h4>Consola retro portatil completa</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">                        
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://amzn.to/3Rf3axN">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/71SFU0Q0AL._AC_SY355_.jpg">
                            <div class="content-product__content-info">
                                <h4>Consola arcade</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2021/03/Amazon-logo-scaled.jpg">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DlMCc9d">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Sb0d602a4ade545119d3bb547d22e38f5e.jpg_350x350.png">
                            <div class="content-product__content-info">
                                <h4>Consola retro nes/snes</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DdbysRD">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/S73b9c70e5bb14950871b34474f0c0c37S.jpg_350x350-1.jpg">
                            <div class="content-product__content-info">
                                <h4>Consola retro PS1/GBA Boy</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>                                                          
                </div>';
            elseif(pll_current_language('locale') === "fr_FR"):
                $print_product = '<div class="content-product">
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DdY8gBZ">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/S74e5dfa0cc91444899a20cf63de7079ep.jpg_350x350-1.jpg">
                            <div class="content-product__content-info">
                                <h4>Console rétro portable complète</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://amzn.to/3cmyNqI">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/71SFU0Q0AL._AC_SY355_.jpg">
                            <div class="content-product__content-info">
                                <h4>Console d\'arcade</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2021/03/Amazon-logo-scaled.jpg">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DmKqKrh">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Sb0d602a4ade545119d3bb547d22e38f5e.jpg_350x350.png">
                            <div class="content-product__content-info">
                                <h4>Console nes/snes rétro</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>
                    <div class="content-product__row-product"> 
                        <a href="https://s.click.aliexpress.com/e/_DnnbTPH">
                            <img class="content-product__product-ing" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/S73b9c70e5bb14950871b34474f0c0c37S.jpg_350x350-1.jpg">
                            <div class="content-product__content-info">
                                <h4>Console rétro PS1/GBA Enfant</h4>
                                <img class="content-product__afiliate" src="https://consolasretro.s3.amazonaws.com/wp-content/uploads/2022/08/Aliexpress-logo-1.png">
                            </div>
                            <buttom class="content-product__buttom">VER PRECIO</buttom>
                        </a>
                    </div>                                                          
                </div>';
            endif;

        ?>
        
        <style>
            .content-product{
                display: flex;
                flex-wrap: wrap;
            }

            .content-product__row-product{
                width: calc(25% - 10px);
                margin: 5px;
                box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.16);
                    
            }

            .content-product__content-info{
                padding-left: 15px;
                padding-right: 15px;
            }

            .content-product__product-ing{
                width: 100%;
            object-fit: cover;
            object-position: center center;	
                box-shadow: none !important;
            }

            .content-product h4{
                font-size: 15px;
            }

            .content-product__buttom{
                display: flex;
                justify-content: center;
                margin-bottom: 10px;
            }


            @media screen and (max-width: 800px){
                .content-product__row-product{
                    width: calc(50% - 10px);
                }	
            }
        </style>

        <script>
        jQuery(document).ready(function () {

            jQuery('.entry-content > *:nth-child(10n)').after(`<?php echo $print_product ?>`);

            var img_width = jQuery('.content-product__product-ing').innerWidth()
            jQuery('.content-product__product-ing').css('height', img_width)    

        });


        </script>

    <?php
}


add_action( 'admin_menu', 'ai_menu' );


function ai_menu(){
    $parent_slug = 'menu_affiliate_inteligent';
    add_menu_page( 
        'Afiliación inteligente', 
        'Afiliación inteligente', 
        'manage_options', 
        $parent_slug, 
        'amazon_like_update_html', 
        'dashicons-admin-generic' 
    );
    // img dimensions optimizations
    add_submenu_page(
        $parent_slug,
        'Actualizar Like Amazon',
        'Actualizar Like Amazon',
        'manage_options',
        $parent_slug,
        'amazon_like_update_html'
    );
}

function amazon_like_update_html(){

    $afi_amazon_id = get_option('afi_amazon_id');

    $afi_change_urls = get_option('afi_change_urls', array());

    $afi_offset_form_link_update = get_option('afi_offset_form_link_update', 0);

    $afi_change_urls = implode(', ', $afi_change_urls);

    ?>
    <h1>Actulizar Enlaces de Amazon</h1>
    
    <h2>Configuración</h2>
    <form class="afi-form-updata-config" method="post">
        <div>
            <label for="amazon-id">Id Amazon</label>
            <input value="<?php echo $afi_amazon_id ?>" name="amazon_id" id="amazon-id" type="text">
        </div>
        <div>
            <label for="change-url">URLs a cambiar</label>
            <input value="<?php echo $afi_change_urls ?>" name="change_urls" id="change-urls" type="text">
        </div>
        <button class="afi-active-updata-config">Actualizar</button>
        <div class="afi-info-updata-config"></div>
    </form>

    <h2>Actulización masiva</h2>
    <form class="afi-form-link-update" method="post" action="afi-form-active-update">
        <div>
            <label for="offset">Posición</label>
            <input value="<?php echo $afi_offset_form_link_update ?>" name="offset" id="offset" type="number">
        </div>
        <button class="afi-active-link-update">Activar</button>
        <div class="afi-info-link-update"></div>
    </form>
    <?php
}


add_action('wp_ajax_nopriv_ajax_set_offset_form_link','set_offset_form_link'); 
add_action('wp_ajax_ajax_set_offset_form_link','set_offset_form_link'); 
function set_offset_form_link(){

    /* offset form link update */
    $offset_form_link_update = $_POST['update_offset'];

    update_option('afi_offset_form_link_update', $offset_form_link_update);

}


add_action('wp_ajax_nopriv_ajax_amazon_like_update_date_save','amazon_like_update_date_save'); 
add_action('wp_ajax_ajax_amazon_like_update_date_save','amazon_like_update_date_save'); 
function amazon_like_update_date_save(){   

    /* amazon id */
    $amazon_id = stripslashes($_POST['amazon_id']);

    update_option('afi_amazon_id', $amazon_id);

    /* change urls */
    $change_urls = stripslashes($_POST['change_urls']);

    $array_change_urls = explode(',', $change_urls);

    update_option('afi_change_urls', $array_change_urls);

}


add_action('wp_ajax_nopriv_ajax_update_post_without_update_like','update_post_without_update_like'); // permitre que funcion para usurios registrados
add_action('wp_ajax_ajax_update_post_without_update_like','update_post_without_update_like'); 

function update_post_without_update_like($id_post = null){    
    global $wpdb;

    write_log('----------------update_post_without_update_like-----------------');


    $afi_change_urls = get_option('afi_change_urls', array());

    if(!empty($id_post)){
        $sql_posts_without_update_like = "SELECT ID, post_content FROM `{$wpdb->prefix}posts` WHERE ID = $id_post";



        $get_posts_without_update_like = $wpdb->get_results($sql_posts_without_update_like);
    }else{
        $offset = absint($_POST['offset']);
        $limit = absint($_POST['limit']);

        $where_search = "`post_content` REGEXP '(https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?)'";

        foreach ($afi_change_urls as $key_afi_change_url => $afi_change_url) {
            
            $afi_change_url = str_replace('\'', '\\\'', $afi_change_url);

            $where_search .= " OR `post_content` LIKE '%$afi_change_url%'";

        }
        
        // get post without update like
        $sql_posts_without_update_like = "SELECT ID, post_content FROM `{$wpdb->prefix}posts` WHERE ($where_search) AND `post_status` LIKE 'publish' LIMIT $limit OFFSET $offset";


        $get_posts_without_update_like = $wpdb->get_results($sql_posts_without_update_like);

    }



    foreach ($get_posts_without_update_like as $get_post_without_update_like) {
        // get data post
        $new_content = $get_post_without_update_like->post_content;

        $post_slug_language = pll_get_post_language( $get_post_without_update_like->ID );

        $post_language_info = get_info_by_slug($post_slug_language);

        // init update post without update like
        // change url amazon
        preg_match_all ( 
            '/<a(.|\n)*?href=[\"\']((https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?))[\"\'](.|\n)*?<\/a>/', 
            $new_content, 
            $change_url_amazon
        );

        foreach ($change_url_amazon[2] as $key_link_content => $link_content) {

            $new_content = ger_content_with_updata_url(
                $new_content, 
                $post_language_info['lenguge_language'], 
                $link_content,
                false
            );

        }

        // change url other
        foreach ($afi_change_urls as $key_afi_change_url => $afi_change_url) {     

            $afi_change_url_regex = preg_quote($afi_change_url, '/');

            preg_match_all ( 
                '/<a(.|\n)*?href=[\"\']((https:\/\/|http:\/\/)(www\.)?' . $afi_change_url_regex . '\/(.*?))[\"\'](.|\n)*?<\/a>/', 
                $new_content,
                $change_url_other
            );

            write_log('$change_url_other');
            write_log($change_url_other);

            foreach ($change_url_other[2] as $key_link_content => $link_content) {
            
                $new_content = ger_content_with_updata_url(
                    $new_content, 
                    $post_language_info['lenguge_language'], 
                    $link_content,
                    true
                );
            }            
            
        }
        write_log('$get_post_without_update_like->ID');
        write_log($get_post_without_update_like->ID);
        write_log('$new_content');
        write_log($new_content);

        $update_post = array(
            'ID' => $get_post_without_update_like->ID,
            'post_content' => wp_kses_post($new_content),
        );




        wp_update_post($update_post, true);

    }   
	
    if (defined('DOING_AJAX') && DOING_AJAX){
        
        $continue = !empty($get_posts_without_update_like) ? true : false;

        $return_ajax = json_encode ([
            'continue' => $continue 
        ]);
        echo $return_ajax;        
        wp_die();
    }
}

function ger_content_with_updata_url($new_content, $change_language, $old_link_content, $is_redirect = false){


    $afi_amazon_id = get_option('afi_amazon_id');

    if($change_language ===  'en'){
        $url_resplase_amazon = 'https://www.amazon.com';
    }elseif($change_language ===  'es'){
        $url_resplase_amazon = 'https://www.amazon.es';
    }elseif($change_language ===  'fr'){
        $url_resplase_amazon = 'https://www.amazon.fr';
    }else{
        $url_resplase_amazon = 'https://www.amazon.com';
    }

    if($is_redirect){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $old_link_content,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        
        $html_amazon = curl_exec($curl);
        $info_amazon = curl_getinfo($curl);

        curl_close($curl);

        write_log('$info_amazon');
        write_log($info_amazon);
        write_log('$html_amazon');
        write_log($html_amazon);

        $old_link_amazon = $info_amazon['url'];


    }else{
        $old_link_amazon = $old_link_content;
    }

    $parse_url_amazon = parse_url($old_link_amazon);
    write_log('$old_link_content');
    write_log($old_link_content);

    // change tag/id afiliate

    if(!empty($parse_url_amazon['query'])){
        parse_str(html_entity_decode($parse_url_amazon['query']), $parameter_url_amazon);
    }
    $parameter_url_amazon['tag'] = $afi_amazon_id;

    if(!empty($parameter_url_amazon['keywords'])){
        write_log('$search 1');


        $search_amazon = $parameter_url_amazon['keywords'];
    }else if(
        preg_match( 
            '/^(https:\/\/|http:\/\/)(www\.)?amazon\.(.[^\/]*?)\/(.[^\/]*)\/dp[\/|?]/', 
            $old_link_amazon, 
            $path_amazon_title
        )
    ){
        write_log('$search 2');

        $search_amazon = str_replace('-', ' ', $path_amazon_title[4]);

    }



    if(   
        preg_match ( 
            '/^(https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?)$/', 
            $old_link_amazon
        )
    ){

        if(!empty($search_amazon)){

            write_log('$change 1');


            $parameter_resplase_amazon = array(
                'k' => $search_amazon,
                'tag' => $afi_amazon_id
            );

            $parameter_resplase_amazon = http_build_query($parameter_resplase_amazon);


            $new_content = str_replace($old_link_content, $url_resplase_amazon . '/s?' . $parameter_resplase_amazon, $new_content);

        }else if(
            preg_match ( 
                '/^(https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/s[\/|?]/', 
                $old_link_amazon
            )
        ){
            write_log('$change 2');

            $parameter_url_amazon = http_build_query($parameter_url_amazon);

            $new_content = str_replace($old_link_content, $url_resplase_amazon . $parse_url_amazon['path'] . '?' . $parameter_url_amazon, $new_content);
    
        }else{
            write_log('$change 3');

            $parameter_url_amazon = http_build_query($parameter_url_amazon);

            $new_content = str_replace($old_link_content, $parse_url_amazon['scheme'] . "://" . $parse_url_amazon['host'] . $parse_url_amazon['path'] . '?' . $parameter_url_amazon, $new_content);  
        }
    }

    write_log('$new_content');
    write_log($new_content);


    return $new_content;
}
