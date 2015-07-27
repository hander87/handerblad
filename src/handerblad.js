var animation = 125;

$('.small').hide();

$('#logo_cont').hover(
  function() {
    $(this).find('.big').hide(0);
    $(this).find('.small').fadeIn(0);
    $(this).find('#logo').animate({width:"350px"}, animation);
  },
  function() {
    $(this).find('.small').hide(0);
    $(this).find('.big').fadeIn(0);
    $(this).find('#logo').animate({width:"200px"}, animation);
  }
);