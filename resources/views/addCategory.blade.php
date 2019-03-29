@extends ('layouts.app')

@section('content')

    <div class="panel panel-default col-md-8 center-div">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter une Marque</h2>

        </div>
        @if ($errors->any())
            <div class="alert alert-primary">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="panel-body">
            <form class="" action="/addCategory" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="title" >
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>

@endsection
