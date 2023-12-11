@extends('products.layout')

@section('content')
    <br/>
    <div class="row">
        <div class="col align-self-start">
        <a class="btn btn-primary" href="{{route('product.create')}}">Create</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->details}}</td>
                    <td><img src="/images/{{$item->image}}" alt=""></td>
                    <td>
                        <form action="{{route('product.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <hr>
                        <a class="btn btn-primary" href="{{route('product.edit',$item->id)}}">Edit</a>
                        <hr>
                        <a class="btn btn-info" href="{{route('product.show',$item->id)}}">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection