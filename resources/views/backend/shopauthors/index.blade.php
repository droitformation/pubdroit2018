@extends('backend.layouts.master')
@section('content')

<div class="row">
    <div class="col-md-10">
        <h3>Auteurs ouvrages</h3>
    </div>
    <div class="col-md-2 text-right">
        <a id="addAuthor" href="{{ url('admin/shopauthor/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp;Ajouter</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-midnightblue">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table simple-table">
                        <thead>
                        <tr>
                            <th class="col-sm-1">Action</th>
                            <th class="col-sm-2">Prénom</th>
                            <th class="col-sm-2">Nom</th>
                            <th class="col-sm-2 no-sort"></th>
                        </tr>
                        </thead>
                        <tbody class="selects">

                        @if(!$shopauthors->isEmpty())
                            @foreach($shopauthors as $author)
                                <tr>
                                    <td><a class="btn btn-sky btn-sm" href="{{ url('admin/shopauthor/'.$author->id) }}">&Eacute;diter</a></td>
                                    <td><strong>{{ $author->first_name }}</strong></td>
                                    <td><strong>{{ $author->last_name }}</strong></td>
                                    <td class="text-right">
                                        <form action="{{ url('admin/shopauthor/'.$author->id) }}" method="POST" class="form-horizontal">
                                            <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                            <button data-action="{{ $author->name }}" class="btn btn-danger btn-sm deleteAction">x</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@stop