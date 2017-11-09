@extends('backend.layouts.master')
@section('content')

<div class="row"><!-- row -->
    <div class="col-md-12"><!-- col -->
        <p><a class="btn btn-default" href="{{ url('admin/inscription/colloque/'.$colloque->id) }}"><i class="fa fa-reply"></i> &nbsp;Retour à la liste</a></p>
    </div>
</div>
<!-- start row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-midnightblue">

            @if(!empty($inscription))

                <!-- form start -->
                <form data-validate-parsley action="{{ url('admin/inscription/'.$inscription->id) }}" method="POST" class="form" >
                    <input type="hidden" name="_method" value="PUT">
                    {!! csrf_field() !!}
                    <div class="panel-heading">
                        <h4>&Eacute;diter {{ $inscription->inscription_no }}</h4>
                    </div>
                    <div class="panel-body">

                        @if($inscription->group_id)
                            <div class="form-group">
                                <label>Nom du participant</label>
                                <input name="participant" required class="form-control" value="{{ $inscription->participant->name }}" type="text">
                            </div>
                        @endif

                        @if(!$colloque->prices->isEmpty())
                            @include('backend.inscriptions.partials.prices', ['select' => 'price_id', 'price_current' => $inscription->price->id])
                        @endif

                        @if(!$colloque->options->isEmpty())
                            <h4>Merci de préciser</h4>
                            @include('backend.inscriptions.partials.options', ['select' => 'groupes'])
                        @endif

                        <?php $user = ($inscription->group_id ? 'group_id' : 'user_id'); ?>

                        <input name="{{ $user }}" value="{{ $inscription->$user }}" type="hidden">
                        <input name="colloque_id" value="{{ $colloque->id }}" type="hidden">

                        {!! Form::hidden('id', $inscription->id ) !!}
                    </div>
                    <div class="panel-footer mini-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ url('admin/inscription/generate/'.$inscription->id) }}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-file"></span> &nbsp;Regenerer les documents
                                </a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary" type="submit">Envoyer </button>
                            </div>
                        </div>
                    </div>
                </form>

            @endif

        </div>
    </div>
</div>
<!-- end row -->

@stop