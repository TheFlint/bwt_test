$(document).ready(function(){
    $('.header').height($(window).height());
})
window.onresize = function(event) {
    $('.header').height($(window).height());
};