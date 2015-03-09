<!DOCTYPE html>
<html lang="es">
	<head>
		<meta  charset ="utf-8">
		<link rel="stylesheet" href="Estilos.css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="scripPrincipal.js"></script>
		<title>Diario Virtual</title>
	</head>	

	<body>

		<div id = "Contenido">
			<header>
				<hgroup>
					<h1>Mi Diario</h1>
				</hgroup>
				<div id=cont_menu >
					<nav id="menu">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">Diario</a>
								<ul>
									<li><a href="">Diario</a></li>										
									<li><a href="">Cartilla</a></li>
									<li><a href="">Avisos</a></li>
									<li><a href="">Horario</a></li>
								</ul>
							</li>
							<li><a href="">Materias</a> 
								<ul>
									<li><a href="">Texto</a>										
										<ul>
											<li><a href="">Estudios Sociales</a></li>										
											<li><a href="">Ciencias Naturales</a></li>
											<li><a href="">Matemática</a></li>
											<li><a href="">Lengua y literatura</a></li>
											<li><a href="">Educacón Vial</a></li>
										</ul>
									</li>
									<li><a href="">Video</a>
										<ul>
											<li><a href="">Estudios Sociales</a></li>										
											<li><a href="">Ciencias Naturales</a></li>
											<li><a href="">Matemática</a></li>
											<li><a href="">Lengua y literatura</a></li>
										</ul>
									</li>									
								</ul>
							</li>
							<li><a href="">Planificacion</a></li>
							<li><a href="">Calificaciones</a></li>
							<li><a href="">Planificacion</a></li>
							<li><a href="">Acerca</a></li>
						</ul>
                	</nav>	
                </div>				
             </header>
			<section>
				<div id="Textopf">
					<form action="" method="post" name="acceder" id="acceder">
				    	<p>
				    	  <label for="txt_usuario">Usuario:</label>
				    	  <input type="text" id="txt_usuario" />
				    	  <label for="txt_ontraseña">Contraseña:</label>
				    	  <input type="password" id="txt_ontraseña" />
			    	  </p>
				    	<p>
				    	  <input type="button"  id="btn_acceder" value="Acceder" />
                        </p>
				    </form>
					<hgroup>
						<h1 align="left">
							Bienvenido a "Mi Diario Virtual"
						</h1>
					</hgroup>	
                    
					<article>
						<p align="left">Esta página esta pensada en mantener</p>
					</article>
				    <aside>
						<p align="left"> <a href="http://blog.espol.edu.ec/ldyepez/ciudad-de-ariel/" target="new">Visita nuestro blog </a></p>
					 </aside>				    
				</div>
			</section>
		</div>
		<footer>
          <canvas id="micanvas">undefined</canvas>
		</footer>
	</body>

</html>