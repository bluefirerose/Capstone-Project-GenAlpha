<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
        <img src="pc.svg" alt="Donald" style="width:70%">
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
        <h3>Group 4</h3>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
