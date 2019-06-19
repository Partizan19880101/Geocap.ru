<?php
/*
Template Name: Контакты
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
                    <div class="contacts">
                    <p class="contacts-phone">
                        <img class="contacts-img" src="<?php bloginfo('template_directory')?>
                        /assets/img/phone.png"><?php the_field('phone_number', 26); ?></p>
                    <p class="contacts-mail">
                        <img class="contacts-img" src="<?php bloginfo('template_directory')?>/assets/img/mail.png"><?php the_field('email',26); ?></p>
                    <a href="" class="contacts-address"><?php the_field('adress_1',26); ?></a> 
                    <a href="#" data-target="modal" class="btn btn-primary contacts-btn">Задать вопрос</a>
                </div>
                <div class="contacts-social-links">
                     <ul>
                    <li><a href="<?php the_field('vk',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img/vk.png" alt="Vk"></a></li>
                    <li><a href="<?php the_field('Instagramm',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img/instagram.png" alt="Inst"></a></li>
                    <li><a href="<?php the_field('tutby',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img/jobs.png" alt="Tut.by"></a></li>
                    </ul>
                </div>
                </div>


                
    <?php get_footer(); ?>


 