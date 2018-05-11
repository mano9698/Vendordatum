/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
HOME_URL = '/';
//$.ajaxSetup({
//    headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        } 
//});


$(document).on("click", "#update_password", function (e) {
     e.preventDefault();
//   alert("register") ;
//   return false;
//    var id = $('#user_id').val();
    var password = $('#password').val();
//    var new_password = $('#new_password').val();
//    var confirm_password = $('#confirm_password').val();
    
//    alert(password);
//    exit;
//    var update_password = new FormData();
//    
//    update_password.append('id', id);
//    update_password.append('password', password);
//    update_password.append('new_password', new_password);
//    update_password.append('confirm_password', confirm_password);

// alert(password);
//    exit;
    $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-type': 'application/x-www-form-urlencoded'
        } ,
        url: '/update_password',
        type: 'POST',
        dataType: 'JSON',
        data: {password: password},
        processData: false,
        contentType: false,
        success: function (data) {
                alert(JSON.stringify(data));
                console.log(id);
//            if (data.error) {
//                alert('error');
//                return false;
//            } else {
//                alert(data.message);
//                return false;
//            }
        }
    });
    return false;
});