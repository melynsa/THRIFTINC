<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        `<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Thriftinc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/home2">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="/co" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5"  style="background-color: #CDBBA7">
                <div class="text-center text-white">
                    <h1 class="display-3 fw-bolder">Thriftinc</h1>
                    <p class="lead fw-normal text-white-70 mb-0">For all your thrift needs</p>
                </div>
            </div>
        </header>
        <section class="vh-100" style="background-color: #CDBBA7;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col">
                <p><span class="h2" style="color: white">Shopping Cart </span><span class="h4" style="color: white">(1 item in your cart)</span></p>

                <div class="card mb-4">
                <div class="card-body p-4" style="background-color: white">

                    <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="/img/jam.png" 
                        class="img-fluid" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small text-muted mb-4 pb-2">Name</p>
                        <p class="lead fw-normal mb-0">Watch</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small text-muted mb-4 pb-2">Color</p>
                        <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #CDBBA7;"></i>
                            pink rose</p>
                        </div>
                    </div> -->
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                        <p class="lead fw-normal mb-0">1</p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small text-muted mb-4 pb-2">Price</p>
                        <p class="lead fw-normal mb-0">Rp. 50.000,00</p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div>
                        <p class="small text-muted mb-4 pb-2">Total</p>
                        <p class="lead fw-normal mb-0">Rp. 50.000,00</p>
                        </div>
                    </div>
                    </div>

                </div>
                </div>

                <div class="card mb-5">
                <div class="card-body p-4">

                    <div class="float-end">
                    <p class="mb-0 me-5 d-flex align-items-center">
                        <span class="small text-muted me-2">Order total:</span> <span
                        class="lead fw-normal">Rp. 50.000,00</span>
                    </p>
                    </div>

                </div>
                </div>

                <div class="d-flex justify-content-end" >
                <a type="button" class="btn btn-light btn-lg me-2" href="/catalogAccessories">Continue shopping</a>
                <a type="button" class="btn btn-primary btn-lg" style="background-color: #A27B5C" href="/co">Add to cart</a>
                </div>

            </div>
            </div>
        </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
