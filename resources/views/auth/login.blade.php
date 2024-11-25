<!doctype html>
<html lang="en">

<head>
    <title>Login Administrativo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/login.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(assets/images/Logo.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <form class="signin-form" method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input  class="form-control" id="email" placeholder="Email" required type="email" name="email" :value="old('email')" autofocus autocomplete="username" />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Senha</label>
                                    <input type="password" id="password" class="form-control" placeholder="Senha" required name="password" required autocomplete="current-password" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">CONECTAR</button>
                                </div>
                                <div class="form-group d-md-flex">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>