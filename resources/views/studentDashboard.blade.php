<html>
<head><title>Dashboard</title>
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style></style>
<body>
<div class="jumbotron">
<h2 class="text-center">Student Dashboard</h2>
</div>
<div class="container">
<div class="text-center">
<a href="{{ route('add-student') }}"><button type="button"  class="btn btn-success btn-lg">Add Student</button></a>
</div></br>
<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php $i=1; @endphp
			@foreach($data as $value)
                <tr>
				  <td width="60">{{ $i }}</td>

          
				   <td style="text-align:left;cursor:pointer">{{$value->name}}</td>
				    <td style="text-align:left;cursor:pointer">{{$value->roll_no}}</td>
            <td style="text-align:left;cursor:pointer">{{$value->age}}</td>
            <td style="text-align:left;cursor:pointer">{{$value->contact}}</td>
							   
				  
				  
				  <td width="100"> 
				   
					
				  <a href="{{ url('edit/'.$value->id) }}"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
				  <a  href="{{ url('delete/'.$value->id) }}" style="color:red" ><i class="fa fa-trash"></i></a>
				  </td>
                  
                </tr>
				@php $i++; @endphp
			@endforeach
				
  </tbody>
  </table>
</div>
</body>
</html>