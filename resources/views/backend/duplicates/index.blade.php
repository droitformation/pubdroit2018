@extends('backend.layouts.master')
@section('content')


<div class="row">
    <div class="col-md-12">
        @if(isset($duplicates) && !$duplicates->isEmpty())
            <div class="panel panel-warning">
                <div class="panel-body">
                    <h4><i class="fa fa-users"></i> &nbsp;Duplicatas</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-sm-5">Duplicata</th>
                            <th class="col-sm-5">Original</th>
                        </tr>
                        </thead>
                        <tbody class="selects">
                        @foreach($duplicates as $duplicate)
                            <tr>
                                <td>
                                    <h5><strong>{{ $duplicate->name }}</strong></h5>
                                    <p><strong>Email :</strong> {{ $duplicate->email }}</p>
                                    <?php
                                    if(isset($duplicate->adresse))
                                    {
                                        echo '<strong>Adresse :</strong> '.$duplicate->adresse->adresse.'<br/>';
                                        echo '<strong>NPA/Ville :</strong> '.$duplicate->adresse->npa.' '.$duplicate->adresse->ville.'<br/>';
                                    }

                                    if(!$duplicate->orders->isEmpty())
                                    {
                                        foreach($duplicate->orders as $order)
                                        {
                                            echo '<p>'.$order->order_no.'</p>';
                                        }
                                    }

                                    if(!$duplicate->inscriptions->isEmpty())
                                    {
                                        foreach($duplicate->inscriptions as $inscription)
                                        {
                                            echo '<p>'.$inscription->inscription_no.'</p>';
                                        }
                                    }
                                    ?>
                                    <br/>

                                    <form action="{{ url('admin/duplicate/'.$duplicate->id) }}" method="POST" class="pull-left">
                                        <a class="btn btn-sky btn-sm" href="{{ url('admin/duplicate/'.$duplicate->id) }}">&Eacute;diter</a>
                                        <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                        <button data-what="Supprimer" data-action="{{ $duplicate->name }}" class="btn btn-danger btn-sm deleteAction">Supprimer</button>
                                    </form>
                                    <form action="{{ url('admin/duplicate/assign') }}" method="POST" class="pull-right">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="duplicate_id" value="{{ $duplicate->id }}">
                                        <input type="hidden" name="user_id" value="{{ $duplicate->user_id }}">
                                        <button data-what="Supprimer" data-action="{{ $duplicate->name }}" class="btn btn-warning btn-sm">
                                            Assigner tout à l'original &nbsp;<i class="fa fa-arrow-right"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="duplicate">
                                    <?php
                                    if(isset($duplicate->user))
                                    {
                                        echo '<h5><strong>'.$duplicate->user->name.'</strong></h5>';
                                        echo '<p><strong>Email :</strong> '.$duplicate->user->email.'</p>';
                                    }
                                    ?>
                                    <?php
                                    if(isset($duplicate->adresse_principale))
                                    {
                                        echo '<p><strong>Adresse :</strong> '.$duplicate->adresse_principale->adresse.'</p>';
                                        echo '<p><strong>NPA/Ville :</strong> '.$duplicate->adresse_principale->npa.' '.$duplicate->adresse_principale->ville.'</p>';
                                    }

                                    if(!$duplicate->user->orders->isEmpty())
                                    {
                                        foreach($duplicate->user->orders as $order)
                                        {
                                            echo '<p>'.$order->order_no.'</p>';
                                        }
                                    }

                                    if(!$duplicate->user->inscriptions->isEmpty())
                                    {
                                        foreach($duplicate->user->inscriptions as $inscription)
                                        {
                                            echo '<p>'.$inscription->inscription_no.'</p>';
                                        }
                                    }
                                    ?>
                                    <br/>

                                    @if(isset($duplicate->user))
                                        <form action="{{ url('admin/user/'.$duplicate->user->id) }}" method="POST" class="form-horizontal">
                                            <a class="btn btn-sky btn-sm" href="{{ url('admin/user/'.$duplicate->user->id) }}">&Eacute;diter</a>
                                            <input type="hidden" name="_method" value="DELETE">{!! csrf_field() !!}
                                            <button data-what="Supprimer" data-action="{{ $duplicate->user->name }}" class="btn btn-danger btn-sm deleteAction">Supprimer</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {!! $duplicates->links() !!}
                </div>
            </div>
        @endif
    </div>
</div>


@stop