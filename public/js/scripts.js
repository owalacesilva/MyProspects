
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

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
    $(".products img").mouseenter(function(){
      $(this).addClass('animate__bounce')
    });
  
    $(".products img").mouseleave(function() {
      $(this).removeClass('animate__bounce')
    });
  
    $('input[name="whatsapp"]').mask(SPMaskBehavior, spOptions);

    $("#form-contact").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      
      $.ajax({
        url: form.prop('action'),
        method: "POST", 
        dataType: "json",
        data: form.serializeArray(),
        beforeSend: function() {
          form.find('button[type="submit"]')
            .prop("disabled", true)
            .addClass("btn-loading");
        }, 
        success: function(data, textStatus, jqXHR) {
          if (data.ok) {
            window.location.href = data.url;
          } else {
            window.alert(data.message);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          window.alert(errorThrown);
        },
        complete: function() {
          form.find('button[type="submit"]')
            .prop("disabled", false)
            .removeClass("btn-loading");
        }
      });

      return false;
    });
  });
})(jQuery);
