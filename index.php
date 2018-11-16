<?php
	include_once 'header.php';
?>	

<!--
<div class="home-collapse-button"></div>
<div class="home-mastgrid">		
	<p class="home-title">CONSUMER DRIVEN CONSULTING</p>
		
		<ul id="home-subtitle-one">
				<li> [ RECOMMEND ] </li> 
				<li> [ DISCUSS ] </li> 
				<li> [ IMPLEMENT ] </li> 
				<li> [ CONSUME ] </li>	
		</ul>	 
		<ul id="home-subtitle-two">
				<li> Submit your feedback, ideas or recommendations. </li>
				<li> Discuss and develop your ideas with fellow consumers. </li>
				<li> Work directly with orgs to get your ideas implementated . </li>
				<li> Consume the products & services you helped tailor. </li>
		</ul>	

	<div id="home-video-thumbnail"></div>
	<div class="home-nav">
			<a class="home-navlink">Organizations</a>
			<a class="home-navlink">Categories</a>
			<a class="home-navlink">Sub-categories</a>

	</div>


<script>

var coll = document.getElementsByClassName("home-collapse-button");
console.log(coll);
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "none") {
      content.style.display = "grid";
    } else {
      content.style.display = "none";
    }
  });
}

</script>

-->

</div>



<script src="togglevote.js"></script>

<div class="new-grid">

	<div id=background-color></div>
		<div class="new-post-container">
			<div class="new-post">
				<div id="one" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">FACEBOOK</div>
					<div class="new-cat">TIMELINE</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>TeaPardee</strong>&nbsp;2 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>Slayer1993</strong>&nbsp;30 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>
			<div class="new-post">
				<div id="two" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">NIKE</div>
					<div class="new-cat">SHOE DESIGN</div>
					<div class="new-cat">ROSHE</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>Gommli</strong>&nbsp;8 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>GucciMane</strong>&nbsp;2 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>
			<div class="new-post">
				<div id="two" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">SOMERVILLE, MA</div>
					<div class="new-cat">MUNICIPALITY</div>
					<div class="new-cat">EDUCATION</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>Gommli</strong>&nbsp;8 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>GucciMane</strong>&nbsp;2 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>
			<div class="new-post">
				<div id="two" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">EA GAMES</div>
					<div class="new-cat">BATTLEFRONT</div>
					<div class="new-cat">PAY 2 PLAY</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>Gommli</strong>&nbsp;8 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>GucciMane</strong>&nbsp;2 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>
			<div class="new-post">
				<div id="two" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">JAGEX</div>
					<div class="new-cat">RUNESCAPE</div>
					<div class="new-cat">VANILLA</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>Gommli</strong>&nbsp;8 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>GucciMane</strong>&nbsp;2 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>
			<div class="new-post">
				<div id="two" class="new-vote-cell">
					<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
					<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
				</div>
				<div class="new-post-cell">
					<div class="new-org">EPIC GAMES</div>
					<div class="new-cat">FORTNITE</div>
					<div class="new-cat">UPDATE 3.4</div>
					<div class="new-post-writing">This is a test post to see how things line up.</div>
				</div>
					<div class="new-poster-cell">
						<div class="userformat"><strong>OP</strong>&nbsp;by&nbsp;<strong>Gommli</strong>&nbsp;8 hours ago</div>
						<div class="timeformat"><strong>LP</strong>&nbsp;by&nbsp;<strong>GucciMane</strong>&nbsp;2 mins ago</div>
						<a href="index.php" class="new-buttons-1 new-comment-1">COMMENT</a>
						<a href="index.php" class="new-buttons-1 new-share-1">SHARE</a>
						<a href="index.php" class="new-buttons-1 new-save-1">SAVE</a>
					</div>
			</div>		
		</div>
</div>		

<?php
	include_once 'footer.php';
?>	


