function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
       alert("Use Numerical keys  only.");
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function lettersOnly(evt) {
    
  var theEvent = evt || window.event;
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          alert("Enter Alphabets only");
          theEvent.returnValue = false;
         if(theEvent.preventDefault) theEvent.preventDefault();
         return false;
       }
     }
     
     
     function ValidateEmail(mail)   
{  
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))  
  {  
    return (true)  
  }  
    alert("You have entered an invalid email address!")  
    return (false)  
}  
     
     
     
     
     $('#quantity').change(function(){
  var qty = $('#quantity').val();
  var price = $('#productPrice').val();
  var total = price * qty;
  $("#totalprice").val(total);
});
  