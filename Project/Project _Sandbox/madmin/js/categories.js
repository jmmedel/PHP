  // Hide Sections
  $('.section').hide();

  setTimeout(function () {
    $(document).ready(function () {
      // Show sections
      $('.section').fadeIn();

      // Hide preloader
      $('.loader').fadeOut();

      //Init Side nav
      $('.button-collapse').sideNav();

      // Init Modal
      $('.modal').modal();

    });
  }, 1000);