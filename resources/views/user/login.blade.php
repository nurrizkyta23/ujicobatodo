Untuk membuat logo menjadi terpusat di navbar, Anda dapat menggunakan utility class `text-center` pada elemen `navbar-brand`. Berikut adalah kode yang diperbarui:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #FFFFFF;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .navbar-brand img {
            max-height: 70px;
        }
        .container {
            margin-top: 100px;
        }
        .login-form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-floating {
            position: relative;
            margin-bottom: 1rem;
        }
        .form-floating input {
            height: calc(2.75rem + 2px);
        }
        .form-floating label {
            position: absolute;
            top: 0;
            padding: 0.625rem 0.75rem;
            pointer-events: none;
            color: #6c757d;
            font-size: 0.875rem;
            transition: top 0.1s ease-in-out, opacity 0.1s ease-in-out;
        }
        .form-floating input:focus ~ label,
        .form-floating input:not(:placeholder-shown) ~ label {
            top: -0.25rem;
            font-size: 0.6875rem;
        }
        .form-floating input::placeholder {
            color: #6c757d;
        }
        .form-floating a {
            font-size: 0.875rem;
            color: #0d6efd;
            text-decoration: none;
        }
        .form-floating a:hover {
            text-decoration: underline;
        }
        .btn-primary {
            background-color: #0496c7 !important;
            border-color: #0496c7 !important;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0272a3 !important;
            border-color: #0272a3 !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid d-flex justify-content-center"">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/mytodo.png') }}" alt="MyTodo Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>   
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-form">
                <h1 class="text-center mb-4">Login</h1>
                @if(isset($error))
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endif
                <form method="post" action="/login">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="user" type="text" class="form-control" id="user" placeholder="id" required>
                        <label for="user">User</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                        <a href="{{ route('signup') }}">Belum punya akun? Daftar</a>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
