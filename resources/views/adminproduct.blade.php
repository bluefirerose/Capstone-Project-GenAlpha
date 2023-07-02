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
        .form-container {
            background: #fff;
            width: 500px;
            height: 600px;
            position: relative;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        }
        .product-container {
            background: #fff;
            width: 300px;
            height: 400px;
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
                            <a class="nav-link active" href="{{ url('admin') }}">Dashboard</a>
                        </li>
                        <li class="nav-item px-lg-3">
                            <a class="nav-link active" href="{{ url('adminproduct') }}"><strong>Product</strong></a>
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
                    <div class="col-md-10 flex-fill">
                        <h3>Items</h3>
                    </div>
                    <div class="col-md-2 flex-fill">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add item
                    </button>
                    </div>
                </div>
                <hr>

                
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="m-5" id="addProduct">
                    <input id="productname" class="form-control mt-3" type="text" name="productname" placeholder="Enter product name" required />
                    <input id="productprice" class="form-control mt-3" type="text" name="productprice" placeholder="Enter product price" required />
                    <div class="mt-3">
                         <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">Computer Package</option>
                         <option value="2">Laptop</option>
                         <option value="3">Monitor</option>
                         <option value="4">Graphic Card</option>
                         <option value="5">Motherboard</option>
                         <option value="6">Processor</option>
                        </select>
                        </div>
                        <label for="formFileSm" class="form-label mt-3">Upload photo</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" />
                        <div class="form-outline">
                        <textarea class="form-control mt-3" id="productdescription" rows="5" placeholder="Product Description"></textarea>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>




            </div>
        </div>
    </div>

    <section class="account-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 form-container m-5 p-5 border rounded">
                    <h1 class="fw-bold">Add Product</h1>
                    <form id="addProduct">
                    <input id="productname" class="form-control mt-3" type="text" name="productname" placeholder="Enter product name" required />
                    <input id="productprice" class="form-control mt-3" type="text" name="productprice" placeholder="Enter product price" required />
                    <div class="mt-3">
                         <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">Computer Package</option>
                         <option value="2">Laptop</option>
                         <option value="3">Monitor</option>
                         <option value="4">Graphic Card</option>
                         <option value="5">Motherboard</option>
                         <option value="6">Processor</option>
                        </select>
                        </div>
                        <label for="formFileSm" class="form-label mt-3">Upload photo</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" />
                        <div class="form-outline">
                        <textarea class="form-control mt-3" id="productdescription" rows="5" placeholder="Product Description"></textarea>
        
                        </div>                         
                    <button class="btn btn-dark mt-3">Add Product</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-5">
        <h3>Group 4</h3>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>

                
        </div>
    </section>
</body>
</html>