<div>

	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<div>
        <!-- Title -->
		<a href="<?php echo $page->permalink(); ?>">
            <h1><?php echo $page->title(); ?></h1>
		</a>
        
        <!-- Cover image -->   
        <?php if ($page->coverImage()): ?>
        <img class="alignleft" src="<?php echo $page->coverImage(); ?>">
        <?php endif ?>
        
		<!-- Full content -->
		<?php echo $page->content(); ?>
	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>