<!doctype html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?></head><body <?php body_class(); ?>><?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="site-header"><nav class="container nav" aria-label="Main navigation">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/zaggregate-logo.svg'); ?>" alt="<?php bloginfo('name'); ?>"></a>
<button class="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="primary-navigation"><span aria-hidden="true">☰</span></button>
<div class="nav-links" id="primary-navigation">
  <ul class="menu">
    <li class="menu-item-has-children"><a href="<?php echo esc_url(home_url('/project-overview/')); ?>">Project</a><button class="submenu-toggle" aria-expanded="false" aria-label="Open Project submenu">⌄</button>
      <ul class="sub-menu"><li><a href="<?php echo esc_url(home_url('/project-overview/')); ?>">Project overview</a></li><li><a href="<?php echo esc_url(home_url('/project-overview/#challenge')); ?>">Challenge &amp; objectives</a></li><li><a href="<?php echo esc_url(home_url('/project-overview/#outcomes')); ?>">Expected outcomes</a></li></ul>
    </li>
    <li class="menu-item-has-children"><a href="<?php echo esc_url(home_url('/research-programme/')); ?>">Research</a><button class="submenu-toggle" aria-expanded="false" aria-label="Open Research submenu">⌄</button>
      <ul class="sub-menu"><li><a href="<?php echo esc_url(home_url('/research-programme/')); ?>">Research programme</a></li><li><a href="<?php echo esc_url(home_url('/research-programme/#work-packages')); ?>">Six work packages</a></li><li><a href="<?php echo esc_url(home_url('/research-programme/#roadmap')); ?>">Four-year roadmap</a></li></ul>
    </li>
    <li class="menu-item-has-children"><a href="<?php echo esc_url(home_url('/team-partners/')); ?>">Team &amp; partners</a><button class="submenu-toggle" aria-expanded="false" aria-label="Open Team and partners submenu">⌄</button>
      <ul class="sub-menu"><li><a href="<?php echo esc_url(home_url('/team-partners/')); ?>">Zagreb × Lausanne</a></li><li><a href="<?php echo esc_url(home_url('/team-partners/#governance')); ?>">Project governance</a></li><li><a href="<?php echo esc_url(home_url('/team-partners/#institutions')); ?>">Funding &amp; institutions</a></li></ul>
    </li>
    <li class="menu-item-has-children"><a href="<?php echo esc_url(home_url('/open-positions/')); ?>">Opportunities</a><button class="submenu-toggle" aria-expanded="false" aria-label="Open Opportunities submenu">⌄</button>
      <ul class="sub-menu"><li><a href="<?php echo esc_url(home_url('/open-positions/')); ?>">All open positions</a></li><li><a href="<?php echo esc_url(home_url('/university-of-zagreb-positions/')); ?>">University of Zagreb</a></li><li><a target="_blank" rel="noopener" href="https://careers.epfl.ch/job/Lausanne-2-PhD-Positions-in-Earthquake-Engineering-Structural-Engineering-%28ENACEESD%29/1164923655/">EPFL official call ↗</a></li></ul>
    </li>
    <li><a href="<?php echo esc_url(home_url('/#news')); ?>">News</a></li>
    <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
  </ul>
</div></nav></header>
