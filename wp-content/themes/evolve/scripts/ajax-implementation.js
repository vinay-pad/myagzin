
jQuery('#newCustomerForm').submit(ajaxSubmit);

function ajaxSubmit(){
 alert('sw');
var newCustomerForm = jQuery(this).serialize();
 
jQuery.ajax({
type:"POST",
url: "http://vinpad.us/wp/wp-admin/admin-ajax.php",
data: newCustomerForm,
success:function(data){
jQuery("#feedback").html(data);
}
});
 
return false;
}
