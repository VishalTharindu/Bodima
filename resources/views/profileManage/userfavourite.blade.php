{{-- <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}"> --}}

  <div class="card">
    <div class="card-image">
      <figure class="image is-4by3">
        <img src="/images/B1.jpg" alt="Placeholder image">
      </figure>
    </div>
    <div class="card-content">
      <div class="media">
        <div class="media-left">
          <figure class="image is-48x48">
            <img src="/images/prof.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="media-content">
          <p class="title is-5"><span>{{$myfavourite->boarding->boardingType}}</span> For Rent</p>
          <hr>
          <h4 class="title is-6 has-text-dark">Rs: <span>{{$myfavourite->boarding->MonthlyRent}} Per Month</span></h4>
          <p class="subtitle is-6">@<span>{{$myfavourite->user->name}}</span></p>
        </div>
      </div>
      <div class="content">
        {{str_limit(str_replace("&nbsp;",'',strip_tags($myfavourite->boarding->Description)),80)}}
        <br>
        <div class="my-2"></div>
        <time datetime="2016-1-1">{{$myfavourite->created_at->isoFormat('LLLL')}}</time>
        <div class="my-2"></div>
        <div class="">
          <form action="/remove/favorite/{{$myfavourite->id}}" method="post">
            @csrf
            <button class="button is-danger is-pulled-right btnajestment" onclick="deleteMe();">Remove<i class="far fa-trash-alt"></i></button>
          </form>
          <a href="/view/{{getBoardingTypeIdById($myfavourite->boarding->id)}}/{{getPropertyTypeIdById($myfavourite->boarding->id)}}" class="btnajestment"><button class="button is-success is-pulled-right">See More</button></a>
        </div>
      </div>
    </div>
  </div>
  {{-- <script>
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
                'Favorite Boarding is safe :)',
                'info'
            )
        }
    });
}
</script> --}}
    