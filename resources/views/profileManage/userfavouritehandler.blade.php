<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/message">User Favourites</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="title is-5 has-text-link">My Favourites</div>
        <div class="columns">
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
            {{ $MyFavourit->links() }}
    </div>
</div>