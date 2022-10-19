jQuery( function( $ ) {

	$(document.body).on('click','.afi-active-updata-config',function(e){
        e.preventDefault();

        var form_config = $(".afi-form-updata-config").serializeObject();

        var data_ajax = Object.assign(form_config,{
            action : 'ajax_amazon_like_update_date_save',
        });
        

        $.ajax({
            url : url_vars.ajax_url,
            type: 'post',
            data: data_ajax,
            beforeSend: function(){
                
                $('.afi-info-updata-config').html('Guardando...');
        
            },
            success: function(resultado){
                        
                $('.afi-info-updata-config').html('Guardo');
        
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('.afi-info-updata-config').html('Error');
            }			
        });
        
	});

    /**
     * Link update Amazon
     */

    const limit_link_update = 1;
    var new_update = 0;
    var number_success = 0;
    var is_form_update_offset = false;

	$(document.body).on('click','.afi-active-link-update',function(e){
        e.preventDefault();

        afi_form_link_update_list(Math.floor($('#offset').val()));
        
	});

    function afi_form_link_update_list(offset) {

        new_update = new_update + limit_link_update;

        for (let index = 0; index < limit_link_update; index++) {

            afi_form_link_update(offset)

            offset += 1;

        }

    }

    async function afi_form_link_update(offset){

        var data_ajax = {
            action : 'ajax_update_post_without_update_like',
            offset : offset,
            limit : 1
        };
        
        
        $.ajax({
            url : url_vars.ajax_url,
            type: 'post',
            data: data_ajax,
            beforeSend: function(){

            },
            success: function(resultado){
                var resultado = JSON.parse(resultado);

                if(resultado.continue){
                    number_success += 1;
                    console.log("entro");

                    if(new_update === number_success){
                        afi_form_link_update_list(number_success)
                    }
            
                    $('.afi-info-link-update').html(number_success);
                }else{
                    if(!is_form_update_offset){
                        offset_form_link_update();
                    }

                    $('.afi-info-link-update').html('proceso terminado');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('.afi-info-link-update').html('Error');
            }
        });
    }

    function offset_form_link_update(){

        var data_ajax = {
            action : 'ajax_set_offset_form_link',
            update_offset : number_success
        };

        $.ajax({
            url : url_vars.ajax_url,
            type: 'post',
            data: data_ajax,
            beforeSend: function(){
        
            },
            success: function(resultado){

                is_form_update_offset = true;

            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('.afi-info-link-update').html(xhr);
            }
        });
    }
    

} );
