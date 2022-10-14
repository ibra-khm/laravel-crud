@extends('welcome')

<div class="container d-flex">
@section('content')
@foreach ($books as $book)
<div class="card m-3" style="width: 14rem;">
    <img class="card-img-top" src="{{$book['imageLink']}}" alt="Card image cap" width="100px">
    <div class="card-body">
      <h5 class="card-title">{{$book['name']}}</h5>
      <p class="card-text">{{$book['description']}}</p>
    </div>
  </div>
    
@endforeach
</div>

@endsection

@section('footer')
<h3>home footer</h3>
@endsection