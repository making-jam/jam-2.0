$(document).ready(function () {
    // Do not remove this bit, as it fixes transition bugs.
    $('body').removeClass('preload');

    $('.toggle-nav').click(function (e) {
        $('#navTop, #navTop .toggle-nav .close').toggleClass('active');
    });

    function openPhoto(name) {
        $('.modal-backdrop').removeClass('is-hidden');

        var whereToPutTheImage = $('.modal-backdrop .modal main'),
            html = '<img src="/images/photos/' + name + '" alt="Photo – ' + name + '">';

        whereToPutTheImage.html(html);
    }

    $('.modal-backdrop, .close').click(function () {
        $('.modal-backdrop').addClass('is-hidden');
    });

    $('.modal').click(function (e) {
        e.stopPropagation();
    });

    $('.grid-item').click(function (e) {
        e.preventDefault();

        var image = $(this).data('image');

        openPhoto(image);
    });

    var applyNavClass = function () {
        var scrollTop = $('body').scrollTop();

        if (scrollTop > (1)) {
            $('#navTop').addClass('solid');
        } else {
            $('#navTop').removeClass('solid');
        }
    };

    applyNavClass();

    $(document).scroll(function () {
        applyNavClass();
    });

    $('#closeResourcesSignUpForm').click(function () {
        $('#resourcesSignUpForm').addClass('hide');
    });

    $('#mc-embedded-subscribe-form').submit(function (e) {
        var $this = $(this);

        if (e) e.preventDefault();

        $.ajax({
            type: 'GET',
            url: 'http://london.us9.list-manage.com/subscribe/post-json?u=7f799244738e8b8558a646378&id=6c81011ad7&c=?',
            data: $this.serialize(),
            cache: false,
            async: true,
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            error: function (err) {
                $('#notification').attr('class', '').addClass('error active').html(err);

                setTimeout(function () {
                    $('#notification').removeClass('active');
                }, 4500);
            },
            success: function (data) {
                if (data.result != 'success') {
                    $('#notification').attr('class', '').addClass('warning active').html(data.msg);

                    // @TODO remove after testing
                    console.info(data.msg);

                    setTimeout(function () {
                        $('#notification').removeClass('active');
                    }, 4500);
                } else {
                    $('#notification').attr('class', '').addClass('success active').html(
                        'Almost done! To confirm your suscription, please click the link in the email we\'ve just sent you.'
                    );

                    // @TODO remove after testing
                    console.log(data.msg);

                    setTimeout(function () {
                        $('#notification').removeClass('active');
                    }, 4500);
                }
            }
        });
    });
});