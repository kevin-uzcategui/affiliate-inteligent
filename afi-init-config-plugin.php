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


add_action( 'wp_footer', "affidiate" );

function affidiate(){

        ?>
            <!-- <script>window._epn = {campaign: 5338796121, smartPopover:false};</script>
            <script src="https://epnt.ebay.com/static/epn-smart-tools.js"></script> -->

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

                var img_width = jQuery('.content-product__product-ing').innerWidth();
                jQuery('.content-product__product-ing').css('height', img_width);

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

    $afi_ebay_id = get_option('afi_ebay_id');


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
            <label for="ebay-id">Id Ebay</label>
            <input value="<?php echo $afi_ebay_id ?>" name="ebay_id" id="ebay-id" type="text">
        </div>        
        <div>
            <label for="change-url">URLs a cambiar amazon</label>
            <input value="<?php echo $afi_change_urls_amazon ?>" name="change_urls_amazon" id="change-urls-amazon" type="text">
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
        <div>
            <label for="is-change-url-direct">Is change url direct</label>
            <input value="true" name="is_change_url_direct" id="is-change-url-direct" type="text">
        </div>   
        
        <button class="afi-active-link-update">Activar Amazon</button>
        <button class="afi-active-link-update-ebay">Activar Ebay</button>
        <div class="afi-info-link-update"></div>
        <div class="afi-error-link-update"></div>
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

    /* ebay id */
    $ebay_id = stripslashes($_POST['ebay_id']);

    update_option('afi_ebay_id', $ebay_id);    

    /* change urls */
    $change_urls_amazon = stripslashes($_POST['change_urls_amazon']);

    $array_change_urls_amazon = explode(',', $change_urls_amazon);

    update_option('afi_amazon_change_urls', $array_change_urls_amazon);

}


add_action('wp_ajax_nopriv_ajax_update_post_without_update_like','update_post_without_update_like'); // permitre que funcion para usurios registrados
add_action('wp_ajax_ajax_update_post_without_update_like','update_post_without_update_like'); 

