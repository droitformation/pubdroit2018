<!-- Modal -->
<div class="modal fade" id="sendModal_{{ $campagne->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 900px;">
            <form action="{{ url('build/send/campagne') }}" class="form-inline" method="POST">{!! csrf_field() !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Envoyer la campagne!</h4>
                </div>
                <div class="modal-body" style="min-height: 450px;">

                    <h2>Campagne :</h2>
                    <h3>"{{ $campagne->sujet }}"</h3>
                    <br/>
                        <label class="control-label text-primary">Spécifier une date et heure d'envoi</label>
                        <p><input type="text" class="form-control datePickerNewsletter" id="datePickerNewsletter" value="" name="date"></p>
                    <hr/>
                    <p class="text-danger">
                        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention</h4>
                        Sans modification spécifié l'envoi est prévu avec un délai de 15 minutes pour permettre une éventuelle annulation.
                    </p>

                </div>
                <div class="modal-footer">
                    <input name="id" value="{{ $campagne->id }}" type="hidden">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Envoyer</button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>