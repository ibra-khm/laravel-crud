<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
</head>
<body>
    <div class="container w-25">
    <form action="/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input name="author" type="text" class="form-control" id="author">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Origin Country</label>
            <input name="country" type="text" class="form-control" id="country" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input name="language" type="text" class="form-control" id="language" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="pages" class="form-label">Number of Pages</label>
            <input name="pages" type="text" class="form-control" id="pages" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="year" class="form-label">Year Written</label>
            <input name="year" type="date" class="form-control" id="year" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="imageLink" class="form-label">Book Cover</label>
            <input name="imageLink" type="file" class="form-control" id="imageLink" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
</body>
</html>