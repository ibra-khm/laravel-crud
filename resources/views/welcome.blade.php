<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title', "Welcome")</title>
</head>
<body>
    <div class=" d-flex">
        @foreach ($books as $book)
        <div id="cardsDiv" class="card m-5" style="width: 15rem;">
          <img src="{{ storage_path().'/images/'.$book->image }}" alt="" title=""></a>
            <div class="card-body">
              <h5 class="card-title">{{$book['title']}}</h5>
              <p class="card-text">{{$book['author']}}</p>
              <p class="card-text">{{$book['description']}}</p>
              <p class="card-text">{{$book['year']}}</p>
              <a href="delete/{{$book['id']}}"  class="btn btn-primary">Delete</a>
              <a href="update/{{$book['id']}}" class="btn btn-primary">Update</a>
            </div>
          </div>
        
          @endforeach
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>