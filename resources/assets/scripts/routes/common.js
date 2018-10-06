export default {
  init() {
    $('select.mobile').change(function() {
        window.location.href = $(this).val();
    });

    $('.hamburger').on('click', function() {
        $(this).toggleClass('opened');

        if ($(this).hasClass('opened')) {
            $('#mobile--menu-container').fadeIn();
        } else {
            $('#mobile--menu-container').fadeOut();
        }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
