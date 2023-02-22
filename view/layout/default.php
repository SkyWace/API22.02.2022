
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>

	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"/>
            <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"/>
            <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"/>
          </svg>
    
          <span class="align-middle me-3">AppStack</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item active">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
              <span class="badge badge-sidebar-primary">5</span>
            </a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item active"><a class="sidebar-link" href="/">Default</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="FirstTable">Premier tableau de relevés</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="SecondTable">Second tableau de relevés</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="graph">Graphique</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
            </a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-profile.html">Profile</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients</a></li>
							<li class="sidebar-item">
								<a data-bs-target="#projects" data-bs-toggle="collapse" class="sidebar-link collapsed">
                  Projects
                </a>
								<ul id="projects" class="sidebar-dropdown list-unstyled collapse ">
									<li class="sidebar-item">
										<a class="sidebar-link" href="pages-projects-list.html">List</a>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link" href="pages-projects-detail.html">Detail <span class="badge badge-sidebar-primary">New</span></a>
									</li>
								</ul>
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span class="badge badge-sidebar-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
              <span class="badge badge-sidebar-secondary">Special</span>
            </a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="/login">Sign In</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="/sign-up">Sign Up</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password</a></li>
						</ul>
					</li>
				</ul>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				

				<ul class="navbar-nav">
					<li class="nav-item px-2 dropdown">
						<div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
							<div class="d-md-flex align-items-start justify-content-start">
								<div class="dropdown-mega-list">
									<div class="dropdown-header">UI Elements</div>
									<a class="dropdown-item" href="#">Alerts</a>
									<a class="dropdown-item" href="#">Buttons</a>
									<a class="dropdown-item" href="#">Cards</a>
									<a class="dropdown-item" href="#">Carousel</a>
									<a class="dropdown-item" href="#">General</a>
									<a class="dropdown-item" href="#">Grid</a>
									<a class="dropdown-item" href="#">Modals</a>
									<a class="dropdown-item" href="#">Tabs</a>
									<a class="dropdown-item" href="#">Typography</a>
								</div>
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Forms</div>
									<a class="dropdown-item" href="#">Layouts</a>
									<a class="dropdown-item" href="#">Basic Inputs</a>
									<a class="dropdown-item" href="#">Input Groups</a>
									<a class="dropdown-item" href="#">Advanced Inputs</a>
									<a class="dropdown-item" href="#">Editors</a>
									<a class="dropdown-item" href="#">Validation</a>
									<a class="dropdown-item" href="#">Wizard</a>
								</div>
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Tables</div>
									<a class="dropdown-item" href="#">Basic Tables</a>
									<a class="dropdown-item" href="#">Responsive Table</a>
									<a class="dropdown-item" href="#">Table with Buttons</a>
									<a class="dropdown-item" href="#">Column Search</a>
									<a class="dropdown-item" href="#">Muulti Selection</a>
									<a class="dropdown-item" href="#">Ajax Sourced Data</a>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                <img src="img/flags/fr.jpeg" alt="English" />
              </a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
								<a class="dropdown-item" href="#">
                  <img src="img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
                  <span class="align-middle">English</span>
                </a>
								<a class="dropdown-item" href="#">
                  <img src="img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />
                  <span class="align-middle">Spanish</span>
                </a>
								<a class="dropdown-item" href="#">
                  <img src="img/flags/de.png" alt="German" width="20" class="align-middle me-1" />
                  <span class="align-middle">German</span>
                </a>
								<a class="dropdown-item" href="#">
                  <img src="img/flags/nl.png" alt="Dutch" width="20" class="align-middle me-1" />
                  <span class="align-middle">Dutch</span>
                </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar-1.webp" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> 
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

            <?php if(isset($_SESSION['flash'])):?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>

        <div style="margin: 12px 12px; text-align:center" class="btn btnalert btn-<?= $type; ?> alert-dismissible text-white" role="alert" data-dismiss="alert" aria-label="Close" >

                                            <div class="alert-message">
                                            <?= $message; ?>
                                            </div>
                                        </div>

                                        <?php endforeach;?>
        <?php unset($_SESSION['flash']); ?>
        <?php endif;?>

        <script>window.setTimeout(function() {
    $(".btnalert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>

	<?= $content ?>

	<script src="js/app.js"></script>

</body>

</html>