@extends('layouts.app')

@section('style')

<style>
.border-radius-25 {border-radius:10px 25%;}
</style>

@endsection

@section('content')
<div class="container bg-darker py-4">
    <div class="row mb-5">
        <div class="col-md-12">
            <h1 class="display-3 text-center text-bold">Welcome 
            <span class="font-weight-normal">Administrator</span></h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
		<div class="card border-radius-25 text-white bg-success">
			<div class="card-body">
				<h4 class="card-title">Create Anime</h4>
				<a href="{{ route('anime.create') }}" class="btn btn-success text-weight-bold">CREATE</a>
			</div>
		</div>
        </div>
        <div class="col-md-4">
		<div class="card border-radius-25 text-white bg-danger">
			<div class="card-body">
				<h4 class="card-title">Delete Anime</h4>
				<a href="#" class="btn btn-danger">DELETE</a>
			</div>
		</div>
        </div>
        <div class="col-md-4">
		<div class="card border-radius-25 text-white bg-warning">
			<div class="card-body">
				<h4 class="card-title">Update Anime</h4>
				<a href="#" class="btn btn-warning">UPDATE</a>
			</div>
		</div>
        </div>
        <!-- <div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Card title</h4>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
        </div> -->
    </div>
</div>

<script type="application/javascript">
</script>

@endsection
