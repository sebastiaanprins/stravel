@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">
      <a href="/"> <button type="button" class="btn btn-secondary">Home</button></a>
    <thead>
        <tr>
          {{-- <td>ID</td> --}}
          <td>Restaurant</td>
          <td>Kitchen</td>
          <td>Address</td>
          <td>City</td>
          <td>Website</td>
        </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
            {{-- <td>{{$restaurant->id}}</td> --}}
            <td>{{$restaurant->restName}}</td>
            <td>{{$restaurant->restKitchen}}</td>
            <td>{{$restaurant->restLocation}}</td>
            <td>{{$restaurant->restCity}}</td>
            <td>{{$restaurant->restWebsite}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection