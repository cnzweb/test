<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="comments-alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h2 id="comments"><?php comments_number('No Responses', 'Responses', 'Responses' );?></h2>

	<div class="small">
		<?php if ('open' == $post-> ping_status) { ?><span class="trackbacklink"><a href="<?php trackback_url() ?>" title="Copy this URI to trackback this entry.">Trackback Address</a></span><?php } ?>
	</div>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<cite><?php comment_author_link() ?></cite> says:
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<br />

			<p class="small"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?><?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></p>

			<?php comment_text() ?>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h2 id="respond">Leave a Response</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
<ul> 
<?php else : ?>

<li><label for="author">Name <?php if ($req) echo "(required)"; ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>"  tabindex="100" />
</li>
<li>
<label for="email">Email (will not be published) <?php if ($req) echo "(required)"; ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"  tabindex="101" />
</li>
<li>
<label for="url">Website</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"  tabindex="103" />
</li>
<?php endif; ?>
<li>
<label for="comment">Comment</label>
<textarea name="comment" id="comment"tabindex="104"></textarea>
</li>
<li><input name="submit" type="submit" id="submit" tabindex="105" value="Submit Comment" /></li>

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>
</ul>
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
