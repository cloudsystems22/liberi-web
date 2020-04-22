$(document).ready(function () {
    document.getElementById('env-cadastro').disabled = true;
    document.getElementById('env-cadastro').classList.toggle('active');
});

$("#condcontat").click(function () {
    if ($(this).prop("checked")) {
        document.getElementById('env-cadastro').disabled = false;
        document.getElementById('env-cadastro').classList.toggle('active');
    } else {
        document.getElementById('env-cadastro').disabled = true;
        document.getElementById('env-cadastro').classList.toggle('active');
    }
});