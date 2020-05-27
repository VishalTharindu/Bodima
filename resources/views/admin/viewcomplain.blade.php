<div class="container">
@foreach ($complain as $item)
    <div class="my-4"></div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-heard">               
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-11">
                        <strong>Complain &nbsp;</strong><small>From @<span class="has-text-link">{{$item->name}}</span></small> &nbsp;<small>{{$item->created_at->diffForHumans()}}</small>
                        <div class="my-3"></div>
                        <p>{{$item->complain}}</p>
                    </div>
                </div>
                <div class="my-4"></div>
            </div>
            <div class="card-footer">
                <div class="float-left">
                    <P> Visit relevent boarding place : <a href="/check/complaint/boarding/{{$item->boarding_id}}">Check</a> </P>
                </div>  
                <div class="float-right">
                    <P> Check user: </P>
                </div>         
            </div>
        </div>
    </div>
@endforeach
</div> 