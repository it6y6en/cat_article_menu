@foreach ($categories as $categoryItem)
    <option value="{{ $categoryItem->id??'' }}"
        @isset ($article->id)

            @if ($article->categories->contains('id', $categoryItem->id))
                selected=""
            @endif

        @endisset
    >{{ $delimiter }}{{ $categoryItem->title??'' }}
    </option>

    @isset ($categoryItem->children)
        @include('article._categories', [
            'categories' => $categoryItem->children,
            'delimiter' => ' - '.$delimiter,
        ])
    @endisset

@endforeach
