function send() {  
  name =  document.forms["first"].elements["name"].value ;    
  mess =  document.forms["first"].elements["mess"].value ;  
  $.post( "submit.php",  { name,mess,}, 
   function( data ) { $( ".show_rezult" ).html(data); }
  );
  return false;
}