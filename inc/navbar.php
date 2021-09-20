<header class="p-2 bg-dark text-white fixed-top navbot">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href=".?page=Home" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-3"> 
                PHP OOP CRUD
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href=".?page=Home" class="nav-link px-2 <?php if(($_GET['page'])=='Home') {echo 'text-secondary';}else{echo 'text-white';}?>">Home</a></li>
                <li><a href=".?page=Record" class="nav-link px-2 <?php if(($_GET['page'])=='Record') {echo 'text-secondary';}else{echo 'text-white';}?>">Record</a></li>
                <li><a href=".?page=About" class="nav-link px-2 <?php if(($_GET['page'])=='About') {echo 'text-secondary';}else{echo 'text-white';}?>">About</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contact Us</a></li>
                <li class="dropdown text-end">
                    <a class="nav-link link-light dropdown-toggle text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href=".?page=SignIn" type="button" class="btn btn-outline-light me-2">Login</a>
                <a href=".?page=SignUp" type="button" class="btn btn-warning me-2">SingUp</a>
            </div>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/me.png" alt="mdo" width="32" height="32" class="rounded-circle img-fluide">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- breadcrumb -->
<div class="container mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Directory:</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php
                if (!empty($_GET['page'])) {
                    echo $_GET['page'];
                }  elseif (isset($_GET['page']) == "home") {
                }
                else{
                }
                ?>
            </li>
        </ol>
    </nav>
</div>
<!-- 
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP OOP CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=".?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=".?page=record">Record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=".?page=record">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=".?page=record">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <a href=".?page=signin" class="btn btn-primary me-2">Login</a>
                <a href=".?page=signup" class="btn btn-success me-2">Sign Up</a>
            </form>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav> -->