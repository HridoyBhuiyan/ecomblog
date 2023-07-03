@extends('index')
@section('title')
    <title>Mobiledokan | Contact US</title>
@endsection
@section('seometa')


@endsection
@section('content')
        @include('clientLayout.menuBar',['category'=>$category])

    <div class="container bg-white  rounded my-5 ">
        <h1 class="text-center pt-4 pb-3">Contact Us</h1>
        <div class="row">

            <div class="col-6 pb-4">


                <div class="card">
                    <div class="card-body">

                        @if(session('message'))
                            <div class="alert text-success">
                                {{ session('message') }}
                            </div>
                        @endif


                        @if(session('rejection'))
                                <div class="alert text-danger">
                                    {{ session('rejection') }}
                                </div>
                        @endif



                        <h5 class="card-title">Contact Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0">


                                <form action="{{route('contactFormPost')}}" method="POST">
                                    @csrf
                                    <div class="form-group pt-2">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="w-100 btn btn-primary">Submit</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>

            <div class="col-6 pb-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-phone"></i> Phone: <a href="tel:+8801714780348">+880-1714780348</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-envelope"></i> Email: <a href="mailto:info@mobiledokan.org">info@mobiledokan.org</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-map-marker-alt"></i> Address: 123 Street, City, Country
                            </li>
                        </ul>
                        <p class="regularText pt-3">
                            For any type of urgency or legal discussion please use the contact form. Instead of the form if you have anything to say as instant, go for a phone call on the given number.
                            <br>
                            <br>
                            We always appreciate people who want to contact with us. All we do for you. Thank you !!
                            <br>
                            <br>
                            Administration
                            <br>
                            MobileDokan.Org
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
