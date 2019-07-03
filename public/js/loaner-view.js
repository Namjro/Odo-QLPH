$(document).ready(function(){
    var url = $('.ajax_element_contract_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_contract_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_repayment_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_repayment_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_call_log_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_call_log_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_location_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_location_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_phone_book_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_phone_book_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_history_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_history_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_loaner_detail_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_loaner_detail_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_viao_transaction_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_viao_transaction_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_lender_contract').attr('url');
    var result_element_id = $('.ajax_element_lender_contract').attr('result_element_id');
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
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('#content-section-lender').attr('url');
    var result_element_id = $('#content-section-lender').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_device_history_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_device_history_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_update_info_expertise_of_loaner').attr('url');
    var result_element_id = $('.ajax_element_update_info_expertise_of_loaner').attr('result_element_id');
    //console.log(url);
    //console.log(result_element_id);
    $.ajax({
        url : url,
        type : "get",
        dataType:"text",
        data : {
        },
        success : function (result){
            //alert(result);
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_tham_dinh').attr('url');
    var result_element_id = $('.ajax_element_tham_dinh').attr('result_element_id');
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
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});

$(document).ready(function(){
    var url = $('.ajax_element_loaner-with-the-same-name').attr('url');
    var result_element_id = $('.ajax_element_loaner-with-the-same-name').attr('result_element_id');
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
            //console.log(result);
            $(result_element_id).html(JSON.parse(result));
        }
    });
});
