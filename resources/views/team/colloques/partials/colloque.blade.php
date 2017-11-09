@foreach($colloques as $chunk)
    <div class="row">
        @foreach($chunk as $colloque)
            <div class="col-md-3">
                <div class="panel panel-{{ $color }}">
                    <div class="panel-body panel-colloque">
                        <?php $illustraton = $colloque->illustration ? $colloque->illustration->path : 'illu.png'; ?>
                        <span class="no-colloque">{{ $colloque->id }}</span>
                        <div class="media">
                            <div class="media-left">
                                <a href="{{ url('team/colloque/'.$colloque->id) }}">
                                    <img class="media-object" width="50px" src="{{ secure_asset('files/colloques/illustration/'.$illustraton) }}" />
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{ url('team/colloque/'.$colloque->id) }}">{{ $colloque->titre }}</a></h4>
                                <p>{{ $colloque->sujet }}</p>
                                <p><i class="fa fa-calendar"></i> &nbsp;{{ $colloque->event_date }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-5">
                                <a class="btn btn-success btn-sm pull-left" href="{{ url('team/colloque/'.$colloque->id) }}">Inscriptions &nbsp;
                                    <span class="badge badge-success">{{ $colloque->inscriptions->count() }}</span>
                                </a>
                            </div>
                            <div class="col-md-7">
                                {!! isset($colloque->compte) ? $colloque->compte->motif : '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach