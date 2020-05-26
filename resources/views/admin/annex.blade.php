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
              <th>Furniture AB</th>
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
                <td>{{$anex->boarding->Availability }}</td>
                <td>2011/04/25</td>
                <td>
                  <div class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bars"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a href="/admin/view/{{getBoardingTypeIdById($anex->boarding->id)}}/{{getPropertyTypeIdById($anex->boarding->id)}}" class="dropdown-item"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;</i>More</a>
                      <a href="/admin/edit/anex/{{$anex->id}}" class="dropdown-item"><i class="fas fa-edit"></i>&nbsp;&nbsp;Update</a>
                      @if (($anex->boarding->Availability)!= 'LOCKED')
                        <a href="/lock/anex/{{$anex->boarding->id}}" class="dropdown-item">
                        <i class="fas fa-lock"></i>&nbsp;&nbsp;<span>Lock</span></a>
                      @else
                        <a href="/unlock/anex/{{$anex->boarding->id}}" class="dropdown-item"><i class="fas fa-unlock"></i>&nbsp;&nbsp;Unlock</a>
                      @endif
                      <form action="/admin/delete/{{getBoardingTypeIdById($anex->boarding->id)}}/{{$anex->id}}" method="post">
                        @csrf
                        <a class="dropdown-item" onclick="deleteMe();"><i class="far fa-trash-alt"> Delete</i></a>
                      </form>
                      <a href="/admin/warning/{{$anex->boarding->id}}" class="dropdown-item"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;Warning</a>  
                    </div>
                  </div>
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>