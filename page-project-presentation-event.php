<?php
if (!defined('ABSPATH')) exit;
get_header();
$media_uri = get_template_directory_uri() . '/assets/media/project-presentation-2026';
$photos_uri = $media_uri . '/photos';
?>
<main id="main-content" class="event-page" lang="en">
  <section class="content-hero event-hero">
    <div class="container">
      <a class="positions-back" href="<?php echo esc_url(home_url('/#news')); ?>">← Back to news</a>
      <span class="eyebrow">Project event · 25 May 2026</span>
      <h1>Presentation of the ZAGGREGATE Project held at the University of Zagreb</h1>
      <p>Government, diplomatic, academic and professional representatives joined the project team to mark the beginning of an international research collaboration focused on safer historic masonry building aggregates.</p>
      <div class="event-facts" aria-label="Event details">
        <span><strong>25 May 2026</strong>Event date</span>
        <span><strong>Zagreb, Croatia</strong>University of Zagreb Faculty of Civil Engineering</span>
        <span><strong>Zagreb × Lausanne</strong>International research collaboration</span>
      </div>
    </div>
  </section>

  <section class="section event-visual-section">
    <div class="container">
      <figure class="event-main-visual reveal visible">
        <img src="<?php echo esc_url($media_uri . '/zaggregate-project-presentation-visual.png'); ?>" alt="Programme visual for the presentation of the ZAGGREGATE project on 25 May 2026">
      </figure>
    </div>
  </section>

  <section class="section event-story">
    <div class="container event-story-grid">
      <article class="event-article-copy">
        <span class="eyebrow">ZAGGREGATE in public</span>
        <h2>An international project connecting science, engineering and heritage protection.</h2>
        <p>On 25 May 2026, the University of Zagreb Faculty of Civil Engineering hosted a presentation of <strong>ZAGGREGATE — Developing Retrofit Strategies for Historical Masonry Building Aggregates in Zagreb</strong>.</p>
        <p>ZAGGREGATE is developed through cooperation between the University of Zagreb Faculty of Civil Engineering, the Croatian Centre for Earthquake Engineering, and the Earthquake Engineering and Structural Dynamics Laboratory (EESD) at EPFL. The project brings together expertise in earthquake engineering, numerical modelling, experimental research and the rehabilitation of historic masonry buildings.</p>
        <p>The event was attended by representatives of government ministries, the Embassy of the Swiss Confederation in the Republic of Croatia, academic and professional communities, and stakeholders involved in post-earthquake reconstruction.</p>
      </article>
      <aside class="event-focus-card">
        <span>Research focus</span>
        <h3>From individual buildings to connected urban rows.</h3>
        <p>The research combines field investigations, experimental testing and advanced numerical analyses to develop scientifically grounded and practically applicable rehabilitation strategies.</p>
        <p>Particular emphasis is placed on building interaction during earthquakes and on solutions that improve seismic safety while preserving cultural heritage.</p>
      </aside>
    </div>
  </section>

  <section class="section event-programme">
    <div class="container">
      <div class="section-head"><span class="eyebrow">Opening session</span><h2>Representatives of science, government and international cooperation.</h2></div>
      <div class="event-speakers-grid">
        <article><strong>Prof. Domagoj Damjanović</strong><span>Dean, University of Zagreb Faculty of Civil Engineering</span></article>
        <article><strong>Prof. Katrin Beyer</strong><span>Dean of ENAC, EPFL</span></article>
        <article><strong>Dr Hrvoje Meštrić</strong><span>Ministry of Science, Education and Youth</span></article>
        <article><strong>Assist. Prof. Dominik Skokandić</strong><span>Ministry of Physical Planning, Construction and State Assets</span></article>
        <article><strong>H.E. Beatrice Schaer</strong><span>Ambassador of the Swiss Confederation to the Republic of Croatia</span></article>
        <article><strong>Dr Nina Obuljen Koržinek</strong><span>Minister of Culture and Media</span></article>
      </div>
      <div class="event-presenters">
        <div><span class="eyebrow">Project presentation</span><h3>The objectives, methodology and planned activities were presented by the project leadership and coordination team.</h3></div>
        <ul>
          <li><strong>Prof. Josip Atalić</strong><span>Project leader · Croatian team</span></li>
          <li><strong>Prof. Katrin Beyer</strong><span>Project leader · Swiss team</span></li>
          <li><strong>Dr Igor Tomić</strong><span>Project coordinator · EPFL EESD</span></li>
          <li><strong>Dr Maja Baniček</strong><span>Project coordinator · University of Zagreb</span></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section event-video-section">
    <div class="container event-video-grid">
      <div>
        <span class="eyebrow">Event video</span>
        <h2>Why the ZAGGREGATE project matters.</h2>
        <p>The video reflects on the scientific and practical significance of the project, international cooperation, knowledge transfer and the development of a new generation of experts.</p>
        <p class="video-credit"><strong>Video author:</strong> Marin Adrić</p>
      </div>
      <div class="event-video-frame">
        <video controls preload="metadata" playsinline poster="<?php echo esc_url($media_uri . '/video-poster.jpg'); ?>">
          <source src="<?php echo esc_url($media_uri . '/zaggregate-project-presentation-clean.mp4'); ?>" type="video/mp4">
          Your browser does not support embedded video.
        </video>
      </div>
    </div>
  </section>

  <section class="section event-gallery-section">
    <div class="container">
      <div class="section-head"><span class="eyebrow">Photo gallery</span><h2>Presentation of the project in Zagreb.</h2><p>Opening addresses, the project presentation and conversations with invited guests and stakeholders.</p></div>
      <div class="event-gallery">
        <a href="<?php echo esc_url($photos_uri . '/01925.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/01925.jpg'); ?>" alt="Guests attending the ZAGGREGATE project presentation"></a>
        <a href="<?php echo esc_url($photos_uri . '/02234.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/02234.jpg'); ?>" alt="Presentation of the ZAGGREGATE research programme"></a>
        <a href="<?php echo esc_url($photos_uri . '/01368.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/01368.jpg'); ?>" alt="Invited guests in conversation at the ZAGGREGATE event"></a>
        <a href="<?php echo esc_url($photos_uri . '/02_Domagoj_Damjanovic.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/02_Domagoj_Damjanovic.jpg'); ?>" alt="Prof. Domagoj Damjanović delivering an opening address"></a>
        <a href="<?php echo esc_url($photos_uri . '/03_Katrin_Beyer.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/03_Katrin_Beyer.jpg'); ?>" alt="Prof. Katrin Beyer speaking at the project presentation"></a>
        <a href="<?php echo esc_url($photos_uri . '/04_Hrvoje_Mestric.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/04_Hrvoje_Mestric.jpg'); ?>" alt="Dr Hrvoje Meštrić delivering an opening address"></a>
        <a href="<?php echo esc_url($photos_uri . '/05_Dominik_Skokandic.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/05_Dominik_Skokandic.jpg'); ?>" alt="Assist. Prof. Dominik Skokandić delivering an opening address"></a>
        <a href="<?php echo esc_url($photos_uri . '/06_Beatrice_Shear.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/06_Beatrice_Shear.jpg'); ?>" alt="Ambassador Beatrice Schaer delivering an opening address"></a>
        <a href="<?php echo esc_url($photos_uri . '/07_Nina_Obuljen_Korzinek.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/07_Nina_Obuljen_Korzinek.jpg'); ?>" alt="Dr Nina Obuljen Koržinek delivering an opening address"></a>
        <a href="<?php echo esc_url($photos_uri . '/08_Josip_Atalic.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/08_Josip_Atalic.jpg'); ?>" alt="Prof. Josip Atalić presenting the ZAGGREGATE project"></a>
        <a href="<?php echo esc_url($photos_uri . '/09_Maja_Banicek.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/09_Maja_Banicek.jpg'); ?>" alt="Dr Maja Baniček presenting the ZAGGREGATE project"></a>
        <a href="<?php echo esc_url($photos_uri . '/10_Igor_Tomic.jpg'); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($photos_uri . '/10_Igor_Tomic.jpg'); ?>" alt="Dr Igor Tomić presenting the ZAGGREGATE project"></a>
      </div>
    </div>
  </section>

  <section class="page-next"><div class="container"><span>Continue exploring</span><a href="<?php echo esc_url(home_url('/project-overview/')); ?>">Discover the ZAGGREGATE project →</a></div></section>
</main>
<?php get_footer(); ?>
