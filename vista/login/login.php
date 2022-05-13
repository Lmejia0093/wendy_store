<!doctype html>
<html lang="es">
  <head>
  	<title>Ingresar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/login/images/fondoestrellas.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Wendy Store</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"></h3>
		      	<form action="?c=validar" class="signin-form" method="POST">

		      		<div class="form-group">
		      			<input type="text" class="form-control" name="txtusuario" placeholder="Usuario">
							  
                      <?php if (isset($mensaje1)) {
                    echo $mensaje1;
                    
                }  ?>
                    
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="txtclave" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
                    <input type="submit" name="btn_loguearte"value="ingresar" class="form-control btn btn-primary submit px-3" >
                    <?php if (isset($mensaje2)) {
                    echo $mensaje2;
                    
                }  ?>
	            </div>
	        
	       
                
	          </form>
	        
			</div>
		</div>
	</section>

	<script src="assets/login/js/jquery.min.js"></script>
  <script src="assets/login/js/popper.js"></script>
  <script src="assets/login/js/bootstrap.min.js"></script>
  <script src="assets/login/js/main.js"></script>

	</body>
</html>

