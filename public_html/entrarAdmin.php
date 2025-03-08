<?php
require_once( "autoload.php" );
?>
<html>
<head>
	<title>Login de Administradores do Projeto FindMe</title>
</head>
<body>
<center>
<?php
	$view = new LoginView();
	$view->carregar( 'admin' );
	$view->mostrarFormulario();
?>
</center>
</body>
</html>