function update_post_without_update_like($id_post = null, $update_type = ""){    
    global $wpdb;

    $afi_amazon_change_urls = get_option('afi_amazon_change_urls', array());

    if(!empty($id_post)){

        $is_change_url_direct = true;        

        $sql_posts_without_update_like = "SELECT ID, post_content FROM `{$wpdb->prefix}posts` WHERE ID = $id_post";

        $get_posts_without_update_like = $wpdb->get_results($sql_posts_without_update_like);
    }else{
        $offset = absint($_POST['offset']);
        $limit = absint($_POST['limit']);
        $is_change_url_direct = $_POST['is_change_url_direct'];
        $update_type = $_POST['update_type'];

        if($update_type === 'amazon'){
            // get post with like amazon
            $where_search = "`post_content` REGEXP '(https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?)'";

            foreach ($afi_amazon_change_urls as $key_afi_change_url => $afi_change_url) {
                
                $afi_change_url = str_replace('\'', '\\\'', $afi_change_url);
    
                $where_search .= " OR `post_content` LIKE '%$afi_change_url%'";
    
            }
                    
            $sql_posts_without_update_like = "SELECT ID, post_content FROM `{$wpdb->prefix}posts` WHERE ($where_search) AND `post_status` LIKE 'publish' LIMIT $limit OFFSET $offset";
    
            $get_posts_without_update_like = $wpdb->get_results($sql_posts_without_update_like);            
        }elseif($update_type === 'ebay'){
            // get post with like ebay
            $where_search = "`post_content` REGEXP '(https:\/\/|http:\/\/)(www\.)?ebay\.(.*?)\/(.*?)'";
                    
            $sql_posts_without_update_like = "SELECT ID, post_content FROM `{$wpdb->prefix}posts` WHERE ($where_search) AND `post_status` LIKE 'publish' LIMIT $limit OFFSET $offset";
    
            $get_posts_without_update_like = $wpdb->get_results($sql_posts_without_update_like);        
        }


    }



    foreach ($get_posts_without_update_like as $get_post_without_update_like) {
        // get data post
        $new_content = $get_post_without_update_like->post_content;

        $web_import_language = get_post_meta( $get_post_without_update_like->ID, 'web_import_language' )[0];

        $post_slug_language = pll_get_post_language( $get_post_without_update_like->ID );

        $post_language_info = get_info_by_slug($post_slug_language);

        // init update post without update like
        // change url amazon/ebay
        if(filter_var($is_change_url_direct, FILTER_VALIDATE_BOOLEAN)){

            if($update_type === 'amazon'){
                preg_match_all ( 
                    '/<a(.|\n)*?href=[\"\']((https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?))[\"\'](.|\n)*?<\/a>/', 
                    $new_content, 
                    $change_url
                );
            
                foreach ($change_url[2] as $key_link_content => $link_content) {

                    $new_content = ger_content_with_updata_url_amazon(
                        $new_content, 
                        $post_language_info['lenguge_language'], 
                        $link_content,
                        $web_import_language,
                        false
                    );
              
                }

            }elseif($update_type === 'ebay'){
                preg_match_all ( 
                    '/<a(.|\n)*?href=[\"\']((https:\/\/|http:\/\/)(www\.)?ebay\.(.*?)\/(.*?))[\"\'](.|\n)*?<\/a>/', 
                    $new_content, 
                    $change_url
                );

                foreach ($change_url[2] as $key_link_content => $link_content) {

                    $new_content = ger_content_with_updata_url_ebay(
                        $new_content, 
                        $link_content
                    );
              
                }                
            }
            $update_post = array(
                'ID' => $get_post_without_update_like->ID,
                'post_content' => wp_kses_post($new_content),
            );
    
            wp_update_post($update_post, true);

        }
        // change url other
        if($update_type === 'amazon'){
            foreach ($afi_amazon_change_urls as $key_afi_change_url => $afi_change_url) {     

                $afi_change_url_regex = preg_quote($afi_change_url, '/');

                preg_match_all ( 
                    '/<a(.|\n)*?href=[\"\']((https:\/\/|http:\/\/)(www\.)?' . $afi_change_url_regex . '\/(.*?))[\"\'](.|\n)*?<\/a>/', 
                    $new_content,
                    $change_url_other
                );

                foreach ($change_url_other[2] as $key_link_content => $link_content) {

                    $new_content = ger_content_with_updata_url_amazon(
                        $new_content, 
                        $post_language_info['lenguge_language'], 
                        $link_content,
                        $web_import_language,
                        true
                    );

                    if (
                        defined('DOING_AJAX') 
                        && DOING_AJAX
                        && $key_link_content === 2
                    ){                    
                            
                        $return_ajax = json_encode ([
                            'continue' => true,
                            'nex_post' => false
                        ]);
                        echo $return_ajax;        
                        wp_die();

                    }

    

                }            
                
            }
        }

    }   

    // update post
    $update_post = array(
        'ID' => $get_post_without_update_like->ID,
        'post_content' => wp_kses_post($new_content),
    );

    wp_update_post($update_post, true);  

    // return ajax
    if (defined('DOING_AJAX') && DOING_AJAX){
        
        $nex_post = false;

        if(
            empty($change_url[2])
            && empty($change_url_other[2])
        ){
            $nex_post = true;
        }


        $continue = !empty($get_posts_without_update_like) ? true : false;

        $return_ajax = json_encode ([
            'continue' => $continue,
            'nex_post' => $nex_post
        ]);
        echo $return_ajax;        
        wp_die();
    }
}

