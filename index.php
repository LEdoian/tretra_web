<?php
// No direct access to this file
defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
	</head>
	<body>
		<div class="all">
			<div class="header">
				<img class="logo" alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/logo.png" />
				<p class="title">
					This is example text!
				</p><!--title-->
			</div><!--header-->
			<div class="r_panel">
				<div class="login">
				</div><!--login-->
				<div class="menu">
					<!--testing list-->
					<ul>
						<li>První</li>
						<li>Ahoj</li>
						<li>Lorem Ipsum</li>
						<li>Nashledanou</li>
					</ul>
				</div><!--menu-->
				<div class="calendar">
					<div class="cal_nadpis">
						Závody
					</div><!--cal_nadpis-->
					<div class="cal_obsah">
						16.68.1543 Houštka B
						<br /> 13.14.5469 Máchovo jezero - Holínky s sebou
					</div><!--cal_obsah-->
				</div><!--calendar-->
			</div><!--r_panel-->
			<div class="main">
				<div class="aktuality">
					<div class="akt_nadpis">
						Aktuality
					</div><!--akt_nadpis-->
					<div class="akt_obsah">
						Lorem ipsum dolor sit amet
						<br />29.13.2019 Trololo! - buzolu s sebou...
					</div><!--akt_obsah-->
				</div><!--aktuality-->
				<div class="obsah">
					<jdoc:include type="component" />
				</div><!--obsah-->
			</div><!--main-->
			<div class="footer">
 			</div><!--footer-->
		</div><!--all-->
	</body>
</html>