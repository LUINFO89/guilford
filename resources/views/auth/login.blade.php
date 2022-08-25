

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Iniciar Sesión</title>
</head>
<body style="background-color: #007965">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img src="https://img.freepik.com/vector-gratis/lindo-nino-vuelo-lapiz-cohete-caricatura_138676-2280.jpg?t=st=1652363403~exp=1652364003~hmac=737a71c402cc6cdaef90a514b4fec18b4de88610123553487972de30ce437871&w=740"
                                    width="450i" height="450i" alt="">
    
                            </div>
    
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenidos Estudiantes</h1>
                                    </div>
                                    <div class="card ">
                                       
    
                                        <div class="">
                                            <br>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
    
                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{
                                                        __('Usuario:') }}</label>
    
                                                    <div class="col-md-7">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>
    
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{
                                                        __('Contraseña:') }}</label>
    
                                                    <div class="col-md-7">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password">
    
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="row mb-6">
                                                    <div class="col-md-8 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember"
                                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Recuerdame') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit"  style="background-color: #007965" class="btn btn-primary m-3" >
                                                            {{ __('Iniciar Sesión') }}
                                                        </button>
                                                       
    
    
                                                    </div>
                                                    <br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
    
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="margin-left: 25%" href="{{ route('password.request') }}">
                                        {{ __('¿Olvido su contraseña?') }}
                                    </a>
                                    @endif
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


