<!DOCTYPE html>
<html>
<head>
    <title>Smartfarm</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="container-fluid ps-md-0 bg-smart">
		<div class="nav-logo">
		</div>
		<div class="row g-0">
			<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
			<div class="col-md-8 col-lg-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-8 mx-auto">
								<h6 class="mb-2 text-uppercase text-muted">Bem-Vindo</h6>
								<h3 class="mb-4 fw-bold">Faça login na sua conta</h3>
								<form>
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="floatingInput"
											placeholder="name@example.com" required>
										<label for="floatingInput">Email</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control" id="floatingPassword"
											placeholder="Password" required>
										<label for="floatingPassword">Password</label>
									</div>
									<div class="row mb-4">
										<div class="form-check col-sm d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<input class="form-check-input me-2" type="checkbox" value=""
													id="rememberPasswordCheck" style="margin-left:-0.7rem;!important">
												<label class="form-check-label" for="rememberPasswordCheck">Guardar Sessão</label>
											</div>
											<div class="text-end">
												<h6 class="small mb-0"><a href="#">Esqueceu-se da palavra-passe?</a></h6>
											</div>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-lg btn-login text-uppercase fw-bold mb-2"
											type="submit" @click.prevent="login">Iniciar Sessão</button>
									</div>
									<div class="row mt-5">
										<h6 class=" text-muted text-center">Nenhuma conta? <a class="small" href="#">Crie
												uma!</a> </h6>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>