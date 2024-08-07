<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

	<div class="container h-100" >
		<div id="login-row" class="row justify-content-center align-items-center h-100">
			<div id="login-column" class="col-md-6 h-100">
				<div id="login-box" class="col-md-12 h-100">
					<form id="login-form" clas="form" action="autenticar.php" method="post" border="2">
						<div class="form-group">
							<label for="username" class="">Usuário:</label><br>
							<input type="text" name="usuario" id="usuario" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="senha" class="">Senha:</label><br>
							<input type="text" name="senha" id="senha" class="form-control" required>
						</div>
						<div class="form-group mt-4">
							<input type="submit" name="submit" class="btn btn-light btn-md" value="Logar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>




	<script>
		let rectangle2 = document.getElementById("rectangle2");
		if (rectangle2) {
			rectangle2.addEventListener("click", function(e) {
				// Add your code here
			});
		}

		var resgistreSeText = document.getElementById("resgistreSeText");
		if (resgistreSeText) {
			resgistreSeText.addEventListener("click", function(e) {
				// Add your code here
			});
		}
	</script>
</body>

</html>