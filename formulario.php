
<?php
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
?>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
<title>Hola</title>
</head>
<body>
<h1>Esto fue escrito estáticamente, en HTML</h1>
    <div class="content">

    </div>
</body>
</html>