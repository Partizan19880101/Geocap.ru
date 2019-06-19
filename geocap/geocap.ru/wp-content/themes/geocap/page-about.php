
<?php
/*
Template Name: О нас
*/
?>

<?php get_header();  ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8"> 
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();  ?>
                </div>
                <h2>Наша команда</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-1');  ?>">
                            
                            <h4><?php the_field('owner_name-1');  ?></h4>
                            <p><?php the_field('owner-post-1');  ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-2');  ?>">
                            
                            <h4><?php the_field('owner-name-2');  ?></h4>
                            <p><?php the_field('owner-post-2');  ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_field('owner-photo-3');  ?>">
                            
                            <h4><?php the_field('owner-name-3');  ?></h4>
                            <p><?php the_field('owner-post-3');  ?></p>
                        </div>
                 </div>
                </div>
                
    <?php get_footer(); ?>


