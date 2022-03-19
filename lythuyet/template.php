<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>title</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyj0zLopkDigXl-c81aig1Se3LO095jKLe8rhaxlcKNn-fK2FUsCttJ7f7Wziqc-wdjW8&usqp=CAU"
                    alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">Denis Colin</h4>
                <p class="font-weight-light text-muted mb-0">Web Designer</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                About
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                HR Management
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                User Management
            </a>
        </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Products</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                All Products
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Statistical
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Imported Products
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                Exported Products
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->
<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                        </div>
                        <span>Nếu bạn chưa tài khoản thì vui lòng đăng ký ở đây <a type="button"
                                                                                   data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                                                                   style="font-style: italic; font-weight: bold; color: blueviolet;">Register</a></span>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Login -->
<!-- Modal Register -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Re-Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone number</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">This is a required field</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I accept and agree with <a href=""
                                                                                                           style="text-decoration: none; font-weight: bold; font-style: italic; color: blue;">Term
                                    & Polivacy</a></label>
                        </div>
                        <span>If you have an account, please login in here:<a type="button" data-bs-toggle="modal"
                                                                              data-bs-target="#exampleModal"
                                                                              style="font-style: italic; font-weight: bold; color: blueviolet; margin: 0 8px;">Login</a></span>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content holder -->
<nav class="navbar navbar-light bg-light" style="margin-left: 14rem; width: calc(100% - 14rem);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown" style="float: right;">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 25px;">
                More Function
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                       href="login.html">Log
                        in<i class="fa fa-sign-in" style="margin: 0 10px;"></i></a></li>
                <li><a class="nav-link active" aria-current="page" href="">Log
                        out<i class="fa fa-sign-out" style="margin: 0 10px;"></i></a></li>
                <li><a class="nav-link" href="">Check Account</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="collapse" id="navbarToggleExternalContent" style="margin-left: 14rem; width: calc(100% - 14rem);">
    <div class="bg-transparent p-4">
        <button type="button" style="border: none; border-radius: 9px; font-style: italic; background-color: rgb(199, 181,
                181);"><i class="fa fa-cog" style="margin: 0 5px 0 0;"></i>Setting</button>

        <button type="button" class="btn btn-default btn-sm"
                style="border-radius: 10px; background-color: rgb(199, 181, 181);  font-style: italic; float: right;">
            <i class="fa fa-moon-o" style="margin: 0 5px 0 0;"></i>Dark - Light<i class="fa fa-sun-o"
                                                                                  style="margin: 0 0 0 5px;"></i>
        </button>

    </div>
</div>
<div class="page-content p-5" id="content">
    <!-- End Page content holder -->


    <!-- Toggle button -->
    <!-- <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-2"
        style="float: right;"><i class="fa fa-bars" style="margin: 0 5px 0 0;"></i><small
            class="text-uppercase font-weight-bold p-3">Toggle</small></button> -->

    <!-- Demo content -->
    <h2 class="display-4 text-white">Men Sport Clothes</h2>
    <p class="lead text-white mb-0">Here we have many brands like Adidas, Nike, Under Armour, Li-ning, Anta, . . .
    </p>
    <p class="lead text-white">Web design by<a href="https://www.facebook.com/do.nhat.cuongg/" class="text-white">
            <u>Cường</u></a>
    </p>
    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-7">

        </div>
        <div class="col-lg-5">
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://yeuchaybo.com/wp-content/uploads/2014/09/adidas-logo.jpg" class="card-img-top"
                     alt="..." style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href="https://www.adidas.com.vn/vi"
                                                                        style=" text-decoration: none; color: #fff;">Adidas</a></p>
                </div>
            </div>
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://www.inlogo.vn/vnt_upload/File/Image/s_l300_1.jpg" class="card-img-top" alt="..."
                     style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href="https://www.nike.com/vn/"
                                                                        style=" text-decoration: none; color: #fff;">Nike</a></p>
                </div>
            </div>
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTq5ZhpQtwBjDnSJQeQfwZ2y4zbyXiEwCMwBb5-ckq2sATqd5gDB8R9uSOaz_RkT3CedI&usqp=CAU"
                     class="card-img-top" alt="..."
                     style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href="https://lining.com.vn/"
                                                                        style=" text-decoration: none; color: #fff;">Li-ning</a></p>
                </div>
            </div>
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://i.pinimg.com/originals/63/d1/74/63d174c701c6556ac9ed096a3ffb9b77.gif"
                     class="card-img-top" alt="..."
                     style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href="https://www.underarmour.com/en-us/"
                                                                        style=" text-decoration: none; color: #fff;">Under Armour</a></p>
                </div>
            </div>
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMt5HGUHFfgQ9t81BpNRktACXoxXD7_PiRKsOSUcFl38GhVTY3wQHiQm6dwH_sS33jARg&usqp=CAU"
                     class="card-img-top"
                     alt="..." style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href="https://anta.com/"
                                                                        style=" text-decoration: none; color: #fff;">Anta</a></p>
                </div>
            </div>
            <div class="card"
                 style="width: 10rem; display: inline-block; height: 10rem; margin: 15px 10px; border: none;">
                <img src="https://gigamall.com.vn/data/2019/09/05/15055504_LOGO-REEBOK-500x500.jpg" class="card-img-top"
                     alt="..." style="width: 100%; height: 100%; box-shadow: 5px 5px 5px grey; border-radius: 10px;">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><a href=""
                                                                        style=" text-decoration: none; color: #fff;">Reebok</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End demo content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>