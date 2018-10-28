function upvote(clicked_id) {
   var elementone = document.getElementById(clicked_id).childNodes[1];
   var elementtwo = document.getElementById(clicked_id).childNodes[3];

   elementone.classList.toggle("new-upvote");
   
   if(elementtwo.classList.contains("new-downvote") == true )
   	{
   		elementtwo.classList.toggle("new-downvote");
   	}
}
function downvote(clicked_id) {
   var elementone = document.getElementById(clicked_id).childNodes[1];
   var elementtwo = document.getElementById(clicked_id).childNodes[3];

   elementtwo.classList.toggle("new-downvote");
	   
   if(elementone.classList.contains("new-upvote") == true )
   	{
   		elementone.classList.toggle("new-upvote");
   	}
}
