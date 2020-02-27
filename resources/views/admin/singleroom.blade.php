<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All SingleRoom</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Owner Name</th>
              <th>District</th>
              <th>Monthly Rent</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($SingleRoom as $singleroom)
              <tr>
              <td>{{$singleroom->boarding->user->name}}</td>
                <td>{{$singleroom->boarding->District}}</td>
                <td><span>Rs : </span>{{$singleroom->boarding->MonthlyRent}}</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <form action="/admin/delete/{{getBoardingTypeIdById($singleroom->boarding->id)}}/{{$singleroom->id}}" method="post">
                    @csrf
                      <button class="btn btn-danger btn-circle float-right" onclick="deleteMe();"><i class="far fa-trash-alt"></i></button>
                  </form>
                  <a href="/admin/view/{{getBoardingTypeIdById($singleroom->boarding->id)}}/{{getPropertyTypeIdById($singleroom->boarding->id)}}" class="btn btn-success">More</a>
                  <a href="/admin/edit/singleroom/{{$singleroom->id}}" class="btn btn-primary">Update</a>
                  @if (($singleroom->boarding->Availability)!= 'LOCKED')
                  <a href="/lock/singleroom/{{$singleroom->boarding->id}}" class="btn btn-warning float-right"><i class="fas fa-lock"></i></a>
                  @else
                  <a href="/unlock/singleroom/{{$singleroom->boarding->id}}" class="btn btn-warning float-right"><i class="fas fa-unlock"></i></a>
                  @endif
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>