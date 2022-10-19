$('.btnDelete').click(function(ev) {
    ev.preventDefault();
    var _href = $(this).attr('href');
    $('form#formDelete').attr('action', _href);
    if (confirm('Do you want delete?')) {
        $('form#formDelete').submit();
    }
})