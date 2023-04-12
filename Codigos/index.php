<?php 
session_start();
if (isset($_SESSION['lang'])) {
	$idioma = $_SESSION['lang'];
}else{
	$iidoma = 'en';
}

$archivo = file_exists("php/idiomas/$idioma.json") ? 
			"php/idiomas/$idioma.json" : 
			"php/idiomas/en.json";

$contenido = file_get_contents($archivo);
$palabras = json_decode($contenido, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" >
	<title>Nourddin Benhadi</title>
</head>
<body>

	<!---------------- HEADER ---------------->
	<header>
		<div class="logo">
			<a href="index.html" onclick="window.location.reload()">NOURDDIN</a>
		</div>
		<nav class="menu">
			<ul>
				<li><a href="#about-section"><?php echo $palabras['menu']['menu_acerca']; ?></a></li>
				<li><a href="#experience-section"><?php echo $palabras['menu']['menu_experiencia']; ?></a></li>
				<li><a href="#project-section"><?php echo $palabras['menu']['menu_portafolio']; ?></a></li>
				<li><a href="#contact-section"><?php echo $palabras['menu']['menu_contacto']; ?></a></li>
			</ul>
		</nav>
		<div class="right-menu">
			<div class="language-container">
			  <div class="languageDropdown-section">
			    <a href="#"><i class="fas fa-globe"></i></a>
			    <ul class="dropdownLanguage-content">
			      <li><a href="php/lang.php?idk=en">EN</a></li>
			      <li><a href="php/lang.php?idk=fr">FR</a></li>
			      <li><a href="php/lang.php?idk=es">ES</a></li>
			    </ul>
			  </div>
			</div>

			<div class="cv-menu">
				<a href="../Archivos/CV.jpg" class="button-cvMenu" target="_blank">Curriculum</a>
			</div>
		</div>
	</header>

	<div class="main-container">

		<div class="socialMedia-menu">
			<ul>
				<li><a href="https://github.com/nxrddinbnh"><i class="fab fa-github"></i></a></li>
				<li><a href="https://www.instagram.com/nixiusgfx/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/nourddin-benhadi-35395426a/"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="https://www.behance.net/nixiusdev"><i class="fab fa-behance"></i></a></li>
			</ul>
			<div class="verticalLine-menu"></div>
		</div>

		<!---------------- HOME ---------------->
		<div id="home-section">
		<div class="home-container">
			<div class="left">
				<h1><?php echo $palabras['home']['home_saludo']; ?> <font id="name">Nourddin</font> <font id="last-name">Benhadi</font>,</h1>
				<p><?php echo $palabras['home']['home_parrafo']; ?></p>
				<nav class="button-nav">
					<a href="#project-section" id="button-home" class="button-download"><?php echo $palabras['home']['home_botonTrabajo']; ?></a>
					<a href="#contact-section" id="button-home" class="button-talk"><?php echo $palabras['home']['home_botonHablar']; ?></a>
				</nav>
			</div>
			<div class="right">
				<img src="../Archivos/png/vectorPantalla.png" alt="">
			</div>
		</div>
		</div>


		<!---------------- ABOUT ---------------->
		<div id="about-section">
			<div class="about-container" style="margin: 30px;">
				<div id="sections-title">
					<h2><?php echo $palabras['about']['about_titulo']; ?></h2>
					<p><?php echo $palabras['about']['about_tituloSegundo']; ?></p>
				</div>
				<div id="about-notTilte">
					<div class="about-left">
						<img src="../Archivos/png/vectorAbout.png" alt="">
					</div>
					<div id="about-right">
						<div id="about-text">
							<p><?php echo $palabras['about']['about_saludo']; ?> <span class="textAbout-gradientAnimation">Nourddin Benhadi</span><?php echo $palabras['about']['about_texto']; ?><br><br>
								<?php echo $palabras['about']['about_texto2']; ?><br><br>
								<?php echo $palabras['about']['about_texto3']; ?><br><br>
								<?php echo $palabras['about']['about_texto4']; ?>
								<ul class="technologies">
									<li><i class="bi bi-check"></i>HTML</li>
									<li><i class="bi bi-check"></i>Photoshop</li>
									<li><i class="bi bi-check"></i>Stream Pack</li>
									<li><i class="bi bi-check"></i>CSS</li>
									<li><i class="bi bi-check"></i>After Effects</li>
									<li><i class="bi bi-check"></i>Banner / Header</li>
									<li><i class="bi bi-check"></i></li>
									<li><i class="bi bi-check"></i>Blender</li>
									<li><i class="bi bi-check"></i>Logos</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!---------------- EXPERIENCE ---------------->
		<div id="experience-section">
			<div id="sections-title">
				<h2><?php echo $palabras['experience']['experience_titulo']; ?></h2>
				<p><?php echo $palabras['experience']['experience_tituloSegundo']; ?></p>
			</div>
		</div>

		<!---------------- PROJECT ---------------->
		<div id="project-section">
			<div id="sections-title">
				<h2><?php echo $palabras['project']['project_titulo']; ?></h2>
				<p><?php echo $palabras['project']['project_tituloSegundo']; ?></p>
			</div>
			<div class="img-gallery">
				<a href="../Archivos/Diseños/Stream Pack/3.jpg" target="_blank">
					<img src="../Archivos/Diseños/Stream Pack/3.jpg" alt="">
				</a>
				<a href="../Archivos/Diseños/Stream Pack/4.jpg" target="_blank">
					<img src="../Archivos/Diseños/Stream Pack/4.jpg" alt="">
				</a>
				<a href="../Archivos/Diseños/Stream Pack/Animado/1.mp4" target="_blank">
					<video autoplay loop muted>
						<source src="../Archivos/Diseños/Stream Pack/Animado/1.mp4" type="video/mp4">
					</video>
				</a>
				<a href="../Archivos/Diseños/Stream Pack/Animado/3.mp4" target="_blank">
					<video autoplay loop muted>
					<source src="../Archivos/Diseños/Stream Pack/Animado/3.mp4" type="video/mp4">
					</video>
				</a>
				<a href="../Archivos/Diseños/Banner/4.jpg" target="_blank">
					<img src="../Archivos/Diseños/Banner/4.jpg" alt="">
				</a>
				<a href="../Archivos/Diseños/Header/1.jpg" target="_blank">
					<img src="../Archivos/Diseños/Header/1.jpg" alt="">
				</a>
				<a href="../Archivos/Diseños/Stream Pack/Animado/2.mp4" target="_blank">
					<video autoplay loop muted>
						<source src="../Archivos/Diseños/Stream Pack/Animado/2.mp4" type="video/mp4">
					</video>
				</a>
				<a href="../Archivos/Diseños/Header/2.jpg" target="_blank">
					<img src="../Archivos/Diseños/Header/2.jpg" alt="">
				</a>
				<a href="../Archivos/Diseños/Stream Pack/2.jpg" target="_blank">
					<img src="../Archivos/Diseños/Stream Pack/2.jpg" alt="">
				</a>
			</div>
			<a href="https://www.behance.net/nixiusdev" target="_blank"><button class="project-button"><?php echo $palabras['project']['project_botonVermas']; ?></button></a>
		</div>

		<!---------------- CONTACT ---------------->
		<section id="contact-section">
			<div class="contact-container">
				<div class="contact-form">
					<div id="sections-title">
						<h2><?php echo $palabras['contact']['contact_titulo']; ?></h2>
						<p><?php echo $palabras['contact']['contact_tituloSegundo']; ?></p>
					</div>
					<form>
						<div class="form-control">
							<label for="name"><?php echo $palabras['contact']['contact_nombre']; ?></label>
							<input type="text" placeholder="<?php echo $palabras['contact']['contact_nombreLabel']; ?>" required>
						</div>
						<div class="form-control">
							<label for="email"><?php echo $palabras['contact']['contact_email']; ?></label>
							<input type="email" placeholder="<?php echo $palabras['contact']['contact_emailLabel']; ?>" required>
						</div>
						<div class="form-control">
							<label for="message"><?php echo $palabras['contact']['contact_mensaje']; ?></label>
							<textarea placeholder="<?php echo $palabras['contact']['contact_mensajeLabel']; ?>" required></textarea>
						</div>
						<button type="submit"><?php echo $palabras['contact']['contact_enviar']; ?></button>
					</form>
				</div>
				<div class="contact-sidebar">
					<img src="../Archivos/logoNixiusIG.jpg">
				</div>
			</div>
		</section>




	</div>






	<!---------------- FOOTER ---------------->
	<footer>
	<div class="footer-container">
	<p>&copy; <?php echo $palabras['footer']['footer_derechos']; ?><span>Nourddin Benhadi</span></p>
	</div>
	</footer>

	<!---------------- OTROS ---------------->
	<div class="cursor1"></div>
	<div class="cursor2"></div>

	
</body>
	<script src="js/script.js"></script>
</html>