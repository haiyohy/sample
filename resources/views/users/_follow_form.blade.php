@if($user->id!==Auth::user()->id)
    <div class="follow_form">
        @if(Auth::user()->isfollowing($user->id))
            <form action="{{route('followers.destroy',$user->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-sm">取消关注</button>
            </form>
        @else
            <form action="{{route('followers.store',$user->id)}}" method="post">
                {{csrf_field()}}
                <button type="submit" class="btn btn-sm btn-primary">关注</button>
            </form>
        @endif
    </div>
@endif