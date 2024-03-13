<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>CodeWithRonny</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="description" content="" />
	<link rel="icon" href="favicon.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-success bg-opacity-10">
	<h1>CodeWithRonny</h1>


	<div class="container ">
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
		<a href="{{ route('slider.create') }}" type="button" class="float-end"><button class="btn btn-success">Create</button></a>

	<div class="">
	<table class="table">
	  <thead>
	     <tr>
	      <th scope="col">#</th>
	      <th scope="col">Image</th>
	      <th scope="col">Title</th>
	      <th scope="col">Tagline</th>
	      <th scope="col">url</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($sliders as $slider)
	    <tr class="">
	      <th scope="col">{{ $loop->iteration }}</th>
	      <th scope="col"><img src="{{ $slider->image }}" width="140rem" height="80rem" /></th>
	      <th scope="col">{{ $slider->title }}</th>
	      <th scope="col">{{ $slider->tagline }}</th>
	      <th scope="col">{{ $slider->url }}</th>
	      <th scope="col"><div class="row">
                      
                      @if($slider->is_active == 1)
                          <a href="{{ route('slider.disable',$slider->id) }}"><button type="button" class="btn btn-info"><i class="fa-solid fa-square-xmark"></i></button></a>&nbsp;&nbsp;
                      @else
                        <a href="{{ route('slider.enable',$slider->id) }}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-square-check"></i></button></a>&nbsp;&nbsp;
                      @endif
                      <a href="{{ route('slider.edit',$slider->id) }}"><button type="button" class="btn btn-secondary"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>&nbsp;&nbsp;
                      
                      <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">     
                      
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>          
                      </form> 
                      
                      </div></th>
	    </tr>
	    
	    
	    @endforeach
	  </tbody>
	</table>
	</div>
	</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>