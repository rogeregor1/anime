<?php

session_start();

if (isset($_GET['cerrar_sesion'])) {
	session_unset();
	session_destroy();
}
?>








<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ART</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">INICIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACTO</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ART</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">INICIO</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACTO</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCHANDISE</a>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:1500px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/mySlides/1.jpg" style="width:60%">
   
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/mySlides/2.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/myslides/3.jpg" style="width:60%">

  </div>
  <div class="mySlides w3-display-container w3-center">
  <img src="img/mySlides/4.jpg" style="width:60%">
   
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/mySlides/5.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/myslides/6.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
  <img src="img/mySlides/7.jpg" style="width:60%">
   
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/mySlides/8.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/myslides/9.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
  <img src="img/mySlides/10.jpg" style="width:60%">
   
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/mySlides/11.jpg" style="width:60%">
    
  </div>
 

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1000px" id="band">
    <h2 class="w3-wide">THE ART</h2>
    <p class="w3-opacity"><i>We love Art</i></p>
    <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p style="font-size: x-large">Anime and Comics</p>
        <img src="img/producto/Batman_581.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:90%">
      </div>
      <div class="w3-third">
        <p style="font-size: x-large">Plays</p>
        <img src="img/producto/Sandy_414.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:90%">
      </div>
      <div class="w3-third">
        <p style="font-size: x-large">Library</p>
        <img src="img/producto/El_Principito_330.jpg" class="w3-round" alt="Random Name" style="width:90%">
      </div>
    </div>
  </div>



<!-- The Tour Section -->
<div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
	<h2 class="w3-wide">INICIAR SESSION</h2>
      
<header class="hero" style="max-width:1000px">

	<section class="hero__main content">
		<div class="hero__texts">
			<h1 class="hero__title">Holla</h1>
			<a href="" class="hero__cta">Loguin!</a>
		</div>
		
		<figure >
			<img src="img/anime.svg" class="hero__img">
		</figure>
	</section>

	<div class="hero__waves">
		<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
			<path d="M0.00,49.99 C262.08,217.40 378.89,-120.09 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #dfc7e1;"></path>
		</svg>
	</div>
</header>

