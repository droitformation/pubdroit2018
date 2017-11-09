@extends('backend.layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-10">
            <h3>Frais de port</h3>
        </div>
        <div class="col-md-2 text-right">
            <a href="{{ url('admin/shipping/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp;Ajouter</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-midnightblue">
                <div class="panel-body">

                    <table class="table simple-table">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Titre</th>
                                <th>Poids maximum</th>
                                <th>Prix</th>
                                <th>Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!$shippings->isEmpty())
                            @foreach($shippings as $shipping)
                                <tr>
                                    <td>
                                        @if(!$shipping->hidden)
                                            <a href="{{ url('admin/shipping/'.$shipping->id) }}" class="btn btn-sm btn-info">éditer</a>
                                        @endif
                                    </td>
                                    <td>{{ $shipping->title }}</td>
                                    <td>{{ $shipping->weight }} grammes</td>
                                    <td>{{ $shipping->price_cents  }}</td>
                                    <td>{{ $shipping->type }}</td>
                                    <td class="text-right">
                                        @if(!$shipping->hidden)
                                            @if($shipping->orders->isEmpty())
                                                <form action="{{ url('admin/shipping/'.$shipping->id) }}" method="POST" class="form-horizontal">
                                                    <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                                    <button data-what="Supprimer" data-action="{{ $shipping->title }}" class="btn btn-danger btn-sm deleteAction">x</button>
                                                </form>
                                            @else
                                                <span class="text-warning">Frais de port utilisés</span>
                                            @endif
                                        @else
                                            <span class="text-danger">Frais de port archivés</span>
                                        @endif
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

@stop