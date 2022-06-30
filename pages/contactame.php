<?php include '../template/navbar.php';?>
<header class="header-footer">
	<h1 class="contactame">Contactame</h1>
</header>
<div id="bodyContact">
<div id="form">

<div class="pixel" id="pixel"></div>
<div class="pixel" id="pixel2"></div>

<form id="waterform" method="post">

<div class="formgroup" id="name-form">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">Escribí tu mensaje</label>
    <textarea id="message" name="message"></textarea>
</div>

	<input type="submit" value="Enviar" />
</form>

</div>

<?php include '../template/footer.php';?>



