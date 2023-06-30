<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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

        @media (min-width: 768px) and (max-width: 991.98px) {
            .row {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg ms-1" >
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('home') }}">
                <img src="gen-alpha-removebg-1.svg" style="width: 250%; height: 250%;" alt="Gen Alpha Logo">
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('home') }}">Home</a>
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
    <section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
        <div class="row">
        <div class="col-md-6 text-center m-auto">
            <p>order online</p>
            <h1>BUILD YOUR</h1>
            <h1>DREAM PC</h1>
            <button class="btn rounded"> see products</button>
        </div>
        <div class="col-md-6 text-center">
            <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
        </div>
        </div>
    </div>
    <div class="carousel-item active" data-bs-interval="20000">
        <div class="row">
        <div class="col-md-6 text-center m-auto">
            <p>order online</p>
            <h1>BUILD YOUR</h1>
            <h1>DREAM PC</h1>
            <button class="btn rounded"> see products</button>
        </div>
        <div class="col-md-6 text-center">
            <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
        <div class="col-md-6 text-center m-auto">
            <p>order online</p>
            <h1>BUILD YOUR</h1>
            <h1>DREAM PC</h1>
            <button class="btn rounded"> see products</button>
        </div>
        <div class="col-md-6 text-center">
            <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
        </div>
        </div>
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
</div>
    </section>


    <section>
        <div class="text-center">
            <h1>Category</h1>
        </div>
        <hr class="line2">
        <div class="container">
            <dic class="row">
                <div class="col-md-4">
                    
                </div>
            </dic>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
