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
				<div class="logo">
				</div><!--logo-->
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
			</div><!--header-->
			<div class="content">
				<div class="left">
					<div class="title">
					</div><!--title-->
					<div class="aktuality">
						<div class="akt_nahore">
						</div><!--akt_nahore-->
						<div class="akt_stred">
						</div><!--akt_stred-->
						<div class="akt_dole">
						</div><!--akt_dole-->
					</div><!--aktuality-->
					<div class="obsah">
						<jdoc:include type="component" />
					</div><!--obsah-->
				</div><!--left-->
				<div class="right">
					<div class="calendar">
						<div class="cal_nahore">
						</div><!--cal_nahore-->
						<div class="cal_stred">
						</div><!--cal_stred-->
						<div class="cal_dole">
						</div><!--cal_dole-->
					</div><!--calendar-->
					<div class="copyright">
					</div><!--copyright-->
				</div><!--right-->
			</div><!--content-->
		</div><!--all-->
	</body>
</html>