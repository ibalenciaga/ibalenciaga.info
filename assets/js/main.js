
  $(window).on('load', function() {


    /* slicknav mobile menu active  */
    $('.mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
        closedSymbol: '<i class="icon-arrow-right"></i>',
        openedSymbol: '<i class="icon-arrow-down"></i>',
      });

    /* Back Top Link active
    ========================================================*/
      var offset = 200;
      var duration = 500;

      $('.back-to-top').on('click',function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 600);
        return false;
      });

      $('.experience-content .content-title').on('click', function (e) {
          var clickedBtnID = $(this).attr('data-id');
          $("."+clickedBtnID).toggle();
      });
  });