@extends('backend.layouts.master')
@section('content')

<div class="row">
    <div class="col-md-6">
        <h3>Sondages</h3>
    </div>
    <div class="col-md-6">
        <div class="options text-right" style="margin-bottom: 10px;">
            <div class="btn-toolbar">
               <a href="{{ url('admin/sondage/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp;Ajouter</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12">

        @if(!$sondages->isEmpty())

            <div class="panel panel-primary">
                <div class="panel-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-sm-1">Action</th>
                            <th class="col-sm-1">Type</th>
                            <th class="col-sm-3">Colloque</th>
                            <th class="col-sm-2">Réponses</th>
                            <th class="col-sm-2">Test</th>
                            <th class="col-sm-2">Envoyer</th>
                            <th class="col-sm-2 no-sort"></th>
                        </tr>
                        </thead>
                        <tbody class="selects">
                       
                            @foreach($sondages as $sondage)
                                <tr>
                                    <td><a class="btn btn-sky btn-sm" href="{{ url('admin/sondage/'.$sondage->id) }}"><i class="fa fa-edit"></i></a></td>
                                    <td><strong>{{ !$sondage->marketing ? 'Colloque' : 'Marketing' }}</strong></td>
                                    <td><strong>{{ !$sondage->marketing ? $sondage->colloque->titre : str_limit(strip_tags($sondage->description),100) }}</strong></td>
                                    <td><a class="btn btn-sm btn-info" href="{{ url('admin/reponse/'.$sondage->id) }}"><i class="fa fa-bullhorn"></i> &nbsp;Voir les réponses</a></td>
                                    <td>
                                        @if($sondage->avis->isEmpty())
                                            <p>Aucune question pour ce sondage</p>
                                        @else
                                            <button data-id="{{ $sondage->id }}" data-user_id="{{ \Auth::user()->id }}" id="sendTestSondage" class="btn btn-inverse btn-sm">
                                                <i class="fa fa-paper-plane"></i> &nbsp;Envoyer un test
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sondage->avis->isEmpty())
                                            <p>Aucune question pour ce sondage</p>
                                        @else
                                            <a class="btn btn-warning btn-sm" href="{{ url('admin/sondage/confirmation/'.$sondage->id) }}">
                                                <i class="fa fa-exclamation"></i> &nbsp;Envoyer à une liste
                                            </a>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <form action="{{ url('admin/sondage/'.$sondage->id) }}" method="POST" class="form-horizontal">
                                            <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                            <button data-what="Supprimer" data-action="Le sondage" class="btn btn-danger btn-sm deleteAction">x</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        @endif

    </div>
</div>

@stop