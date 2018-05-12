/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
HOME_URL = '/';
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        } 
});


$(document).on("click", "#update_password", function () {
//   alert("register") ;
//   return false;
    var id = $('#user_id').val();
     var password_input = $('#password_field').val();
    $.ajax({
        url: '/update_password/'+id,
        type: 'POST',
        data: {id:id, password: password_input
        },
        success: function (data) {
//                alert(JSON.stringify(data));
            if (data.error) {
                alert('error');
                return false;
            } else {
                alert(data.message);
                return false;
            }
        }
    });
    return false;
});