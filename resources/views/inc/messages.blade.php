@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="bg-darker container pb-1 pt-3">
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{$error}}
        </div>
    </div>
    @endforeach
@endif

@if(session('success'))
    <div class="bg-darker container pb-1 pt-3">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{session('success')}}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="bg-darker container pb-1 pt-3">
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{session('error')}}
        </div>
    </div>
@endif
