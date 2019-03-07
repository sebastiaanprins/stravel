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
      <a href="/countries"> <button type="button" class="btn btn-secondary">Countries</button></a>
  </table>

  <form method="POST" action="{{ route('countries.store') }}">

    <div class="form-group">
    @csrf
        <label for="name">Country Name:</label>
        <input type="text" class="form-control" name="countryName" required>
    </div>

    <button type="submit" class="btn btn-primary">Add</button>

  </form>



</div>
@endsection