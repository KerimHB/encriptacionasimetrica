var crypt = new JSEncrypt()

$.get("clave-publica.txt", function (clavePublica) {
    crypt.setKey(clavePublica)
})

var frmEnviarTexto = document.getElementById("frmEnviarTexto")
frmEnviarTexto.addEventListener("submit", function (event) {
    var txtTexto = document.getElementById("txtTexto")

    var texto = txtTexto.value

    txtTexto.value = crypt.encrypt(texto)

    var trHtml = '<td>' + txtTexto.value + '</td>'

    $.post("desencriptar.php", $("#frmEnviarTexto").serialize(), function (respuesta) {
        var tbody = document.getElementById("tbody")

        trHtml = '<td>' + respuesta + '</td>' + trHtml
        trHtml = '<tr>' + trHtml + '</tr>'

        tbody.innerHTML += trHtml
    })

    txtTexto.value = texto

    event.preventDefault()
})
