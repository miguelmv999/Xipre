<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="estilo.css">
<body>
	
	<div class="inicioSession">
		
		
		 <div class="tituloSession"><img id="tituloWed" src="../6.png" ></div>
		  <img id="imageUser" src="../Encabezado.png">
		
		<p id="crearCuenta">Crea una cuenta en xipre</p>
		
		
		<?php if(isset($_POST["email"]) && isset($_POST["password"])){
	         
	         include_once("crearCuenta.php");
            } ?>
		

	
	   <div class="formularioCorreo">
		<div class="nombre nombreCorreo">
		<input id="email0" type="text" class="bordeTexto" placeholder="Correo Electronico" value="">	
		<input type="text" class="bordeTexto" disabled style="border:none; outline:none; display: flex; float: right; text-align: right; width: 30%; background: none;" value="@gmail.com" id="gmail" >
		</div></div>
	
	   <div class="formularioCorreo">
		<div class="nombre nombreCorreo">
		<input id="password0" type="password" class="bordeTexto" placeholder="Contraseña" value="">	
		</div></div>

		 <p id="tengoCuenta" onclick="location.href='../CrearCuenta'" style="cursor:pointer;">Crear una cuenta</p>
		
		 <div class="CajaBotonCrear"><buttom>Iniciar session</buttom></div>
		
		</div>
	
	 <form action="" method="post" hidden id="enviar">
		  <input id="email" type="text" name="email">
		  <input id="password" type="text" name="password">
	 </form>
	<script src="../Jquery/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
	<script>
		var a;
		var e;
	$(".nombre").click(function(){
	    a=$(this);
	    e=$(this).children();
		e.focus(function(){
			a.css("border","2px solid #6776FF ");
		});
		
		e.focus();
		e.blur(function(){
			a.css("border","1px solid rgba(0,0,0,20%)");
		});
	});
		
	$(".nombre input").focus(function(){
		a=$(this).parent();
		a.css("border","2px solid #6776FF");
	});
		
	$(".nombre input").blur(function(){
		a=$(this).parent();
		a.css("border","1px solid rgba(0,0,0,20%)");
	});
		
		
		
		
				var	texto="nombre";
			document.addEventListener('input', function(){
				$("#email").val(($("#email0").val()));
				$("#password").val(($("#password0").val()));
				
			texto=document.getElementById('email0').value;
			
				
		      if(texto.includes("@")){
				 $("#gmail").hide();
			  }else{
				$("#gmail").show();  
			  }	});
		
	     $("buttom").click(function(){
		 
			 $(".nombre input").each(function(){
				 if($(this).val()==""){
					$(this).parent().css("border","2px solid red");
				 }
			 });
			 
			 if($("#email").val()!="" && $("#password").val()!=""){
					 
					 if(!texto.includes("@")){
						 $("#email").val(($("#email0").val()+"@gmail.com"));
						
					 }
					
					 
					$("#enviar").submit(); 
			
				
				}
		 });
		
		
		
	</script>
</body>
</html>