<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vcvj</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flickity.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
    {{-- <link rel="stylesheet" href="/css/flickity.css"> Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600"
        rel="stylesheet">
        {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
    
    <style>
        #map {
            height: 300px;
        }
        .carousel-cell  {
            width: 100%;
            height: 504px;
            margin-right: 8px;
            background: #8C8 ;
            border-radius: 5px;
    /* counter-increment: carousel-cell; */
        }
    </style>

</head>

<body>
    @include('incfile.navibar')
    
    <div class="my-5"></div>

    <div class="container">

        <div class="viewsection">
    
            <div class="column profileback">
                <div class="container">
                    <div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
                        <div class="carousel-cell">
                            <img src="images/B2.jpg" />
                        </div>
                        <div class="carousel-cell">
                            <img src="images/B2.jpg" />
                        </div>
                    </div>
                </div>
            <div class="container detailssection">
                <div class="columns is-flex-mobile">
                    <div class="column is-two-thirds is-flex-mobile">
                        <div class="containerx">
                        <a href="" class="button is-danger is-pulled-right"><span><i class="far fa-heart"></i></span></a>
                            <div class="is-pulled-left">
                                <div class="title">
                                    {{-- {{$house->property->name}} --}}
                                </div>
                                <div class="subtitle">
                                    {{-- {{$house->property->city}}, {{$house->property->postalCode}} --}}
                                </div>
                                <hr class="hrline">
                                <div class="subtitle has-text-weight-semibold">
                                    Boarding Details
                                </div>
                                <div class="columns">
                                    <div class="column detailscolumn">
                                        <p>Boarding  Type: <span class="has-text-weight-semibold"></span></p>
                                        <p>No of Rooms: <span class="has-text-weight-semibold"></span></p>
                                        <p>Kitchen: <span class="has-text-weight-semibold"></span></p>
                                        <p>No. of Washrooms: <span class="has-text-weight-semibold"></span></p>
                                        <p>No. of floors: <span class="has-text-weight-semibold"></span></p>
                                        <p>Garden: <span class="has-text-weight-semibold"></span></p>
                                        <p>Swimming Pool: <span class="has-text-weight-semibold"></span></p>
                                    </div>
                                    {{-- <div class="column detailscolumn">
                                        <p>Property Type: <span class="has-text-weight-semibold">{{$house->property->type}}</span></p>
                                        <p>Bedrooms: <span class="has-text-weight-semibold">{{$house->noOfRooms}}</span></p>
                                        <p>Kitchen: <span class="has-text-weight-semibold">{{$house->noOfKitchen}}</span></p>
                                        <p>No. of Washrooms: <span class="has-text-weight-semibold">{{$house->noOfWashrooms}}</span></p>
                                        <p>No. of floors: <span class="has-text-weight-semibold">{{$house->noOfFloors}}</span></p>
                                        <p>Garden: <span class="has-text-weight-semibold">{{$house->garden}}</span></p>
                                        <p>Swimming Pool: <span class="has-text-weight-semibold">{{$house->swimmingPool}}</span></p>
                                    </div> --}}
                                    <div class="column">
                                        <p>Area of Property(Square Feet): <span class="has-text-weight-semibold"></span></p>
                                        <p>Nearest School: <span class="has-text-weight-semibold"></span></p>
                                        <p>Nearest Busstop: <span class="has-text-weight-semibold"></span></p>
                                        <p>Nearest Railway Station: <span class="has-text-weight-semibold"></span></p>
                                        <p>Availability:
                                        </p>
                                        {{-- <p>Area of Property(Square Feet): <span class="has-text-weight-semibold">{{$house->size}}</span></p>
                                        <p>Nearest School: <span class="has-text-weight-semibold">{{$house->nearestSchool}}</span></p>
                                        <p>Nearest Busstop: <span class="has-text-weight-semibold">{{$house->nearestRailway}}</span></p>
                                        <p>Nearest Railway Station: <span class="has-text-weight-semibold">{{$house->nearestBusStop}}</span></p>
                                        <p>Availability: @if(strcmp($house->property->availability,"YES") == 0)
                                            <span class="has-text-weight-semibold has-text-success">
                                                {{$house->property->availability}}
                                            </span> @else
                                            <span class="has-text-weight-semibold has-text-danger">
                                                    {{$house->property->availability}}
                                            </span> @endif
                                        </p> --}}
                                    </div>
    
                                    {{-- Mobile/Tablet Section --}}
                                    {{-- <div class="column is-hidden-desktop">
                                        <div class='is-flex is-horizontal-center'>
                                            <figure class="image is-128x128">
                                                <img class="is-rounded is-horizontal-center" src="/uploads/avatars/{{$house->property->user->avatar}}">
                                            </figure>
                                        </div>
                                        <div class="subtitle has-text-centered"><span>@</span>{{$house->property->user->name}}</div>
                                        <div class="has-text-centered">
                                            <button class="button is-success" onclick="showPnox()">Show Contact Number</button>
                                            <p class="has-text-dark customerpno" id="pnox"><a href="tel:{{$house->property->contactNo}}" class="nounnounderlinelink">{{$house->property->contactNo}}</a></p>
                                            <hr>
                                            <p class="owneramount">Owner Estimated: <span class="has-text-success has-text-weight-bold">{{number_format($house->property->amount,2)}}</span>                                            LKR</p>
                                            <p class="bidamount">Current Highest Offer: <span class="has-text-danger has-text-weight-bold">   
                                                    @if ($house->offers->count() > 0)
                                                        {{number_format($house->offers->sortBy('offerAmount')->last()->offerAmount,2)}}
                                                    @else
                                                        0.00
                                                    @endif
                                                </span> LKR</p>
                                            <div id="myBtnM"><button class="button is-link">Make an offer</button></div>
        @include('results.offeralerts')
                                        </div>
    
                                    </div> --}}
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-hidden-touch">
                        <div class='is-flex is-horizontal-center'>
                            <figure class="image is-128x128">
                                <img class="is-rounded is-horizontal-center" src="images/prof.jpg">
                            </figure>
                        </div>
                        <div class="subtitle has-text-centered"><span>@</span></div>
                        <div class="has-text-centered">
                            <button class="button is-dark" onclick="location.href='#contactbox'">Email Owner</button>
                            <button class="button is-success" onclick="showPno()">Call Owner</button>
                            <p class="has-text-dark customerpno" id="pno"><a href="" class="nounnounderlinelink"></a></p>
                            <hr>
                            <p class="owneramount">Owner Estimated: <span class="has-text-success has-text-weight-bold"></span>                            LKR</p>
                            <p class="bidamount">Current Highest Offer: <span class="has-text-danger has-text-weight-bold">   
                                {{-- @if ($house->offers->count() > 0)
                                    {{number_format($house->offers->sortBy('offerAmount')->last()->offerAmount,2)}}
                                @else
                                    0.00
                                @endif --}}
                            </span> LKR</p>
                            <div id="myBtn"><button class="button is-link">Make an offer</button></div>
                            <br>
        {{-- @include('results.offeralerts') --}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="subtitle has-text-weight-semibold">
                    Google Map
                </div> {{-- Google Map Here --}} {{--
                <div class=" is-flex-mobile"> --}}
                    {{-- <div class="column maps is-flex-mobile">
    
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <div id="map"></div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        /* height: 678px; */
                                        width: 790px;
                                    }
    
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none!important;
                                        /* /* height: 678px; */
                                        width: 790px;
                                    }
                                </style>
                            </div>
                            <br>
    
                        </div>
                    </div>
                    <a class="button is-info nounnounderlinebtn" href="http://www.google.com/maps/place/{{$house->property->latitude}},{{$house->property->longitude}}"
                        target="_blank">Set Direction</a> </div> --}}
                <hr>
                <div class="subtitle has-text-weight-semibold">Property Description</div>
                <div class="column is-flex-mobile">
                    <p class="content">
                        {{-- {!! $house->property->description !!} --}}
                    </p>
                </div>
                
                {{-- Contact Owner Email Box Start Here --}}
                <hr>
                {{-- <div class="subtitle has-text-weight-semibold" id="contactbox">Contact Owner</div>
                <div class="column is-flex-mobile">
                    <form action="" method="post">
                        @csrf
                        <div class="field">
                            <div class="control">
                            <input class="input" type="hidden" name="owner" value="">
                            <input class="input" type="hidden" name="path" value="">
                            
                            @if(Auth::check())
                                <input class="input" type="hidden" name="sender" value="">
                            @else
                                <input class="input" type="hidden" name="sender" value="0" hidden>
                            @endif
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Name</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Name" name="name">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span> 
                                        {!! $errors->first('name', '<p class="help-block has-text-danger">:message</p>') !!}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Email</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="Email" name="email">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                          </span>
                                          {!! $errors->first('email', '<p class="help-block has-text-danger">:message</p>') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Phone No</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control">
                                            <a class="button is-static">
                                              +94
                                            </a>
                                        </p>
                                        <p class="control is-expanded">
                                            <input class="input {{ $errors->has('pno') ? ' is-danger' : '' }}" type="tel" placeholder="Your phone number" name="pno">
                                        </p>
                                    </div>
                                    {!! $errors->first('pno', '<p class="help-block has-text-danger">:message</p>') !!}
                                    <p class="help has-text-link">Do not enter the first zero</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Subject</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input {{ $errors->has('subject') ? ' is-danger' : '' }}" type="text" placeholder="e.g. Need to visit property" name="subject">
                                        {!! $errors->first('subject', '<p class="help-block has-text-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Message</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea {{ $errors->has('message') ? ' is-danger' : '' }}" placeholder="Explain how I can help you" name="message"></textarea>
                                        {!! $errors->first('message', '<p class="help-block has-text-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <!-- Left empty for spacing -->
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-primary" type="submit">
                                            Send message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
    
                </div> --}}
                {{-- Contact Owner Emaik --}}
                <div class="notification is-danger">
                    <button class="delete"></button>
                    <strong>Important information:</strong> This ad has been posted on Realproperty.lk by the above mentioned
                    advertiser. Realproperty.lk does not have any connection with this advertiser, nor do we vet the advertisers,
                    guarantee their services, responsible for the accuracy of the ad's content or are responsible for services
                    provided by the advertisers. Realproperty.lk does not provide any service other than list the advertisements
                    posted by advertisers. You will be contacting the advertiser (owner/agent) of this property directly. We
                    advise you to take precaution when making any payments or signing any agreements and be alert of any possible
                    scams. If making any payments we recommend that you have two permanent & verified methods of contact of the
                    payment receiver such as their landline number and home/business address.
                </div>
                <a class="is-pulled-right reportad" id="report"><span><i class="far fa-flag"></i></span><span class="has-text-balck"> Report Advertisement</span></a>
                <br>
    
            </div>
    
        </div>
        </div>
    </div>

    {{-- @include('layouts.offer')
    @include('layouts.reporthouse') --}}
    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}
     {{-- JavaScript Files --}}
    {{-- <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/flickity.pkgd.min.js"></script>
    <script src="/js/sweetalert.min.js"></script> --}}

    
    <script type="text/javascript" src={{asset('js/jquery-3.4.1.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/flickity.pkgd.min.js')}}></script>
    
    <!-- MDB core JavaScript -->
    {{-- <script type="text/javascript" src={{asset('js/mdb.min.js')}}></script> --}}
    {{-- @include('sweet::alert') --}}
    {{-- <script>
        var map;
        var lat = {{$house->property->latitude}}
        var lng = {{$house->property->longitude}}
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 15
        });

        var marker = new google.maps.Marker({
          position: {lat: lat, lng: lng},
          map: map,
        });
      }
    </script> --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initMap"
        async defer></script>

    <script>
        function showPno() {
            var x = document.getElementById("pno");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function showPnox() {
            var x = document.getElementById("pnox");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script> --}}

</body>

</html>