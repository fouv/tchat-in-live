$(document).ready(function(){
    $('.card-close').click(function(e) {
        e.preventDefault();
        $('.card-panel.teal.lighten-2').css('display', 'none');
    });
});
