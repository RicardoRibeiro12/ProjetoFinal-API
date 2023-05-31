<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SmartFarmIOT') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

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
								<form  method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-floating mb-3">
										<input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                                        name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
										<label for="floatingInput">{{ __('Email') }}</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
											placeholder="Password" name="password" required autocomplete="current-password">
                                            @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
										<label for="floatingPassword">Password</label>
									</div>
									<div class="row mb-4">
										<div class="form-check col-sm d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<input class="form-check-input me-2" type="checkbox"name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left:-0.7rem;!important">
												<label class="form-check-label" for="remember">Guardar Sessão</label>
											</div>
											<div class="text-end">
												<h6 class="small mb-0">
                                                    @if (Route::has('password.request'))
                                        <a class="small btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu-se da palavra-passe?') }}
                                        </a>
                                    @endif
                                                    </h6>
											</div>
										</div>
									</div>
									<div class="d-grid">
										<button class="btn btn-lg btn-login text-uppercase fw-bold mb-2"
											type="submit">Iniciar Sessão</button>
									</div>
									<div class="row mt-5">
										<h6 class=" text-muted text-center">Nenhuma conta?
                                            @if (Route::has('register'))
                                        <a class="small btn btn-link" href="{{ route('register') }}">
                                            {{ __('Crie uma!?') }}
                                        </a>
                                    @endif </h6>
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
