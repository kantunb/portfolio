<?php

include __DIR__ . '/assets/php/_general.php';

?>

<!doctype html>
<html lang="fr">

	<head>
		<title>Portfolio Quentin B.</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- KNACSS CSS
				<link rel="stylesheet" href="https://raw.githubusercontent.com/raphaelgoetter/KNACSS/master/css/knacss.css" /> -->
		<!-- Bootstrap CSS -->
		<link
		rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> <!-- Fancybox CSS -->
		<link
		rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
		<!-- Leaflet CSS -->
		<link
		rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
		<!-- Font Awesome CSS -->
		<link
		rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS perso -->
		<link rel="stylesheet" href="./assets/css/styles.css">

	</head>

	<body>

		<header>
			<nav>
				<!-- DESKTOP menu -->
				<div id="menu-desktop">
					<h3>Menu</h3>
					<ul>
						<li><a href="#start_section" class="scrollTo">\ start</a></li>
						<li><a href="#work_section" class="scrollTo">\ work</a></li>
						<li><a href="#skills_section" class="scrollTo">\ skills</a></li>
						<li><a href="#about_section" class="scrollTo">\ about</a></li>
						<li><a href="#contact_section" class="scrollTo">\ contact</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<!-- START section -->
			<section id="start_section">
				<div id="title">
					<h1>
						<span id="line1">Hi,</span>
						<span id="line2">I'm Quentin B.</span>
						<span id="line3">and this is</span>
						<span id="line4">what I
							<a id="enter" href="#work_section" class="scrollTo">do</a>
						</span>
					</h1>
				</div>
			</section>

			<!-- WORK section -->
			<section id="work_section">
				<h2>\ work</h2>

				<div class="button-group filter-button-group">
					<button class=" btn btn-dark ml-1 mb-3" data-filter="*">show all</button>
					<button class=" btn btn-dark ml-1 mb-3" data-filter=".web">web</button>
					<button class=" btn btn-dark ml-1 mb-3" data-filter=".video">video</button>
				</div>

				<div class="grid">

				<div class="grid-item web">
					<a data-fancybox="gallery" data-src="#youcantbuybuy" href="javascript:;">
						<figure>
							<img src="./assets/img/youcantbuybuy_website.jpg" alt="Site web Youcanbuybuy">
							<div class="workTitle">
								<figcaption>Youcantbuybuy</figcaption>
							</div>
						</figure>
					</a>
					<div style="display: none; background-image: url(./assets/img/youcantbuybuy_website.jpg);" id="youcantbuybuy" class="modalWork">
						<div class="workTitle container">
							<div class="row">
								<div class="col-12 col-sm-11">
									<div class="modalTitle d-md-flex">
										<h4>Youcantbuybuy website</h4><small>- projet en cours -</small>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="grid-item video">
					<a data-fancybox="gallery" data-src="#deambulons" href="javascript:;">
						<figure>
							<img src="./assets/img/deambulons.png" alt="Déambulons - video corporate">
							<div class="workTitle">
								<figcaption>Déambulons</figcaption>
							</div>
						</figure>
					</a>
					<div style="display: none; background-image: url(./assets/img/deambulons.png);" id="deambulons" class="modalWork">
						<div class="workTitle container">
							<div class="row">
								<div class="col-12 col-sm-11">
									<div class="modalTitle d-md-flex">
										<h4>Déambulons - Video corporate</h4>
									</div>
									<p class="modalSkills">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure inventore deleniti delectus dolores magnam nulla sed quas nihil, laboriosam officia at incidunt. Dolor sint voluptatibus praesentium exercitationem accusamus culpa!
									</p>
									<a href="https://vimeo.com/248524139" target="_blank"><button class="plus d-sm-none btn btn-light btn-sm">+</button></a>
								</div>
							</figure>
						</a>
						<div style="display: none; background-image: url(./assets/img/deambulons.png);" id="deambulons" class="modalWork">
							<div class="workTitle container">
								<div class="row">
									<div class="col-12 col-sm-11">
										<div class="modalTitle d-md-flex">
											<h4>Déambulons - Video corporate</h4>
										</div>
										<p class="modalSkills">
											Vidéo corporate présentant les réalisations et les process de fabrication de mobilier et aménagemens en bambou.<br/>
											<a href="www.deambulons.com">www.deambulons.com</a>
										</p>
										<a href="https://vimeo.com/248524139" target="_blank">
											<button class="plus d-sm-none btn btn-light btn-sm">+</button>
										</a>
									</div>
									<div class="arrow d-none d-sm-flex offset-11 col-1 offset-sm-0">
										<a href="https://vimeo.com/248524139" target="_blank">
											<i class="fa fa-lg fa-vimeo moreWork" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="grid-item web">
					<a data-fancybox="gallery" data-src="#duBeauBoulot" href="javascript:;">
						<figure>
							<img src="./assets/img/4.jpg" alt="Du Beau Boulot - site wordpress">
							<div class="workTitle">
								<figcaption>Du Beau boulot</figcaption>
							</div>
						</figure>
					</a>
					<div style="display: none; background-image: url(/assets/img/4.jpg);" id="duBeauBoulot" class="modalWork">
						<div class="workTitle container">
							<div class="row">
								<div class="col-12 col-sm-11">
									<div class="modalTitle d-md-flex">
										<h4>Du Beau Boulot - site wordpress</h4>
									</div>
									<p class="modalSkills">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure inventore deleniti delectus dolores magnam nulla sed quas nihil, laboriosam officia at incidunt. Dolor sint voluptatibus praesentium exercitationem accusamus culpa!
									</p>
									<a href="#" target="_blank"><button class="plus d-sm-none btn btn-light btn-sm">+</button></a>
								</div>
							</figure>
						</a>
						<div style="display: none; background-image: url(./assets/img/faurecia-corpo.png);" id="faureciaCorpo" class="modalWork">
							<div class="workTitle container">
								<div class="row">
									<div class="col-12 col-sm-11">
										<div class="modalTitle d-md-flex">
											<h4>Faurecia</h4>
										</div>
										<p class="modalSkills">
											Video corporate réalisée pour l'équimentier afin de présenter son site de Caligny.
										</p>
										<a href="https://vimeo.com/187024444" target="_blank">
											<button class="plus d-sm-none btn btn-light btn-sm">+</button>
										</a>
									</div>
									<div class="arrow d-none d-sm-flex offset-11 col-1 offset-sm-0">
										<a href="https://vimeo.com/187024444" target="_blank">
											<i class="fa fa-lg fa-vimeo moreWork" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="grid-item web">
					<a data-fancybox="gallery" data-src="#faureciaCorpo" href="javascript:;">
						<figure>
							<img src="./assets/img/faurecia-corpo.png" alt="Faurecia - video corporate">
							<div class="workTitle">
								<figcaption>Faurecia</figcaption>
							</div>
						</figure>
					</a>
					<div style="display: none; background-image: url(./assets/img/faurecia-corpo.png);" id="faureciaCorpo" class="modalWork">
						<div class="workTitle container">
							<div class="row">
								<div class="col-12 col-sm-11">
									<div class="modalTitle d-md-flex">
										<h4>Faurecia - video corporate</h4>
									</div>
									<p class="modalSkills">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure inventore deleniti delectus dolores magnam nulla sed quas nihil, laboriosam officia at incidunt. Dolor sint voluptatibus praesentium exercitationem accusamus culpa!
									</p>
									<a href="https://vimeo.com/187024444" target="_blank"><button class="plus d-sm-none btn btn-light btn-sm">+</button></a>
								</div>
							</figure>
						</a>
						<div style="display: none; background-image: url(./assets/img/le_bon_tri.png);" id="leBonTri" class="modalWork">
							<div class="workTitle container">
								<div class="row">
									<div class="col-12 col-sm-11">
										<div class="modalTitle d-md-flex">
											<h4>le Bon Tri</h4><small>- projet de fin de formation -</small>
										</div>
										<div class="modalSkills">
											<p>Le Bon Tri permet d'informer les utilisateurs sur les consignes de tri dans le Grand Lyon et de localiser les points de collectes</p>
											<p>Stack technique : Symfony 4.4 / MySQL / HTML5 / CSS3 / Twig / JS /  Leaflet / Isotop / Bootstrap / jQuery</p>
											<p>Réalisé avec 3 autres étudiants, j'ai principalemnt pris en charge l'intégration de la librairie Leaflet, utilisant les données fournies par l'API de la métropole du Grand Lyon (<a href="https://data.grandlyon.com" target="_blank">data.grandlyon.com</a>)</p>
										</div>
										<a href="https://github.com/kantunb/le-bon-tri" target="_blank">
											<button class="plus d-sm-none btn btn-light btn-sm">+</button>
										</a>
									</div>
									<div class="arrow d-none d-sm-flex offset-11 col-1 offset-sm-0">
										<a href="https://github.com/kantunb/le-bon-tri" target="_blank">
											<i class="fa fa-lg fa-github moreWork" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="grid-item web">
					<a data-fancybox="gallery" data-src="#faureciaCorpo" href="javascript:;">
						<figure>
							<img src="./assets/img/le_bon_tri.png" alt="le Bon Tri - site web">
							<div class="workTitle">
								<figcaption>Le Bon Tri</figcaption>
							</div>
						</figure>
					</a>
					<div style="display: none; background-image: url(./assets/img/le_bon_tri.png);" id="faureciaCorpo" class="modalWork">
						<div class="workTitle container">
							<div class="row">
								<div class="col-12 col-sm-11">
									<div class="modalTitle d-md-flex">
										<h4>Faurecia - video corporate</h4>
									</div>
									<p class="modalSkills">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure inventore deleniti delectus dolores magnam nulla sed quas nihil, laboriosam officia at incidunt. Dolor sint voluptatibus praesentium exercitationem accusamus culpa!
									</p>
									<a href="https://vimeo.com/187024444" target="_blank"><button class="plus d-sm-none btn btn-light btn-sm">+</button></a>
								</div>
							</figure>
						</a>
						<div style="display: none; background-image: url(./assets/img/faurecia-corpo.png);" id="nestleEvent" class="modalWork">
							<div class="workTitle container">
								<div class="row">
									<div class="col-12 col-sm-11">
										<div class="modalTitle d-md-flex">
											<h4>Nestlé</h4>
										</div>
										<p class="modalSkills">
											Film événementiel - Soirée corporate pour Nestlé Mexique au Château de Bagnols (Beaujolais).<br/>
										</p>
										<a href="https://vimeo.com/231837347" target="_blank">
											<button class="plus d-sm-none btn btn-light btn-sm">+</button>
										</a>
									</div>
									<div class="arrow d-none d-sm-flex offset-11 col-1 offset-sm-0">
										<a href="https://vimeo.com/231837347" target="_blank">
											<i class="fa fa-lg fa-vimeo moreWork" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

			<!-- SKILLS section -->
			<section id="skills_section">
				<h2>\ skills</h2>
				<div class="container">
					<div class="row">
						<div class="col-4 pl-0">
							<h3>Langages</h3>
						</div>
						<div class="col-4 pl-0">
							<h3>Formation</h3>
						</div>
						<div class="col-4 pl-0">
							<h3>Compétences</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ABOUT section -->
		<section id="about_section">
			<h2>\ about</h2>
			<p>Je me suis lancé debut 2020 dans une formation accélérée en développement web, c’est passionnant,
				motivant, déroutant aussi quand on revient aux études après quelques années dans le monde du
				travail.<br />
				Et oui, je ne suis pas un tout jeune étudiant mais plutôt un trentenaire qui a un peu roulé sa bosse en
				production et communication (musique principalement), réalisation video avec une touche
				d’entrepreneuriat pendant quelques années.<br />
				Jetez un oeil à mon <a href="https://www.linkedin.com/in/quentinbrouillet/" target="_blank" rel="noopener noreferrer">Linkedin</a>, ce sera plus pertinent qu’une longue
				démonstration auto-centrée.</p>
		</section>

		<!-- CONTACT section -->
		<section id="contact_section">
			<div id="contact_form">
				<h2>\ contact</h2>

				<?php if (array_key_exists('errors', $_SESSION)) : ?>
					<div class="alert alert-danger" role="alert">
						<?= implode('<br />', $_SESSION['errors']); ?>
					</div>
				<?php elseif (array_key_exists('success', $_SESSION)) : ?>
					<div class="alert alert-success" role="alert">
						Votre message a bien été envoyé
					</div>
				<?php endif ?>

				<form id="contact" autocomplete="on" action="./assets/php/contact.php" method="POST">
					<?php $form = new Form ?>
					<div class="half">
						<?= $form->text('name', 'Nom') ?>
						<?= $form->email('email', 'Email'); ?>
						<?= $form->text('subject', 'Sujet'); ?>
						<?= $form->textarea('message', '30', '10', 'Message'); ?>
						<input type="submit" value="Envoyer" class="btn btn-dark" />
				</div>
					<!-- <li class="half">
						<input type="text" class="form-control" placeholder="Nom" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '' ?>" required />
						<input type="email" class="form-control" name="email" id="" placeholder="Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>" required />
					</li>
					<li>
						<input type="text" class="form-control" placeholder="Sujet" name="subject" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : '' ?>" required />
					</li>
					<li>
						<textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message" required /><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '' ?></textarea>
					</li>
					<li>
						<input type="submit" value="Envoyer" class="btn btn-dark" />
					</li> -->
				</form>
			</div>
			<div id="map">
				<div class="box_fixed">
					<p>Quentin Brouillet<br />
						16 rue d'Austerlitz<br />
						69004 Lyon - France<br />
						@ quentin@brouillet.fr</p>
				</div>
				<div id="mapid"></div>
			</div>
		</section>

		</main>

	<footer></footer>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- Isotope JS -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<!-- Fancybox JS -->
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- Leaflet JS -->
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<!-- Fontawesome JS -->
	<script src="https://kit.fontawesome.com/d099b76721.js" crossorigin="anonymous"></script>
	<!-- Specific JavaScript -->
	<script src="./assets/js/scripts.js" async></script>

	</body>

</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['inputs']);
unset($_SESSION['success']);
?>
