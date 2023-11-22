<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/themes/ozzystore/main.css'])
    <title>Ozzy Store Official Store</title>
</head>

<body>
    @include('themes.ozzystore.shared.header')

    @include('themes.ozzystore.shared.slider')

    <!-- Popular -->
    <section class="popular">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Popular</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_01.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 1</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_02.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 2</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_03.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 3</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/ozzystore/assets/img/shop_04.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 4</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest -->
    <section class="latest">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Latest</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="product.html" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_01.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 1</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_02.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 2</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_03.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 3</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="product.html"><img src="{{ asset('themes/ozzystore/assets/img/shop_04.jpg') }}"
                                alt="" class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 4</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR 200.000</p>
                            <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe  -->
    <section class="subscribe">
        <div class="container">
            <div class="subscribe-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6 col-md-7 col-10 col-sub">
                        <h1>Subscribe to get latest updates!</h1>
                        <form action="#" class="mt-5">
                            <div class="input-group w-100">
                                <input type="email" class="form-control" placeholder="Type your email ..">
                                <button class="btn btn-outline-warning">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container pt-5">
            <div class="row row-content">
                <div class="col-md-6">
                    <h1 class="logo-brand">Indo <span>Toko</span></h1>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-md-3 mt-4 mt-sm-0">
                    <h3 class="mb-3">Navigation</h3>
                    <ul class="p-0">
                        <li><a href="#">Home</a></li>
                        <li class="mt-3"><a href="#">Best Seller</a></li>
                        <li class="mt-3"><a href="#">Category</a></li>
                        <li class="mt-3"><a href="#">Comunity</a></li>
                        <li class="mt-3"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mt-4 mt-sm-0">
                    <h3 class="mb-3">Company</h3>
                    <a href="#">john@example.com</a>
                    <p>Jln. Tamansiswa, No 32 Yogyakarta Indonesia</p>
                </div>
            </div>
            <div class="row row-copy mt-4 mt-sm-0">
                <div class="col-md-6">
                    <p>&copy; 2023 IndoToko. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-sm-end">
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
