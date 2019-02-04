<header class="site-header" role="banner">
    <div class="wrap">
        
    <div class="site-branding">
        <p class="site-title">
            <a href="<?php echo Theme::siteUrl() ?>"><span><?php echo $site->title() ?></span></a>
        </p>
    </div>
        
    <button id="site-navigation-toggle" class="menu-toggle">
        <span class="menu-toggle-icon"></span>Menu
    </button>
        
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <div class="menu-social-container">
            <ul id="primary-menu" class="menu menu-social" aria-expanded="false">
                <!-- Static pages -->
                <?php foreach ($staticContent as $staticPage): ?><li>
                    <a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
                </li>
                <?php endforeach ?>
                    
    <!-- Social Networks -->
    <?php foreach (Theme::socialNetworks() as $key=>$label): ?><li>
        <a target="_blank" href="<?php echo $site->{$key}(); ?>"><?php echo $label ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
    </div>
    </nav>
                
    </div>
</header>