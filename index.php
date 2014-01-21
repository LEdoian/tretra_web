<?php
// No direct access to this file
defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	<head>
		<jdoc:include type="head">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css">
	</head>
	<body>
		<div class="all">
			<div class="header">
				<img class="logo" alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/logo.png">
				<jdoc:include type="modules" name="napis" />
			</div><!--header-->
			<div class="r_panel">
				<div class="login">
					<jdoc:include type="modules" name="login" />
				</div><!--login-->
				<div class="menu">
					<jdoc:include type="modules" name="menu" />
					<div class="menu_patka">
					</div><!--menu_patka-->
				</div><!--menu-->
				<div class="calendar">
					<div class="cal_nadpis">
						<jdoc:include type="modules" name="cal_nadpis" /> 
					</div><!--cal_nadpis-->
					<div class="cal_obsah">
						<jdoc:include type="modules" name="cal_obsah" /> 
 					</div><!--cal_obsah-->
					<div class="cal_patka">
					</div><!--cal_patka-->
				</div><!--calendar-->
			</div><!--r_panel-->
			<div class="main">
				<div class="aktuality">
					<div class="akt_nadpis">
						<jdoc:include type="modules" name="akt_nadpis" /> 
					</div><!--akt_nadpis-->
					<div class="akt_obsah">
						<jdoc:include type="modules" name="akt_obsah" /> 
					</div><!--akt_obsah-->
					<div class="akt_patka">
					</div><!--akt_patka-->
				</div><!--aktuality-->
				<div class="obsah">
					<jdoc:include type="modules" name="zde_se_nachazite" />
					<jdoc:include type="component" />
				</div><!--obsah-->
			</div><!--main-->
			<div class="footer">
				<jdoc:include type="modules" name="footer" /> 
 			</div><!--footer-->
		</div><!--all-->
	</body>
</html>