@if(isset($articles))
    @foreach ($articles as $article)
    <div class="article" style="padding:10px 0;margin:10px 0;border-bottom:1px solid #f2f2f2;display:flex">
        <div class="article-avatar">
            <a href="{{ route('get.detail.article', [$article->a_slug,$article->id]) }}">
                <img src="{{ pare_url_file($article->a_avatar) }}" alt="" width="200px" height="120px">
            </a>
        </div>
        <div class="article-avatar" style="width:80%;margin-left:5%">
            <h2 style="font-size:16px"><a href="{{ route('get.detail.article', [$article->a_slug,$article->id]) }}">{{ $article->a_name }}</a></h2>
            <p style="font-size:13px;font-style:italic">{{ $article->a_description }}</p>
            <p>Admin <span>{{ $article->created_at }}</span></p>
        </div>
    </div>
    @endforeach
    {!! $articles->links() !!}
@endif