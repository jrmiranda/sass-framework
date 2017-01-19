(function($) {
  var Dropdown = function($self, options) {
    this.$self = $self;
    this.options = $.extend({}, $.fn.dropdown.defaults, options);
  }

  Dropdown.prototype.color = function() {
    $(this).css('color', settings.color);
  }

  Dropdown.prototype.size = function() {
    $(this).css('font-size', settings.size);
  }

  $.fn.dropdown = function(option) {
    var options = typeof option == 'object' && option;

    var defaults = {
      color: '#f00',
      size: '20px'
    }

    this.each(function() {
      var $this = $(this);
      var data = $this.data('dropdown');

      if (!$dropdown) {
        $dropdown = new Dropdown($this, options);
        $this.data('dropdown', $dropdown);
      }

      if (typeof option == 'string') {
        $dropdown[option]();
      }
    });

    return this;
  }

  $(document).on('click', '[data-open=dropdown]', function() {
    var target = $($(this).data('target'));
    target.dropdown({
      color: '#f00'
    });
    target.dropdown('color');
  });

}(jQuery));
