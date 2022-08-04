
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast Travel</title>
   
    
    
    <link rel="stylesheet" href="../../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../../fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="usu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>	
    
    
		
       
    
</head>
<body>
    <form name="formulario" method="post">
			<label>CPF</label>
			<input type="text" name="cpf" id="cpf" />
			<br />
			<label>CNPJ</label>
			<input type="text" name="cnpj" id="cnpj" />
			<br />
			<label>RG</label>
			<input type="text" name="rg" id="rg" />
			<br />
			<label>Telefone</label>
			<input type="text" name="telefone" id="telefone" />
			<br />
			<label>Celular</label>
			<input type="text" name="celular" id="celular" />
			<br />
			<label>Salário</label>
			<input type="text" name="salario" id="salario" />
			<br />
			<label>CEP</label>
			<input type="text" name="cep" id="cep" />
			<br />
			<label>Data de Nascimento</label>
			<input type="text" name="dataNascimento" id="dataNascimento" />
			<br />
			<label>Placa</label>
			<input type="text" name="placa" id="placa" />
			<br />
			<label>Código AA.aaa.9000</label>
			<input type="text" name="codigo" id="codigo" />
			<br />
			<input type="submit" name="enviar" value="Enviar" />
		</form>
        
    <!---------------Header--------------->
    <script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#cnpj").mask("00.000.000/0000-00")
			$("#telefone").mask("(00) 0000-0000")
			$("#salario").mask("999.999.990,00", {reverse: true})
			$("#cep").mask("00.000-000")
			$("#dataNascimento").mask("00/00/0000")
			
			$("#rg").mask("999.999.999-W", {
				translation: {
					'W': {
						pattern: /[X0-9]/
					}
				},
				reverse: true
			})
			
			var options = {
				translation: {
					'A': {pattern: /[A-Z]/},
					'a': {pattern: /[a-zA-Z]/},
					'S': {pattern: /[a-zA-Z0-9]/},
					'L': {pattern: /[a-z]/},
				}
			}
			
			$("#placa").mask("AAA-0000", options)
			
			$("#codigo").mask("AA.LLL.0000", options)
			
			$("#celular").mask("(00) 0000-00009")
			
			$("#celular").blur(function(event){
				if ($(this).val().length == 15){
					$("#celular").mask("(00) 00000-0009")
				}else{
					$("#celular").mask("(00) 0000-00009")
				}
			})
		})
		</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
   
</body>
</html>