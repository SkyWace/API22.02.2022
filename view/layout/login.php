<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Projet Cube</title>

	<link rel="canonical" href="https://appstack.bootlab.io/pages-sign-in.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	
	<link class="js-stylesheet" href="../css/light.css" rel="stylesheet">
	

  </head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
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