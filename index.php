<?php
	$teste = $_GET['teste'];

	$teste = substr($teste, 5,17);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>UNIMED</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/jquery.numpad.css">
<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--===============================================================================================-->	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
<script src="js/script.js"></script>
<script>
	
	function requisitarLoading(url){
		//Incluindo o GIF de loading na página
		if(!document.getElementById('loading')){
			let imgLoading = document.createElement('img');
			imgLoading.id = 'loading';
			imgLoading.src = 'img/loading.gif';
			imgLoading.Classname = 'rounded mx-auto d-block';

			document.getElementById('conteudo').appendChild(imgLoading);
		}	
		let ajax = new XMLHttpRequest();

		ajax.open('GET',url)

		ajax.onreadystatechange = () =>{
			if(ajax.readyState === 4){
				console.log('Requisição finalizada');
				
				function msgEncerramento() {
					document.getElementById('loading').remove();
					}
					setTimeout(msgEncerramento, 2700)
			}
		}

		ajax.send();
	}

</script>
<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact200">
			<div class="header">
				<h2>UNIMED</h2>
			</div>
			<div class="wrap-contact100">
				<div class="wrap-input100 validate-input" data-validate="O código é obrigatório">
					<br>
					<br>
					<br>
					<span class="label-input100">Código do Beneficiário</span>
					<form action="" method="GET">
						<input value="<?php echo $teste; ?>" name="teste" class="input100" type="text"  id="teste">
					<span class="focus-input100"></span>
					</form>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" data-toggle='modal' data-target="#staticBackdrop" onclick="copiarTexto()">
							<span>
								Copiar
								
							</span>
						</button>				
					</div>
				</div>
			</div>
			<div class="footer">
				&nbsp;
			</div>
			<button id="conteudo" onclick="requisitarLoading(scannerExecute())" ><img src="img\camera.png" width="35px;" style="position: absolute;bottom: 510px;left: 61%; z-index: 999;"></button>
		</div>
	</div>
	<div class="col-md-10" >
		<video id="preview"></video>
	</div>
<div id="dropDownSelect1"></div>
</body>
</html>