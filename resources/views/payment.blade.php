<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ubuntu');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Ubuntu', sans-serif;
}

body{
    background-image: linear-gradient(to right bottom, #ffffff, #f8f8f8, #f1f0f1, #eae8ea, #e4e1e2);
  margin: 0 10px;
}

.payment{
    background-image: linear-gradient(to right bottom, #4aee54, #68e16f, #7fd485, #92c597, #a4b6a6);
  max-width: 500px;
  margin: 80px auto;
  height: auto;
  padding: 35px;
  padding-top: 70px;
  border-radius: 5px;
  position: relative;
}

.payment h2{
  text-align: center;
  letter-spacing: 2px;
  margin-bottom: 40px;
  color: #0d3c61;
}

.form .label{
  display: block;
  color: #ffffff;
  margin-bottom: 6px;
}

.input{
  padding: 13px 0px 13px 25px;
  width: 100%;
  text-align: center;
  border: 2px solid #dddddd;
  border-radius: 5px;
  letter-spacing: 1px;
  word-spacing: 3px;
  outline: none;
  font-size: 16px;
  color: #555555;
}

.card-grp{
  display: flex;
  justify-content: space-between;
}

.card-item{
  width: 48%;
}

.space{
  margin-bottom: 20px;
}

.icon-relative{
  position: relative;
}

.icon-relative .fas,
.icon-relative .far{
  position: absolute;
  bottom: 12px;
  left: 15px;
  font-size: 20px;
  color: #555555;
}

.btn{
  margin-top: 40px;
  background: #2196F3;
  padding: 12px;
  text-align: center;
  color: #f8f8f8;
  border-radius: 5px;
  cursor: pointer;
}
.demo {
  width: 80%;
  margin: auto;
}

.grid {
  display: flex;
  flex-wrap: wrap;
}

.wrappers {
  width: 20%;
  height: 40px;
  margin: 2px;
  position: relative;
  overflow: hidden;
}

.img {
  width: 100%;
  height: auto;
  position: absolute;
  top: -50%;
  left: -50%;
  right: -50%;
  bottom: -50%;
  margin: auto;
}


@media screen and (max-width: 420px){
  .card-grp{
    flex-direction: column;
  }
  .card-item{
    width: 100%;
    margin-bottom: 20px;
  }
  .btn{
    margin-top: 20px;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ url('charge') }}" method="post" id="payment-form">
            <div class="wrapper">
                <div class="payment">
                    <div class="demo">
                        <div class="grid">
                          
                            <picture class="wrappers">
                                <img class="img" src="/images/card/1.jpg">
                            </picture> 
                            
                            <picture class="wrappers">                               
                                <img class="img" src="/images/card/2.png">
                            </picture>

                            <picture class="wrappers">
                                <img class="img" src="/images/card/3.png">
                            </picture>

                            <picture class="wrappers">
                                <img class="img" src="/images/card/4.png">
                            </picture>
                        </div>
                    </div>
                    <div class="form-row">               
                        <div class="form">
                            @foreach ($Plan as $plan)
                            <div class="card space icon-relative">
                                <label class="label">Name:</label>
                                <p><input type="text" class="input"name="amount" placeholder="Enter Amount" value="{{auth()->user()->name}}" disabled/></p>
                                <i class="fas fa-user"></i>
                              </div>
                              <div class="card space icon-relative">
                                <label class="label">Aount:</label>
                                <p><input type="text" class="input"name="amount" placeholder="Enter Amount" value="{{$plan->cost}}"/></p>
                                <i class="fas fa-user"></i>
                              </div>
                              <div class="card space icon-relative">
                                <label class="label">Email Address:</label>
                                <p><input type="email" class="input" name="email" placeholder="Enter Email" value="{{auth()->user()->email}}"/></p> 
                                <i class="fas fa-user"></i>
                              </div>                                                                                        
                            @endforeach
                            <label for="card-element">
                            Credit or debit card
                            </label>
                            <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                            </div>
                        
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <button class="btn">Submit Payment</button>
                        {{ csrf_field() }}
        
                        </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
    </script>
    <script src="{{ asset('js/card.js') }}"></script>
<script>
</script>
</body>
</html>