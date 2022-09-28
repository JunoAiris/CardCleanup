@extends('layout')
@section('title','Cardápios')
@section('content')
<div class="container-fluid p-3 m-3 mb-5 w-100 h-100 text-dark">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($menus as $menu)
     <div class="col">
      <div class="card bg-light bg-opacity-75 bg-gradient m-5" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('/storage/'.$menu->image_path)}}" style="height: 16rem;">
          <div class="card-body border-top border-dark">
            <h5 class="card-title">{{$menu->name}}</h5>
            <p class="card-text">{{$menu->description}}</p>
            <a href="{{route('menu.public.show', $menu->id)}}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
