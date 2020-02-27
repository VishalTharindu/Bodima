<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Annex</h6>
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
              @foreach ($Anex as $anex)
              <tr>
              <td>{{$anex->boarding->user->name}}</td>
                <td>{{$anex->boarding->District}}</td>
                <td><span>Rs : </span>{{$anex->boarding->MonthlyRent}}</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <form action="/admin/delete/{{getBoardingTypeIdById($anex->boarding->id)}}/{{$anex->id}}" method="post">
                    @csrf
                      <button class="btn btn-danger btn-circle float-right" onclick="deleteMe();"><i class="far fa-trash-alt"></i></button>
                  </form>
                  <a href="/admin/view/{{getBoardingTypeIdById($anex->boarding->id)}}/{{getPropertyTypeIdById($anex->boarding->id)}}" class="btn btn-success">More</a>
                  <a href="/admin/edit/anex/{{$anex->id}}" class="btn btn-primary">Update</a>
                  @if (($anex->boarding->Availability)!= 'LOCKED')
                  <a href="/lock/anex/{{$anex->boarding->id}}" class="btn btn-warning float-right"><i class="fas fa-lock"></i></a>
                  @else
                  <a href="/unlock/anex/{{$anex->boarding->id}}" class="btn btn-warning float-right"><i class="fas fa-unlock"></i></a>
                  @endif
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>