var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
};

var spOptions = {
  onKeyPress: function(val, e, field, options) {
    field.mask(SPMaskBehavior.apply({}, arguments), options);
  }
};

(function ($, undefined) {
  $(document).ready(function() {  
    $('input[name="whatsapp"]').mask(SPMaskBehavior, spOptions);
  });
})(jQuery);
