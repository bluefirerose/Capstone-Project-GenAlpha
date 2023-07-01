<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
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

        .device-list {
            display: flex;
            overflow-x: scroll;
            gap: 1px;
            padding: 10px;
            margin-bottom: 20px;
            scrollbar-width: thin;
            scrollbar-color: #FBF6F9;
            font-size: 12px;
        }

        .device-list::-webkit-scrollbar {
            width: 10px;
        }

        .device-list::-webkit-scrollbar-track {
            background: #FCA75B;
            border-radius: 10px;
        }

        .device-list::-webkit-scrollbar-thumb {
            background: #000000; 
            border-radius: 10px;
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
    <section>
        <div class="row">
            <div class="col-md-6 text-center m-auto">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
            </div>
            <div class="col-md-6 mt-5">
                <h5>Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>    
    </section>

    <section>
        <div class="container">
            <h3>Reviews</h3>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h6>Username</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <div class="col-md-12 mt-3">
                    <h6>Username</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <div class="col-md-12 mt-3">
                    <h6>Username</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
            </div>  
        </div>  
    </section>

    <section>
        <div class="container">
            <h3>PRODUCTS RELATED TO THIS ITEM</h3>
            <div class="row">
                <div class="device-list" id="deviceContainer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">
                <img src="pc.svg" style="width: 80%; height: 80%;" alt="Personal Computer">

                </div>
            </div>  
        </div>  
    </section>


    

    <footer>
        <h3>Group 4</h3>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