function ger_content_with_updata_url_amazon($new_content, $change_language, $old_link_content, $web_import_language, $is_redirect = false){

    $error_update_url = true;

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
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        
        curl_exec($curl);
        $info_amazon = curl_getinfo($curl);
        
        curl_close($curl);
        
        $old_link_amazon = $info_amazon['url'];

        if($old_link_amazon === $old_link_content){
            sleep(10);

            ger_content_with_updata_url_amazon($new_content, $change_language, $old_link_content, $web_import_language, $is_redirect);
        }


    }else{
        $old_link_amazon = $old_link_content;
    }

    $parse_url_amazon = parse_url($old_link_amazon);

    // change tag/id afiliate

    if(!empty($parse_url_amazon['query'])){
        parse_str(html_entity_decode($parse_url_amazon['query']), $parameter_url_amazon);
    }
  
    $parameter_url_amazon['tag'] = $afi_amazon_id;

    // change keywords
    if(
        preg_match( 
            '/^(https:\/\/|http:\/\/)(www\.)?amazon\.(.[^\/]*?)\/(.[^\/]*)\/dp[\/|?]/', 
            $old_link_amazon, 
            $path_amazon_title
        ) && empty($parameter_url_amazon['keywords'])
    ){

        $parameter_url_amazon['keywords'] = str_replace('-', ' ', urldecode($path_amazon_title[4]));

    }elseif(!empty($parameter_url_amazon['k'])){
        $parameter_url_amazon['keywords'] = $parameter_url_amazon['k'];
    }
    
    if(is_plugin_active('importe-automatico/init-config-plugin.php')){
        $parameter_url_amazon['keywords'] = text_of_translate($parameter_url_amazon['keywords'], $web_import_language, $change_language);    
    }

    write_log('$parameter_url_amazon[keywords]');
    write_log($parameter_url_amazon['keywords']);
    // change url
    if(   
        preg_match ( 
            '/^(https:\/\/|http:\/\/)(www\.)?amazon\.(.*?)\/(.*?)$/', 
            $old_link_amazon
        )
    ){

        if(!empty($parameter_url_amazon['keywords'])){

            $parameter_resplase_amazon = array(
                'k' => $parameter_url_amazon['keywords'],
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

            $parameter_url_amazon = http_build_query($parameter_url_amazon);

            $new_content = str_replace($old_link_content, $url_resplase_amazon . $parse_url_amazon['path'] . '?' . $parameter_url_amazon, $new_content);
    
        }else{

            $parameter_url_amazon = http_build_query($parameter_url_amazon);

            $new_content = str_replace($old_link_content, $parse_url_amazon['scheme'] . "://" . $parse_url_amazon['host'] . $parse_url_amazon['path'] . '?' . $parameter_url_amazon, $new_content);  
        }
    }else{
        $new_content = str_replace($old_link_content, $old_link_amazon, $new_content);
    }

    return $new_content;
}


function ger_content_with_updata_url_ebay($new_content, $old_link_content){

    $afi_ebay_id = get_option('afi_ebay_id');

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $old_link_content,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    
    curl_exec($curl);
    $info_ebay = curl_getinfo($curl);

    curl_close($curl);

    $parse_url_ebay = parse_url(htmlspecialchars_decode($info_ebay['url']));

    if(isset($parse_url_ebay['query'])){

        parse_str($parse_url_ebay['query'], $params);

        if(isset($params['campid'])){
    
            $new_query = preg_replace(
                '/^(.*?)campid=\d*(.*?)$/', 
                '$1campid=' .$afi_ebay_id . '$2', 
                $parse_url_ebay['query'], 
                -1
            );           

            $url_with_new_id = 'https://' . $parse_url_ebay['host'] . $parse_url_ebay['path'] .'?' . $new_query;
    
        }else{
            $url_with_new_id = $info_ebay['url'] . "&campid=" . $afi_ebay_id;
        }
    }else{
        $url_with_new_id = 'https://' . $parse_url_ebay['host'] . $parse_url_ebay['path'] . "?campid=" . $afi_ebay_id;
    }

    $new_content = str_replace("\"$old_link_content\"", $url_with_new_id, $new_content);

    return $new_content;

}