@extends('products.layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-warning" role="alert">
    <ul>
        @foreach ($errors as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    </div>
@endif
<div class="p-5">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
        <hr/>
        <label for="exampleFormControlInput1" class="form-label">details</label>
        <br/>
        <textarea name="details"></textarea>
        <hr>
        <input type="file" name="image" id="">
        <hr>
        <button type="submit">submit</button>
    </form>
</div>        

@endsection