<?php get_header(); ?> 
<h1>Index.php Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>   
        <p><?php the_content(); ?></p>

<?php
    $contenu = get_the_content();
    echo wp_trim_words($contenu, 20, " ... ");
?> 

<?php
 $lien = "<a href='" . get_permalink() . "'>" . get_the_title() . "</a>"; 
echo $lien;
?>
<?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>