(function ($) {
 $('.search-submit').on('click', function () {
  $('.search-field').animate({ width: 'toggle' }).focus();
 })
 $('.search-field').focusout(function () {
  $('.search-field').animate({ width: 'toggle' });
 })
})(jQuery);