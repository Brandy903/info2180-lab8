


window.onload = function(){
   getidentity();
    
}

function getidentity(){
    $('lookup').observe('click', function(){ 
	var term = $("term").getValue(); 
     new Ajax.Request("world.php", {
               method : 'get',
			   parameters : {lookup : term},
               onSuccess: function(transport) {
                var response = transport.responseText || 
                "no response text";
                   $('result').update(response);
                   alert("Success!")
              },
              onFailure: function() { alert('An error has occur..'); }         
     }); 
   });

}

// new Ajax.Request('/some_url', {
//   method:'get',
//   onSuccess: function(transport) {
//     var response = transport.responseText || "no response text";
//     alert("Success! \n\n" + response);
//   },
//   onFailure: function() { alert('Something went wrong...'); }
// });