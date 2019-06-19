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
     
     
     
  