<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>

<header>
	<h1>Contactame</h1>
</header>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

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
    
</body>
</html>