<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
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
       <h1> Welcome, {{ Auth::user()->username }}</h1>
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
            <a class="navbar-brand" href="{{ url('/userhome') }}">
                <img src="gen-alpha-removebg-1.svg" style="width: 250%; height: 250%;" alt="Gen Alpha Logo">
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userhome') }}">Home</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userabout') }}">About</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userproduct') }}">Products</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userorder') }}">Orders</a>
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
        <container>
            <div class="row">
                <div class="col">
                    <div class="container mt-5 p-3 rounded cart">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="product-details mr-2">
                                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2"> Continue Shopping</span></div>
                                    <hr>
                                    <h6 class="mb-0">Shopping cart</h6>
                                    <div class="d-flex justify-content-between"><span>You have 4 items in your cart</span>
                                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                                            <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/QRwjbm5.jpg" width="40">
                                            <div class="ml-2"><span class="font-weight-bold d-block">Iphone 11 pro</span><span class="spec">256GB, Navy Blue</span></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span class="d-block ml-5 font-weight-bold">$900</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/GQnIUfs.jpg" width="40">
                                            <div class="ml-2"><span class="font-weight-bold d-block">One pro 7T</span><span class="spec">256GB, Navy Blue</span></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span class="d-block ml-5 font-weight-bold">$900</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/o2fKskJ.jpg" width="40">
                                            <div class="ml-2"><span class="font-weight-bold d-block">Google pixel 4 XL</span><span class="spec">256GB, Axe black</span></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span class="d-block ml-5 font-weight-bold">$800</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/Tja5H1c.jpg" width="40">
                                            <div class="ml-2"><span class="font-weight-bold d-block">Samsung galaxy Note 10&nbsp;</span><span class="spec">256GB, Navy Blue</span></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span class="d-block ml-5 font-weight-bold">$999</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="payment-info">
                                    <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><i class="fa-brands fa-cc-mastercard"></i></span> </label>

                                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><i class="fa-brands fa-cc-visa"></i></span> </label>

                                    <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                                    <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                                    <div class="row">
                                        <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                                    </div>
                                    <hr class="line">
                                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>$3000.00</span></div>
                                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>$20.00</span></div>
                                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>$3020.00</span></div>
                                    <button class="btn btn-dark btn-block d-flex justify-content-between mt-3" type="button"><span>$3020.00</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </container>
    </section>
</body>
</html>