<?php if (empty($content)): ?>
	<div><?php $language->p('No pages found')?></div>
<?php endif ?>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>
<div class="site-content">
    <div class="content-area">
        
        <article class="hentry">
            <header class="entry-header">
                <h1 class="entry-title"><?php echo $site->slogan() ?></h1>
            </header>
            <div class="entry-content">
                <p><?php echo $site->description() ?></p>
            </div>
        </article>
        
        <div class="portfolio-grid portfolio-grid-col-3">
            <?php foreach ($content as $page): ?>
            <!-- Post -->
            <article class="project portfolio has-post-thumbnail hentry">
                <?php // random pastel color if no cover image
                $background_colors = array('#b4dbb5', '#93c9d8', '#e7abe2', '#fbbc88', '#eaeeac', '#ff9292','#f2ee97', '#afe5ad', '#83b8f4', '#ecb3d2', '#a4b6dd', '#d09292', '#c094cc', '#a2d0c0', '#c37892');
                $rand_background = $background_colors[array_rand($background_colors)];?>
                <a class="project-thumbnail" href="<?php echo $page->permalink(); ?>" <?php if (!$page->coverImage()):?>style="background-color:<?php echo $rand_background; ?>;"<?php endif ?>>
                    <?php if ($page->coverImage()): ?>
                    <img width="480" height="480" alt="<?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" sizes="(max-width: 480px) 100vw, 480px">
                    <?php endif ?>
                </a>
                <header class="project-header">
                    <h2 class="project-title">
                        <a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
                    </h2>
                    <div class="project-categories">
                        <a><?php echo $page->description(); ?></a>
                    </div>
                </header>
            </article>
            <?php endforeach ?>
        </div>
        
    </div>
</div>
<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="pagination" role="navigation">
    
    <span class="text-left <?php if (!Paginator::showPrev()) echo 'hidden' ?>">
        <a class="newer-posts" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
    </span>
    
    <span class="page-number faded">Page <?php echo $currentPage?> of <?php echo $numberOfPages ?></span>
    
    <span class="text-right <?php if (!Paginator::showNext()) echo 'hidden' ?>">
        <a class="older-posts" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
    </span>
    
</nav>
<?php endif ?>
