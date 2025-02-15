<?php 
/**
 * This is the default template file
 */
get_header(); ?>

<main>
    <div class="h">
    <h1 id="h1">Welcome to My Profile </h1>
    <p id="p1">If you want know about me and my career then click on <b>Homepage</b>. </p>
</div>
    <section>
        
    <?php
        $query = new WP_Query(array(
            'category_name' => 'projects',
             'posts_per_page' => 3));
             
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p> </p>';
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
