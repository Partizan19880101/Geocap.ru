$('[data-target="modal"]').on('click', function(event) {
  event.preventDefault();
  $('.modal').show();
 });

 $('.close').on('click', function(event){
  event.preventDefault();
  $('.modal').hide();
 });
