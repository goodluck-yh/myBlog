/**
 * 该页是face.php的javascript
 */
 
 window.onload=function(){
 	var face=document.getElementsByTagName("img");
 	for(var i=0;i<face.length;i++){
 		face[i].onclick=function(){
 			return_value(this.src);
 		};
 	}
 };
 
 
 var return_value = function(src){
 	var parent_face=opener.document.getElementById('face');
 	parent_face.src=src;
 	window.close();
 };