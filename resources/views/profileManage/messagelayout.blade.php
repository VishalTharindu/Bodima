<div class="box">
    <article class="media">
      <div class="media-left">
        <figure class="image is-64x64 ">
          @if($message->sender_id == 0)
            <img src="/uploads/avatars/user.jpg" alt="Image" class="is-rounded">
          @elseif(strcmp($message->senderName,"Administrator") == 0)
            <img src="/img/admin.png" alt="Image" class="is-rounded"> 
          @else
            <img src="/images/prof.jpg" alt="Image" class="is-rounded">
          @endif
        </figure>
      </div>
      <div class="media-content">
        <div class="content">
          <p>
            <strong>{{$message->subject}}</strong> <br><small>From @<span class="has-text-link">{{$message->senderName}}</span></small> &nbsp;<small>{{$message->created_at->diffForHumans()}}</small>
            <br>
            <br>
            {{str_limit($message->message),30}}
          </p>
        </div>
        <div class="is-pulled-right">
            <p class="control has-text-centered">
                <a class="button is-primary is-rounded nounnounderlinebtn" href="/user/message/{{$message->id}}/view">                
                  Read
                </a>
                <form action="/user/message/{{$message->id}}/delete" method="post">
                  @csrf
                  <button class="button is-danger is-pulled-right btnajestment" onclick="deleteMe();">Delete<i class="far fa-trash-alt"></i></button>
                  {{-- <a class="button is-danger is-rounded nounnounderlinebtn" onclick="deleteMe();" href="">
                    Delete
                  </a> --}}
                </form>               
            </p>
        </div>
      </div>
    </article>
  </div>