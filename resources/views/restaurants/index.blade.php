@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

.one {color: whitesmoke; list-style-type: none;}
.restPlate {
    background-color: grey;
    padding: 0.5em;
    transition: transform .2s;
    border-radius: 15px;
    box-shadow: 20px 20px 50px 1px grey;
}
.restPlate:hover {
    transform: scale(1.05);
    transition: transform .2s;
}
.imaaaaage {margin-top:-0.5em; padding-right: 4em;}
.xxx {margin-top:0; padding-top:0;}
.container a {text-decoration:none;}

</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <a href="/"> <button type="button" class="btn btn-secondary">Home</button></a>

</div>

<div class="container">
    @foreach($restaurants as $restaurant)

    <a href="http://{{$restaurant->restWebsite}}">
    <div class="row card restPlate" style="margin-top: 2em; width: 100%; height: 10em;">
      <div class="col one">
        <img class="card-img-top imaaaaage" style="height: 10em; width: auto; float:right;" src="{{ asset('else.jpg')}}" alt="Picture restaurant">
          <p class="card-text" style="margin-top:-0.5em;">
              <li style="padding-left: 2em; font-weight:bold;">{{$restaurant->restName}}</li>
              <li style="padding-left: 2em;">{{$restaurant->restKitchen}}</li>
              <li style="padding-left: 2em;">{{$restaurant->restLocation}}</li>
              <li style="padding-left: 2em;">{{$restaurant->restCity}}</li>
              <li style="padding-left: 2em;">Click to visit the website</li>
          </p>
      </div>
    </div></a>
    @endforeach

  </div>

@endsection