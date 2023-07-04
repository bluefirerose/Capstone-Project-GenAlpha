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
            <a class="navbar-brand" href="{{ url('userhome') }}">
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
                            <a class="nav-link active" href="{{ url('userabout') }}"><strong>About</strong></a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userproduct') }}">Products</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('userorder') }}">Orders</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('usercontact') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr class="line1">
        <section>
            <div class="text-center mt-5"><h1>"Embrace the Future of Tech with Gen-Alpha: Empowering Technology Enthusiasts."</h1></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="col-md-12">
                    <p>Gen-Alpha is an e-commerce platform dedicated to providing a wide range of computer products to meet your technology needs. With a focus on quality, affordability, and customer satisfaction, we strive to offer the best selection of computer hardware, software, peripherals, and accessories.</p>
                    <p>At Gen-Alpha, we understand the importance of technology in today's world. We believe that everyone should have access to the tools and resources they need to thrive in the digital age. That's why we have curated a diverse catalog of products from trusted brands, ensuring that you can find exactly what you're looking for.</p>
                    <p>With a user-friendly website, secure payment options, and efficient delivery services, we make it convenient for you to
                    </div>

                    <div class="col-md-12 mt-5">
                        <h3>OUR STORY STARTS HERE</h3>
                    </div>
                    <div class="col-md-12">
                    <p>In April of 2023, three passionate individuals named Donald, Rain, and Rose embarked on a journey to build Gen-Alpha, their dream e-commerce platform. They attended the KodeGo bootcamp, where they learned web development skills.

                    With their newfound knowledge, they worked tirelessly, coding day and night to create a user-friendly website. Overcoming challenges and supporting each other, they built a fully functional prototype.</p>

                    <p>Finally, Gen-Alpha was launched to great acclaim. Users were impressed by its sleek design, extensive product offerings, and seamless user experience.

                    Today, Gen-Alpha thrives as a one-stop destination for computer products, a testament to the team's perseverance and shared vision. Their journey proves that with dedication and hard work, dreams can become a reality.</p>

                    <div class="col-md-12 mt-5">
                        <h3>OUR MISSION</h3>
                    </div>
                    <div class="col-md-12">
                    <p>Our mission is to empower individuals and businesses by providing them with the latest and most reliable computer products on the market. Whether you are a casual user, a gaming enthusiast, or a professional in need of high-performance equipment, Gen-Alpha has the right solutions for you.</p>
                    </div>


                    <div class="col-md-12 mt-5">
                        <h3>FOUNDERS</h3>
                    </div>
                    <div class="col-md-12 text-center">
                    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="pc.svg" alt="Rain" style="width:70%">
        <div class="caption">
            <h5><bold>Rain Christian</bold></h5>
          <small>Full-Stack Developer</small>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="donald.png" alt="Donald" style="width:70%">
        <div class="caption ">
        <h5><bold>Donald</bold></h5>
          <small>Full-Stack Developer</small>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/developers/rose.svg" alt="Rosemarie Exile" style="width:70%">
        <div class="caption m-3">
          <h5><bold>Rosemarie Exile</bold></h5>
          <small>Full-Stack Developer</small>
        </div>
      </a>
    </div>
  </div>
</div>
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