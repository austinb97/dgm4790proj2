@extends('layout')

@section('mainTitle')
test blade
@endsection

@section('content')
	<ul>
		@foreach($cars as $car)
			<li>{{$car->make}}  {{$car->model}}</li>
		@endforeach
	</ul>
@endsection
