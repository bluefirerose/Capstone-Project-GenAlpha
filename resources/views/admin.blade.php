<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
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
            width:80%;
            margin: auto;
        }
        hr.line2 {
            border: 5px solid #FCA75B;
            border-radius: 5px;
            width:20%;
            margin: auto;
        }
        .admin-container {
            background: #fff;
            width: 300px;
            height: 200px;
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
<body>
<header class="bg-dark text-white">
    <div class="banner" data-bs-theme="dark">
            <div class="d-flex justify-content-end">
                <p class=" px-lg-3 d-inline-flex">
                <div class="container">
       <h1> Welcome, Admin {{ Auth::user()->username }}</h1>
    </div>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
                </p>
            </div>
        </div>
    </header>
    <header>
        <nav class="navbar navbar-expand-lg ms-1" >
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
                            <a class="nav-link active" href="{{ url('admin') }}">Home</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminproduct') }}">Product</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('products') }}">Orders</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('orders') }}">Admin</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('contacts') }}">User</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('contacts') }}">Messages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr class="line1">

    <section>
        <div class="text-center mt-5">
            <h1>Admin Panel</h1>
        </div>
        <hr class="line2">
        
        <section class="account-page">
        <div class="container">
            <div class="row justify-content-center mt-5">

                <div class="col-md-3 admin-container border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container  border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container  border rounded ">
                    
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 admin-container border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container  border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container border rounded ">
                    
                </div>
                <div class="col-md-3 admin-container  border rounded ">
                    
                </div>
            </div>
        </div>
    </section>



    </section>
</body>
</html>