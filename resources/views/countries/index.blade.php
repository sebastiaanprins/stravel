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
          <td>ID:</td>
          <td>Country Name:</td>
        </tr>
    </thead>
    <tbody>
        @foreach($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->countryName}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection