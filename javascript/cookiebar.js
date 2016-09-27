(function ($) {
  $(function(){
    var $cookieBarContent = $('.cookie-bar-content');

    $('#cookie-bar a.more').on('click', function(e){
      var $this = $(this);

      e.preventDefault();

      if($this.hasClass('open')){
        $this.html('Show more').removeClass('open');
        $cookieBarContent.slideUp();
      } else {
        $this.html('Show less').addClass('open');
        $cookieBarContent.slideDown();
      }
    });

    $('#cookie-bar-accept').on('click', function(e){
      var ua = navigator.userAgent;
        //Check not BB (BB just uses standard non AJAX link)
        if (!(ua.indexOf('BlackBerry') >= 0)) {
          e.preventDefault();
          $.ajax({
            url: '/cookiebar/accept',
            success: function(data, textStatus) {
              if(data === 'success') {
                $('#cookie-bar').slideUp(500);
              }
            }
        });
      }
    });
  });
})(window.jQuery);
