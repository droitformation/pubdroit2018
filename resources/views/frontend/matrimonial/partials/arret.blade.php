<div class="arret {{ $arret->filter }} y{{ $arret->pub_date->year }} clear">
    <div class="row">
        <div class="col-md-9">
            <div class="post">
                <div class="post-title">
                    <h3>{{ $arret->reference }} du {{ $arret->pub_date->formatLocalized('%d %B %Y') }}</h3>
                    <p>{{ $arret->abstract }}</p>
                </div><!--END POST-TITLE-->
                <div class="post-entry">
                    <a class="anchor" name="{{ $arret->reference }}"></a>
                    {!! $arret->pub_text !!}

                    @if($arret->document)
                        <p>
                            <a target="_blank" href="{{ secure_asset('files/arrets/'.$arret->file) }}">
                                Télécharger en pdf &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>
                            </a>
                        </p>
                    @endif
                </div>
            </div><!--END POST-->
        </div>
        <div class="col-md-3 listCat text-center">
            @if(!$arret->categories->isEmpty())
                @foreach($arret->categories as $categorie)
                    <img style="max-width: 140px;" border="0" alt="{{ $categorie->title }}" src="<?php echo secure_asset('files/pictos/'.$categorie->image) ?>">
                    <p><small>{{ $categorie->title }}</small></p>
                @endforeach
            @endif
        </div>
    </div>
</div>