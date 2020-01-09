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
    <link href={{asset('css/sweetalert2.min.css')}} rel="stylesheet">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>

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
        <div class="columns is-mobile is-centered">
            <div class="column is-8">
                {{-- @include('layouts.errors') --}}
                @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-4"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
        </div>
        <div class="">
            <form action="/add/houserequst" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="columns">
                    <div class="column is-12">
                        <div class="box has-background-white-bis">
                            <div class="my-3"></div>
                            <div class="columns is mobile is-centered">
                                <label class="label has-text-centered">Request Type</label>
                            </div>
                            <div class="my-4"></div>
                            <div class="columns">
                                    <div class="column is-3">
                                        
                                    </div>
                                <div class="column is-3">
                                    <label class="label has-text-centered">Request Type</label>
                                </div>
                                <div class="column is-3">
                                    <div class="control is-6">
                                        <div class="select is-primary">
                                            <select name="boardingType">
                                                <option value="House">House</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="box has-background-white-bis"> 
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label is-center">Fetures You Want</label>
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
                                                            <option>Select No of Rooms</option>
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
                                        <label class="label has-text-centered">No of Bed</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 has-icon-left">
                                                    <div class="select is-primary">
                                                        <select name="NoOfBed">
                                                            <option>Select No of Bed</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="More">More</option>
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
                                        <label class="label has-text-centered">AC Avalability</label>
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
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Kitchen Avalability</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="kitchenavalability">
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="kitchenavalability">
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
                                    <div class="my-5"></div>
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
                                            <hr>                                           
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
                                            <input class="input" type="text" placeholder="Text input" name="MonthlyRent">
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
                                            <input class="input" type="text" placeholder="Text input" name="KeyMoney">                                           
                                        </div>
                                    </div>
                                </div>                                                              
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Description</label>
                                            <div class="field">
                                                
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
                                                <input class="input" type="text" placeholder="Text input" name="Province">
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
                                            <label class="label">District</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input" type="text" placeholder="Text input" name="District">
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
                                            <label class="label">City</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input" type="text" placeholder="Text input" name="City">
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
                            {{-- <div class="columns">
                                <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>
                                    <div class="columns is mobile is-centered">
                                        <div class="container">
                                            <label class="label has-text-centered">Map</label>
                                            <div>
                                                <img src="images/map.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Codination</label>
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
                                </div>
                            </div>
                        </div> --}}
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
                                                <label class="label">Your Name</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input" name="Name">
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
                                                <label class="label">Your Email Address</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input" name="Email">
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
                                                    <input class="input" type="text" placeholder="Text input" name="Telephone">
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
                        <button type="submit" class="button is-primary is-pulled-right" id="addSucc" style="margin-left:10px">Upload Post</button>            
                        <button type="" class=" button is-warning is-pulled-right" id="confm-a">Clear</button>
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
        {{-- <script>
            $(document).on('click', '[#addSucc]', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                swal({
                    title: "Are you sure?",
                    text: "Do you want to Send this email",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, send it!",
                    cancelButtonText: "No, cancel pls!",
                }).then(function () {
                    swal(
                'Success!',
                'Your email has been send.',
                'success'
                )
                });
                return false;
});
            
        </script> --}}

        {{-- <script type="text/javascript">
            $(document).ready(function() {
        
              $(".addmore").click(function(){ 
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });
        
              $("body").on("click",".is-danger",function(){ 
                  $(this).parents(".control-group").remove();
              });
        
            });
        </script> --}}
</body>
</html>