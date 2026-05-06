<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
          .center-div {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
         .image {
            text-align: center;
            margin-bottom: 20px;
        }
        .image img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #f0f0f0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 center-div">
                <!-- Ask Question Form -->
                <div class="card mb-4 shadow-sm w-100">
                    <div class="card-header" style="background-color: rgb(72, 188, 72); color: white;">Ask a Question</div>
                    <div class="card-body">
                        <form method="POST" action="/question" enctype="multipart/form-data">
                            @csrf
                             <div class="image">
                            <img id="preview" src="https://via.placeholder.com/100"><br>
                     <label id="chooseLabel">
                        <input type="file" name="question_image" id="image" accept="image/*" required>
                   </label>
                     </div>

                            <div class="mb-3">
                           <label class="form-label">Question Text</label>
                                <textarea name="question_text" class="form-control" rows="3"></textarea>
                            </div>
                            <button class="btn btn-success w-100" style="background-color: rgb(72, 188, 72); border-color:rgb(72, 188, 72);">Post Question</button>
                        </form>
                        <script>
                        document.getElementById('image').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(file);

        // Hide the "Choose File" button
        document.getElementById('chooseLabel').style.display = 'none';
    }
});
   </script>

                        <button class="btn btn-primary w-100 mt-2" onclick="location.href='/hi'">View Your Questions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>

