$(document).ready(function () {
    $("select").material_select();
    $(".button-collapse").sideNav();
});

function showToast(message,duration) {
    Materialize.toast(message,duration)
}