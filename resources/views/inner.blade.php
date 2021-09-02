@extends('layout.structure')
@section('content')

<form action="/action_page.php" id="form1">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
<label for="lname">Last name:</label>
<input type="text" id="lname" name="lname" form="form1">
  <input type="submit" value="Submit">
</form>

@endsection