<div class="comment">
	<img src="assets/images/anonymous.jpg">
	<div class="comment_author"><?php echo $author;?></div>
	<div class="comment_datetime"><?php echo $datetime;?></div>
	<div class="comment_comment"><?php echo $comment;?></div>
	<div class="comment_reply_wrapper">
		<a class="btn btn-info comment_reply" onclick="comment_form(<?php echo $comment_id;?>);">Reply</a>
	</div>
	<div class="comment_children" id="comment_children_<?php echo $comment_id;?>">
		<?php echo $children;?>
	</div>
</div>
