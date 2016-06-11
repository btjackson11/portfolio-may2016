<section id="blog">
	<div class="row">
		<div class="col col-small--12 col-medium--8 col-medium-push--2 ">
<!-- 			<div class="centered"> -->
			
			<?php global $query_string; // required
			$posts = query_posts($query_string.'&order=DSC&orderby=date'); // exclude category 9 ?>
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); // This is where the WordPress Loop starts ?>
	
			<article class="float-left col col-small--12">
				<h3 class="header-type-bold text--left text--uppercase color--white">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="color--white"><?php the_title(); ?></a>
				</h3>
				<div class="row">
					<p class="post-date header-type-book text--left text--uppercase color--white"><?php the_date(); ?></p>
				</div>
				
				<?php the_excerpt(); // This gets the post content, making sense yet? ?>
	
			</article>
	
			<?php endwhile; endif; // This is where the WordPress Loop ends ?>
<!-- 			</div> -->
		</div>
	</div>
</section>