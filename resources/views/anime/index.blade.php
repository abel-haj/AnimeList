@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="container bg-darker py-4">
    <div class="row mb-5">
        <div class="col-md-12">
            <h3 class="display-3 text-bold">{{ __('List of all anime') }}</h3>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-8 offset-md-2">
		@if (count($all_anime) > 0)
			<table class="table table-hover">
				<thead>
				</thead>
				<tbody class="">
				@foreach ($all_anime as $anime)
					<tr class="table-dark">
						<!-- <th scope="row"></th> -->
						<td> {{ $anime->anime_name }} </td>
						<td class="text-right"> <a class="btn btn-sm btn-warning" href="/admin/anime/{{$anime->anime_id}}"> Modify </a></td>
						<td> <a class="btn btn-sm btn-danger" href="/admin/anime/{{$anime->anime_id}}"> Delete </a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{ $all_anime->links() }}
		@else
			No anime yet.
		@endif
        </div>
    </div>
</div>

<script type="application/javascript">
</script>

@endsection
