/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
HOME_URL = '/';

$(document).on("click", "#add_user", function () {
//   alert("register") ;
//   return false;
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var designation = $('#desgination').val();
    var mobile = $('#mobile').val();
    var alter_mobile = $('#alter_mobile').val();
    var company_name = $('#company_name').val();
    var company_location = $('#company_location').val();
    var products = $('#products').val();
    var industry = $('#industry').val();
    var business_name = $('#business_name').val();
    var job_title = $('#job_title').val();
    var contact_number = $('#contact_number').val();
    var cmpny_business_name = $('#cmpny_business_name').val();
    var file_img = $('#file_img').val();

    var register_data = new FormData();

    register_data.append('first_name', first_name);
    register_data.append('last_name', last_name);
    register_data.append('email_id', email);
    register_data.append('password', password);
    register_data.append('desgination', designation);
    register_data.append('mobile', mobile);
    register_data.append('alter_mobile', alter_mobile);
    register_data.append('company_name', company_name);
    register_data.append('company_location', company_location);
    register_data.append('products', products);
    register_data.append('industry', industry);
    register_data.append('business_name', business_name);
    register_data.append('job_title', job_title);
    register_data.append('contact_number', contact_number);
    register_data.append('cmpny_business_name', cmpny_business_name);
    register_data.append('file_img', $('#file_img')[0].files[0]);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/add_register',
        type: 'POST',
        dataType: 'JSON',
        data: register_data,
        processData: false,
        contentType: false,
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