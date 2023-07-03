<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://kit.fontawesome.com/2b2f71715b.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            width: 80%;
            margin: auto;
        }

        hr.line2 {
            border: 5px solid #FCA75B;
            border-radius: 5px;
            width: 20%;
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

        .payment-info {
            background: #676569;
            padding: 10px;
            border-radius: 6px;
            color: #fff;
            font-weight: bold;
        }

        .product-details {
            padding: 10px;
        }

        body {
            background: #eee;
        }

        .cart {
            background: #fff;
        }

        .p-about {
            font-size: 12px;
        }

        .table-shadow {
            -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
            box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
        }

        .type {
            font-weight: 400;
            font-size: 10px;
        }

        label.radio {
            cursor: pointer;
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        label.radio span {
            padding: 1px 12px;
            border: 2px solid #ada9a9;
            display: inline-block;
            color: #f1dcc9;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 300;
        }

        label.radio input:checked+span {
            border-color: #fff;
            background-color: #676569;
            color: #fff;
        }

        .credit-inputs {
            background: #938f97;
            color: #fff !important;
            border-color: rgb(102, 102, 221);
        }

        .credit-inputs::placeholder {
            color: #fff;
            font-size: 13px;
        }

        .credit-card-label {
            font-size: 9px;
            font-weight: 300;
        }

        .form-control.credit-inputs:focus {
            background: rgb(102, 102, 221);
            border: rgb(102, 102, 221);
        }

        .line {
            border-bottom: 1px solid rgb(102, 102, 221);
        }

        .information span {
            font-size: 12px;
            font-weight: 500;
        }

        .information {
            margin-bottom: 5px;
        }

        .items {
            -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
            box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
        }

        .spec {
            font-size: 11px;
        }

        footer{
          background: #FCA75B;
          width: 100%;

          bottom: 0;
          color: #fff;
          padding: 100px 0 30px;
          margin-top : 100px;
          border-top-left-radius: 125px;
          font-size:13px;
          line-height: 20px;
        }

        footer .row{
          width: 85%;
          margin: auto;
          display: flex;
          flex-wrap: wrap;
          align-items: flex-start;
          justify-content: space-between:
        }

        footer .col{
          flex-basis: 30%;
          padding: 10px;
          margin-right: 30px;
        }

        footer .col:nth-child(2), .col:nth-child(3){
          flex-basis: 15%;
        }



        footer .logo{
          width: 100px;
          margin-bottom: 30px;
        }

        footer .col h3{
          width: fit-content;
          margin-bottom: 40px;
          position: relative;
        }

        footer .email-id{
          width: fit-content;
          border-bottom: 1px solid #ccc;
          margin: 20px 0;
        }

        footer ul li {
          list-style: none;
          margin-bottom:12px;
        }

        footer ul li a{
          text-decoration: none;
          color: #fff;
        }

        footer form {
          padding-bottom: 15px;
          display: flex;
          align-items: center;
          justify-content: space-between;
          border-bottom: 1px solid #ccc;
          margin-bottom: 50px;
        }

        footer form .far{
          font-size: 18px;
          margin-right :10px;
        }

        footer form input{
          width: 100%;
          background: transparent;
          color: white;
          border: 0;
          outline: none;
          margin-left: 10px;
        }

        footer form button{
          background: transparent;
          border:0;
          outline: none;
          cursor: pointer;
        }

        footer form button .fas{
          font-size: 16px;
          color: white;
        }

        footer .social-icons .fab{
          width:40px;
          height: 40px;
          border-radius: 50px;
          text-align: center;
          line-height: 40px;
          font-size: 20px;
          color: #000;
          background: #fff;
          margin-right: 15px;
          cursor: pointer;
        }

        .underline{
          width:100%;
          height: 5px;
          background: #767676;
          border-radius: 3px;
          position: absolute;
          top:35px;
          left:0;
          overflow: hidden;
        }

        .underline span{
          width: 15px;
          height: 100%;
          background: #fff;
          border-radius: 3px;
          position: absolute;
          top:0;
          left: 10px;
          animation: moving 2s linear infinite;
        }

        @keyframes moving{
          0%{
            left: -20px;
          }
          100%{
            left: 100%;
          }
        }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ms-1">
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
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('about') }}">About</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('products') }}">Products</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('orders') }}"><strong>Orders</strong></a>
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
    <footer>
        <div class="row">
          <div class="col">
            <img src="gen-alpha-removebg-1.svg" class="logo">
            <p> asdfsadfgalsfjl;qakdjsf ;lsadjknf;laj snl;adsf sadfasdfsdf
              sdfasdfsadfsadfsadf sdfasd f sdafas df
            </p>
          </div>
          <div class="col">
            <h3>Office
              <div class="underline"> <span></span></div></h3>
            <p>ITPL Road</p>
            <p>Whitefield Bangalore</p>
            <p>Kartana, PIN 8000, PH</p>
            <p class="email-id">alphagen@gmail.com</p>
            <p>+63 991 337 4457</p>
          </div>
            <div class="col">
              <h3>Links
                <div class="underline"> <span></span></div></h3>
              </h3>
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Contacts</a></li>
                <li><a href="">Products</a></li>
              </ul>
            </div>
              <div class="col">
                <h3>Newsletter
                  <div class="underline"> <span></span></div></h3>
                </h3>
                <form>
                  <i class="far fa-envelope"></i>
                  <input type="email" placeholder="Enter your email id" required>
                  <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-youtube"></i>
                </div>
          
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>