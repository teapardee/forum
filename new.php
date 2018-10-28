<?php
	include_once 'header.php';
?>	   
<script src="togglevote.js"></script>

<div class="new-grid">
	<div class="new-header">
		<p id="headerformatcenter"></p>
		<p id="headerformatleft"></p>
	</div>
	<div class="new-post-container">
		<div class="new-post">
			<div id="one" class="new-vote-cell">
				<div onclick="upvote(this.parentNode.id)" class="new-vote-up"></div>
				<div onclick="downvote(this.parentNode.id)" class="new-vote-down"></div>
			</div>
			<div class="new-post-cell">
				<div class="new-org">FACEBOOK</div>
				<div class="new-cat">TIMELINE</div>
				<div class="new-post-writing">This is a test post to see how things line up and shit like dat.</div>
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
				<div class="new-post-writing">This is a test post to see how things line up and shit like dat.</div>
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


