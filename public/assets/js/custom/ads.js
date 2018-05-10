/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

$(document).on("click", "#add_posts", function () {
//   alert("register") ;
//   return false;
    var title = $('#title').val();
    var product_name = $('#product_name').val();
    var product_id = $('#product_id').val();
    var description = $('#description').val();
    var availability = $('#availability').val();
    var price = $('#price').val();
    var product_pic = $('#product_pic').val();
    var product_doc = $('#tg-photogallery').val();
//    alert(product_doc);
//    exit;
    var ads_data = new FormData();

    ads_data.append('title', title);
    ads_data.append('product_name', product_name);
    ads_data.append('product_id', product_id);
    ads_data.append('description', description);
    ads_data.append('availability', availability);
    ads_data.append('price', price);
    ads_data.append('product_pic', $('#product_pic')[0].files[0]);
    ads_data.append('product_doc', $('#tg-photogallery')[0].files[0]);

    $.ajax({
        url: '/store_post',
        type: 'POST',
        dataType: 'JSON',
        data: ads_data,
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


$(document).ready(function(){
//   alert('work');
//   exit;
    $('#search_product').autocomplete({
        source: function(request, response){
            $.ajax({
               url: '/ajax_product',
               dataType:'JSON',
               data:{
                   query:request.query
               },
               success: function(data){
                   response(data);
               }
            });
        }
    });
});

$('#detect_location').on('click', function() {
    $('#fetch_location').geolocate();
});

