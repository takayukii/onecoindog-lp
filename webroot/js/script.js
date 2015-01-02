/*
 * All the plugins init are in this file
 **/

$(document).ready(function() {

  if($('#is-saved').text()){
    $('#myModal').modal("show");
  }

  var topBtn = $('#page-top');
  topBtn.hide();
  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //スクロールしてトップ
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });

  /*
  // ajax contact form
  $('.contact-form').submit(function(){
    $.post('contact-form.php', $(this).serialize(), function(data){
      $('.contact-form').html(data);
      $('.contact-form input, #contact-form textarea').val('');
    });
    return false;
  });
*/

  // ajax subscription
  $('.subscription-form').submit(function(){
    $.post('subscription.php', $(this).serialize(), function(data){

      $('.subscription-form > *').fadeIn();
      $('.subscription-form').html(data);
      $('.subscription-form input').val('');
    });
    return false;
  });

});


