<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/2b2f71715b.js"></script>
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

        footer {
            background-color: gray;
            text-align: center;
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .row {
                flex-direction: row;
            }
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
    <header class="bg-dark text-white">
    <div class="banner" data-bs-theme="dark">
            <div class="d-flex justify-content-end">
                <p class=" px-lg-3 d-inline-flex">
                    <a class="nav-link active" href="{{ url('login') }}">Login /</a> 
                    <a class="nav-link active" href="{{ url('register') }}"> Sign up</a>
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="package.svg" style="width: 90%; height: 90%;" alt="Personal Computer">
                </div>
                <div class="col-md-4">
                    <img src="laptop.svg" style="width: 90%; height: 90%;" alt="Laptop">
                </div>
                <div class="col-md-4">
                    <img src="monitor.svg" style="width: 90%; height: 90%;" alt="Monitor">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="gc.svg" style="width: 90%; height: 90%;" alt="Graphic Card">
                </div>
                <div class="col-md-4">
                    <img src="mb.svg" style="width: 90%; height: 90%;" alt="Mother Board">
                </div>
                <div class="col-md-4">
                    <img src="processor.svg" style="width: 90%; height: 90%;" alt="Processor">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="text-center">
            <h1>Featured Items</h1>
        </div>
        <hr class="line2">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                <h2>ALL WHITE INTEL 13 10TH GEN COMPLETE PC PACKAGE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <ul class="a m-5">
                    <li>Intel Core i3 10th genw/ integrated CPU</li>
                    <li>Gigabyte H410M Motherboard</li>
                    <li>Seagate 500gb HDD</li>
                    <li>Biostar 120GB SSD</li>
                </ul>
                </div>
                <div class="col-md-6">
                <img src="featureditems.svg" style="width: 90%; height: 90%;" alt="Computer Package">
                </div>
            </div>
            
        </div>
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
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
