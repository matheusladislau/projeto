jQuery(document).ready(function($) {
    $.ajax({
        method: "GET",
        url: BASE_URL+"config",
        success : function(data){                
            data = jQuery.parseJSON(data)   
           
            var modulos = ""
            var n1 = data['modulos'].length
            
            for (var i = 0; i < n1; i++){
                modulos += "<div class='col-lg-6 text-center margin20'> <i class='"+data['modulos'][i]['icone']+" fa-3x margin10'></i> <p><b>"+data['modulos'][i]['nome']+"</b> <br> <small>"+data['modulos'][i]['descricao']+"</small> </p> <div class='form-group form-check'><input type='checkbox' name='modulos[]' value='"+data['modulos'][i]['id_modulo']+"' id='modulos"+data['modulos'][i]['id_modulo']+"' class='form-check-input-modulo'> <label for='modulos"+data['modulos'][i]['id_modulo']+"'  class='form-check-input-modulo'>VER OS MÓDULOS</label></div></div>";
            }
           
            $("#modulos").html(modulos);
           
            var sub_modulos = ""
            var n2 = data['sub_modulos'].length
            for (var i = 0; i < n2; i++){
                sub_modulos += "<div class='col-lg-3 text-center margin20 hidden mostrar"+data['sub_modulos'][i]['id_modulo']+"'> <i class='"+data['sub_modulos'][i]['icone']+" fa-3x margin10'></i> <p><b>"+data['sub_modulos'][i]['nome']+"</b> <br> <small>"+data['sub_modulos'][i]['descricao']+"</small> </p> <div class='form-group form-check'><input type='checkbox' name='sub_modulos[]' value='"+data['sub_modulos'][i]['id_sub_modulo']+"' id='sub_modulos"+data['sub_modulos'][i]['id_sub_modulo']+"' class='form-check-input submodulos'> <label for='sub_modulos"+data['sub_modulos'][i]['id_sub_modulo']+"'  class='form-check-label submodulos'>QUERO ESTE</label></div> </div>"
            }                
           
           $("#modulos").append(sub_modulos)  
           
           $(".submodulos").click(function(){  
                   var modulo = $(this).val();
                   alert(modulo);
              
                   if(modulo==1) {
                      if($('#sub_modulos'+modulo).is(':checked')){                         
                        $('#sub_modulos4').attr('checked', true);                          
                      }else{
                         
                      }
                  }
                   if(modulo==8) {
                      if($('#sub_modulos'+modulo).is(':checked')){                         
                        $('#sub_modulos2').attr('checked', true);                          
                      }else{
                         
                      }
                  }
                   if(modulo==12) {
                      if($('#sub_modulos'+modulo).is(':checked')){                         
                        $('#sub_modulos4').attr('checked', true);                          
                        $('#sub_modulos2').attr('checked', true);
                      }else{
                         
                      }
                  }
                   if(modulo==16) {
                      if($('#sub_modulos'+modulo).is(':checked')){                         
                        $('#sub_modulos7').attr('checked', true);                          
                        $('#sub_modulos5').attr('checked', true);
                      }else{
                         
                      }
                  }
                   
                   
            });
           
           $(".form-check-input-modulo").click(function(){
              var modulo = $(this).val();
               if($(this).is(":checked") == true) {
                  $(".mostrar"+modulo).fadeIn();
               }else {
                  $(".mostrar"+modulo).fadeOut();
               }
            });
        }
    });




    $(".nextStage").click(function(e){
        e.preventDefault()
        var next = $(this).data("next");
        
        $(".tab-pane").removeClass("show active");
        $(".nav-link").removeClass("show active"); 

        showLoader($('.client_loader_gif'), $('.client-tab'));
        $(this).attr('disabled', 'disabled');

        $.ajax({
            method: "POST",
            url: BASE_URL+"config/create",
            data: jQuery("#formulario").serialize(),
            success : function(data){ 
                var res = JSON.parse(data);
                if (res.status == 200) {
                    $("#"+next).addClass("show active");
                    $("#"+next+"-tab").addClass("show active");
                    hideLoader($('.client_loader_gif'), $('.client-tab'));
                    $(this).removeAttr('disabled');
                } else {
                    res.errors
                }
            }
        })    

    });

    let showLoader = function(loader, content) {
        $(loader).show();
        $(content).hide();
    }

    let hideLoader = function(loader, content) {
        $(loader).hide();
        $(content).show();
    }

    $("#finalizar").click(function(){
    
    
    })
});