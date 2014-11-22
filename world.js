


window.onload = function(){
  
   
   document.getElementById("controls").innerHTML+='<input type="checkbox" name="Country" value="Jamaica">';
   //getiden();
    getidentity();
    
}

function getidentity(){
    $('lookup').observe('click', function(){ 
	var term = $("term").getValue(); 
     new Ajax.Request("world.php", 
     {
               method : 'get',
			   parameters : {lookup : term},
               onSuccess: function(transport) {
                var response = transport.responseText || 
                "no response text";
                //alert(transport.responseText);
                   $('result').update(response);
                   alert("Success!")
                   
              },
              onFailure: function() { alert('An error has occur..'); }         
     }); 
   });

}


// function getiden(){
//     $('lookup').observe('click', function(){ 
// 	var term = $("term").getValue(); 
//      new Ajax.Request("world.php", {
//               method : 'get',
// 			   //parameters : {lookup : term},
//               onSuccess: function(transport) {
//                 var response = transport.responseText || 
//                 "no response text";
//                 alert(transport.responseText);
//                   $('result').update(response);
//                   alert("Success!")
                   
//               },
//               onFailure: function() { alert('An error has occur..'); }         
//      }); 
//   });

// }


