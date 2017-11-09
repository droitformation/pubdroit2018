@extends('backend.layouts.master')
@section('content')

<div class="row"><!-- row -->
    <div class="col-md-12"><!-- col -->
        <p><a class="btn btn-default" href="{{ url('admin/inscription/colloque/'.$groupe->colloque_id) }}"><i class="fa fa-reply"></i> &nbsp;Retour à la liste des inscriptions</a></p>
    </div>
</div>

<!-- start row -->
<div class="row">
    <div class="col-md-5">
        <div class="panel panel-magenta">
            <div class="panel-body">
                <h3>Changer le détenteur du groupe</h3>

                <form data-validate-parsley action="{{ url('admin/group/'.$group->id) }}" method="POST" class="form">
                    <input type="hidden" name="_method" value="PUT">
                    {!! csrf_field() !!}

                    <input type="hidden" name="group_id" value="{{ $groupe->id }}" />
                    <h4>Détenteur actuel</h4>
                    <address>
                        {{ $groupe->user->adresse_facturation->company }}<br/>
                        {{ $groupe->name }}<br>
                        {{ $groupe->user->adresse_facturation->adresse }}<br/>
                        {{ $groupe->user->adresse_facturation->npa }} {{ $groupe->user->adresse_facturation->ville }}
                    </address>

                    <div class="form-group">
                        <label><strong>Colloque</strong></label>
                        <p>{{ $groupe->colloque->titre }}</p>
                    </div>

                    <!-- Search user autocomplete -->
                    @include('backend.partials.search-user')

                    <button type="submit" class="btn btn-info pull-right">Changer</button>
                </form>
            </div>
        </div>
    </div>

</div>



@stop