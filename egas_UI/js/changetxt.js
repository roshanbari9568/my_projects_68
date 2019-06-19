$('#quantity').change(function(){
  var qty = $('#quantity').val();
  var price = $('#productPrice').val();
  var total = price * qty;
  $("#totalprice").val(total);
});