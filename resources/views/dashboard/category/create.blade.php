
@extends('dashboard.layout.main')

@section('content')
<form action="{{route('category.store')}}"  method = "post">
  @csrf
  <label for="name">name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br><br>
  <button type="submit" value="Submit">create</button>
</form>
@endsection



               
