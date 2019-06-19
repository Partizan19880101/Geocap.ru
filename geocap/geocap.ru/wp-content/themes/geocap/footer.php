
<div class="directions">
                    <h2>Столицы частей света</h2>
                    <div class="directions-blocks">
                    <?php
                    $args = array(
                  'hierarchical' => 1,
                  'child_of'     => 89,
                  'parent'       => -1,
                  'post_type'    => 'page',
                  'post_status'  => 'publish',
                    ); 
                    $pages = get_pages( $args );
                    foreach( $pages as $post ){
                  setup_postdata( $post );
                    ?>
                     <div class="directions-block" >
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail('directions-preview', '' );?>
                    </div>
                    <?php
                    }  
                    wp_reset_postdata();
                    ?>
                    
                    </div>
                </div>
            </div>
                
        </div>

    </div>
<footer class="footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="copy">
                    <p>Copyring @ <?php echo date('Y');  ?></p>
                   <a class="footer-policy-link" href="#">Политика конфиденциальности</a><br>
                    <small><?php the_field('law_text', 26) ?></small>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                 <?php wp_nav_menu( array(
                        'menu'            => 'top_menu',
                        'container'       => 'ul',
                        'container_class' => 'footer_menu',
                        'menu_class'      => 'footer_menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) ); ?>
               
            </div>
            <div class="col-lg-2 col-6">
                 <ul class="footer_menu">
                    <?php 
                        $args = array(
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 0,
                        'use_desc_for_title' => 1,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '1',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => true,
                        'title_li'           => NULL,
                        'number'             => NULL,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => 'Walker_Category',
                        'hide_title_if_empty' => false,
                        'separator'          => '<br />',
                    );

                    wp_list_categories( $args );

                     ?>
                     <?php wp_reset_postdata(); ?>
                    </ul>
            </div>
            <div class="col-lg">
                <div class="footer-contacts">
                <p class="footer-contacts_phone"><?php the_field('phone_number', 26); ?></p>
                <p class="footer-contacts_adress">
                    <?php the_field('adress_1',26); ?>
                </p>
                <p class="footer-contacts_adress">
                    <?php the_field('adress_2',26); ?>
                    </p>
                <p class="footer-contacts_email">
                    <?php the_field('email',26); ?>
                </p><br><br>
                </div>
                <div class="footer-social-links">
                     <ul>
                    <li><a href="<?php the_field('vk',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img\vk.PNG" alt="Vk"></a></li>
                    <li><a href="<?php the_field('Instagramm',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img/instagram.png" alt="Inst"></a></li>
                    <li><a href="<?php the_field('tutby',26); ?>"><img src="<?php bloginfo('template_directory')?>/assets/img/jobs.png" alt="tut.by"></a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </footer>

    <div class="modal">
        <div class="modal-content">
            <div class="close">&times;</div>
            <h4>Заполните поля</h4>
            <p>Мы с вами свяжемся в ближайшее время</p>
            <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="235" title="Untitled"]') ?>
               
                <small>Нажимая кнопку, даю свое согласие на <a href="#">обработку персональных данных</a>
                    </small>
            </div>
        </div>
    </div>



   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')</script>
        </script>
        <?php wp_footer(); ?>
  </body>
</html>


 