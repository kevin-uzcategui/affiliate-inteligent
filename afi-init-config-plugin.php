<?php
/*
Plugin Name:  Affiliate Import
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Affiliate Import
Version:      1
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  afi
Domain Path:  /languages
*/

add_action( 'wp_head', "affidiate" );

function affidiate(){
    ?>
    <script>window._epn = {campaign: 5338796121};</script>
    <script src="https://epnt.ebay.com/static/epn-smart-tools.js"></script>
    <?php

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

