function message() {

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Enviando...";
    oData = new FormData(document.forms.namedItem("form"));

    $.ajax({
        url: "/contact",
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
                document.getElementById("submit").innerHTML = 'Registrar';
            }
        }
    });
}

function survey() {

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Enviando...";
    oData = new FormData(document.forms.namedItem("form"));

    $.ajax({
        url: "/survey",
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
                    window.location = "/";
                }, 2000);


            } else {
                toastr.error(data.message, "Error de Validación");

                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = 'Registrar';
            }
        }
    });
}

function login() {

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Ingresando...";
    oData = new FormData(document.forms.namedItem("form"));

    $.ajax({
        url: "/login",
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


