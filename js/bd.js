//Forma de almacenar el valor de los botones
function seleccionarValor(valor) {
    document.getElementById("busca").value = valor;
}

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'true') {
        Swal.fire({
            title: "Enviado correctamente, pronto se comunicaran contigo",
            imageUrl: "img/catpixel.gif",
            imageWidth: 300,
            imageHeight: 200,
            imageAlt: "Custom image"
          });
    }
  };
