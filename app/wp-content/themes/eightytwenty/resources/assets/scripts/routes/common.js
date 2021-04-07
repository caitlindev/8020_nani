export default {
  init() {
    // JavaScript to be fired on all pages
    $('#btn-hamburger').click(function() {
      $('.nav-mobile').toggleClass('expanded');
      $(this).toggleClass('open');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
