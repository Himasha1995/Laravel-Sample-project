
@extends('dashboard.layout.main')

@section('content')
<form action="{{route('product.store')}}"  method = "post">
  @csrf
  <label for="name">name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br><br>
  <label for="type">Type</label>
  <select id="type">
  <option value="Dell">Dell</option>
  <option value="Hp">Hp</option>
  <option value="Acer">Acer</option>
  
</select>

  <button type="submit" value="Submit">create</button>
</form>
@endsection



               
