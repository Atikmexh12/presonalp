<?php get_header(); ?>

<section class="cars-section">
    <h2 class="section-title">Available Cars</h2>
    <div class="cars-grid">
        <?php
        if (have_posts()):
            while (have_posts()): the_post();
                get_template_part('template-parts/car-card');
            endwhile;
        else:
            echo '<p>No cars found.</p>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
