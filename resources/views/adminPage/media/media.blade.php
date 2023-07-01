@extends('dashboard')
@section('menuContent')

    <div class="mx-3">


        <form action="{{route('postMedia')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input class="form-control col-9 rounded-2" type="file" name="allImages[]" multiple>
                <button type="submit" class="col-3 btn btn-success">Upload</button>
            </div>
        </form>


        @if(session('imageName'))
            <div class="h3 text-success mt-3">New Images Added</div>
            <div class="row">
            @foreach(session('imageName') as $item)
                    <div class="col-6"> ✅ {{$item}}</div>
            @endforeach
            </div>

        @endif



        @if(session('message'))
            <div class="h3 text-danger mt-3">{{session('message')}}</div>
        @endif

        @if(request()->query('deleted') === 'true')
            <div class="text-danger">Media Removed !</div>
        @endif




        <div class="row bg-light mt-4 pt-2 rounded-5">
            @foreach($data as $item)
                <div class="col-2 mediaImgSize mt-4">
                    <img src="/public/{{$item->media_path}}" alt="" class="w-25">
                    <div class="my-2 d-flex justify-content-between">

                        <div onclick="deleteMedia({{$item->id}})" class="btn btn-success">
                            <i class="fa-solid fa-trash-can"></i>Delete
                        </div>

                        <button class="btn btn-danger text-white" id="copyImage">
                            <i class="fa-solid fa-copy"></i>Copy
                        </button>

                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function deleteMedia(id){
        let check = window.confirm("Are You Sure to delete?")
        if(check==true){
            axios.get("/admin/deleteMedia/"+id)
                .then((response)=>{

                    if(response.status==200){
                        window.location.href="/admin/media?deleted=true"
                    }
                })
                .catch((error)=>{
                    console.log(error)
                })
        }
        else{
            return 0;
        }


    }
</script>
