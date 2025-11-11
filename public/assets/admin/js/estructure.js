function up(id) {
    document.getElementById("up").disabled = true;
    document.getElementById("up").innerHTML = "<span class='spinner-border spinner-border-sm' role='status'></span>";
    $.ajax({
        url: site + "dashboard/estructura_up",
        method: "POST",
        data: { id: id },
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {
                window.location = data.url;
            } else {
                document.getElementById("up").disabled = false;
                document.getElementById("up").innerHTML = "<i class='fa fa-chevron-up'></i>";
            }
        }
    });
}

function show_info(name, last_name, email, code, pais_img) {

    var name_text = document.getElementById("i_name");
    name_text.value = name;

    var lastname_text = document.getElementById("i_lastname");
    lastname_text.value = last_name;

    var code_text = document.getElementById("i_code");
    code_text.value = code;

    var email_text = document.getElementById("i_email");
    email_text.value = email;

    var pais_text = document.getElementById("i_country");
    pais_text.textContent = getFlagEmoji(pais_img);
    // url_img = site + "assets/metronic8/media/flags/" + pais_img;
    // pais_text.innerHTML = "<img style='border-radius:5px' src='" + url_img + "' alt='pais' width='25'/> ";

    var status_text = document.getElementById("i_status");
    status_text.innerHTML = '<span id="i_status" style="color:green !important" class="text-muted btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3">Activo</span>';
    
}


function getFlagEmoji(countryCode) {
    // Convierte el código de dos letras (ISO 3166-1 alpha-2) 
    // en la representación de emoji de la bandera.
    const codePoints = countryCode
        .toUpperCase()
        .split('')
        .map(char => 127397 + char.charCodeAt()); // 127397 es el offset de la 'A' regional indicator symbol
    return String.fromCodePoint(...codePoints);
}
