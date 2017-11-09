
<!-- Modal -->
<div class="modal fade" id="singleInscription_{{ $inscription->id }}" tabindex="-1" role="dialog" aria-labelledby="singleInscription_">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscription n° {{ $inscription->inscription_no }}</h4>
            </div>
            <div class="modal-body">
                @include('backend.users.partials.single-inscription', ['inscription' => $inscription])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->