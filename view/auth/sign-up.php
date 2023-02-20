<?php 
use App\Connection;
$pdo = Connection::getPDO();
if(!empty($_POST) && !empty($_POST['user']) && !empty($_POST['password'])){
	$req = $pdo->prepare("INSERT INTO users SET utilisateur = ?, mdp = ?, nom = ?, prenom = ?, mail = ?, date_creation = NOW()");
    $mdp = $_POST['password'];
    $password = password_hash($mdp, PASSWORD_BCRYPT);
    $req->execute([$_POST['user'], $password ,$_POST['Nom'], $_POST['Prenom'], $_POST['Email']]);

    $_SESSION['flash']['success'] = "Première étape validée";
	header('Location: '. $router->url('logout'));
    exit();
}
	?>


<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Get started</h1>
								<p class="lead">
									Start creating the best possible user experience for you customers.
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<form action="" method="post">
											<div class="mb-3">
												<label class="form-label">Nom</label>
												<input class="form-control form-control-lg" type="text" name="Nom" placeholder="Entrez votre nom" required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Prénom</label>
												<input class="form-control form-control-lg" type="text" name="Prenom" placeholder="Entrez votre prénom" required/>
											</div>

											<div class="mb-3">
												<label class="form-label">Nom d'utilisateur</label>
												<input class="form-control form-control-lg" type="text" name="user" placeholder="Entrez votre nom d'utilisateur" required/>
											</div>
					
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input class="form-control form-control-lg" type="email" name="Email" placeholder="Entrez votre Email" required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Mot de passe</label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Entrez votre mot de passe" required/>
											</div>
											<div class="text-center mt-3">
												<button type="submit" class="btn btn-lg btn-primary">Créer mon compte</button> 
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>