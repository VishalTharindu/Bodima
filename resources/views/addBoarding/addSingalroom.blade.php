<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Single Room</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/bulma/bulmaCheckradio/dist/css/bulma-checkradio.min')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">    
    <link rel="stylesheet" href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href={{asset('datatables.net-select-bs4/css/select2.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/jquery-confirm.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/select2/select2.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    
    <script type="text/javascript" src={{asset('js/datatables.net/js/jquery.dataTables.min.js')}}></script>
    <script type="text/javascript" src={{asset('datatables.net-select-bs4/js/select.bootstrap4.min.js')}}></script>
    <script src="{{asset('js/jquery-confirm.js')}}"></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <style>
        .select, .select select{
            width: 100%;
        }
        #map {
            height: 300px;
        }
    </style>

</head>
<body class="has-background-white-ter">
    <div class="data-spy="scroll" data-target=".site-navbar-target" data-offset="300"">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target shadow p-1 mb-5 bg-white rounded navbar-fixed" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand nav-link" href="index.html">Bo<span>dima</span></a>
              <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars"></span>Menu
              </button>
    
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                  <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Boarding
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/show/house">House</a>
                      <a class="dropdown-item" href="/show/Annex">Annex</a>
                      <a class="dropdown-item" href="/show/singleroom">Single Room</a>                 
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Finders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/show/houserequest">House Request</a>
                      <a class="dropdown-item" href="/show/annexrequst">Annex Request</a>
                      <a class="dropdown-item" href="/show/singelroomrequest">Single Room Request</a>                 
                    </div>
                  </li> 
                  <li class="nav-item"><a href="/addboarding" class="nav-link"><span>Add bodim</span></a></li>
                  <li class="nav-item"><a href="/requestboarding" class="nav-link"><span>Request bodim</span></a></li>
                  <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Filtaring</span></a></li>
                  <li class="nav-item">
                      <ul class="navbar-nav nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item float-right">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item float-right">
                                    <a class="nav-link is-pilled-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown is-pulled-right">
                          <div class="btn-group is-pulled-right">
                            <a class="btn  dropdown-toggle is-pulled-right" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false class=" href="#" role="button">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                              {{-- <button type="button" class="btn  dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button> --}}
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="/user/profile">Profile</a>
                                <a class="dropdown-item" href="/user/boarding">Account Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                              </div>
                            </div>
                          </li>
                        @endguest
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
    <div class="section is-medium">
        <div class="">
            <div class="column is-12">
                {{-- @include('layouts.errors') --}}
                @if(session()->has('message'))
                    <div class="notification is-success">
                        <button class="delete"></button>
                        <h1 class="is-size-4"><b> {{ session()->get('message') }}</b></h1>
                    </div>
                @endif
            </div>
            <form action="/add/singalrooms" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="box has-background-white-bis">
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Boarding Type</label>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Boarding Type</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control is-6">
                                            <div class="select is-primary">
                                                <select name="boardingType">
                                                    <option value="Singal_Room">Singal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label is-center">Fetures You Have</label>
                                </div>
                                <div class="columns is mobile">
                                    <div class="column">
                                        <label class="label has-text-centered">No of Bed</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 ">
                                                    <div class="select is-primary">
                                                        <select name="NoOfBed">
                                                            <option>Select No of Bed</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <label class="label has-text-centered">AC Avalable</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Acavalability">
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Acavalability">
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <div class="my-5"></div>
                                        <label class="label has-text-centered">With Furniture</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Withfurniture">
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Withfurniture">
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <label class="label has-text-centered">For Whome</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="School_boys">
                                                                <label for="exampleRtlRadioInline1">School boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="School_girls">
                                                                <label for="exampleRtlRadioInline2">School girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Uni_boys">
                                                                <label for="exampleRtlRadioInline1">Uni boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Uni_girls">
                                                                <label for="exampleRtlRadioInline2">Uni girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Office_boys">
                                                                <label for="exampleRtlRadioInline1">Office boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Office_girls">
                                                                <label for="exampleRtlRadioInline2">Office girls</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Payment and Other</label>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate monthly rent</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="form-control {{ $errors->has('MonthlyRent') ? ' is-invalid' : ''}}" type="text" placeholder="Text input" name="MonthlyRent">                                           
                                            @if ($errors->has('MonthlyRent'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="has-text-danger">{{ $errors->first('MonthlyRent') }}</strong>
                                                </span>
                                            @endif
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate Key Money</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="form-control {{ $errors->has('MonthlyRent') ? ' is-invalid' : ''}}" type="text" placeholder="Text input" name="KeyMoney">                                          
                                            @if ($errors->has('KeyMoney'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('KeyMoney') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4"></div>                           
                            </div>
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="box has-background-white-bis">
                                        <div class="my-4"></div>
                                        <div class="columns is mobile is-centered">
                                            <label class="label has-text-centered">Other Details</label>
                                        </div>                                   
                                        <div class="columns">
                                            <div class="column is-12">
                                                <div class="field">
                                                    <label class="label">Address</label>
                                                    <div class="field">
                                                        <div class="form-group">
                                                            <textarea class="form-control {{ $errors->has('Address') ? ' is-invalid' : ''}} textarea" placeholder="Textarea" name="Address"></textarea>
                                                            @if ($errors->has('Address'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $errors->first('Address') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4"></div>
                                        <div class="columns">
                                            <div class="column is-12">
                                                <div class="field">
                                                    <label class="label">Description</label>
                                                    <div class="field">
                                                        <div class="control">
                                                            <textarea class="textarea" placeholder="Textarea" name="Description"></textarea>
                                                        </div>
                                                        @if ($errors->has('Description'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Description') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-white-bis">
                                <div class="my-4"></div>
                                <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Location Details</label>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Province</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <div class="form-group">
                                                    <select name="Province" class="form-control form-control-lg" id="province">
                                                        <option value="Central Province">Central Province</option>
                                                        <option  value="Eastern Province">Eastern Province</option>
                                                        <option  value="Northern Province">Northern Province</option>
                                                        <option  value="Southern Province">Southern Province</option>
                                                        <option  value="Western Province">Western Province</option>
                                                        <option  value="Western Province">North Western Province</option>
                                                        <option  value="Western Province">North Central Province</option>
                                                        <option  value="Western Province">Uva Province</option>
                                                        <option  value="Western Province">Sabaragamuwa Province</option>
                                                    </select>
                                                    <script>
                                                        $("#province").select2(); 
                                                    </script>             
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>                              
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">District</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <div class="form-group">
                                                    <select name="District" class="form-control form-control-lg" id="distric">
                                                        <option value="Ampara">Ampara</option>
                                                        <option  value="Anuradhapura">Anuradhapura</option>
                                                        <option  value="Badulla">Badulla</option>
                                                        <option  value="Batticaloa">Batticaloa</option>
                                                        <option  value="Colombo">Colombo</option>
                                                        <option  value="Galle">Galle</option>
                                                        <option  value="Gampaha">Gampaha</option>
                                                        <option  value="Hambantota">Hambantota</option>
                                                        <option  value="Kalutara">Kalutara</option>
                                                        <option  value="Kandy">Kandy</option>
                                                        <option  value="Kegalle">Kegalle</option>
                                                        <option  value="Kilinochchi">Kilinochchi</option>
                                                        <option  value="Kurunegala">Kurunegala</option>
                                                        <option  value="Mannar">Mannar</option>
                                                        <option  value="Matale">Matale</option>
                                                        <option  value="Matara">Matara</option>
                                                        <option  value="Monaragala">Monaragala</option>
                                                        <option  value="Mullaitivu">Mullaitivu</option>
                                                        <option  value="Nuwara Eliya">Nuwara Eliya</option>
                                                        <option  value="Polonnaruwa">Polonnaruwa</option>
                                                        <option  value="Puttalam">Puttalam</option>
                                                        <option  value="Ratnapura">Ratnapura</option>
                                                        <option  value="Trincomalee">Trincomalee</option>
                                                        <option  value="Vavuniya">Vavuniya</option>                                   
                                                    </select>
                                                    <script>
                                                        $("#distric").select2(); 
                                                    </script>             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">City</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="form-control {{ $errors->has('City') ? ' is-danger' : '' }}" type="text" placeholder="Text input" name="City">
                                                @if ($errors->has('City'))
                                                    <span>
                                                        <strong class="has-text-danger">{{ $errors->first('City') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>
                                    <div class="columns is mobile is-centered">
                                        <div class="container">
                                            <div class="field">
                                                <div class="control maphere">
                                                    <label for="name">Set Location: Google Maps</label>
                                                    <input class="input is-primary" type="text" id="searchmap">
                                                    <div id="map" class="column"></div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <label for="name">Latitude</label>
                                                    <input class="form-control is-primary {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                                        name="lat" id="lat" value="{{ old('lat') }}">
                                                    @if ($errors->has('lat'))
                                                    <span>
                                                        <strong class="has-text-danger">{{ $errors->first('lat') }}</strong>
                                                    </span> @endif
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <label for="name">Longitude</label>
                                                    <input class="form-control {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                                        name="lng" id="lng" value="{{ old('lng') }}">
                                                    @if ($errors->has('lng'))
                                                    <span>
                                                        <strong class="has-text-danger">{{ $errors->first('lng') }}</strong>
                                                    </span> @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>                                   
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Upload Image</label>
                                                <div class="input-group control-group increment">
                                                    <input type="file" name="filename[]" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button class="button is-success addmore" type="button"><i
                                                                class="glyphicon glyphicon-plus"></i>More</button>
                                                    </div>
                                                </div>
                                                <div class="clone hide">
                                                    <div class="control-group input-group" style="margin-top:10px">
                                                      <input type="file" name="filename[]" class="form-control">
                                                      <div class="input-group-btn"> 
                                                        <button class="button is-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>                                   
                                    <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Personal Details</label>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Email Address</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" type="text" placeholder="Text input" name="Email" id="email">                                      
                                                    @if ($errors->has('Email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $errors->first('Email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Telephone No</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="form-control {{ $errors->has('Telephone') ? ' is-invalid' : '' }}" type="text" placeholder="Text input" name="Telephone">
                                                    @if ($errors->has('Telephone'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $errors->first('Telephone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
                <div class="columns">
                    <div class="column is-12 is-pulled-right">
                        <button type="submit" class="button is-primary is-pulled-right" style="margin-left:10px">Upload Post</button>            
                        <button type="submit" class=" button is-warning is-pulled-right">Clear</button>
                    </div> 
                </div>
            </form>
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

        <script>
            var map;
                function initAutocomplete() {
                    map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 6.9814435, lng: 81.0741583},
                    zoom: 15
                    });

                    var marker = new google.maps.Marker({
                    position: {lat: 6.9814435, lng: 81.0741583},
                    map: map,
                    draggable: true,
                    });

                    var input = document.getElementById('searchmap');
                    var searchBox = new google.maps.places.SearchBox(input);
                    //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                    google.maps.event.addListener(searchBox,'places_changed',function(){
                        var places = searchBox.getPlaces();
                        var bounds = new google.maps.LatLngBounds();
                        var i, place;
                        for (i = 0; place=places[i]; i++) {
                            bounds.extend(place.geometry.location);
                            marker.setPosition(place.geometry.location);
                            
                        }

                        map.fitBounds(bounds);
                        map.setZoom(15);
                    });

                    google.maps.event.addListener(marker,'position_changed',function(){
                        var lat = marker.getPosition().lat();
                        var lng = marker.getPosition().lng();

                        $('#lat').val(lat);
                        $('#lng').val(lng);
                    });
                }
        </script>
        <script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&region=GB'></script>
        <script
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initAutocomplete"
                async defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    </body>
</html>