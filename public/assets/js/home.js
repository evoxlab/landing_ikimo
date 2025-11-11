function send() {

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Registrando...";
    oData = new FormData(document.forms.namedItem("form"));

    $.ajax({
        url: "/registro",
        method: "POST",
        data: oData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {

                toastr.success(data.message, 'Éxito');
                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = 'Registrar';

                window.setTimeout(function () {
                    window.location = "/gracias";
                }, 2000);


            } else {
                toastr.error(data.message, "Error de Validación");

                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = 'Registrarme Ahora';
            }
        }
    });
}

function login() {

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Ingresando...";
    oData = new FormData(document.forms.namedItem("form"));

    $.ajax({
        url: "/admin_login",             
        method: "POST",
        data: oData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {

                toastr.success(data.message, 'Éxito');
                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = 'Ingresar';

                window.setTimeout(function () {
                    window.location = "/dashboard";
                }, 2000);


            } else {
                toastr.error(data.message, "Error de Validación");

                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = 'Ingresar';
            }
        }
    });
}

function search_sponsor(code) {

    $.ajax({
        url: "search_sponsor",
        method: "POST",
        data: { code: code },
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {

                document.getElementById("sponsor_name").value = data.message  + " ✔️";
                document.getElementById("sponsor_code").value = code;

            } else {
                
                document.getElementById("sponsor_name").value = "Ingreso un código inválido";
            }
        }
    });
}




