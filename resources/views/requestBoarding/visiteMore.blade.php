<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moredetails</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href={{asset('css/toastr.min.css')}} rel="stylesheet">
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
            <div class="my-5"></div>           
            <div class="viewsection">
                <div class="column profileback">
                <div class="container detailssection">
                    <div class="columns is-flex-mobile">
                        <div class="column is-two-thirds is-flex-mobile">
                            <div class="containerx">
                                <a href="" class="button is-danger is-pulled-right"><span><i class="far fa-heart"></i></span></a>
                                <div class="is-pulled-left">
                                    <div class="title">
                                        {{ $boardingrequestData->boardingrequest->boardingType}} <span>Request In</span>, {{ $boardingrequestData->boardingrequest->City}}
                                    </div>
                                    <div class="subtitle">
                                        
                                    </div>
                                    <hr class="hrline">
                                    <div class="subtitle has-text-weight-semibold">
                                        Boarding Details
                                    </div>
                                    @if (($boardingrequestData->boardingrequest->boardingType)=='House')
                                    <div class="columns">
                                        <div class="column detailscolumn has-text-dark">
                                            <p>Boarding Request Type: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->boardingType}}</span></p>
                                            <p>No of Rooms: <span class="has-text-weight-semibold">{{ $boardingrequestData->NoOfRooms}}</span></p>
                                            <p>No of Bed: <span class="has-text-weight-semibold">{{ $boardingrequestData->NoOfBed}}</span></p>
                                            <p>With Furniture: 
                                                
                                                    @if(( $boardingrequestData->Withfurniture)==1)
                                                    <span class="has-text-weight-semibold">Yes</span>
                                                    @else
                                                    <span class="has-text-weight-semibold">No</span>
                                                    @endif                                                   
                                            </p>
                                            <p>AC Availability: 
                                                @if(( $boardingrequestData->Acavalability)==1)
                                                    <p><span class="has-text-weight-semibold">Yes</span></p>
                                                @else
                                                    <span class="has-text-weight-semibold">No</span>
                                                @endif

                                            </p>
                                            <p>Kitchen Availability: 
                                                @if(( $boardingrequestData->kitchenavalability)==1)
                                                    <p><span class="has-text-weight-semibold">Yes</span></p>
                                                @else
                                                    <span class="has-text-weight-semibold">No</span>
                                                @endif

                                            </p>
                                            <p>Garden Availability: 
                                                @if(( $boardingrequestData->Garden)==1)
                                                    <p><span class="has-text-weight-semibold">Yes</span></p>
                                                @else
                                                    <span class="has-text-weight-semibold">No</span>
                                                @endif
                                            </p>
                                            <p>For Whome: 
                                                <span class="has-text-weight-semibold">
                                                    @if(( $boardingrequestData->boardingrequest->School_boys)==1)
                                                        School Boys/
                                                    @else
                                                    @endif

                                                    @if(( $boardingrequestData->boardingrequest->School_girls)==1)
                                                        School girls/
                                                    @else
                                                    @endif

                                                    @if(( $boardingrequestData->boardingrequest->Uni_boys)==1)
                                                        Uni Boys/
                                                    @else
                                                    @endif

                                                    @if(( $boardingrequestData->boardingrequest->Uni_girls)==1)
                                                        School girls/
                                                    @else
                                                    @endif

                                                    @if(( $boardingrequestData->boardingrequest->Office_boys)==1)
                                                        Office Boys/
                                                    @else
                                                    @endif

                                                    @if(( $boardingrequestData->boardingrequest->Office_girls)==1)
                                                        Office girls
                                                    @else
                                                    @endif

                                                </span>
                                            </p>
                                        </div>
                                        <div class="column has-text-dark ">
                                            <p>Approximate monthly rent: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->MonthlyRent}}</span></p>
                                            <p>Approximate Key Money: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->KeyMoney}}</span></p>
                                            <p>Address: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Address}}</span></p>
                                            <p>Province: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Province}}</span></p>
                                            <p>District: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->District}}</span></p>
                                            <p>City: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->City}}</span></p>                                         
                                            {{--<p>Availability: @if(strcmp($house->property->availability,"YES") == 0)
                                                <span class="has-text-weight-semibold has-text-success">
                                                    {{$house->property->availability}}
                                                </span> @else
                                                <span class="has-text-weight-semibold has-text-danger">
                                                        {{$house->property->availability}}
                                                </span> @endif
                                            </p> --}}
                                        </div>
                                    </div>
                                    @elseif(( $boardingrequestData->boardingrequest->boardingType)=='Annex'))
                                        <div class="columns">
                                            <div class="column detailscolumn has-text-dark">
                                                <p>Boarding  Type: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->boardingType}}</span></p>
                                                <p>No of Rooms: <span class="has-text-weight-semibold">{{$boardingrequestData->NoOfRooms}}</span></p>
                                                <p>No of Bed: <span class="has-text-weight-semibold">{{ $boardingrequestData->NoOfBed}}</span></p>
                                                <p>With Furniture: 
                                                    
                                                        @if(( $boardingrequestData->Withfurniture)==1)
                                                        <span class="has-text-weight-semibold">Yes</span>
                                                        @else
                                                        <span class="has-text-weight-semibold">No</span>
                                                        @endif                                                   
                                                </p>
                                                <p>AC Availability: 
                                                    @if(( $boardingrequestData->Acavalability)==1)
                                                        <p><span class="has-text-weight-semibold">Yes</span></p>
                                                    @else
                                                        <span class="has-text-weight-semibold">No</span>
                                                    @endif

                                                </p>
                                                <p>Kitchen Availability: 
                                                    @if(( $boardingrequestData->kitchenavalability)==1)
                                                        <p><span class="has-text-weight-semibold">Yes</span></p>
                                                    @else
                                                        <span class="has-text-weight-semibold">No</span>
                                                    @endif

                                                </p>
                                                <p>For Whome: 
                                                    <span class="has-text-weight-semibold">
                                                        @if(( $boardingrequestData->boardingrequest->School_boys)==1)
                                                            School Boys/
                                                        @else
                                                        @endif
    
                                                        @if(( $boardingrequestData->boardingrequest->School_girls)==1)
                                                            School girls/
                                                        @else
                                                        @endif
    
                                                        @if(( $boardingrequestData->boardingrequest->Uni_boys)==1)
                                                            Uni Boys/
                                                        @else
                                                        @endif
    
                                                        @if(( $boardingrequestData->boardingrequest->Uni_girls)==1)
                                                            School girls/
                                                        @else
                                                        @endif
    
                                                        @if(( $boardingrequestData->boardingrequest->Office_boys)==1)
                                                            Office Boys/
                                                        @else
                                                        @endif
    
                                                        @if(( $boardingrequestData->boardingrequest->Office_girls)==1)
                                                            Office girls
                                                        @else
                                                        @endif
    
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="column has-text-dark ">
                                                <p>Approximate monthly rent: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->MonthlyRent}}</span></p>
                                                <p>Approximate Key Money: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->KeyMoney}}</span></p>
                                                <p>Address: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Address}}</span></p>
                                                <p>Province: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Province}}</span></p>
                                                <p>District: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->District}}</span></p>
                                                <p>City: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->City}}</span></p>                                                
                                                
                                                {{--<p>Availability: @if(strcmp($house->property->availability,"YES") == 0)
                                                    <span class="has-text-weight-semibold has-text-success">
                                                        {{$house->property->availability}}
                                                    </span> @else
                                                    <span class="has-text-weight-semibold has-text-danger">
                                                            {{$house->property->availability}}
                                                    </span> @endif
                                                </p> --}}
                                            </div>
                                        </div>
                                    @elseif(( $boardingrequestData->boardingrequest->boardingType)=='Singel_Room'))
                                        <div class="columns">
                                            <div class="column detailscolumn has-text-dark">
                                                <p>Boarding  Type: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->boardingType}}</span></p>               
                                                <p>No of Bed: <span class="has-text-weight-semibold">{{ $boardingrequestData->NoOfBed}}</span></p>
                                                <p>With Furniture: 
                                                    
                                                        @if(( $boardingrequestData->Withfurniture)==1)
                                                        <span class="has-text-weight-semibold">Yes</span>
                                                        @else
                                                        <span class="has-text-weight-semibold">No</span>
                                                        @endif                                                   
                                                </p>
                                                <p>AC Availability: 
                                                    @if(( $boardingrequestData->Acavalability)==1)
                                                        <p><span class="has-text-weight-semibold">Yes</span></p>
                                                    @else
                                                        <span class="has-text-weight-semibold">No</span>
                                                    @endif

                                                </p>                                               
                                                <p>For Whome: 
                                                    <span class="has-text-weight-semibold">
                                                        @if(( $boardingrequestData->boardingrequest->School_boys)==1)
                                                            School Boys/
                                                        @else
                                                        @endif

                                                        @if(( $boardingrequestData->boardingrequest->School_girls)==1)
                                                            School girls/
                                                        @else
                                                        @endif

                                                        @if(( $boardingrequestData->boardingrequest->Uni_boys)==1)
                                                            Uni Boys/
                                                        @else
                                                        @endif

                                                        @if(( $boardingrequestData->boardingrequest->Uni_girls)==1)
                                                            School girls/
                                                        @else
                                                        @endif

                                                        @if(( $boardingrequestData->boardingrequest->Office_boys)==1)
                                                            Office Boys/
                                                        @else
                                                        @endif

                                                        @if(( $boardingrequestData->boardingrequest->Office_girls)==1)
                                                            Office girls
                                                        @else
                                                        @endif

                                                    </span>
                                                </p>
                                            </div>
                                            <div class="column has-text-dark ">
                                                <p>Approximate monthly rent: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->MonthlyRent}}</span></p>
                                                <p>Approximate Key Money: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->KeyMoney}}</span></p>
                                                <p>Address: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Address}}</span></p>
                                                <p>Province: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->Province}}</span></p>
                                                <p>District: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->District}}</span></p>
                                                <p>City: <span class="has-text-weight-semibold">{{ $boardingrequestData->boardingrequest->City}}</span></p>                                                
                                                
                                                {{--<p>Availability: @if(strcmp($house->property->availability,"YES") == 0)
                                                    <span class="has-text-weight-semibold has-text-success">
                                                        {{$house->property->availability}}
                                                    </span> @else
                                                    <span class="has-text-weight-semibold has-text-danger">
                                                            {{$house->property->availability}}
                                                    </span> @endif
                                                </p> --}}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="column is-hidden-touch">
                            <div class='is-flex d-flex justify-content-center'>
                                <figure class="image is-128x128">
                                    <img class="is-rounded is-horizontal-center" src="/images/prof.jpg">
                                </figure>
                            </div>
                            <div class="subtitle has-text-centered"><span>@</span>{{$boardingrequestData->boardingrequest->user->name}}</div>
                            <div class="subtitle has-text-centered"><span></span>{{$boardingrequestData->boardingrequest->user->email}}</div>
                            <div class="has-text-centered">
                                
                                <button class="button is-warning" onclick="location.href='#contactbox'">Send Massage</button>
                                <button class="button is-success" onclick="showPnox()">Call Owner</button>
                                <p class="has-text-dark customerpno" id="pnox"><a href="tel:{{ $boardingrequestData->boardingrequest->user->phone}}" class="nounnounderlinelink">{{ $boardingrequestData->boardingrequest->user->phone}}</a></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="subtitle has-text-weight-semibold">Description</div>
                    <div class="column is-flex-mobile">
                        <p class="content">
                            {{$boardingrequestData->boardingrequest->Description}}
                        </p>
                    </div>
                    
                    {{-- Contact Owner Email Box Start Here --}}
                    <hr>
                    <div class="subtitle has-text-weight-semibold" id="contactbox">Contact Owner</div>
                    <div class="column is-flex-mobile">
                        <form action="/house/contactowner/{{getBoardingTypeIdById( $boardingrequestData->boardingrequest->id)}}" method="post">
                            @csrf
                            <div class="field">
                                <div class="control">
                                <input class="input" type="hidden" name="owner" value="{{ $boardingrequestData->boardingrequest->user->id}}">
                                <input class="input" type="hidden" name="path" value="{{Request::path()}}">
                                
                                @if(Auth::check())
                                    <input class="input" type="hidden" name="sender" value="{{auth()->user()->id}}">
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
                                            <input class="input {{ $errors->has('name') ? ' is-danger' : '' }} is-primary" type="text" placeholder="Name" name="name">
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
                                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }} is-primary" type="email" placeholder="Email" name="email">
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
                                                <input class="input {{ $errors->has('pno') ? ' is-danger' : '' }} is-primary" type="tel" placeholder="Your phone number" name="pno">
                                            </p>
                                        </div>
                                        {!! $errors->first('pno', '<p class="help-block has-text-danger">:message</p>') !!}
                                        <p class="help has-text-danger">Do not enter the first zero</p>
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
                                            <input class="input {{ $errors->has('subject') ? ' is-danger' : '' }} is-primary" type="text" placeholder="e.g. Need to visit property" name="subject">
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
                                            <textarea class="textarea {{ $errors->has('message') ? ' is-danger' : '' }} is-primary" placeholder="Explain how I can help you" name="message"></textarea>
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
                                            <button class="button is-success" type="submit">
                                                Send message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <br>
        
                    </div>
                    {{-- Contact Owner Emaik --}}
                    <div class="notification is-warning">
                        <button class="delete"></button>
                        <strong>Important information:</strong> This ad has been posted on Bodima.lk by the above mentioned
                        advertiser. Bodima.lk does not have any connection with this advertiser, nor do we vet the advertisers,
                        guarantee their services, responsible for the accuracy of the ad's content or are responsible for services
                        provided by the advertisers. Bodima.lk does not provide any service other than list the advertisements
                        posted by advertisers. You will be contacting the advertiser (owner/agent) of this property directly. We
                        advise you to take precaution when making any payments or signing any agreements and be alert of any possible
                        scams. If making any payments we recommend that you have two permanent & verified methods of contact of the
                        payment receiver such as their landline number and home/business address.
                    </div>
                    @if (Auth::user()== $boardingrequestData->boardingrequest->user)                    
                    <form action="/delete/{{getBoardingrequestTypeIdById( $boardingrequestData->boardingrequest->id)}}/{{ $boardingrequestData->id}}" method="post">
                        @csrf
                        <button class="button is-danger is-pulled-right btnajestment" onclick="deleteMe();">Delete<i class="far fa-trash-alt"></i></button>
                    </form>
                    <a href="/edit/{{getBoardingrequestTypeIdById( $boardingrequestData->boardingrequest->id)}}/{{ $boardingrequestData->id}}" class="btnajestment"><button class="button is-success is-pulled-right">Update Post</button></a>
                    @else
                    <a class="is-pulled-right reportad" id="report"><span><i class="far fa-flag"></i></span><span class="has-text-balck"> Report Advertisement</span></a>
                    @endif                   
                    <br>
        
                </div>
        
            </div>
            </div>            
        </div>


    {{-- @include('layouts.offer')
    @include('layouts.reporthouse') --}}
   

     {{-- JavaScript Files --}}
    <script type="text/javascript" src={{asset('js/jquery-3.3.1.min.js')}}></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    {{-- <script type="text/javascript" src={{asset('js/SweetAlert.js')}}></script> --}}
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/flickity.pkgd.min.js')}}></script>
    @toastr_render
    @include('sweet::alert')
    
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
--}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .deletenotify') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    
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
            function deleteMe() {
            event.preventDefault();
            var form = event.target.form;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "hsl(141, 71%, 48%)",
                cancelButtonColor: "hsl(348, 100%, 61%)",
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    
                    form.submit();

                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire(
                        'Cancelled',
                        'Boarding is safe :)',
                        'info'
                    )
                }
            });
        }
        </script>   
    </body>
</html>