<footer class="site-footer">
  <div class="container footer-main">
    <div class="footer-intro">
      <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> home">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/zaggregate-logo.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
      </a>
      <p>Developing retrofit strategies for historical masonry building aggregates in Zagreb.</p>
      <p class="footer-partners">University of Zagreb FCE <span aria-hidden="true">·</span> CCEE <span aria-hidden="true">·</span> EPFL EESD</p>
    </div>

    <div class="footer-details">
      <div class="footer-column">
        <h2>Explore</h2>
        <nav aria-label="Footer navigation">
          <a href="<?php echo esc_url(home_url('/project-overview/')); ?>">Project</a>
          <a href="<?php echo esc_url(home_url('/research-programme/')); ?>">Research</a>
          <a href="<?php echo esc_url(home_url('/team-partners/')); ?>">Team &amp; partners</a>
          <a href="<?php echo esc_url(home_url('/open-positions/')); ?>">Open positions</a>
          <a href="<?php echo esc_url(home_url('/#news')); ?>">News</a>
        </nav>
      </div>
      <div class="footer-column footer-contact">
        <h2>Project coordinators</h2>
        <?php $contact_email = get_theme_mod('contact_email', 'maja.banicek@grad.unizg.hr'); ?>
        <div class="footer-contact-person"><strong>Maja Baniček</strong><span>University of Zagreb · CCEE</span><a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></div>
        <div class="footer-contact-person"><strong>Igor Tomić</strong><span>EPFL · EESD</span><a href="mailto:igor.tomic@epfl.ch">igor.tomic@epfl.ch</a></div>
      </div>
    </div>
  </div>

  <div class="container footer-bottom">
    <span>&copy; <?php echo esc_html(wp_date('Y')); ?> ZAGGREGATE</span>
    <span>Zagreb <span aria-hidden="true">&times;</span> Lausanne</span>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
