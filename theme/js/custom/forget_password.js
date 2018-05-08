/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//File upload Js Start
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
//		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
//End


$(document).on("click", "#forget_password", function(e){
     var duration = 400;
     $('#supplier_login').toggle(duration);
     $('#buyer_login').hide();
     $('#forget_form').toggle(duration);
      e.preventDefault();
});

$(document).on("click", "#cancel_forget_password", function(e){
     var duration = 400;
     $('#supplier_login').toggle(duration);
     $('#buyer_login').show();
//     $('#forget_form').toggle(duration);
$('#forget_form').hide();
      e.preventDefault();
});


