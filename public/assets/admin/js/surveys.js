function validate() {
    document.getElementById("submit").disabled = true;
    document.getElementById("submit").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span> Procesando...";
    oData = new FormData(document.forms.namedItem("form-customer"));
    $.ajax({
        url: site + "dashboard/clientes/validate",
        method: "POST",
        data: oData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    customClass: 'sweetalert-bg',
                    title: 'Cambios Guardado',
                    showConfirmButton: false,
                });
                window.setTimeout(function () {
                    window.location = site + "dashboard/clientes";
                }, 1500);
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'info',
                    customClass: 'sweetalert-bg',
                    title: 'Sucedio un error',
                    footer: 'Vuelva a Intentarlo'
                });
                document.getElementById("submit").disabled = false;
                document.getElementById("submit").innerHTML = "Guardar";
            }
        }
    });

}

function edit_customer(customer_id) {
    var url = 'dashboard/clientes/load/' + customer_id;
    location.href = site + url;
}

function back() {
    var url = 'dashboard/clientes';
    location.href = site + url;
}


function exportToExcel(surveys) {
    const data = surveys.map((surveys) => {
        return {
            id: surveys.id,
            preacher: surveys.preacher,
            ministry_music: surveys.ministry_music,
            created_at: surveys.created_at
        }
    })
    const workbook = XLSX.utils.book_new();
    const worksheet = XLSX.utils.json_to_sheet(data);
    XLSX.utils.book_append_sheet(workbook, worksheet, "clientes");
    XLSX.utils.sheet_add_aoa(worksheet, [["ID", "SUGERENCIA PARA PREDICADOR", "SUGERENCIA PARA MINISTERIO DE ALABANZA", "FECHA"]], { origin: "A1" });
    XLSX.writeFile(workbook, "encuesta.xlsx", { compression: true });
}


function eliminar(id){
    Swal.fire({
        title: 'Confirma que desea eliminar el registro?',
        icon: 'warning',
        customClass: 'sweetalert-bg',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Confirmo'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: site + "dashboard/clientes/eliminar",
                type: "post",
                dataType: "json",
                data: {id : id},
                success: function (data) {
                    if (data.status == true) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            customClass: 'sweetalert-bg',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        window.setTimeout(function () {
                            window.location = site + "dashboard/clientes";
                        }, 1500);
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'info',
                            customClass: 'sweetalert-bg',
                            title: data.message
                        });
                    }
                }
            });
        }
    }); 
}