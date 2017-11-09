<?php if(isset($inscription)) { $occurrences_choix = $inscription->occurrences->pluck('id')->all(); } ?>

@foreach($colloque->occurrences as $index => $occurrence)
    <div class="form-group type-choix">
        <?php $name = (isset($type) && $type == 'multiple' ? 'occurrences[0][]' : 'occurrences['.$index.']'); ?>
        <input type="checkbox" {{ isset($occurrences_choix) && in_array($occurrence->id ,$occurrences_choix) ? 'checked' : '' }} class="occurrence-input" name="{{ $name }}" value="{{ $occurrence->id }}" />
        {{ $occurrence->title }}
        <p><strong style="display: inline-block;padding-left: 15px;">Date:</strong> {{ $occurrence->starting_at->formatLocalized('%d %B %Y') }}</p>
    </div>
@endforeach