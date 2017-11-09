@extends('backend.layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3>Abos</h3>
        </div>
        <div class="col-md-6 text-right">
            <div class="options" style="margin-bottom: 10px;">
                <a href="{{ url('admin/abo/create') }}" id="addAbo" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp;Ajouter abo</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                @if(!$abos->isEmpty())
                    @foreach($abos as $abo)

                        <div class="col-md-4">
                        <div class="panel panel-midnightblue">
                            <div class="panel-body">
                                <img class="thumbnail" style="height: 80px; float:left; margin-right: 15px;padding: 5px;" src="{{ secure_asset('files/main/'.$abo->logo_file) }}" />
                                <h4>{{ $abo->title }}  <span class="label label-grape pull-right">{{ $abo->plan_fr }}</span></h4>
                                <p><strong>&Eacute;dition:</strong> {{ $abo->current_product->title }}</p>
                            </div>
                            <div class="panel-footer">
                                <form action="{{ url('admin/abo/'.$abo->id) }}" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                    <button data-what="Supprimer" data-action="{{ $abo->title }}" class="btn btn-danger btn-sm deleteAction">x</button>
                                   <div class="btn-group pull-right">
                                       <a href="{{ url('admin/abo/'.$abo->id) }}" class="btn btn-sm btn-inverse">&Eacute;diter</a>
                                       <a href="{{ url('admin/abonnements/'.$abo->id) }}" class="btn btn-sm btn-info">Liste des abonnements</a>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

@stop