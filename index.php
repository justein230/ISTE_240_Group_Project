<?php
	$title='PALTS : HOME';
	$path='./';
	$nav='home';
	include($path.'assets/inc/head.php');
	// include($path.'assets/inc/nav.php');
?>
	<h2>Our Goal</h2>
	<hr>
	<picture class="titlePicture">
		<source media="(max-width: 450px)" srcset="https://i.imgur.com/ZyVnVox.png">
		<source media="(max-width: 1024px)" srcset="https://i.imgur.com/catFsFh.png">
		<img src="https://i.imgur.com/NsRGs2Q.png" alt="Bubba's workstation.">
	</picture>
	<p>
		POP &amp; LOCK the STACK is a website with references and tutorials on UNIX development for beginners and novice users.
		 The main goal of this site is to be educative and be a helpful tool for developers to use it as a guide for their work.
		 This website gives the user an idea of all the basic commands a developer should know to work in an UNIX environment.
		 It teaches them all the basic commands and flags associated with each command.
	</p>

	<?php
		include($path.'assets/inc/howto.php');
	?>

	<br>

	<?php
		include($path.'assets/inc/terminal.php');
	?>

	<h2>A Little About Us</h2>
	<hr>
	<p>
		This site is a free resource for developers and always will be.
		 POP &amp; LOCK the STACK was created by a group of 6 members as a group project for their web development class.
	</p>

	<?php include($path.'assets/inc/howto.php'); ?>

<?php
	include($path.'assets/inc/footer.php');
?>
