@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;font-weight: bold;font-size: 30px">Genres</div>

                    <div class="panel-body">
                        {{ link_to_route('genre.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}

                        <div style="height:20px;"></div>
                        <table class="table table-bordered table-responsive table-striped" style="width: 34%;">
                            <tr>
                                <th width="10%">id</th>
                                <th width="50%">Name</th>
                                <th width="40%">Actions</th>
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($genre as $genre)
                                <tr>
                                    <td>{{$genre->id}}</td>
                                    <td>{{$genre->name}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['genre.destroy', $genre->id], 'method' => 'DELETE'])}}
                                        {!! html_entity_decode(link_to_route('genre.show', '<i class="fas fa-eye"></i>', [$genre->id]))   !!}
                                        {!! html_entity_decode(link_to_route('genre.edit', '<i class="fas fa-edit"></i>', [$genre->id]))   !!}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
