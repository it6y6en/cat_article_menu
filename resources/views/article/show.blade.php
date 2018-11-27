{{ $article->title??'' }}
<hr>
@foreach ($article->categories as $articleCategory)

    <p>{{ $articleCategory->title }}</p>

@endforeach
