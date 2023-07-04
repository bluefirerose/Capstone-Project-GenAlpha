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
    <div class="row">
        <div class="col-md-12 container-fluid">
            <nav class="navbar ms-1 flex-column" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        <img src="gen-alpha-removebg-1.svg" style="width: 250%; height: 250%;" alt="Gen Alpha Logo">
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-2 d-flex flex-column flex-shrink-0 p-2 " style=" height: calc(100vh - 7.5rem); ">
            <div class="card card-body flex-fill">
            <nav class="navbar ms-1 flex-column" >
            <div class="container-fluid">
                <div class="navbar-collapse" >
                    <ul class="navbar-nav mx-auto">
                        <li class=" px-lg-3">
                            <a class="nav-link active" href="{{ url('admin') }}"><strong>Dashboard</strong></a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('product') }}">Product</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminprofile') }}">Profile</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminlist') }}">Admin</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminusers') }}">User</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminmessage') }}">Messages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            </div>
        </div>
        <div class="col-10 d-flex flex-column flex-shrink-0 p-2 " style=" height: calc(100vh - 7.5rem); ">
            <div class="card card-body flex-fill">
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>