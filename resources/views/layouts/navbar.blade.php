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