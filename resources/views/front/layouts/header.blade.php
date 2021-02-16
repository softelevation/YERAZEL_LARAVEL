<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo url('/')?>/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/')?>/front/css/custom.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Yerazel</title>
</head>

<header id="myHeader">
    <div class="topBar ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="contact-detail d-flex">
                    <p class="mb-0 text-white mr-4"><i class="fa fa-phone mr-2" aria-hidden="true"></i> (855) YERAZEL
                    </p>
                    <p class="mb-0 text-white"><i class="fa fa-envelope mr-2" aria-hidden="true"></i> office@yerazel.com
                    </p>
                </div>
                <div class="socialIcon">
                    <div class="social-list list-group">
                        <div class="list-group-item"><a class="text-white" href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></div>
                        <div class="list-group-item"><a class="text-white" href="#"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></div>
                        <div class="list-group-item"><a class="text-white" href="#"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></div>
                        <div class="list-group-item"><a class="text-white" href="#"><i class="fa fa-pinterest-p"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="sticky p-0 navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/" class="mr-md-5 mr-4 navbar-brand"><img class="img-fluid"
                    src="<?php echo url('/')?>/front/images/logo.png" alt="logo" width="185px">
            </a>
            <button aria-controls="basic-navbar-nav" type="button" aria-label="Toggle navigation"
                class="navbar-toggler collapsed"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="basic-navbar-nav">
                <div class="mr-auto navbar-nav">
                    <a href="#home" data-rb-event-key="#home" class="nav-link">Home</a><a href="#link"
                        data-rb-event-key="#link" class="nav-link">Home Search</a><a href="#contact"
                        data-rb-event-key="#contact" class="nav-link">Contact
                    </a>
                </div>
                <div class="ml-auto">
                    <button type="button" onclick="location.href = '{{url('/login')}}';" class="loginBtn btn btn-primary"><i class="fa fa-sign-out" aria-hidden="true"></i> Log In</button>
					<button type="button" onclick="location.href = '{{url('/rebate')}}';" class="registerBtn btn btn-primary">Register for Rebate</button>
                </div>
            </div>
        </div>
    </nav>
</header>
