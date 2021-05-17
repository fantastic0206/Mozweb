(function($) {
    'use strict';
    var form = $('#contactForm');
    var formMessages = $('.contact-send-message');
    $(form).submit(function(e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                if (response == 'MOZWEB') {
					$(formMessages).removeClass('success');
					$(formMessages).addClass('error');
                    $(formMessages).text('Por favor valide o Captcha');
                } else {
					$(formMessages).removeClass('error');
					$(formMessages).addClass('success');
                    $(formMessages).text(response);
                     $('#contactForm input[type=text], #contactForm input[type=email], #contactForm textarea').val('');
                     $('#contactForm input[type=submit]').val('Mensagem Enviada');
                     $('#contactForm input[type="submit"]').prop('disabled', true);
                }
            })
            .fail(function(data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! Ocorreu um erro no servidor e sua mensagem nao pode ser enviada.');
                }
            });
    });
})(jQuery);
