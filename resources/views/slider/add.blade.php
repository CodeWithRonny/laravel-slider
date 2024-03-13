<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>CodeWithRonny</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="description" content="" />
	<link rel="icon" href="favicon.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>CodeWithRonny</h1>
	

	<div class="container">
		@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
		@endif
		<a href="{{ route('slider.index') }}" type="button" class="float-end"><button class="btn btn-success">Back</button></a>

		<div class="card p-5 bg-success bg-opacity-10">
		<form class="form-horizontal" method='POST' enctype="multipart/form-data" action="{{ route('slider.store') }}">
			@csrf
		  <div class="mb-3">
		    <label for="title" class="form-label">Title</label>
		    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
		    
		  </div>
		  <div class="mb-3">
		    <label for="image" class="form-label">Image</label>
		    <input type="text" class="form-control" id="image" name="image">
		  </div>
		  
		  <div class="mb-3">
		  	<label class="form-check-label" for="tagline">Tagline</label>
		    <input type="text" class="form-control" id="tagline" name="tagline">
		    
		  </div>
		  <div class="mb-3">
		  	<label class="form-check-label" for="url">url</label>
		    <input type="text" class="form-control" id="url" name="url">
		    
		  </div>
		  
		  <button type="submit" class="btn btn-success"><i class="fa-solid fa-square-plus"> </i>Create</button>
		</form>
		</div>
	</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>