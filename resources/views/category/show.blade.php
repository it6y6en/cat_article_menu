{{ $category->title??'' }}
<hr>
@foreach ($category->articles as $categoryArticle)
    <p>{{ $categoryArticle->title }}</p>
@endforeach
