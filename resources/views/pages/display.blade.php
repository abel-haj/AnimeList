@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="container bg-darker py-4">
    <div class="row mb-5">
    </div>
    <div class="row mb-5">
        <div class="col-md-10 offset-md-1">
			<div class="card m-auto d-block">
				<div class="card-header bg-success text-white"><h3>Anime Info</h3></div>
				<div class="card-body">
					<div class="row">
					<div class="col-md-4">
						<img class="carousel-image d-block w-100" alt="{{ $anime->anime_name }}"
                    src="{{ asset('images/featured/'.$anime->anime_featured_image) }}"/>
					</div>
					<div class="col-md-8">
						<table>
					<tr class="">
						<td> <label class="font-weight-bold">Anime Name :</label> </td>
						<td class="pl-4"> <label class="h4">{{ $anime->anime_name }} </label> </td>
					</tr>
					<tr class="">
						<td> <label class="font-weight-bold">Release Date :</label> </td>
						<td class="pl-4"> <label class="h4">{{ $anime->anime_release_date }} </label> </td>
					</tr>
					<tr class="">
						<td> <label class="font-weight-bold">Rating :</label> </td>
						<td class="pl-4"> <label class="h4"> {{ $anime->anime_rating }} </label> </td>
					</tr>
					<tr class="">
						<td> <label class="font-weight-bold">Description :</label> </td>
						<td class="pl-4"> <label class="h4">{{ $anime->anime_description }}</label> </td>
					</tr>
						</table>
					</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

<script type="application/javascript">
</script>

@endsection
