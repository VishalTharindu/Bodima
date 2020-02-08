<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/message">Messages</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="column">
                <div class="div" style="margin-bottom: 6%;">
                    <a href="/user/message" class="button is-link nounnounderlinebtn is-pulled-right">View Unread Messages</a>
                </div>
                @if($messages->count() > 0) 
                @foreach ($messages as $message)
                    @include('profileManage.messagelayout') 
                @endforeach 
                @else
                    @include('profileManage.noresult')
                @endif
            </div>
            <div class="columns">
                <div class="column is-5"></div>
                <div class="column is-2">{{ $messages->links() }}</div>
                <div class="column is-5"></div>
            </div>           
    </div>
</div>