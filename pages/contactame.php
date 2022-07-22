<?php $page = 'contactame';include '../template/navbar.php';?>

<section id="bodyContact">
<header class="header-footer">
	<h1 class="contactame">Contactame</h1>
</header>
<div id="form">

<div class="pixel" id="pixel"></div>
<div class="pixel" id="pixel2"></div>

<form id="waterform">

<div class="formgroup" id="name-form">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" required>
</div>

<div class="formgroup" id="email-form">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" required>
</div>

<div class="formgroup" id="message-form">
    <label for="message">Escribí tu mensaje</label>
    <textarea id="message" name="message" required></textarea>
</div>

	<input type="submit" id="botonEnviar" value="Enviar">
</form>
<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('user_UBj6shraSoHdtKBwf947G')
</script>

</section>


<?php include '../template/footer.php';?>



