<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.rateyo.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"> --}}

    <div>
        <form action="/make/rating" method="post">
            @csrf
            <div id="rating" class="rateyo" data-rateyo-rating="4"
            data-rateyo-spacing="10px"
            data-rateyo-rated-fill="#FF0000"
            data-rateyo-num-stars="5"
            data-rateyo-score="3"
            ></div>

            <span class="result"></span>
            <input type="hidden" name="rating" id="">

            <div><input type="submit" value="submit" name="add"></div>

            <a href="/show/rating">show</a>
        </form>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> --}}
    <script src="{{asset('js/jquery.rateyo.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    <script>
        $(function () {
 
                 //returns a jQuery Element
                $(".rateyo").rateYo().on("rateyo.change",function (e, data){
                
                    var rating  = data.rating;
                    $(this).parent().find('score').text('score :' + $(this).attr('data-rateyo-score'));
                    $(this).parent().find('.result').text('rating :'+ rating);
                    $(this).parent().find('input[name=rating]').val(rating);

                });

        });
    </script>  
</body>
</html>