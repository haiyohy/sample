<form action="{{route('statuses.store')}}" method="post">
    @include('shared._errors')
    <textarea class="form-control" rows="3" placehoder="聊聊新鲜事儿..." name="content">{{old('content')}}</textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>