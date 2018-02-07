function autocomplet() {
var min_length = 0; // min caracters to display the autocomplete
var keyword = $('#city_id').val();
if (keyword.length >= min_length) {
$.ajax({
url: 'ajax_refresh.php',
type: 'POST',
data: {keyword:keyword},
success:function(data){
$('#country_list_id').show();
$('#country_list_id').html(data);
}
});
} else {
$('#country_list_id').hide();
}
}
 