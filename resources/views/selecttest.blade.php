<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href={{asset('datatables.net-select-bs4/css/select2.min.css')}} rel="stylesheet">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/select2/select2.min.js')}}></script>
</head>
<body>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control sex" id="exampleFormControlSelect1">
            <option value="1">1</option>
            <option  value="2">2</option>
            <option  value="3">3</option>
            <option  value="4">4</option>
            <option  value="5">5</option>
            </select>
            <script>
                $(".sex").select2(); 
            </script>             
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
</body>
</html>