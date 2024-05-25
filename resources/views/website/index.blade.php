<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/venobox.css">
    <link href="dist/lity.css" rel="stylesheet">
    <link rel="icon" href="https://www.w3schools.com/favicon.ico">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="relative">

    <header>
        <div id="navigation" class="bg-danger">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid pl-5" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul id="nav" class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" href="#home">Home</a> -->
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonialPart">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#client_part">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="demo01" href="#blogs">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- home part starts -->
    <section id="home" class="bg-secondary">
        <div class="home_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-2 order-lg-1 order-xl-1 order-md-2 order-sm-2 p-0">
                        <div class="description">
                            <h4>welcome to my world</h4>
                            <h2>hi, i'm jone lee</h2>
                            <div class="spinner">
                                <span>
                                    <b style="font-size: 28px;">a</b>
                                    <span class="typer" id="typerJs"
                                        data-words="developer.,Professional Coder.,System Engineer." data-delay="77">
                                    </span>
                                    <span style="vertical-align:center; color: white; font-size: 28px;" class="cursor"
                                        data-cursorDisplay="|" data-owner="some-id"></span>
                                </span>
                                </span>
                            </div>
                            <p>
                                I use animation as a third dimension by which to simplify experiences and kuiding thro
                                each and every interaction. I’m not adding motion just to spruce things up, but doing it
                                in ways that.
                            </p>
                            <div class="social">
                                <h5>Join with me</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 order-xl-2 order-md-1 order-sm-1 p-0 formal">
                        <div class="formal_image">
                            <img src="images/formal.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home part ends -->


    <!-- clients Part starts -->

    <section id="features" class="mt-5">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>What I DO</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-bars card_icon"></i>
                                    <h4 class="card-title">App Development</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-book card_icon"></i>
                                    <h4 class="card-title">Web Development</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-tv card_icon"></i>
                                    <h4 class="card-title">Android Learning</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <i class="fa fa-people-pants card_icon"></i> -->
                                    <i class="fa fa-compass card_icon"></i>
                                    <h4 class="card-title">Business Application</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-wifi card_icon"></i>
                                    <h4 class="card-title">Php Laravel</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <div class="feature_card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <i class="fa fa-message card_icon"></i> -->
                                    <i class="fa fa-comment card_icon"></i>
                                    <h4 class="card-title">Font Awesome</h4>
                                    <p class="card-text">Seaque ipsa quae ab illo inven tore veritatis et qua si
                                        architecto beatae atis et sopno vitae.</p>
                                    <i class="fa fa-arrow-right icon_right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  Testimonial Part starts -->
    <section id="testimonialPart">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Testimonial</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="test_bg">
            <div class="test_overlay">
                <div class="container">
                    <div class="row testimonial_slide">
                        <div class="col-lg-6">
                            <div class="review">
                                <img src="images/client-1.png" class="img-fluid" alt="">
                                <h4>Mridul Chakrabarty</h4>
                                <span>Gymnast</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="message">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printertook a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries are not possible.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review">
                                <img src="images/client-1.png" class="img-fluid" alt="">
                                <h4>Mridul Chakrabarty</h4>
                                <span>Gymnast</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="message">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printertook a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries are not possible.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review">
                                <img src="images/client-1.png" class="img-fluid" alt="">
                                <h4>Mridul Chakrabarty</h4>
                                <span>Gymnast</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="message">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printertook a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries are not possible.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review">
                                <img src="images/client-1.png" class="img-fluid" alt="">
                                <h4>Mridul Chakrabarty</h4>
                                <span>Gymnast</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="message">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printertook a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries are not possible.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review">
                                <img src="images/client-1.png" class="img-fluid" alt="">
                                <h4>Mridul Chakrabarty</h4>
                                <span>Gymnast</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="message">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printertook a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries are not possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- clients Part starts -->
    <section id="client_part">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <span>Popular Clients</span>
                        <h3>Awesome Clients</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-danger">
            <div class="row">
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="images/logo.png" alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="client_main">
                        <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76882/logo.svg"
                            alt="mparticle">
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- clients Part ends -->

    <!-- Pricing Part Starts -->
    <section id="pricing">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>My Pricing</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-pricing">
                        <div class="card">
                            <div class="card-header">
                                <h1>Hourly</h1>
                            </div>
                            <div class="card-body">
                                <div class="card-title d-flex">
                                    <p>$99</p>
                                    <span>/ Per Hour</span>
                                </div>
                                <div class="card-text">
                                    <ul>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">One time contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Flexible contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Source Files</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Support</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Updates</p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary price-anchor">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-pricing">
                        <div class="card">
                            <div class="card-header">
                                <h1>Hourly</h1>
                            </div>
                            <div class="card-body">
                                <div class="card-title d-flex">
                                    <p>$99</p>
                                    <span>/ Per Hour</span>
                                </div>
                                <div class="card-text">
                                    <ul>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">One time contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Flexible contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Source Files</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Support</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Updates</p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary price-anchor">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-pricing">
                        <div class="card">
                            <div class="card-header">
                                <h1>Hourly</h1>
                            </div>
                            <div class="card-body">
                                <div class="card-title d-flex">
                                    <p>$99</p>
                                    <span>/ Per Hour</span>
                                </div>
                                <div class="card-text">
                                    <ul>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">One time contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Flexible contract</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-check"></i></span>
                                            <p class="ml-2">Source Files</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Support</p>
                                        </li>
                                        <li class="d-flex">
                                            <span><i class="fa fa-times"></i></span>
                                            <p class="ml-2">Updates</p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary price-anchor">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Part Ends -->

    <!-- blog part starts -->
    <!-- <h1 class="text-center" style="padding-top: 325px; padding-bottom: 55px;">Blog Part</h1> -->
    <section id="blogs">
        <div class="content" style="padding-bottom: 225px; padding-top: 25px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>My Blog</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_part">
            <div class="container">
                <div class="row">
                    <!-- card item -->
                    @foreach ($posts as $post)                        
                    <div class="col-lg-4">
                        <div>
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="#"><img
                                        src="https://source.unsplash.com/random" /></a>
                                    </header>
                                    <div class="card__body">
                                        <h2 class="card__title"><a href="#">{{$post->name}}</a></h2>
                                        <p class="card__description">{{$post->description}}</p>
                                        </div>
                                        <footer class="card__footer">
                                            <span class="icon fa fa-clock"></span> 10 mins ago
                                            <span class="icon fa fa-comment"></span><a href="#"> 145 comments</a>
                                        </footer>
                                    </article>
                                </div>
                            </div>
                            @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Form Part Starts -->
    <section class="ftco-section" id="contacts">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Contact With Me</h3>
                        <img src="images/border.png" class="img-fluid" alt="Testimonial Border">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters mb-5">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <!-- <div id="map">
                                </div> -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d233675.86658322663!2d90.19482495543974!3d23.77559765140502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ad9a69f36f%3A0xffd63d9e3af04553!2sDhanmondi%2032!5e0!3m2!1sen!2sbd!4v1715159610278!5m2!1sen!2sbd"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Part ends -->

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/cursor.js"></script>
    <!-- not use type.js -->
    <script src="js/type.js"></script>
    <script src="js/typer.js"></script>
    <script src="dist/lity.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