<section class="modal">
	<div class="modal__container">
		<a href="#" class="modal__close">X</a>

		<!--Accion modal para mostrar formulario-->
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesión para entrar en la página</p>
					<button id="btn__iniciar-sesion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>Regístrate para que puedas iniciar sesión</p>
					<button id="btn__registrarse">Regístrarse</button>
				</div>
			</div>

			<!--Formulario de Login y registro-->
			<div class="contenedor__login-register">

				<!--Login-->
				<form id="formul" action="" class="formulario__login" method="POST" onclick="return validarLogin()">
					<h2 style="color: darkmagenta">Iniciar Sesión</h2>
					
					<!-- Grupo: Correo Electronico -->
					<div class="formulario__grupo" id="grupo__correo">
						<label for="email" class="formulario__label">Correo Electrónico</label>
						<div class="formulario__grupo-input">
							<input type="email" class="formulario__input" name="correo" id="email" placeholder="correo@correo.com" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
					</div>

					<!-- Grupo: Contraseña -->
					<div class="formulario__grupo" id="grupo__password">
						<label for="login-clave" class="formulario__label">Contraseña</label>
						<div class="formulario__grupo-input">
							<input type="password" class="formulario__input" name="password" id="login-clave" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">La contraseña debe tener 7 dígitos como min y puede contener numeros, Mayusculas, guiones y simbolo $.</p>
					</div>
					
					<!-- Grupo: Advertencias Generales -->
					<div class="formulario__mensaje" id="formulario__mensaje">
						<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
					</div>

					<!-- Grupo: Button -->
					<div class="formulario__grupo formulario__grupo-btn-enviar">
						<button id="btn__iniciar-sesion" type="submit" class="formulario__btn" style="background-color: #721e44; color: #dfc7e1;">Enviar</button>
						<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
						<a style="color: brown" href="recuperarClave.html" class="btn">Recuperar contraseña</a>
					</div>
					<?php
					if (isset($_POST['correo']) && isset($_POST['password'])) {
						require_once "php/iniciar_sesion.php";
					}
					?>
				</form>

				<!--Registro-->
				<form id="formulario" action="" class="formulario__register" method="POST" onclick="return validarForm()">
					<h2 style="color: darkmagenta">Regístrarse</h2>
					
					<!-- Grupo: Nombre -->
					<div class="formulario__grupo" id="grupo__nombre">
						<label for="nombre" class="formulario__label">Nombre</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Johnnny">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El nombre tiene que ser de 2 a 40 dígitos y solo puede contener letras.</p>
					</div>

					<!-- Grupo: Apellido -->
					<div class="formulario__grupo" id="grupo__apellido">
						<label for="apellido" class="formulario__label">Apellido</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Due Doe">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El apellido tiene que ser de 2 a 40 dígitos y solo puede contener letras.</p>
					</div>

					<!-- Grupo: Usuario -->
					<div class="formulario__grupo" id="grupo__usuario">
						<label for="usuario" class="formulario__label">Usuario</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="john123" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion.</p>
					</div>

					<!-- Grupo: Contraseña -->
					<div class="formulario__grupo" id="grupo__password1">
						<label for="password1" class="formulario__label">Contraseña</label>
						<div class="formulario__grupo-input">
							<input type="password" class="formulario__input" name="password1" id="password1" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">La contraseña debe tener 7 dígitos como min y puede contener numeros, Mayusculas, guiones y simbolo $.</p>
					</div>

					<!-- Grupo: Contraseña 2 -->
					<div class="formulario__grupo" id="grupo__password2">
						<label for="password2" class="formulario__label">Repetir Contraseña</label>
						<div class="formulario__grupo-input">
							<input type="password" class="formulario__input" name="password2" id="password2" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
					</div>

					<!-- Grupo: Correo Electronico -->
					<div class="formulario__grupo" id="grupo__correo2">
						<label for="correo2" class="formulario__label">Correo Electrónico</label>
						<div class="formulario__grupo-input">
							<input type="email" class="formulario__input" name="correo2" id="correo2" placeholder="correo@correo.com" autocomplete="off">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
					</div>
					
					<!-- Grupo: Terminos y Condiciones -->
					<div class="formulario__grupo" id="grupo__terminos">
						<label for="terminos" class="formulario__label">
							<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
							Acepto los Terminos y Condiciones
						</label>
					</div>

					<!-- Grupo: Advertencias Generales -->
					<div class="formulario__mensaje" id="formulario__mensaje">
						<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
					</div>

					<!-- Grupo: Button -->
					<div class="formulario__grupo formulario__grupo-btn-enviar">
						<button id="btn__registrarse" type="submit" class="formulario__btn" style="background-color: #721e44; color: #dfc7e1;">Enviar</button>
						<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
					</div>
					<?php
					if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['correo2']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['terminos'])) {
						require_once "php/registro.php";
					}
					?>
				</form>

			</div>
		</div>
		<script src="js/login.js"></script>
		<script src="js/registro.js"></script>
		<script src="js/modal.js"></script>

		<script>
			const openModal = document.querySelector('.hero__cta');
			const modal = document.querySelector('.modal');
			const closeModal = document.querySelector('.modal__close');

			openModal.addEventListener('click', (e) => {
				e.preventDefault();
				modal.classList.add('modal--show');
			});

			closeModal.addEventListener('click', (e) => {
				e.preventDefault();
				modal.classList.remove('modal--show');

			});
		</script>
	</div>
</section>




</div>
      </div>



 <!-- The Contact Section -->
 <div class="w3-container w3-content w3-padding-64" style="max-width:1000px" id="contact">
    <h2 class="w3-wide w3-center">CONTACTO</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Alicante, ES<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +34 665411711<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: rogerhurtado1809@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="img/alicante-map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by Palindromo Developer</p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
