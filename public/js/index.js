$(document).ready(function(){

    $('.ajax_element').on('click',function(){
        var url = $(this).attr('url');
        var result_element_id = $(this).attr('result_element_id');
        console.log(url);
        console.log(result_element_id);
        $.ajax({
            url : url,
            type : "get",
            dataType:"text",
            data : {
            },
            success : function (result){
                //alert(result);
                console.log(result);
                $(result_element_id).html(JSON.parse(result));
            }
        });
    });

    $('.ajax_element_change').on('change',function(){
        var url = $(this).attr('url');
        var result_element_id = $(this).attr('result_element_id');
        var token = $(this).attr('token');
        var phone = $(this).val();
        console.log(url);
        console.log(result_element_id);
        console.log(phone);
        $.ajax({
            url : url,
            type : "post",
            dataType:"text",
            data : {
                _token:token,
                phone:phone
            },
            success : function (result){
                //alert(result);
                console.log(result);
                $(result_element_id).html(JSON.parse(result));
            }
        });
    });

    $(".db-click-detail").on('dblclick',function(){
        var url = $(this).attr('url');
        window.location.assign(url);
    });

    $(".db-click-detail-blank").on('dblclick',function(){
        var url = $(this).attr('url');
        window.open(url);
    });


});
