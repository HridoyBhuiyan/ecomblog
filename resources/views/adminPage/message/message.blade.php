@extends('dashboard')
@section('menuContent')
    <div class="container">



        <div class="container">
            <h3 class="text-center">Contact Lists</h3>
            <div class="row bg-white rounded">
                <div class="col">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Text</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email_id}}</td>
                                <td>{{$item->details}}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="deleteContact({{$item->id}})">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    <div class="text-center d-flex align-items-center justify-content-center">{{$data->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function deleteContact(id){

        let check = window.confirm("Are You Sure to delete?")
        if(check==true){
            axios.get("/admin/deleteContact/"+id)
                .then((response)=>{
                    console.log(response.data)
                    if(response.status==200){
                        window.location.href="/admin/message?deleted=true"
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
