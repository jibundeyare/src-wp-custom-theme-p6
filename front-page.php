<?php

get_header();

?>
<h1>page d'accueil</h1>
<h2>liste des pages</h2>
<?php

// WP_Query arguments
$args = [
    'post_type' => [ 'page' ],
];

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ):
    while ($query->have_posts()):
        $query->the_post();
?>
    <article>
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
<?php
    endwhile;
endif;

// Restore original Post Data
wp_reset_postdata();

?>
<h2>liste des posts</h2>
<?php

// WP_Query arguments
$args = [
    'post_type' => [ 'post' ],
];

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ):
    while ($query->have_posts()):
        $query->the_post();
?>
    <article>
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
<?php
    endwhile;
endif;

// Restore original Post Data
wp_reset_postdata();

get_footer();
