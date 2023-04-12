@extends('dashboard')
@section('menuContent')
    <div class="container">
        <h2>Comment And question answer</h2>
        @foreach($data as $item)
        <div class="bg-white my-2 p-2">
            Product : {{$item['productInfo']->title}}
            <br>
            Question : {{$item['comment']}}
            <br>
            <form action="{{route()}}" method="post">
                @csrf
            <div>
            Answer : <input type="text" class="form-control w-50">
            </div>
            <button class="btn btn-success w-25 mt-2">Save this answer</button>
            </form>
            <button class="btn btn-danger w-25 mt-2">Remove the question</button>
        </div>
        @endforeach
    </div>
@endsection
