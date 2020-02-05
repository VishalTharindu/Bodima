<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('css/toastr.min.css')}} rel="stylesheet">
    <link href="{{asset('css/css/mdb.css')}}" rel="stylesheet">
    <title>All Request</title>
    <style>
      .section{
        padding-top: 10%;
      }
    </style>
</head>
<body class="has-background-white-ter">
    <!-- Card -->
    @include('incfile.navibar')
    <div class="container">
            <div class="my-5"></div>
        <div class="section">

          @foreach ($Boardingrequest as $requestdetails)
            <div class="row">
              <div class="col-md-12">

                <div class="card card-cascade wider reverse">
                
                  
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                  
                      <!-- Title -->
                      <h4 class="card-title"><strong>Request Type : {{$requestdetails->boardingType}}</strong></h4>
                      <div class="my-3"></div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="has-background-success text-center rounded mb-0">
                            <h5 class="">Location Details</h5>
                          </div>
                          <div class="my-3"></div>
                          <p>Province :{{$requestdetails->Province}}</p>
                          <p>District :{{$requestdetails->District}}</p>
                          <p>City  : {{$requestdetails->City }}</p>
                        </div>
                        <div class="col-md-3">
                          <div class="has-background-success text-center rounded mb-0">
                            <h5 class="">Payment</h5>
                          </div>
                          <div class="my-3"></div>
                          <p>Monthly Rent : Rs {{$requestdetails->MonthlyRent}}</p>
                          <p>Key Money : Rs {{$requestdetails->KeyMoney}}</p>
                        </div>
                        <div class="col-md-3">
                          <div class="has-background-success text-center rounded mb-0">
                            <h5 class="text-white">Finding by: </h5>
                          </div>
                          <div class="my-3"></div>
                          <p class="text-center">
                            @if(($requestdetails->School_boys)==1)
                                School Boys/
                            @else
                            @endif

                            @if(($requestdetails->School_girls)==1)
                                School girls/
                            @else
                            @endif

                            @if(($requestdetails->Uni_boys)==1)
                                Uni Boys/
                            @else
                            @endif

                            @if(($requestdetails->Uni_girls)==1)
                                School girls/
                            @else
                            @endif

                            @if(($requestdetails->Office_boys)==1)
                                Office Boys/
                            @else
                            @endif

                            @if(($requestdetails->Office_girls)==1)
                                Office girls
                            @else
                            @endif
                          </p>
                        </div>
                        <div class="col-md-3">
                          <div class="has-background-success text-center rounded mb-0">
                            <h5 class="text-white">Contact Details</h5>
                          </div>
                          <div class="my-3"></div>
                          <p><i class="fa fa-user" aria-hidden="true"></i>        Posted By: Tharindu</p>
                          <button onclick="showPnox()" class="button is-text"><i class="fas fa-envelope" aria-hidden="true"></i>   Email : trs@gmail.com</button>
                          <p id="pnox" class="has-text-dark customerpno">15246</p>
                          <p><i class="fa fa-mobile" aria-hidden="true"></i>      Phone Number : 0715486956</p>
                        </div>
                      </div>
                      <div class="my-3"></div>
                      <div class="columns">
                        <div class="column">
    
                        </div>
                        
                        <div class="column is-pulled-right">
                          <a href="http://" class="button is-success is-pulled-right">More Details</a>
                          @if (Auth::user()==$requestdetails->user)                    
                        <form action="/delete/boarding_requestsRequest/{{$requestdetails->id}}" method="post">
                              @csrf
                              <button class="button is-danger is-pulled-right btnajestment" onclick="deleteMe();">Delete<i class="far fa-trash-alt"></i></button>
                          </form>
                         @endif 
                        </div>
                      </div>
                  
                    </div>
                  
                  </div>
              </div>
            </div>
            <div class="my-5"></div>                   
          @endforeach
        </div>
        
    </div>
  <!-- Card -->
  <script type="text/javascript" src={{asset('js/jquery-3.3.1.min.js')}}></script>
  <script src="{{asset('js/toastr.min.js')}}"></script>
  @toastr_render
  {{-- <script type="text/javascript" src={{asset('js/SweetAlert.js')}}></script> --}}
  <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
  <script type="text/javascript" src={{asset('js/flickity.pkgd.min.js')}}></script>

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