<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('css/css/material-kit.css')}} rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="cards">
            <div class="container">
                <div class="my-5"></div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                        <div class="card card-pricing">
                            <div class="card-content">
                                <div class="tim-typo">
                                    <h3 class="title"><span class=" category text-success tim-note">Free</span></h3>
                                </div>
                                <h1 class="card-title"><small>$</small>0</h1>
                                <ul>
                                    <li><i class="fas fa-check text-success"></i>&nbsp;Add Post</li>
                                    <li><i class="fas fa-times text-danger"></i>&nbsp;Top Add</li>
                                    <li><i class="fas fa-times text-danger"></i>&nbsp;Sharing Tools</li>
                                    <li><i class="fas fa-times text-danger"></i>&nbsp; Design Tools</li>
                                </ul>
                                <a href="{{ route('register') }}" class="btn btn-primary btn-round">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-pricing">
                            <div class="card-content">
                                <div class="tim-typo">
                                    <h3 class="title"><span class=" category text-success tim-note">Premium</span></h3>
                                </div>
                                <h1 class="card-title"><small>$</small>10</h1>
                                <ul>
                                    <li><span><i class="fas fa-check text-success"></span></i>&nbsp;Add Post</li>
                                    <li><i class="fas fa-check text-success"></i>&nbsp;Top Add</li>
                                    <li><i class="fas fa-check text-success"></i>&nbsp;Sharing Tools</li>
                                    <li><i class="fas fa-check text-success"></i>&nbsp; Design Tools</li>
                                </ul>
                                <a href="{{ route('register') }}" class="btn btn-primary btn-round">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <footer class="footer footer-black footer-big">
            <div class="container">

                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>About Us</h5>
                            <p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
                        </div>

                        <div class="col-md-4">
                            <h5>Social Feed</h5>
                            <div class="social-feed">
                                <div class="feed-line">
                                    <i class="fa fa-twitter"></i>
                                    <p>How to handle ethical disagreements with your clients.</p>
                                </div>
                                <div class="feed-line">
                                    <i class="fa fa-twitter"></i>
                                    <p>The tangible benefits of designing at 1x pixel density.</p>
                                </div>
                                <div class="feed-line">
                                    <i class="fa fa-facebook-square"></i>
                                    <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h5>Social Feed</h5>
                            <div class="social-feed">
                                <div class="feed-line">
                                    <i class="fa fa-twitter"></i>
                                    <p>How to handle ethical disagreements with your clients.</p>
                                </div>
                                <div class="feed-line">
                                    <i class="fa fa-twitter"></i>
                                    <p>The tangible benefits of designing at 1x pixel density.</p>
                                </div>
                                <div class="feed-line">
                                    <i class="fa fa-facebook-square"></i>
                                    <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
            </div>
        </footer> --}}
</body>
</html>