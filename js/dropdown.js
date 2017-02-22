(function($) {
  "use strict"

  var preferences = {
    close_keycode: 27
  }

  var Dropdown = function($self, options) {
    this.$menu = $self.find('.dropdown-menu');
    this.options = $.extend({}, this.defaults, options);
    this.status = '';
  }

  Dropdown.prototype = {
    defaults: {  },
    show: function() {
      this.$menu.css('display', 'block');
      this.status = 'shown';
    },
    hide: function() {
      this.$menu.css('display', 'none');
      this.status = 'hidden';
    },
    toggle: function() {
      if (this.$menu.css('display') == 'block') {
        this.hide();
      } else {
        this.show();
      }
    }
  };

  $.fn.dropdown = function(option) {
    var options = typeof option == 'object' && option;

    this.each(function() {
      var instance = $(this).data('dropdown');

      if (!instance) {
        instance = new Dropdown($(this), options);
        $(this).data('dropdown', instance);
      }

      if (typeof option == 'string') {
        instance[option]();
      }
    });

    return this;
  }

  /*
  * -----------------------
  * Implementation
  * -----------------------
  */

  //Toggle on data-open click
  $('*[data-toggle=dropdown]').on('click', function(event) {
    event.stopPropagation();
    var dropdown = $($(this).parent('.dropdown'));

    $('.dropdown').not(dropdown).dropdown('hide');
    dropdown.dropdown('toggle');
  });

  //Prevent close from dropdown itself
  $('.dropdown-menu').on('click', function() {
    event.stopPropagation();
  });

  //Close on html click
  $('html').on('click', function() {
    $('.dropdown').dropdown('hide');
  });

  //Close on key press
  $(document).on('keydown', function(event) {
    if (event.keyCode == preferences.close_keycode) {
      $('.dropdown').dropdown('hide');
    }
  });

}(jQuery));
