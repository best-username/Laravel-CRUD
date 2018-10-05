@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;font-weight: bold;font-size: 30px">Books</div>

                    <div class="panel-body">
                        {{ link_to_route('book.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}
{{--                        <a href="{{route('book.create')}}" class="btn btn-info btn-xs">Create</a>--}}

                        <div style="height:20px;"></div>
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="6%">id</th>
                                <th width="10%">Title</th>
                                <th width="6%">Author</th>
                                <th width="6%">Genre</th>
                                <th width="6%">Price</th>
                                <th width="6%">Pages</th>
                                <th width="6%">Year</th>
                                <th width="3%">Hardcover</th>
                                <th width="6%">Publisher</th>
                                <th width="10%">Size</th>
                                <th width="12%">Actions</th>
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->genre->name}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->pages}}</td>
                                    <td>{{$book->year}}</td>
                                    <td>{{$book->hardcover}}</td>
                                    <td>{{$book->publisher}}</td>
                                    <td>{{$book->size->width}} x {{$book->size->height}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
                                        {!! html_entity_decode(link_to_route('book.show', '<i class="fas fa-eye"></i>', [$book->id]))   !!}
                                        {!! html_entity_decode(link_to_route('book.edit', '<i class="fas fa-edit"></i>', [$book->id]))   !!}
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