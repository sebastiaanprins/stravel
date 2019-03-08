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
      <br /><br />
    <thead>
        <tr>
          <td>ID:</td>
          <td>Language:</td>
        </tr>
    </thead>
    <tbody>
        @foreach($languages as $language)
        <tr>
            <td>{{$language->id}}</td>
            <td>{{$language->languageName}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection