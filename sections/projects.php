<section id="projects" class="position--relative width--100vw">
	<div class="row">
		<div class="col col-small--12">
			<?php
				// LOOP PROJECTS CUSTOM POST TYPE 
				$args = array( 'post_type' => 'projects', 'posts_per_page' => 12 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

				// DISPLAY BACKGROUND IMAGE
				$image = get_field('project_thumbnail');
				if( !empty($image) ): 							
			?>
					<a href="<?php the_permalink(); ?>">
						<section id="<?php echo the_title(); ?>" class="thumbnail col col-small--12 col-large--6 col-xxlarge--3 position--relative overflow--hidden bg-position--centercenter bg-size--cover bg-repeat--norepeat" style="background-image: url('<?php echo $image['url']; ?>');">
								<div class="thumbnail-hover position--absolute width--full height--full">
									<div class="thumbnail-type position--absolute">
										<h2 class="text-header--bold text-xsu-header--large color--white"><?php the_title(); ?></h2>
										<p class="text-body--book text-xsu-body--medium color--white"><?php the_field('project_categories'); ?></p>
									</div>
								</div>
						</section>
					</a>
			<?php endif; endwhile; //CLOSE IF AND LOOP ?>
		</div>
	</div>
</section>