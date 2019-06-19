
<?php
/*
Template Name: Главная
*/
?>
<?php get_header();  ?>
       
        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8"> 
                <div class="content">
                    <h2>Географический портал "Географические стлолицы мира</h2>
                    
                    <?php the_content();  ?> <!--Ссылка на контент на главной странице -->

                   <a href="#" class="btn btn-primary">   больше о этой чуше</a> 
                </div>
               
                
       
<?php get_footer(); ?>