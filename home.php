<html>
	<body>
		<?php if(have_posts()) :?>
			<div  style="background-color:red">
				<br>
				<?php while (have_posts()) : the_post();?>

					<div  style="background-color:green">
						<?php the_title();?><br>
							
						<a href="<?= get_permalink();?>">
							<?= get_the_title();?> <!-- Best Practice  To echo the returned functions-->
						</a>

						<div  style="background-color:yellow">
							<?php get_the_author();?>
							<?= the_author_meta('first_name');?>
						</div>
						<?php the_date('Y/m/d');?>
						<?php the_content('');?>
						<hr>
						<hr>
						<hr>
						<hr>
						<!-- <?= get_the_content();?> -->
					</div>
		<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</body>
</html>