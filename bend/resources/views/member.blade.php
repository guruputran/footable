<!DOCTYPE html>
<html>
<head>
	<title>Laravel Member testing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/footable.bootstrap.min.css') }}">
</head>
<body>


<div class="container">
<div class="row">
<div class="col-sm-6">
<table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th data-breakpoints="lg xs md sm">First Name</th>
                <th data-breakpoints="lg xs md sm">Last Name</th>
                <th data-breakpoints="lg xs md sm">Age</th>
                <th data-breakpoints="lg xs md sm">Living place</th>
                <th data-breakpoints="lg xs md sm">Hobbies</th>
                <th>Pets</th>
                <th>Social activity</th>
            </tr>
            </thead>

            <tbody>
               
            <tr>
                <td>1234</td>
                <td>Item2</td>
                <td>Item3</td>
                <td>Item4</td>
                <td>Item3</td>
                <td>Item4</td>
                <td>Item5</td>
                <td>Item6</td>
            </tr>
            
            </tbody>

        </table>
</div>
<div class="col-sm-6">

	<h1>Member Form</h1>


	@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif


	{!! Form::open(['route'=>'memberin.store']) !!}


		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::label('Name:') !!}
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
			<span class="text-danger">{{ $errors->first('name') }}</span>
		</div>


		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{!! Form::label('Email:') !!}
			{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
			<span class="text-danger">{{ $errors->first('email') }}</span>
		</div>


		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			{!! Form::label('Message:') !!}
			{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
			<span class="text-danger">{{ $errors->first('message') }}</span>
		</div>


		<div class="form-group">
			<button class="btn btn-success">Save Member</button>
		</div>


	{!! Form::close() !!}
</div>
</div> {{-- row ends --}}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('js/footable.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/footrigger.js') }}"></script>
</body>
</html>