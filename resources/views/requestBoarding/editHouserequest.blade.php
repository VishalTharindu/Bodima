<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addboardingrequest</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/bulma/bulmaCheckradio/dist/css/bulma-checkradio.min')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">    
    <link rel="stylesheet" href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <script src="{{asset('js/toastr.min.js')}}"></script>
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
                      boardingrequest
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
                  <li class="nav-item"><a href="/addboardingrequest" class="nav-link"><span>Add bodim</span></a></li>
                  <li class="nav-item"><a href="/requestboardingrequest" class="nav-link"><span>Request bodim</span></a></li>
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
                                <a class="dropdown-item" href="/user/boardingrequest">Account Setting</a>
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
            <form action="/update/houseRequests" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="box has-background-white-bis">
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Boardingrequest Type</label>
                                    <input type="text" name="boardingrequestid" value="{{$houseRequest->boardingrequest->id}}" hidden>
                                    <input type="text" name="houseRequestid" value="{{$houseRequest->id}}" hidden>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Boardingrequest Type</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control is-6">
                                            <div class="select is-primary">
                                                <select name="boardingrequestType">
                                                    <option value="House">HouseRequest</option>                                                    
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
                                        <label class="label has-text-centered">No of Rooms</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 ">
                                                    <div class="select is-primary">
                                                        <select name="NoOfRooms">
                                                            <option value="1"
                                                                @if($houseRequest->NoOfRooms == '1')
                                                                selected
                                                                @endif
                                                            >1</option>
                                                            <option value="2"
                                                                @if($houseRequest->NoOfRooms == '2')
                                                                selected
                                                                @endif
                                                            >2</option>
                                                            <option value="3"
                                                                @if($houseRequest->NoOfRooms == '3')
                                                                selected
                                                                @endif
                                                            >3</option>
                                                            <option value="4"
                                                                @if($houseRequest->NoOfRooms == '4')
                                                                selected
                                                                @endif
                                                            >4</option>
                                                            <option value="More"
                                                                @if($houseRequest->NoOfRooms== 'More')
                                                                selected
                                                                @endif
                                                            >More</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <label class="label has-text-centered">No of Bed</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 has-icon-left">
                                                    <div class="select is-primary">
                                                        <select name="NoOfBed">
                                                            <option>Select No of Bed</option>
                                                            
                                                            <option value="1"
                                                                @if($houseRequest->NoOfBed == '1')
                                                                selected
                                                                @endif
                                                            >1</option>
                                                            <option value="2"
                                                                @if($houseRequest->NoOfBed == '2')
                                                                selected
                                                                @endif
                                                            >2</option>
                                                            <option value="3"
                                                                @if($houseRequest->NoOfBed == '3')
                                                                selected
                                                                @endif
                                                            >3</option>
                                                            <option value="4"
                                                                @if($houseRequest->NoOfBed == '4')
                                                                selected
                                                                @endif
                                                            >4</option>
                                                            <option value="More"
                                                                @if($houseRequest->NoOfBed== 'More')
                                                                selected
                                                                @endif
                                                            >More</option>                                                                                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">AC Avalable</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Acavalability" 
                                                                @if ($houseRequest->Acavalability  == 'Yes')
                                                                    checked
                                                                @endif>
                                                                
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Acavalability"
                                                                 @if ($houseRequest->Acavalability  == 'No')
                                                                checked
                                                            @endif>
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Kitchen Avalability</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="kitchenavalability"
                                                                @if ($houseRequest->kitchenavalability  == 'Yes')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="kitchenavalability"
                                                                @if ($houseRequest->kitchenavalability  == 'No')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <hr>
                                        <div class="my-5"></div>
                                        <label class="label has-text-centered">With Furniture</label>
                                        <div class="my-3"></div>
                                        <div class="column">
                                            <div class="columns">
                                                <div class="column">
                                                    <div class="control">
                                                        <div class="field">
                                                            <div class="columns is-centered">
                                                                <div class="column is-6 is-centered">
                                                                    <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Withfurniture"
                                                                    @if ($houseRequest->Withfurniture   == '1')
                                                                        checked
                                                                    @endif>
                                                                    <label for="exampleRtlRadioInline1">Yes</label>
                                                                </div>
                                                                <div class="column is-6">
                                                                    <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Withfurniture"
                                                                    @if ($houseRequest->Withfurniture   == '0')
                                                                        checked
                                                                    @endif>
                                                                    <label for="exampleRtlRadioInline2">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <hr>
                                        <label class="label has-text-centered">For Whome</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="School_boys"
                                                                @if ($houseRequest->boardingrequest->School_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">School boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="School_girls"
                                                                @if ($houseRequest->boardingrequest->School_girls  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">School girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Uni_boys"
                                                                @if ($houseRequest->boardingrequest->Uni_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Uni boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Uni_girls"
                                                                @if ($houseRequest->boardingrequest->Uni_girls   == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">Uni girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Office_boys"
                                                                @if ($houseRequest->boardingrequest->Office_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Office boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Office_girls"
                                                                @if ($houseRequest->boardingrequest->Office_girls  == '1')
                                                                    checked
                                                                @endif>
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
                                    <label class="label has-text-centered">Payment Details</label>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate monthly rent</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                        <input class="input" type="text" placeholder="Text input" name="MonthlyRent" value="{{$houseRequest->boardingrequest->MonthlyRent}}">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
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
                                            <input class="input" type="text" placeholder="Text input" value="{{$houseRequest->boardingrequest->MonthlyRent}}" name="KeyMoney">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Other Details</label>
                                </div>                  
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Description</label>
                                            <div class="field">
                                                <div class="control">
                                                    <textarea class="textarea" placeholder="Textarea" name="Description">{{$houseRequest->boardingrequest->Description}}</textarea>
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
                                                        <option value="Central Province"
                                                                @if($houseRequest->boardingrequest->Province == 'Central Province')
                                                                selected
                                                                @endif
                                                        >Central Province</option>
                                                        <option  value="Eastern Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Eastern Province')
                                                            selected
                                                            @endif
                                                        >Eastern Province</option>
                                                        <option  value="Northern Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Northern Province')
                                                            selected
                                                            @endif
                                                        >Northern Province</option>
                                                            <option  value="Southern Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Southern Province')
                                                            selected
                                                            @endif
                                                        >Southern Province</option>
                                                        <option  value="Western Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Western Province')
                                                            selected
                                                            @endif
                                                        >Western Province</option>
                                                        <option  value="North Western Province"
                                                            @if($houseRequest->boardingrequest->Province == 'North Western Province')
                                                            selected
                                                            @endif
                                                        >North Western Province</option>
                                                        <option  value="North Central Province"
                                                            @if($houseRequest->boardingrequest->Province == 'North Central Province')
                                                            selected
                                                            @endif
                                                        >North Central Province</option>
                                                        <option  value="Uva Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Uva Province')
                                                            selected
                                                            @endif
                                                        >Uva Province</option>
                                                        <option  value="Sabaragamuwa Province"
                                                            @if($houseRequest->boardingrequest->Province == 'Sabaragamuwa Province')
                                                            selected
                                                            @endif
                                                        >Sabaragamuwa Province</option>
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
                                                        <option value="Ampara"
                                                            @if($houseRequest->boardingrequest->District == 'Ampara')
                                                            selected
                                                            @endif
                                                        >Ampara</option>
                                                        <option  value="Anuradhapura"
                                                            @if($houseRequest->boardingrequest->District == 'Anuradhapura')
                                                            selected
                                                            @endif
                                                        >Anuradhapura</option>
                                                        <option  value="Badulla"
                                                            @if($houseRequest->boardingrequest->District == 'Badulla')
                                                            selected
                                                            @endif
                                                        >Badulla</option>
                                                        <option  value="Batticaloa"
                                                            @if($houseRequest->boardingrequest->District == 'Batticaloa')
                                                            selected
                                                            @endif
                                                        >Batticaloa</option>
                                                        <option  value="Colombo"
                                                            @if($houseRequest->boardingrequest->District == 'Colombo')
                                                            selected
                                                            @endif
                                                        >Colombo</option>
                                                        <option  value="Galle"
                                                            @if($houseRequest->boardingrequest->District == 'Galle')
                                                            selected
                                                            @endif
                                                        >Galle</option>
                                                        <option  value="Gampaha"
                                                            @if($houseRequest->boardingrequest->District == 'Gampaha')
                                                            selected
                                                            @endif
                                                        >Gampaha</option>
                                                        <option  value="Hambantota"
                                                            @if($houseRequest->boardingrequest->District == 'Hambantota')
                                                            selected
                                                            @endif
                                                        >Hambantota</option>
                                                        <option  value="Kalutara"
                                                            @if($houseRequest->boardingrequest->District == 'Kalutara')
                                                            selected
                                                            @endif
                                                        >Kalutara</option>
                                                        <option  value="Kandy"
                                                            @if($houseRequest->boardingrequest->District == 'Kandy')
                                                            selected
                                                            @endif
                                                        >Kandy</option>
                                                        <option  value="Kegalle"
                                                            @if($houseRequest->boardingrequest->District == 'Kegalle')
                                                            selected
                                                            @endif
                                                        >Kegalle</option>
                                                        <option  value="Kilinochchi"
                                                            @if($houseRequest->boardingrequest->Province == 'Kilinochchi')
                                                            selected
                                                            @endif
                                                        >Kilinochchi</option>
                                                        <option  value="Kurunegala"
                                                            @if($houseRequest->boardingrequest->District == 'Kurunegala')
                                                            selected
                                                            @endif
                                                        >Kurunegala</option>
                                                        <option  value="Mannar"
                                                            @if($houseRequest->boardingrequest->District == 'Mannar')
                                                            selected
                                                            @endif
                                                        >Mannar</option>
                                                        <option  value="Matale"
                                                            @if($houseRequest->boardingrequest->District == 'Matale')
                                                            selected
                                                            @endif
                                                        >Matale</option>
                                                        <option  value="Matara"
                                                            @if($houseRequest->boardingrequest->District == 'Matara')
                                                            selected
                                                            @endif
                                                        >Matara</option>
                                                        <option  value="Monaragala"
                                                            @if($houseRequest->boardingrequest->District == 'Monaragala')
                                                            selected
                                                            @endif
                                                        >Monaragala</option>
                                                        <option  value="Mullaitivu"
                                                            @if($houseRequest->boardingrequest->District == 'Mullaitivu')
                                                            selected
                                                            @endif
                                                        >Mullaitivu</option>
                                                        <option  value="Nuwara Eliya"
                                                            @if($houseRequest->boardingrequest->District == 'Nuwara Eliya')
                                                            selected
                                                            @endif
                                                        >Nuwara Eliya</option>
                                                        <option  value="Polonnaruwa"
                                                            @if($houseRequest->boardingrequest->District == 'Polonnaruwa')
                                                            selected
                                                            @endif
                                                        >Polonnaruwa</option>
                                                        <option  value="Puttalam"
                                                            @if($houseRequest->boardingrequest->District == 'Puttalam')
                                                            selected
                                                            @endif
                                                        >Puttalam</option>
                                                        <option  value="Ratnapura"
                                                            @if($houseRequest->boardingrequest->District == 'Ratnapura')
                                                            selected
                                                            @endif
                                                        >Ratnapura</option>
                                                        <option  value="Trincomalee"
                                                            @if($houseRequest->boardingrequest->District == 'Trincomalee')
                                                            selected
                                                            @endif
                                                        >Trincomalee</option>
                                                        <option  value="Vavuniya"
                                                            @if($houseRequest->boardingrequest->District == 'Vavuniya')
                                                            selected
                                                            @endif
                                                        >Vavuniya</option>                                   
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
                                                <input class="input" type="text" placeholder="Text input" name="City" value="{{$houseRequest->boardingrequest->City}}" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span class="icon is-small is-right">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                @if ($errors->has('City'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('City') }}</strong>
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
                                    <div class="my-5"></div>
                                    <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Personal Details</label>
                                    </div>
                                    <div class="my-3"></div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Email Address</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input" name="Email" value="{{$houseRequest->boardingrequest->Email}}">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Telephone No</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input" name="Telephone" value="{{$houseRequest->boardingrequest->Telephone}}">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
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
                        <button type="submit" class="button is-primary is-pulled-right" onclick="boardingrequestAdded()" style="margin-left:10px">Upload Post</button>            
                        <button type="submit" class=" button is-warning is-pulled-right">Clear</button>
                    </div> 
                </div>
            </form>
            {{-- <div class="columns">
                    <div class="column is-6">
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <label class="label">Username</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Text input">
                                <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>     
                </div>
            
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" placeholder="Email input">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
            </div>
            
            <div class="field">
                <label class="label">Subject</label>
                <div class="control">
                    <div class="select">
                    <select>
                        <option>Select dropdown</option>
                        <option>With options</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                    <input type="checkbox">
                    I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div> 
            <div class="field">
                <div class="control">
                    <label class="radio">
                    <input type="radio" name="question">
                    Yes
                    </label>
                    <label class="radio">
                    <input type="radio" name="question">
                    No
                    </label>
                </div>
            </div>
            
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancel</button>
                </div>
            </div> --}}
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
            function boardingrequestAdded() {
            // event.preventDefault();
            // var form = event.target.form;
            $.alert({
                title: 'Success',
                content: 'You have successfully added',
                animation: 'zoom',
                closeAnimation: 'scale',
                icon: 'fa fa-trash-alt',
                theme: 'material',
                closeIcon: true,
                type: 'red',
                animateFromElement: false,
                // buttons: {
                //     confirm: function() {
                //         $.alert('Deleted');
                //         form.submit();
                //     },
                //     cancel: function() {
                //         $.alert('Canceled');
                //     }
                // }
            });
        }
</script>
</body>
</html>










