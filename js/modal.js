(function($) {
  "use strict"

  var preferences = {
    close_keycode: 27
  }

  var Modal = function($self, options) {
    this.$self = $self;
    this.options = $.extend({}, this.defaults, options);
    this.status = '';
  }

  Modal.prototype = {
    defaults: {
      fade_time: 200,
      backdrop: true
    },
    show: function() {
      this.$self.fadeIn(this.options.fade_time);
      this.status = 'shown';

      if (this.options.backdrop) {
        $('.backdrop').fadeIn(this.options.fade_time);
      }
    },
    hide: function() {
      this.$self.fadeOut(this.options.fade_time);
      this.status = 'hidden';

      if (this.options.backdrop) {
        $('.backdrop').fadeOut(this.options.fade_time);
      }
    },
    toggle: function() {
      if (this.$self.css('display') == 'block') {
        this.hide();
      } else {
        this.show();
      }
    }
  };

  $.fn.modal = function(option) {
    var options = typeof option == 'object' && option;

    this.each(function() {
      var instance = $(this).data('modal');

      if (!instance) {
        instance = new Modal($(this), options);
        $(this).data('modal', instance);
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

  //Open on data-open click
  $('*[data-open=modal]').on('click', function(event) {
    event.stopPropagation();
    var target = $(this).data('target');
    $('.modal:not(' + target + ')').modal('hide');

    var modal = $($(this).data('target'));
    modal.modal('show');
  });

  //Close on data-close click
  $('*[data-close=modal]').on('click', function(event) {
    event.stopPropagation();
    $('.modal').modal('hide');
  });

  //Prevent close from modal itself
  $('.modal').on('click', function() {
    event.stopPropagation();
  });

  //Close on html click
  $('html').on('click', function() {
    $('.modal').modal('hide');
  });

  //Close on key press
  $(document).on('keydown', function(event) {
    if (event.keyCode == preferences.close_keycode) {
      $('.modal').modal('hide');
    }
  });

}(jQuery));
