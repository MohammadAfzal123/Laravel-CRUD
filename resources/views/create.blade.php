<html>
<head><title>Add Student</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style></style>
<body>
<div class="jumbotron">
<h2 class="text-center"> Add Student Detail</h2>
</div>
<div class="container">
<form action="{{ route('save-detail') }}" method="POST"> 
@csrf
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label>Roll No.</label>
    <input type="text" class="form-control" name="roll_no" >
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age" >
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact" >
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>