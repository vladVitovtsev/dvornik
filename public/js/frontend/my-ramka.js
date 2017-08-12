jQuery(document).ready(function($) {

    // jQuery placeholder
    $("input, textarea").placeholder();

    // Scroll to top button
    $('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

    $('#basket').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var recipient = button.data('whatever');
        var modal = $(this);
        var count = $('#count');
        $('.recipient').val(recipient);

        if (recipient == 'ramka') {
            $('.color').show();
            count.val(1);
            var color = $('#color');
            color.on('change input', function () {
                var val = color.val();
                var name;
                if (val == 'black'){
                    name = 'Черная'
                }else if (val == 'white'){
                    name = 'белая'
                }else if (val == 'yellow'){
                    name = 'желтая'
                }else if (val == 'red'){
                    name = 'красная'
                }else if (val == 'blue'){
                    name = 'синяя'
                }else if (val == 'gray'){
                    name = 'серая'
                }
                modal.find('.order').text('Ваш заказ: Силиконовая рамка RCS '  + name );
            });
            modal.find('.order').text('Ваш заказ: Силиконовая рамка RCS');
            count.on('change input', function () {
                var price = 1390 * count.val();
                modal.find('.price').text(price);

            });
            modal.find('.price').text('1390');
        }
        else if (recipient == 'light') {
            $('.color').hide();
            count.val(1);
            modal.find('.order').text('Ваш заказ: Пластиковая рамка RCS-light');
            count.on('change input', function () {
                var price = 890 * count.val();
                modal.find('.price').text(price);

            });
            modal.find('.price').text('890');
        }
        else if (recipient == 'magnit') {
            $('.color').hide();
            count.val(1);
            modal.find('.order').text('Ваш заказ: Магнитный набор');
            count.on('change input', function () {
                var price = 1790 * count.val();
                modal.find('.price').text(price);

            });
            modal.find('.price').text('1790');
        }
        else if (recipient == 'vint') {
            $('.color').hide();
            count.val(1);
            modal.find('.order').text('Ваш заказ: Набор винтов для крепления рамки');
            count.on('change input', function () {
                var price = 1790 * count.val();
                modal.find('.price').text(price);

            });
            modal.find('.price').text('1790');
        }
    });

    $('.phone-mask').inputmask('+7 (999) 999-99-99');

    $('.email-mask').inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            '*': {
                validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                cardinality: 1,
                casing: "lower"
            }
        }
    });
    $('.email-mask').inputmask({ alias: "email"})

    $('.bxslider-avto').bxSlider({
        auto: true,
    });
    $('.bxslider').bxSlider({
    });

});