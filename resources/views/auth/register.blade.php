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

    <link href="{{ asset('css/registo.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid ps-md-0  bg-smart">
		<div class="nav-logo">
		</div>
		<div class="row g-0">
			<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
			<div class="col-md-8 col-lg-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-8 mx-auto">
								<h6 class="mb-2 text-uppercase text-muted">Rápido e fácil</h6>
								<h3 class="mb-4 fw-bold">Regista-te</h3>
								<form method="POST" action="{{ route('register') }}">
                                    @csrf
									<div class="form-floating mb-3">
										<input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="floatingInput2"
											placeholder="name@example.com" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
										<label for="floatingInput2">Nome</label>
									</div>

									<div class="form-floating mb-3">
										<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput"
											placeholder="name@example.com" required autocomplete="email">
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										<label for="floatingInput">Email</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" required autocomplete="new-password"
											placeholder="Password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										<label for="floatingPassword">Password</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control" id="floatingConfirmPassword"
											placeholder="Confirmar Password" name="password_confirmation" required autocomplete="new-password">
										<label for="floatingConfirmPassword">Confirmar Password</label>
									</div>

									<div class="d-grid">
										<button class="btn btn-lg btn-login text-uppercase fw-bold mb-2" type="submit"
											>Regista-te</button>
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
