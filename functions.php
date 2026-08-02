<?php
if (!defined('ABSPATH')) exit;

function zaggregate_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    register_nav_menus(['primary' => __('Primary menu', 'zaggregate')]);
}
add_action('after_setup_theme', 'zaggregate_setup');

function zaggregate_assets() {
    $css_file = get_template_directory() . '/assets/css/site.css';
    $js_file = get_template_directory() . '/assets/js/site.js';
    wp_enqueue_style('zaggregate-site', get_template_directory_uri() . '/assets/css/site.css', [], file_exists($css_file) ? filemtime($css_file) : wp_get_theme()->get('Version'));
    wp_enqueue_script('zaggregate-site', get_template_directory_uri() . '/assets/js/site.js', [], file_exists($js_file) ? filemtime($js_file) : wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'zaggregate_assets');

function zaggregate_customize_register($wp_customize) {
    $wp_customize->add_section('zaggregate_project', [
        'title' => __('ZAGGREGATE project settings', 'zaggregate'),
        'priority' => 30,
    ]);
    $fields = [
        'official_calls_url' => ['Official calls URL', 'https://www.grad.unizg.hr/novosti_i_objave/natjecaji?@=2b5wh#news_71010', 'url'],
        'contact_email' => ['Project contact email', 'maja.banicek@grad.unizg.hr', 'email'],
        'hero_title' => ['Homepage statement', 'Rethinking seismic retrofit at the scale of the whole building row.', 'text'],
        'hero_intro' => ['Homepage introduction', 'ZAGGREGATE treats historic masonry rows as interacting structural systems. Field evidence, experiments and validated numerical models are combined to develop holistic, heritage-compatible strategies that reduce seismic risk across the entire aggregate—not only one building.', 'textarea'],
    ];
    foreach ($fields as $id => $data) {
        $wp_customize->add_setting($id, ['default' => $data[1], 'sanitize_callback' => $data[2] === 'url' ? 'esc_url_raw' : ($data[2] === 'email' ? 'sanitize_email' : 'sanitize_text_field')]);
        $wp_customize->add_control($id, ['label' => __($data[0], 'zaggregate'), 'section' => 'zaggregate_project', 'type' => $data[2]]);
    }
}
add_action('customize_register', 'zaggregate_customize_register');

function zaggregate_virtual_pages() {
    return [
        'project-overview' => ['template' => 'page-project-overview.php', 'title' => 'Project Overview | ZAGGREGATE'],
        'research-programme' => ['template' => 'page-research-programme.php', 'title' => 'Research Programme | ZAGGREGATE'],
        'team-partners' => ['template' => 'page-team-partners.php', 'title' => 'Team & Partners | ZAGGREGATE'],
        'open-positions' => ['template' => 'page-open-positions.php', 'title' => 'Open Positions | ZAGGREGATE'],
        'university-of-zagreb-positions' => ['template' => 'page-university-of-zagreb-positions.php', 'title' => 'University of Zagreb Open Positions | ZAGGREGATE'],
    ];
}

function zaggregate_register_virtual_routes() {
    foreach (zaggregate_virtual_pages() as $slug => $page) {
        add_rewrite_rule('^' . preg_quote($slug, '/') . '/?$', 'index.php?zaggregate_page=' . $slug, 'top');
    }
}
add_action('init', 'zaggregate_register_virtual_routes');

function zaggregate_virtual_page_query_var($vars) {
    $vars[] = 'zaggregate_page';
    return $vars;
}
add_filter('query_vars', 'zaggregate_virtual_page_query_var');

function zaggregate_current_virtual_page() {
    $slug = sanitize_key((string) get_query_var('zaggregate_page'));
    $pages = zaggregate_virtual_pages();
    return isset($pages[$slug]) ? array_merge(['slug' => $slug], $pages[$slug]) : null;
}

function zaggregate_virtual_page_template($template) {
    $page = zaggregate_current_virtual_page();
    if (!$page) return $template;
    global $wp_query;
    $wp_query->is_404 = false;
    status_header(200);
    return get_template_directory() . '/' . $page['template'];
}
add_filter('template_include', 'zaggregate_virtual_page_template');

function zaggregate_virtual_page_title($title) {
    $page = zaggregate_current_virtual_page();
    return $page ? __($page['title'], 'zaggregate') : $title;
}
add_filter('pre_get_document_title', 'zaggregate_virtual_page_title');

function zaggregate_virtual_page_body_class($classes) {
    $page = zaggregate_current_virtual_page();
    if ($page) {
        $classes[] = 'zaggregate-subpage';
        $classes[] = 'zaggregate-page-' . $page['slug'];
    }
    return $classes;
}
add_filter('body_class', 'zaggregate_virtual_page_body_class');

function zaggregate_render_virtual_page_directly() {
    $request_path = untrailingslashit((string) wp_parse_url(isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '', PHP_URL_PATH));
    foreach (zaggregate_virtual_pages() as $slug => $page) {
        $target_path = untrailingslashit((string) wp_parse_url(home_url('/' . $slug . '/'), PHP_URL_PATH));
        if ($request_path !== $target_path) continue;
        global $wp_query;
        $wp_query->set('zaggregate_page', $slug);
        $wp_query->is_404 = false;
        status_header(200);
        include get_template_directory() . '/' . $page['template'];
        exit;
    }
}
add_action('template_redirect', 'zaggregate_render_virtual_page_directly', 0);

function zaggregate_maybe_flush_virtual_routes() {
    $route_version = '2';
    if (get_option('zaggregate_virtual_route_version') !== $route_version) {
        zaggregate_register_virtual_routes();
        flush_rewrite_rules(false);
        update_option('zaggregate_virtual_route_version', $route_version);
    }
}
add_action('admin_init', 'zaggregate_maybe_flush_virtual_routes');
