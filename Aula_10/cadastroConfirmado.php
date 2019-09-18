<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira de Ciências</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <a class="navbar-brand text-center" href="index.php">Feira de Ciências</a>
    </nav>

    <section class="container my-4">
        <div class="alert alert-success text-center" role="alert">
            Cadastro de Grupo Confirmado!
        </div>
        <h1 class="text-center my-4">Grupos Cadastrados</h1>
        <div class="row" id="cadastro">
            
        </div>
    </section>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		$(document).ready(function(){
			$('#cadastro').load('cadastros.php');
		});
	</script>
</body>

</html>