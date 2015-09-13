(function ($, Drupal) {

  Drupal.behaviors.menu = {
    attach: function(context, settings) {
      $( "#main-menu.main-nav" ).removeClass( "left" ).addClass( "right" );
    }
  };

})(jQuery, Drupal);
