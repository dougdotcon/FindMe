<?php
require_once( "autoload.php" );
?>
<html>
<head>
	<title>Login de Voluntários do Projeto FindMe</title>
</head>
<body>
<center>
<?php
	$view = new LoginView();
	$view->carregar( 'voluntario' );
	$view->mostrarFormulario();
?>
</center>
</body>
</html>
