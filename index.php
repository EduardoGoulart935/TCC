<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet"  href="CSS/login.css" />
  	
  	
  	
</head>
<body>
  	
  	<div class="macbook-pro-14-1">
		<form  id="login-form" class="form" action="autenticar.php" method="post">
    		<div class="senha">Senha:</div>
    		<div class="login">
      			<p class="login1">Login</p>
    		</div>
    		<input type="text" class="macbook-pro-14-1-child" placeholder="Login" name="login">
            <input type="text" class="macbook-pro-14-1-item" placeholder="Senha" name="senha">
    		<div class="login2">Login:</div>
    		
                <button class="macbook-pro-14-1-inner" type="submit">Entrar</button>

            
    		<div class="rectangle-div">
    		</div>
    		<div class="ainda-no-tem">Ainda não tem uma conta? </div>
    		<div>
                <a href="cadastre.html" class="resgistre-se" id="resgistreSeText">Resgistre-se</a>

            </div>
    		<div class="line-div">
    		</div>
    		<div class="macbook-pro-14-1-child1">
    		</div>
    		<div class="ou">ou</div>
    		<div class="termos-de-uso">Termos de Uso e Politca de Privacidade</div>
    		<div class="macbook-pro-14-1-child2">
    		</div>
    		<div class="continuar-com-o">Continuar com o Google</div>
    		<div class="macbook-pro-14-1-child3">
    		</div>
    		<div> <a href="#" class="esqueceu-a-senha">Esqueceu a senha?</a>

            </div>
    		<img class="icon" alt="" src="..svg">
    	</form>
  	</div>
  	
  	

  	
  	<script>
    		let rectangle2 = document.getElementById("rectangle2");
    		if(rectangle2) {
      			rectangle2.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var resgistreSeText = document.getElementById("resgistreSeText");
    		if(resgistreSeText) {
      			resgistreSeText.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    </script>
</body>
</html> 