@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Movies 'R' Us Movie Database</h1>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
				<tr>
					<th>Movie ID</th>
					<th>Movie Title</th>
					<th>Year Made</th>
					<th>Length</th>
					<th>Language</th>
					<th>Date of Release</th>
					<th>Country Release</th>
				</tr>
				@foreach($movies as $movie)
				<tr>
					<td>{{ $movie->mov_id }}</td>
					<td>{{ $movie->mov_title }}</td>
					<td>{{ $movie->mov_year }}</td>
					<td>{{ $movie->mov_time }}</td>
					<td>{{ $movie->mov_lang }}</td>
					<td>{{ date('m/d/Y', strtotime($movie->mov_dt_rel)) }}</td>
					<td>{{ $movie->mov_rel_country }}</td>
					<td><a href="{{ route('detail', $movie->mov_id)}}" type="button" class="btn btn-primary" role="button">Movie Details</a></td>
				</tr>
				@endforeach
			</table>
			<div style="text-align: center;"> {{ $movies->links() }} </div>
		</div>
	</div>
</div>
@stop