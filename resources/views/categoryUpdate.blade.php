@extends ('layouts.app')

@section('content')

    <div class="panel panel-default col-md-8 center-div">
        <div class="panel-body">
            <form class="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Update</button>
            </form>
        </div>
    </div>

@endsection
