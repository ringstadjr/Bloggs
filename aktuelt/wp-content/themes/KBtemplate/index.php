<?php get_header(); ?>
	<script src="replaceUrl.js"></script>
	<?php require_once('../navbar.php'); ?>


	<!--******************************Inserting posts************************** -->

	<div class="container marketing article">      
		<div class="row main-content">
			<div class="col-md-8">
				<div class="content-body-kb">
					<div class="divider"></div>
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="postWrapper">
						<div class="postTitle"><?php the_title(); ?></div>	
						<div class="postTimestamp">Posted on <?php the_time('F jS, Y') ?></div>	
						<div class="postContent" 	><?php the_content(__('(more...)')); ?></div>

					</div>
					
					<!--<hr>-->
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	<!--******************************Page nav buttons************************** -->
					<div class="pageNavLink" >
						<div class='pageNavPrev'><?php previous_posts_link('« Nyere saker', 0); ?></div>
						<div class='pageNavNext'><?php next_posts_link('Eldre saker »', 0); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.container -->
		
<div id="delimiter"></div>
<?php require_once('../footer.php'); ?>

