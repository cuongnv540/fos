$(function(){
    $('#show_search').click(function(){
        if ($('#form_search').is(':hidden')) {
            $('#form_search').show(window.FADING_DURATION);
        } else {
            $('#form_search').hide(window.FADING_DURATION);
        }
    });
});
