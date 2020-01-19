<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles&Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
        <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
        <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
        <link href="{{asset('css/css/mdb.css')}}" rel="stylesheet">


    </head>
    <body>
        @include('incfile.headersec')

        {{-- recomonded post section --}}
      <div class="recomod">
        <div class="container">

          
            <!-- Start your project here-->
           <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">High Rated Boarding</h2>
          <!-- Section description -->
          <p class="grey-text w-responsive mx-auto mb-5">This are the recomonded bording for you to check.those would be good offers for you</p>
          
          <!-- Grid row -->
          <div class="row text-center">
          
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="images/B1.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
            <!-- Grid column -->
          
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="images/B2.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
            <!-- Grid column -->
          
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6">
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="images/B3.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        
        {{-- footer section start --}}

        <div class="footsec" style="background-color:black">
            <div class="container">
                <div class="block">
                    <div class="columns">
                        <div class="column">
                            <div class="ftsec fstcl">
                                <h2 style="color:#fff">About bodima.lk</h2>
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
                                <h2 style="color:#fff">Links</h2>
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
                                <h2 style="color:#fff">Services</h2>
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
                                <h2 class="ftco-heading-2" style="color:#fff">Have a Questions?</h2>
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
        {{-- script section --}}
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
        <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
        <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
        
        @include('sweet::alert')
    </body>
</html>
