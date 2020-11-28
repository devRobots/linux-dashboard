setInterval(function refresh() {
    var modalTag = $('#modalUsuario')[0].className;
    if (!modalTag.includes("show")) {
        location.reload();
    }
}, 30000);