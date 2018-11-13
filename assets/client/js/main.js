jQuery(document).ready(function($) {
    $.ajax({
        method: "GET",
        url: BASE_URL+"config",
        success : function(data){                
            data = jQuery.parseJSON(data)               
            var itens = ""
            var n = data['sub_modulos'].length
            for (var i = 0; i < n; i++){
                itens += "<div class='col-lg-3 text-center margin20'> <i class='"+data['sub_modulos'][i]['icone']+" fa-3x margin10'></i> <p><b>"+data['sub_modulos'][i]['nome']+"</b> <br> <small>"+data['sub_modulos'][i]['descricao']+"</small> </p> <div class='form-group form-check'><input type='checkbox' name='sub_modulos[]' value='"+data['sub_modulos'][i]['id_sub_modulo']+"' id='sub_modulos"+data['sub_modulos'][i]['id_sub_modulo']+"' class='form-check-input'> <label for='sub_modulos"+data['sub_modulos'][i]['id_sub_modulo']+"'  class='form-check-label'>QUERO ESTE</label></div> </div>"
            }                
            $("#modulos").html(itens)                
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