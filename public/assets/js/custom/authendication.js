/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$.ajaxSetup({
   headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 
});

$(document).on("click", "#login_supplier", function(){
//    alert("login");
//    exit;
        var supplier_name = $('#supplier_name').val();
        var supplier_password = $('#supplier_password').val();
        
        var login_data = new FormData();
        login_data.append('supplier_name', supplier_name);
        login_data.append('supplier_password', supplier_password);
        
        $.ajax({
            url: '/check_login',
            type: 'POST',
            dataType: 'JSON',
            data: login_data,
            processData: false,
            contentType: false,
            success:function(data){
                if(data.error){
                    error_msg(data.message);
                    return false;
                }else{
                    success_msg(data.message);
//                    window.location.href="/add_post";
                    return false;
                }
            }
        });
});

function error_msg(msg){
    $.notify({
	title: '<strong>'+ msg +'</strong>',
        message:""
},{
	type: 'danger'
});
}

function success_msg(msg){
   $.notify({
	title: '<strong>'+ msg +'</strong>',
        message: ""
},{
	type: 'success'
});
}