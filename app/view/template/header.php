<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />

		<title>Loading...</title>
		<?php include('headercalls.php'); ?>
		<?php $this->helpers->siteSpecificCSS(); ?>
	</head>
	<body <?php $this->helpers->bodyClasses($view); ?>>
		<div id=<?php $this->helpers->overallPage($view); ?>>
			<div class="se-pre-con"></div>
			<div class="menu-top">
				<div class="menu-top-left">
					<div class="container">
						<a href="<?php echo URL; ?>"><img src="public/images/common/logo.png"></a>	
						<h2>BNHS</h2>
					</div>
				</div>
				<div class="menu-top-right">
					<div class="info">
						<div class="profile">
							<p><?php $this->helpers->getFirstName(); ?></p>
							<div class="pic"><div class="prof-img"><?php $this->helpers->getUserImage(); ?></div></div>
						</div>
						<div class="btn-group">
							<div class="settings">
								<button class="dropdown-btn" data-dropdown="#sub-menu"><i class="fas fa-sort-down"></i></button>
								<div class="dropdown-menu dropdown-anchor-top-right dropdown-has-anchor" id="sub-menu">
									<ul>
									<?php
									/*profile*/
									$page = explode("-", str_replace('url=', '', $_SERVER['QUERY_STRING']));
									switch($page[0]) {
										case 'admin' :
										 	echo '<li><a href="admin-profile"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;
										 case 'faculty' :
										 	echo '<li><a href="faculty-profile"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;
										 case 'parent' :
										 	echo '<li><a href="parent-profile"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;
									 	case 'student' :
										 	echo '<li><a href="student-information"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;
										case 'superadmin' :
										 	echo '<li><a href="superadmin-profile"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;
										 case 'treasurer' :
										 	echo '<li><a href="treasurer-profile"><i class="fas fa-user"></i>My Profile</a></li>';
										 	break;	
									}
									?>
										
							    			<li class="divider"></li>
										<li><a href="<?php echo URL; ?>app/model/unstructured/signout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="menu-sidebar">
				<div class="about">		
					<div class="prof-img"><?php $this->helpers->getUserImage(); ?></div>
					<h3><?php $this->helpers->getFirstName(); ?><span><?php $this->helpers->userType($view); ?></span></h3>
				</div>
				<div class="menu">
					<nav>
						<ul>
							<?php require 'menu.php'; ?>
						</ul>
					</nav>
				</div>
			</div>
			<div class="content-container">
