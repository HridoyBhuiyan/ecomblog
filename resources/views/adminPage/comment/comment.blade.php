@extends('dashboard')
@section('menuContent')
    <div class="container">
        <h2>Comment And question answer</h2>

        @if(session('data'))
            <div class="text-success">{{session('data')}}</div>
        @endif

        @if(request()->query('deleted') === 'true')
            <div class="text-danger">Comment Deleted</div>
        @endif

        @foreach($data as $items=>$item)
            @if($item->status=="unpublished")
                <form method="post" action="{{route('postCommentReply')}}">
                    @csrf

                    <input type="text" value="{{$item['id']}}" name="id" class="d-none">
                <div class="bg-dark text-white rounded my-2 p-2">
                    <div>
                        <span class="font-weight-bold">Product :</span>
                        <a href="/{{$product[$items]['category']."/".$product[$items]['slug']}}" target="_blank">{{$product[$items]['title']}}</a>
                    </div>
                    <div>
                        <span class="font-weight-bold">Question :</span>
                        <span>{{$item->comment}}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-weight-bold">Answer : &nbsp;</span>
                        @if(!$item->answer)
                            <input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="Your Answer Here" name="answer">
                        @else
                            <input type="text" class="form-control w-75" id="exampleFormControlInput1" value="{{$item->answer}}" name="answer">
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-2 w-25">Save</button>
                        <div class="btn btn-danger mt-2 w-25" onclick="deleteComment()">Delete</div>
                    </div>
                </div>
                </form>
            @else
                <form method="post" action="{{route('postCommentReply')}}">
                    @csrf
                    <input type="text" value="{{$item['id']}}" name="id" class="d-none">
                <div class="bg-white rounded my-2 p-2">
                    <div>
                        <span class="font-weight-bold">Product :</span>
                        <a href="/{{$product[$items]['category']."/".$product[$items]['slug']}}" target="_blank">{{$product[$items]['title']}}</a>
                    </div>
                    <div>
                        <span class="font-weight-bold">Question :</span>
                        <span>{{$item->comment}}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="font-weight-bold">Answer : &nbsp;</span>
                        @if(!$item->answer)
                            <input type="text" class="form-control w-75" id="exampleFormControlInput1" placeholder="Your Answer Here" name="answer">
                        @else
                            <input type="text" class="form-control w-75" id="exampleFormControlInput1" value="{{$item->answer}}" name="answer">
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success mt-2 w-25">Save</button>
                        <div class="btn btn-danger mt-2 w-25" onclick="deleteComment({{$item->id}})">Delete</div>
                    </div>
                </div>
                </form>
            @endif

        @endforeach


        <div class="text-center d-flex align-items-center justify-content-center">
            {{$data->links()}}
        </div>
    </div>



@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function deleteComment(id){

        let check = window.confirm("Are You Sure to delete?")
        if(check==true){
            axios.get("/admin/deleteComment/"+id)
                .then((response)=>{
                    if(response.status==200){
                        window.location.href="/admin/comment?deleted=true"
                    }
                })
                .catch((error)=>{
                    console.log(error)
                })
        }
        else {
            return 0;
        }

    }
</script>
