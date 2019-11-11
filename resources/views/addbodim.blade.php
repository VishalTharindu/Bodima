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
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <style>
        .select, .select select{
            width: 100%;
        }
    </style>

</head>
<body class="has-background-white-ter">
        @include('incfile.navibar')

    <div class="section is-medium">
        <div class="">
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
                                        <select>
                                            <option>Boarding For Rent</option>
                                            <option>Boarding For Share</option>
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
                                                <select>
                                                    <option>Select No of Rooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>Other</option>
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
                                                <select>
                                                    <option>Select No of Rooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>More</option>
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
                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" name="exampleRtlRadioInline" checked="checked">
                                                        <label for="exampleRtlRadioInline1">Yes</label>
                                                    </div>
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" name="exampleRtlRadioInline">
                                                        <label for="exampleRtlRadioInline2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                 <label class="label has-text-centered">Other Furniture</label>
                                 <div class="my-3"></div>
                                 <div class="column">
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                                <div class="field">
                                                    <div class="columns">
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="exampleRtlRadioInline" checked="checked">
                                                            <label for="exampleRtlRadioInline1">Tables</label>
                                                        </div>
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="exampleRtlRadioInline">
                                                            <label for="exampleRtlRadioInline2">Chairs</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                                <div class="field">
                                                    <div class="columns">
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="exampleRtlRadioInline" checked="checked">
                                                            <label for="exampleRtlRadioInline1">Racks</label>
                                                        </div>
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="exampleRtlRadioInline">
                                                            <label for="exampleRtlRadioInline2">More</label>
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
                            <div class="column is-6">
                                <label class="label has-text-centered">For Whome</label>
                                <div class="my-3"></div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="control">
                                            <div class="field">
                                                <div class="columns">
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" name="exampleRtlRadioInline" checked="checked">
                                                        <label for="exampleRtlRadioInline1">School boys</label>
                                                    </div>
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" name="exampleRtlRadioInline">
                                                        <label for="exampleRtlRadioInline2">School girls</label>
                                                    </div>
                                                </div>
                                                <div class="columns">
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" name="exampleRtlRadioInline" checked="checked">
                                                        <label for="exampleRtlRadioInline1">Uni boys</label>
                                                    </div>
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" name="exampleRtlRadioInline">
                                                        <label for="exampleRtlRadioInline2">Uni girls</label>
                                                    </div>
                                                </div>
                                                <div class="columns">
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" name="exampleRtlRadioInline" checked="checked">
                                                        <label for="exampleRtlRadioInline1">Office boys</label>
                                                    </div>
                                                    <div class="column is-6">
                                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" name="exampleRtlRadioInline">
                                                        <label for="exampleRtlRadioInline2">Office girls</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                 <label class="label has-text-centered">Other Furniture</label>
                                 <div class="column">
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                                <div class="field">
                                                    <div class="columns">
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="exampleRtlRadioInline" checked="checked">
                                                            <label for="exampleRtlRadioInline1">Tables</label>
                                                        </div>
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="exampleRtlRadioInline">
                                                            <label for="exampleRtlRadioInline2">Chairs</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                                <div class="field">
                                                    <div class="columns">
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="exampleRtlRadioInline" checked="checked">
                                                            <label for="exampleRtlRadioInline1">Racks</label>
                                                        </div>
                                                        <div class="column is-6">
                                                            <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="exampleRtlRadioInline">
                                                            <label for="exampleRtlRadioInline2">More</label>
                                                        </div>
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
                        <div class="my-4"></div>
                        <div class="columns">
                            <div class="column is-6">
                                <label class="label">Approximate Key Money</label>
                            </div>
                            <div class="column is-6">
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
                        <div class="my-4"></div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Address</label>
                                    <div class="field">
                                        <div class="control">
                                            <textarea class="textarea" placeholder="Textarea"></textarea>
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
                                            <textarea class="textarea" placeholder="Textarea"></textarea>
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
                                <label class="label has-text-centered">Boarding Type</label>
                        </div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">Province</label>
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
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">District</label>
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
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label">City</label>
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
                    <div class="columns">
                        <div class="column is-12">
                        <div class="box has-background-white-bis">
                            <div class="my-4"></div>
                            <div class="columns is mobile is-centered">
                                <label class="label has-text-centered">Map</label>
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
                                        <label class="label">Your Name</label>
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
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label">Your Email Address</label>
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
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label">Your Telephone No</label>
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
                </div>
            </div>             
        </div>
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
    <script src="{{asset('css/bulma/bulmaCheckradio/gulpfile.js')}}"></script>
</body>
</html>