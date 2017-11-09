<ul class="nav">
    @if(!$domains->isEmpty())
        <li>
            <form action="{{ url('pubdroit/sort')}}" method="post">{!! csrf_field() !!}
                <input type="hidden" name="title" value="Domaine">
                <input type="hidden" name="label" value="domain">
                <select name="search[domain_id]" class="dropdow-select">
                    <option value="">Thèmes</option>
                    @foreach($domains as $domain)
                        <option value="{{ $domain->id }}">{{ $domain->title }}</option>
                    @endforeach
                </select>
            </form>
        </li>
    @endif
    @if(!$categories->isEmpty())
        <li>
            <form action="{{ url('pubdroit/sort')}}" method="post">{!! csrf_field() !!}
                <input type="hidden" name="title" value="Catégorie">
                <input type="hidden" name="label" value="categorie">
                <select name="search[categorie_id]" class="dropdow-select">
                    <option value="">Collections</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                    @endforeach
                </select>
            </form>
        </li>
    @endif
    @if(!$shopauthors->isEmpty())
        <li>
            <form action="{{ url('pubdroit/sort')}}" method="post">{!! csrf_field() !!}
                <input type="hidden" name="title" value="Auteur">
                <input type="hidden" name="label" value="author">
                <select name="search[author_id]" class="dropdow-select">
                    <option value="">Auteurs</option>
                    @foreach($shopauthors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </form>
        </li>
    @endif

    <li class="item-colloque"><a href="{{ url('pubdroit/colloque') }}"><i class="fa fa-calendar"></i> &nbsp; Colloques</a></li>

    @if(isset($newsletters) && !$newsletters->isEmpty())
        <li class="item-colloque"><a href="{{ url('pubdroit/subscribe') }}"><i class="fa fa-paper-plane"></i> &nbsp; Newsletter</a></li>
    @endif
</ul>