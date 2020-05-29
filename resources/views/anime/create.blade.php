@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="container bg-darker py-4">
    <div class="row mb-5">
        <div class="col-md-12">
            <h3 class="display-3 text-bold">{{ __('Create a new Anime') }}</h3>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-8 offset-md-2">
			<div class="card m-auto d-block">
				<div class="card-header bg-success text-white"><h3>{{ __('New Anime') }}</h3></div>
				<div class="card-body">
				<form action="{{ route('anime.store') }}" method="POST" charset="utf-8" enctype="multipart/form-data">
				{{ csrf_field() }}
					<fieldset>
						<div class="form-group ">
							<label for="name">Anime Name :</label>
							<div class="input-group">
								<input type="text" class="form-control " id="name" name="name"
								placeholder="Enter name">
								<!-- <div class="input-group-append">
									<button type="button" class="btn btn-secondary">Check</button>
								</div> -->
								<!-- <div class="invalid-feedback">Sorry, that name's taken. Try another?</div> -->
							</div>
						</div>
						<div class="form-group">
							<label class="" for="image">Anime image :</label>
							<div class="input-group mb-3">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="image" name="image"
								onchange="document.querySelector('#image-label').innerText=this.files[0].name">
								<label class="custom-file-label" id="image-label" for="image">Choose image</label>
							</div>
							</div>
						</div>
						<div class="form-group">
							<label class="" for="feat-image">Anime featured image :</label>
							<div class="input-group mb-3">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="feat-image" name="feat-image"
								onchange="document.querySelector('#feat-image-label').innerText=this.files[0].name">
								<label class="custom-file-label" id="feat-image-label" for="feat-image">Choose featured image</label>
							</div>
							</div>
						</div>
						<div class="form-group">
							<label for="date">Release Date :</label>
							<input type="date" class="form-control" id="date" name="date"
							value="{{ date('Y-m-d') }}" max="{{ date('Y-m-d') }}" placeholder="Release date">
						</div>
						<div class="form-group">
							<label for="rate">Rating :</label>
							<input type="range" class="custom-range" id="rate" name="rate" min="0" max="10" value="0"
							 style="border-radius:10px;background: #fbff1030;"
							 data-toggle="tooltip" data-placement="top" title="" data-original-title="javascript:this.value;">
						</div>
						<div class="form-group">
							<label for="desc">Description :</label>
							<textarea rows="4" class="form-control" id="desc" name="desc"
							placeholder="Details about the anime"></textarea>
						</div>
						<div class="form-group mt-5">
							<button type="submit" class="btn btn-block btn-success" >Submit</button>
						</div>
					</fieldset>
				</form>
				</div>
			</div>
        </div>
    </div>
</div>

<script type="application/javascript">
</script>

@endsection
