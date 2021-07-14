<!DOCTYPE html>
<html lang="en">

<head>
    <head><title>Inciar Sesión</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
              crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

        <style>
            p.fant {
                font-family: Abel;
                font-size: 50px;
                color: #000000;
                font-weight: bold;
                text-align: left;
                left: 510px;
                position: relative;
                top: 50px;
            }

            .abs-center {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 80vh;
                color: #1c1818;
            }

            .form {
                width: 300px;
                height: 400px;
                position: center;
                border-radius: 20px;
            }

            body {
                background-image: linear-gradient(-225deg, #E3FDF5 0%, #5586bf 100%);
                background-image: linear-gradient(to top, #a8edea 0%, #fef3d6 100%);
                background-attachment: fixed;
                background-repeat: no-repeat;
                font-family: 'Abel', sans-serif;
                opacity: .95;
                background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);
            }

            .login {
                text-align: center;
                font-size: 20px;
                font-family: 'Vibur';
                font-weight: bold;
            }

            .btn-ingresar {
                color: #fff;
                background-image: linear-gradient(to right, #002984, #757de8);
                padding: 8px 20px;
                cursor: pointer;
                border-radius: 50px;
                border: 2px solid #002984;
                margin-bottom: -50px !important
            }

            .btn-crear {
                border-radius: 20px;
                color: #002984;
                background-color: #fff;
                padding: 8px 20px;
                cursor: pointer;
                border: 2px solid #002984 !important
            }

        </style>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

<body>


<div>
    <div class="container">
        <div class="abs-center">
            <form method="POST" action="{{ route('login') }}" class="border p-3 form">
                @csrf
                <div class="login">
                    <img src="img/icono.png" style="width: 80px; height: 80px; border: 2px">
                </div>

                <div>
                    <h2 style="text-align: center">
                        Medical Records
                    </h2>
                </div>

                <div class="form-group">
                    <br>
                    <label for="id">Correo Electronico:</label>
                    <input type="email"
                           name="email"
                           pattern="^[a-z0-9._%+-]+@gmail.[a-z]{2,3}$"
                           title="Debe ingresar una dirección de correo electronico valida, ejemplo: acimed@gmail.com"
                           id="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required autocomplete="email" autofocus
                           placeholder="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <br>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password"
                           name="password"
                           pattern="[A-Za-z0-9.-$ ]{8,15}"
                           title="Debe ingresar una contraseña valida, puede incluir mayusculas, minusculas, números, y los simbolos (. - $) "
                           id="password"
                           class="form-control @error('password') is-invalid @enderror" required
                           autocomplete="current-password"
                           placeholder="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div style="text-align: center">
                    <br>
                    <button type="submit" class="btn-ingresar" value="Entrar">
                        {{ __('Login') }}
                    </button>

                    <a class="btn-crear" type="submit" href="{{route ('register')}}">crear cuenta</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
