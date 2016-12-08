<div class="card">
    <div class="head">
        <h1><a href="/{{ CP_ROUTE }}/pages">Pages</a></h1>
    </div>
    <div class="card-body">
        <table class="dossier">
            @if($root)
                 <tr>
                     <td><a href="{{ $root->editUrl() }}">{{ $root->get('title') }}</a></td>
                 </tr>
            @endif
            @foreach($pages as $page)
                <tr>
                    <td><a href="{{ $page->editUrl() }}">{{ $page->get('title') }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
