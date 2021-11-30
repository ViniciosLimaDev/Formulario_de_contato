<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="./js/validate.js"></script>   
    <script src="./js/localization/messages_pt_BR.js"></script>
<title>Onfiak DEV 1</title>
</head>
<body>
		<form id="form" method="post">
		<div class="form-row bd-example" id="capacityform">
        	<div class="text-center">
            	Preencha os dados abaixo para enviar o cadastro.<br /><br />
            </div>
        	<div class="form-group col-md-10">
                <label for="nome">Nome*:</label>	 
                <input type="text" class="form-control" name="nome" id="name" onclick="iniciartempo()"  />
            </div>

            <div class="form-group col-md-2">
                <label for="idade">Idade*:</label> 	 
                <input type="number" class="form-control" name="idade" id="idade" />
            </div>

            <div class="form-group col-md-8">
                <label for="email">Email*:</label> 	 
                <input type="email" class="form-control" name="email"  id="email"/>
            </div>

            <div class="form-group col-md-4">
                <label for="telefone">Telefone:</label> 
                <input type="phone" class="form-control" name="telefone"  id="telefone"/>
            </div>

            
            <div class="form-group col-md-6">
            <input type="submit" class="btn btn-primary" name="enviar" id="enviar" onclick="fimtempo()" value="Enviar"/>
            </div>
        </div>
        </form>
</body>
</html>
