@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;font-weight: bold;font-size: 30px">Sizes</div>

                    <div class="panel-body">
                        {{ link_to_route('size.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}

                        <div style="height:20px;"></div>
                        <table class="table table-bordered table-responsive table-striped" style="width: 40%;">
                            <tr>
                                <th width="10%">id</th>
                                <th width="20%">Height</th>
                                <th width="20%">Width</th>
                                <th width="30%">Actions</th>
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($sizes as $size)
                                <tr>
                                    <td>{{$size->id}}</td>
                                    <td>{{$size->height}}</td>
                                    <td>{{$size->width}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $size->id], 'method' => 'DELETE'])}}
                                        <!--{{ link_to_route('size.show', 'info', [$size->id], ['class' => 'btn btn-info btn-xs']) }}-->
                                        {!! html_entity_decode(link_to_route('size.show', '<i class="fas fa-eye"></i>', [$size->id]))   !!}
                                        {!! html_entity_decode(link_to_route('size.edit', '<i class="fas fa-edit"></i>', [$size->id]))   !!}
                                        <!--{{ link_to_route('size.edit', 'edit', [$size->id], ['class' => 'glyphicon glyphicon-edit']) }}-->
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
