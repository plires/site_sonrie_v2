<header class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<a class="branding" href="./">
				<img class="img-fluid logo transition" src="./img/header/logo-sonrie-vida.png" alt="logo sonrie la vida">
			</a>

			<nav>
				<ul>
					<?php $res = $current == 'quienes_somos' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./quienes-somos.php">Quienes somos</a>
					</li>

					<?php $res = $current == 'que_hacemos' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./que-hacemos.php">Que hacemos</a>
					</li>

					<?php $res = $current == 'investigacion' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./investigacion.php">Investigación</a>
					</li>

					<?php $res = $current == 'contacto' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a class="transition" href="./contacto.php">Contacto</a>
					</li>

					<?php $res = $current == 'contacto' ? 'active' : ''; ?>
					<li class="<?= $res ?>">
						<a href="./contacto.php" class="btn btn-primary">Sumate</a>
					</li>

				</ul>
			</nav>
			
			<div id="toggleIcon">
				<i id="hamburger" class="fas fa-bars transition"></i>
			</div>

		</div>
	</div>
</header>