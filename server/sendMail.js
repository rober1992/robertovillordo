const btn = document.getElementById('botonEnviar');

document.getElementById('waterform')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Enviando...';

   const serviceID = 'default_service';
   const templateID = 'template_zzjdqcp';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
        botonEnviar.value = 'Enviar';
        Swal.fire({
            title: 'Mensaje enviado',
            text: "En breve me contactaré con vos!",
            icon: 'success',
            confirmButtonColor: 'yellow',
            confirmButtonText: '<a id="botonEnviado" href="../index.php">Volver al inicio</a>'
          });
    }, (err) => {
        botonEnviar.value = 'Enviar';
      alert(JSON.stringify(err));
    });
});

