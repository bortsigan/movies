@extends('layouts.app')

@section('content')

@if ($details)
<div class="container">
	<div class="row">
		<h2>Movie Information</h2>
		<div class="row">
			<div class="col-md-2">
				Movie Title :
			</div>
			<div class="col-md-5">
				<strong> {{ $details['movie_title'] }} </strong>
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Year :
			</div>
			<div class="col-md-5">
				{{ $details['movie_year'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Running Times :
			</div>
			<div class="col-md-5">
				{{ $details['movie_time'] }} minutes
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Directed by :
			</div>
			<div class="col-md-5">
				{{ $details['movie_director'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Starring :
			</div>
			<div class="col-md-5">
				{{ $details['movie_starring'] }} - {{ $details['movie_starring_role'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Genre :
			</div>
			<div class="col-md-5">
				{{ $details['movie_genre'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Rating :
			</div>
			<div class="col-md-5">
				{{ $details['movie_rating'] }}
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				Score :
			</div>
			<div class="col-md-5">
				{{ $details['movie_stars'] }} Stars
			</div>
		</div>
	</div>
	<br/>
	<a href="{{ route('all') }}" class="btn btn-primary btn-sm">Go Back to List</a>
</div>
@endif