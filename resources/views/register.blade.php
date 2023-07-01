<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .text-e7 {
            color: #E7C160;
        }

        body {
            background-color: #FBF6F1;
        }

        hr.line1 {
            border: 10px solid #FCA75B;
            border-radius: 5px;
            width: 80%;
            margin: auto;
        }

        /* .account-page {
            padding: 50px 0;
            background: radial-gradient(#fff, #ffd6d6);
        } */

        .form-container {
            background: #fff;
            width: 500px;
            height: 650px;
            position: relative;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: gray;
            text-align: center;
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .row {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
<header class="bg-dark text-white">
    <div class="banner" data-bs-theme="dark">
            <div class="d-flex justify-content-end">
                <p class=" px-lg-3 d-inline-flex">
                    <a class="nav-link active" href="{{ url('/login') }}">Login / </a> 
                    <a class="nav-link active" href="{{ url('register') }}"> <strong>Sign up</strong></a>
                </p>
            </div>
        </div>
    </header>
    <header>
        <nav class="navbar navbar-expand-lg ms-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="gen-alpha-removebg-1.svg" style="width: 250%; height: 250%;" alt="Gen Alpha Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('about') }}">About</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('products') }}">Products</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('orders') }}">Orders</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr class="line1">

    <section class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="pc.svg" alt="Logo" width="100%">
                </div>
                <div class="col-md-6 form-container m-5 p-5 border rounded">
                <h1 class="fw-bold">Create an account</h1>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                <form action="{{ route('register')}}" method="POST" id="registrationForm">
                        @csrf
                        <label for="email" class="mt-3">Email Address</label>
                        <input id="email" class="form-control" type="email" name="email" required>
                        <label for="firstname" class="mt-3">First name</label>
                        <input id="firstname" class="form-control" type="text" name="firstname" required>
                        <label for="lastname" class="mt-3">Last name</label>
                        <input id="lastname" class="form-control" type="text" name="lastname" required>
                        <label for="birthdate" class="mt-3">Birth date</label>
                        <input id="birthdate" class="form-control" type="date" name="birthdate" required>
                        <label for="password" class="mt-2">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required>
                        <label for="confirm_password" class="mt-2">Confirm password</label>
                        <input id="confirm_password" class="form-control" type="password" required>
                        <button class="btn btn-dark mt-2">Submit</button>
                        <a href="login.html" class="ms-3 align-middle">I already have an account</a>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <h3>Group 4</h3>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>