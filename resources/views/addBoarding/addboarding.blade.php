<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddBoarding</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma/bulmaCheckradio/dist/css/bulma-checkradio.min')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    {{-- <link href={{asset('css/css/material-kit.css')}} rel="stylesheet"> --}}
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('css/toastr.min.css')}} rel="stylesheet">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    @toastr_render

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <style>
        .select, .select select{
            width: 100%;
        }
    </style>

</head>
<body class="has-background-white-ter">
        @include('incfile.navibar')
        <div class="section is-medium">
            <div class="my-5"></div>
            <div class="title has-text-centered">Select Boarding Type</div>
        <div class="my-5"></div>
            <div class="container downmargin">
                <div class="columns is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
                    <a href="/add/house" class="column gapme has-text-centered selectboxx">
                        <div>
                            <i class="fas fa-home fa-5x"></i>
                            <br>
                            <div class="subtitle">House</div>
                        </div>
                    </a>
                    <a href="/add/singalroom" class="column gapme has-text-centered selectboxx">
                        <div>
                            <i class="fas fa-bed fa-5x"></i>
                            <br>
                            <div class="subtitle">Single Room</div>
                        </div>
                    </a>
                    <a href="/add/anex" class="column gapme has-text-centered selectboxx">
                        <div>
                            <i class="far fa-building fa-5x"></i>
                            <br>
                            <div class="subtitle">Anex</div>
                        </div>
                    </a>
                </div>
                <br>
            </div>
        </div>

    {{-- <script src="{{asset('css/bulma/bulmaCheckradio/gulpfile.js')}}"></script> --}}

    <div class="footsec">
            <div class="container">
                <div class="block">
                    <div class="columns">
                        <div class="column">
                            <div class="ftsec fstcl">
                                <h2>About bodima.lk</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <ul class="">
                                    <li><a href="#"><span class="fas fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec seccl">
                                <h2>Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspHome</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspAbout</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspServices</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspProjects</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspContact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec tridcl">
                                <h2>Services</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspWeb Design</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspWeb Development</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspBusiness Strategy</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspData Analysis</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspGraphic Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec fortcl">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">205 colombo 7, SriLnka</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+11 25 34 689</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bodimahelp@gmail.com</span></a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
        
              $(".addmore").click(function(){ 
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });
        
              $("body").on("click",".is-danger",function(){ 
                  $(this).parents(".control-group").remove();
              });
        
            });
        </script>
</body>
</html>