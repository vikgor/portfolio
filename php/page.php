<div>

	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<div>
        <!-- Title -->
        <article class="hentry">
            <header>
                <h1><?php echo $page->title(); ?></h1>
            </header>
            <div><!-- Shows the page category. Delete the <div> if not needed -->
                <p><?php
            if ($page->category()) {
                echo $L->get('Category').': <a href="'.DOMAIN_CATEGORIES.$page->categoryKey().'">'.$page->category().'</a> ';
            };
            ?></p>
            </div>
        </article>
        
        
        <!-- Cover image -->   
        <?php if ($page->coverImage()): ?>
        <img class="alignright" src="<?php echo $page->coverImage(); ?>">
        <?php endif ?>
        
		<!-- Full content -->
		<?php echo $page->content(); ?>
	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>
