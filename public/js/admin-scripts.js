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
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var tablePurchaseContacts = $('#table-purchase-contacts').DataTable();
 
    $('#table-purchase-contacts tbody').on('click', 'tr', function () {
      $(this).toggleClass('selected');
    });

    $("#form-purchase-contact").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      var contactsSelected = tablePurchaseContacts
        .rows('.selected')
        .data();

      var contacts = [];
      $.each(contactsSelected, function (index, item) {
        contacts.push(item[0]);
      });

      var userId = $("select[name='user_id']", this).val();
      
      $.ajax({
        url: form.prop('action'),
        method: "POST", 
        dataType: "json",
        data: {
          user_id: userId,
          contacts: contacts
        },
        beforeSend: function() {
          form.find('button[type="submit"]')
            .prop("disabled", true)
            .addClass("btn-loading");
        }, 
        success: function(data, textStatus, jqXHR) {
          if (data.ok) {
            swal("Pronto!", "Venda criada com sucesso!", "success")
              .then(function() {
                window.location.assign('/admin/purchases');
              });
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

    $('input[name="whatsapp"]').mask(SPMaskBehavior, spOptions);
    $(document).on('click', '.btn-block-user', function(event) {
      event.preventDefault();

      var $this = $(this);
      var userId = $this.data('userId');
      var userName = $this.data('userName');

      swal({
        title: "Atencao?",
        text: "Deseja bloquear o usuario " + userName + "?",
        icon: "warning",
        dangerMode: true,
        closeOnClickOutside: false,
        closeOnEsc: true,
        buttons: {
          cancel: true,
          confirm: true,
        }
      })
      .then(willBlock => {
        if (willBlock) {
          $.ajax({
            url: "/admin/users/block",
            method: "POST", 
            dataType: "json",
            data: {
              user_id: userId
            },
            success: function(data, textStatus, jqXHR) {
              if (data.ok) {
                swal("Pronto!", "Usuario '" + userName + "' bloqueado!", "success")
                  .then(function() {
                    window.location.reload();
                  });
              } else {
                swal("Atencao!", data.message, "warning");
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
              swal("Atencao!", errorThrown, "warning");
            }
          });
        }
      });
    });

    $(document).on('click', '.btn-unblock-user', function(event) {
      event.preventDefault();

      var $this = $(this);
      var userId = $this.data('userId');
      var userName = $this.data('userName');

      swal({
        title: "Atencao?",
        text: "Deseja desbloquear o usuario " + userName + "?",
        icon: "warning",
        dangerMode: true,
        closeOnClickOutside: false,
        closeOnEsc: true,
        buttons: {
          cancel: true,
          confirm: true,
        }
      })
      .then(willBlock => {
        if (willBlock) {
          $.ajax({
            url: "/admin/users/unblock",
            method: "POST", 
            dataType: "json",
            data: {
              user_id: userId
            },
            success: function(data, textStatus, jqXHR) {
              if (data.ok) {
                swal("Pronto!", "Usuario '" + userName + "' desbloqueado!", "success")
                  .then(function() {
                    window.location.reload();
                  });
              } else {
                swal("Atencao!", data.message, "warning");
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
              swal("Atencao!", errorThrown, "warning");
            }
          });
        }
      });
    });
  });
})(jQuery);
