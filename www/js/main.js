var ua = navigator.userAgent.toLowerCase();
var isOpera = (ua.indexOf('opera')  > -1);
var isIE = (!isOpera && ua.indexOf('msie') > -1);

function getDocumentHeight() {
    return Math.max(document.compatMode != 'CSS1Compat' ? document.body.scrollHeight : document.documentElement.scrollHeight, getViewportHeight());
}

function getViewportHeight() {
    return ((document.compatMode || isIE) && !isOpera) ? (document.compatMode == 'CSS1Compat') ? document.documentElement.clientHeight : document.body.clientHeight : (document.parentWindow || document.defaultView).innerHeight;
}


$(document).ready(function(){
    $('.header').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
})
window.onresize = function() {
    $('.header').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
};
window.onscroll = function(){
    $('.header').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
}

// $(document).ready(function() {
//
//     $("#form").submit(function() {
//         $.ajax({
//             type: "POST",
//             url: "/feedback/sendComment",
//             data: $(this).serialize()
//         }).done(function() {
//             $(this).find("input").val("");
//             alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
//             $("#form").trigger("reset");
//         });
//         return false;
//     });
//
// });

