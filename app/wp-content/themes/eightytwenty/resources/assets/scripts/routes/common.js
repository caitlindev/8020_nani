export default {
  init() {
    // JavaScript to be fired on all pages
    const handleHamburgerMenu = function(e) {

      if (e.type==='click') {
        $('.nav-mobile').toggleClass('expanded');
        $(this).toggleClass('open');
      }
    }
    
    $('#btn-hamburger').on('click', handleHamburgerMenu);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
