$window = $(window);

if ($window.width() > 767) {
  wow.init();
}

$('.magnific-popup-link').magnificPopup({
  type: 'image',
});

$(document).ready(function(){
  $('#notificationModal').modal('show');
})

