@extends('Procting.layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-white theNav">
    <div class="container-fluid">
      <a class="navbar-brand text-warning" href="#"><span class="h3">Live Procting</span><span class="navbar-brand text-dark h2"> | Active Live Courses</span></a>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <button class="btn button1 text-xs rounded-3 p-10"><span >sort by status</span></button>
        <button type="button" class="btn button2"><span >sort by status</span></button>
        <form >
            <div class="input-group">
                <input type="text" class="form-control thesearch" placeholder="Search">
                <div class="input-group-prepend bg-white search-ic" >
                <i class="fas fa-search"></i>
                </div>
            </div>
        </form>
    </div>
    </div>
</nav>

@yield('category')
@endsection