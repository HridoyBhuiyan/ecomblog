@extends('dashboard')
@section('menuContent')
    <form action="{{route('createNewProduct')}}" method="post" enctype="multipart/form-data">
        @csrf
    <h5>Product Title</h5>
    <input type="text" name="title" class="form-control" placeholder="Product Title Here"> <br>

    <h5>Product Slug</h5>
    <input type="text" name="slug" class="form-control" placeholder="Product Slug Here"> <br>

    <h5>Product Price</h5>
    <div class="row">
        <div class="col-6"><input name="officialPrice" type="text" class="form-control" placeholder="Official Price"> <br></div>
        <div class="col-6"><input name="unofficialPrice" type="text" class="form-control" placeholder="Unofficial Price"> <br></div>
    </div>



    <div>
        <h5>Key Feature</h5>
        <div class="row">
            <div class="col-4">
                <input name="releaseDate" class="form-control mt-2" type="text" placeholder="Release date">
            </div>
            <div class="col-4">
                <input name="OSVersion" class="form-control mt-2" type="text" placeholder="OS Version">
            </div>
            <div class="col-4">
                <input name="displaySize" class="form-control mt-2" type="text" placeholder="Display">
            </div>
            <div class="col-4">
                <input name="phoneCamera" class="form-control mt-2" type="text" placeholder="Camera">
            </div>
            <div class="col-4">
                <input name="phoneRam" class="form-control mt-2" type="text" placeholder="RAM">
            </div>
            <div class="col-4">
                <input name="phoneBattery" class="form-control mt-2" type="text" placeholder="Battery">
            </div>
        </div>
    </div>



    <div class="mt-3">
        <h5>Product Specification</h5>
        <textarea name="phoneSpecification"></textarea>
    </div>

    <div class="pt-3">
        <h5>Product Details</h5>
        <textarea name="phoneDetails"></textarea>
    </div>



    <div class="pt-3">
        <h5>Product Overview</h5>
        <textarea name="phoneOverview"></textarea>
    </div>


    <div class="pt-3">
        <h5>Pros & Cons</h5>
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Pros" id="prosID">
                <div class="btn border-success w-100 mt-2" onclick="handlePros()">Add New Pros</div>
                <div id="prosListID" name="props[]"></div>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Cons" id="consID">
                <div class="btn border-success w-100 mt-2" onclick="handleCons()">Add New Cons</div>
                <div id="consListID" name="cons[]"></div>
            </div>
        </div>
    </div>

     <br>

    <h5>Product FAQ</h5>
    <div class="row">
        <div class="col-5">
            <input type="text" class="form-control" placeholder="Question" id="QuestionID">
        </div>
        <div class="col-5">
            <input type="text" class="form-control" placeholder="Answer" id="answerID">

        </div>

        <div class="col-2">
            <div class="btn border-success w-100" onclick="handleFAQ()">Add FAQ</div>

        </div>
        <div id="faqList" class="w-100 px-3 bg-info rounded-2 rounded mx-3 mt-2">
            <div class="w-100 text-center fw-bold">Existing FAQ</div>
            <div class="row">
                <div class="col-6 text-center">Questions</div>
                <div class="col-6 text-center">Answer</div>
            </div>
        </div>
    </div>
        <hr>
    <div class="row  mt-3">
        <div class="col-6">
            <h5>Product Image</h5>
            <input type="file" name="thumbnail" class="form-control" placeholder="Feature Image">
        </div>
        <div class="col-6">
            <h5>YouTube Video Link</h5>
            <input type="text" name="videoURL" class="form-control" placeholder="Video URL">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <h5>Product Category</h5>
            <select name="category" id="" class="form-control">
                @foreach($data['category'] as $item)
                    <option value="{{$item['id']}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <h5>Product Tags</h5>
            <select name="tag" id="tagID" class="form-control">
                @foreach($data['tag'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>


            <div class="my-1">
                <div class="d-inline">Selected Tags: </div><ul name="selectedTags" class="selectedTags" id="selectedTags"></ul>
            </div>

        </div>
    </div>

    <div class="mt-3">
        <h5>Meta Title</h5>
        <input name="metaTitle" type="text" class="form-control" placeholder="Meta Title"> <br>
    </div>

    <div>
        <h5>Meta Description</h5>
        <input name="metaDescription" type="text" class="form-control" placeholder="Meta Description"> <br>
    </div>
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-success w-100">Post</button>
            </div>
            <div class="col-4">
                <div class="btn btn-info w-100">Schedule</div>
            </div>
            <div class="col-4">
                <div class="btn btn-dark w-100">Draft</div>
            </div>

        </div>
    </form>

    <script src="https://cdn.tiny.cloud/1/2nvxye6w441ol74rklwjtaq3w9utq0rgkdhg9ni5sh6hehju/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        function handlePros(){
            const inputField = document.getElementById("prosID");
            if(!inputField.value.length==0){
                const prosValue = inputField.value.trim();
                const newProsInput = document.createElement("input");
                newProsInput.type = "text";
                newProsInput.name = "props[]";
                newProsInput.value = prosValue;
                const prosList = document.getElementById("prosListID");
                prosList.appendChild(newProsInput);
                inputField.value = "";
            }

        }

        function handleCons(){
            const inputField = document.getElementById("consID");
            if (!inputField.value.length==0){
                const consValue = inputField.value.trim();
                const newConsInput = document.createElement("input");
                newConsInput.type = "text";
                newConsInput.name = "cons[]";
                newConsInput.value = consValue;
                const consList = document.getElementById("consListID");
                consList.appendChild(newConsInput);
                inputField.value = "";
            }
        }

        function handleFAQ(){
            let faqList = document.getElementById('faqList')

            let question = document.getElementById('QuestionID').value
            let answer = document.getElementById('answerID').value

            let outerDiv = document.createElement('div')
            outerDiv.setAttribute('class','row')
            faqList.appendChild(outerDiv)

            let questionDiv = document.createElement('input')
            questionDiv.setAttribute('class','form-control col-5 mx-3 mt-3')
            questionDiv.setAttribute('name','question[]')
            questionDiv.setAttribute('value', question)
            outerDiv.appendChild(questionDiv)

            let answerDiv = document.createElement('input')
            answerDiv.setAttribute('class','form-control col-5 mx-3 mt-3')
            answerDiv.setAttribute('name','answer[]')
            answerDiv.setAttribute('value', answer)
            outerDiv.appendChild(answerDiv)

            document.getElementById('QuestionID').value =""
            document.getElementById('answerID').value =""
        }

        const selectedTags = document.getElementById("selectedTags");
        selectedTags.addEventListener("click", function(event) {
            if (event.target.tagName === "LI") {
                event.target.remove();
            }
        });
    </script>


@endsection




