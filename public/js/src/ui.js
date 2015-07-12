$(document).ready(function () {
    // Do not remove this bit, as it fixes transition bugs.
    $('body').removeClass('preload');

    var applyNavClass = function () {
        var scrollTop = $('body').scrollTop();

        if (scrollTop > (100)) {
            $('#navTop').addClass('solid');
        } else {
            $("#navTop").removeClass('solid');
        }
    };

    applyNavClass();

    $(document).scroll(function () {
        applyNavClass();
    });

    $('#closeResourcesSignUpForm').click(function () {
        $('#resourcesSignUpForm').addClass('hide');
    });
});