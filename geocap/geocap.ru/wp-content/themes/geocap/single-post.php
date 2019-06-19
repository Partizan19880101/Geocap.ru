
<?php get_header();  ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8"> 
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>                       
                    </div>
                    <div class="object-page">
                        <div class="object-page_text">
                    <p><b>Основан: </b><?php the_field('Founding_date'); ?></p>
                    <p><b>Первое упоминание: </b><?php the_field('First_mention'); ?></p>
                    <p><b>Площадь: </b><?php the_field('area'); ?></p>
                    <p><b>Население: </b><?php the_field('population'); ?></p>
                    <p><b>Плотность: </b><?php the_field('Density'); ?>
                    <br>
                    <a href="#" class="btn btn-primary">Добавить своей информации или прочитать еще</a>
                    </div>
                    
                </div>
                </div>
                
                
    <?php get_footer(); ?>