@extends ('layouts.app')

@section('content')

    <!-- We will create one brand banner with each brand for our home page -->

    <div class="content col d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center mt-5 mb-4">Categories</h1>
        <a href="/addCategory" class="btn btn-success">Create category<i class="fas fa-plus-circle"></i></a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Name
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                 @can('delete', \App\Category::class)
                    <td class="text-center"> <a href="/category/delete/{{$category->id}}" class="btn btn-danger">Supprimer</a> <a href="/category/update/{{$category->id}}" class="btn btn-info">Modifier</a></td>
                @endcan
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection