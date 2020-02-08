<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Boarding</h6>
    </div>
    <div class="card-body">
        @if($MyFavourit->count() > 0) 
        @foreach ($MyFavourit as $myfavourite)
            <div class="column is-4">
                @include('profileManage.userfavourite') 
            </div>                   
        @endforeach 
        @else
            @include('profileManage.noresult')
        @endif
    </div>
</div>
