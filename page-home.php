<?php
/* Template Name: Home Page */
get_header(); ?>

<section class="hero">
    <h1>Find Your Dream Car Today</h1>
    <p>Explore our wide range of vehicles to find the perfect match for your lifestyle.</p>
    <a href="<?php echo site_url('/cars'); ?>" class="cta-button">Browse Cars</a>
</section>

<section class="search-section">
    <?php get_template_part('template-parts/search-form'); ?>
</section>

<section class="cars-section">
    <h2 class="section-title">Featured Cars</h2>
    <div class="cars-grid">
        <?php
        $args = array(
            'post_type' => 'car',
            'posts_per_page' => 6,
            'meta_key' => 'price',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
        );
        $featured_cars = new WP_Query($args);
        if ($featured_cars->have_posts()):
            while ($featured_cars->have_posts()): $featured_cars->the_post();
                get_template_part('template-parts/car-card');
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No cars found.</p>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
