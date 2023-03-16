@extends('dashboard')
@section('menuContent')

    <div class="mx-3">
        <div class="row">
            <input class="form-control col-9 rounded-2" type="file" multiple>
            <button type="submit" class="col-3 btn btn-success">Upload</button>
        </div>

        <div>
            <div class="position-relative">
                <img src="/storage/EKl1mOMuMJDsKS26feNKYs1hv18v4ZiAKSSEy6jd.jpg" alt="" class="w-25 position-absolute">
                <div class="mediaImgDiv position-absolute">hello</div>
            </div>
        </div>
    </div>


@endsection
