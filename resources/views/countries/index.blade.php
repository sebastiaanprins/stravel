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
      <a href="/countries/create"> <button type="button" class="btn btn-secondary">Add country</button></a>
      <br /><br />
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
            <td>
                <form action="{{ route('countries.destroy', $country->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
</div>
@endsection
