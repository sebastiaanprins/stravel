@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  .alertBox {
    max-width: 600px;
  }

  li {list-style-type: none;}

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
{{-- ADD REQUIRED F-END: <input type="text" class="form-control" name="countryName" required>
 --}}
        <label for="name">Country Name:</label>
    <input type="text" class="form-control {{ $errors->has('countryName') ? 'alert-danger' : '' }}" name="countryName" value="{{ old('countryName') }}">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>

  @if ($errors->any())
    <br /><br />
    <div class="notification alert-danger alertBox">

      <ul>

        @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>

    </div>

    @endif

  </form>

</div>
@endsection