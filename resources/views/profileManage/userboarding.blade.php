
<div class="columns">
  @foreach ($Boadrings as $item)
  <div class="column is-4">
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
            <p class="title is-5"><span>{{$item->boardingType}}</span> For Rent</p>
            <hr>
            <h4 class="title is-6 has-text-dark">Rs: <span>{{$item->MonthlyRent}} Per Month</span></h4>
            <p class="subtitle is-6">@<span>{{$item->user->name}}</span></p>
          </div>
        </div>
        <div class="content">
          {{str_limit(str_replace("&nbsp;",'',strip_tags($item->Description)),80)}}
          <br>
          <div class="my-2"></div>
          <time datetime="2016-1-1">{{$item->created_at->isoFormat('LLLL')}}</time>
          <div class="my-2"></div>
          <div class="">
            <form action="/user/post/delete/" method="post">
              <button class="button is-danger is-pulled-right btnajestment">Delete</button>
            </form>
            <a href="/view/{{getBoardingTypeIdById($item->id)}}/{{getPropertyTypeIdById($item->id)}}" class="btnajestment"><button class="button is-success is-pulled-right">See More</button></a>
          </div>
        </div>
      </div>
    </div>
  </div> 
  @endforeach
</div>   
  