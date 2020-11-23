<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Department Edit</title>
	 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Data Table Bootstrap cse -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  
  <!-- Custom styles for this template-->
  
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div class="create" style=" text-align: center;">
	
	<h2 style="color: #080275; font-weight: 800;">Department Edit</h2> <h3><a href="/departments">View Department</a></h3>
	@include('messages.message')
	<!-- error message -->
	 <!-- @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger" style="color: red; font-weight: bold;">{{$error}}</div>
     @endforeach
 @endif -->

	<!-- success message -->
	<!-- @if(session()->has('success'))
	<div class="alert alert-success" style="color: green; font-weight: bold;">
		{{session()->get('success')}}
	</div>
	@endif -->
	<!-- form starts -->
	<form action="/departments/{{$data_show->id}}" method="POST">
		{{csrf_field()}}
		<input type="text" name="department_name" placeholder="Department name" value="{{$data_show->department_name}}">
		<input type="text" name="department_code" placeholder="Department code" value="{{$data_show->department_code}}">
		<input type="submit" value="Update Department" class="btn btn-primary">
	</form>
</div>
	<br>
	<br>
	<br>
	


	<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>