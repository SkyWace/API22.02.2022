<?php
use App\Connection;
$pdo = Connection::getPDO();

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){

  $pdo = Connection::getPDO();
    $req = $pdo->prepare('SELECT * FROM users WHERE (utilisateur = :username OR mail = :username) ');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if($user == null){
      session_start();
        $_SESSION['flash']['danger'] = 'Identifiant inconnu';
    }elseif(password_verify($_POST['password'], $user->mdp)){
        session_start();
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Connecté';
        header('Location: '. $router->url('first'));
        exit();
    }else{
        session_start();
        $_SESSION['flash']['danger'] = 'Incorrect username or password';
    }
}
?>
<?php
    if(session_status() == PHP_SESSION_NONE){
session_start(); 
    }


?>

<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Content de vous revoir</h1>
								<p class="lead">
									connectez-vous à votre compte pour continuer
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="img/avatars/avatar-1.webp" alt="profil picture" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form action="" method="post">
											<div class="mb-3">
												<label class="form-label">Email/Nom d'utilisateur</label>
												<input class="form-control form-control-lg" type="text" name="username"  />
											</div>
											<div class="mb-3">
												<label class="form-label">Mot de passe</label>
												<input class="form-control form-control-lg" type="password" name="password"  required/>
												<small>
            <a href="pages-reset-password.html">Mot de passe oublié?</a>
          </small>
											</div>
											<div class="text-center mt-3">
												<button type="submit" class="btn btn-lg btn-primary">Se connecter</button>
											</div>
										</form>
											<div class="text-center mt-3">
												
												<a href="/sign-up"><button class="btn btn-lg btn-primary">Se créer un compte</button></a>
											</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>