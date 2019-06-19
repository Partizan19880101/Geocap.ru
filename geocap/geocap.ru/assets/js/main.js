




 $(document).ready(function() {
 $('.top-nav_btn').click(function(event) {
  event.preventDefault();
  $('.top-nav_menu').slideToggle(400);
 });

 $('.left-sidebar_btn').click(function(event) {
  event.preventDefault();
  $('.left-sidebar_menu').slideToggle(400);
 });

 

 
 $('.directions-blocks').slick({
                arrows: false,
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

 
