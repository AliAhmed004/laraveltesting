<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('custom.js')}}"></script>


<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.error
{
  background: #c51e1e;
    padding: 5px;
    color: white;
    display: inline-block;
    width: 98%;
    margin:10px 0;
    text-align:center;
}
</style>
</head>
<body>

<h3>Add Car</h3>
@if(session()->has('status'))
<span class="error" >{{session('status')}}</span>
@endif
<div>

<br>
  <form id="car" action="carsubmit"method="post">
    @csrf
    <label for="fname">Title</label>
    <input type="text" id="fname" name="title[]" >
    <label for="lname">Desc</label>
    <input type="text" id="lname" name="desc[]" >
           <h3>Further Info</h3>
           <div id="fi" style="margin:0; padding:0" >
    <label for="country">Color</label>
    <input type="text" id="lname" name="color[]" >
 
    <label for="country">Model</label>
    <input type="text" id="lname" name="model[]" >
    <label for="country">Drived</label>
    <input type="text" id="lname" name="drived[]" >
    <label for="country">Condition</label>
    <input type="text" id="lname" name="condition[]" >
    <label for="country">Price</label>
    <input type="text" id="lname" name="price[]" >
    </div>
    <button>Add More Data</button>
   <br><br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
