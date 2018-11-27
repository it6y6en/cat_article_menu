@foreach ($categories as $category)
    @if ($category->children->count())

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="{{ route('category.show', $category) }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $category->title??''}}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @include('layouts._menu', ['categories'=>$category->children, 'is_child'=>true])
      </div>
    </li>

    @else
        @isset ($is_child)
            <a class="dropdown-item" href="{{ route('category.show', $category) }}">{{ $category->title??'' }}</a>
            @continue
        @endisset

        <li class="nav-item">
          <a class="nav-link" href="{{ route('category.show', $category) }}">{{ $category->title??'' }}</a>
        </li>
    @endif

@endforeach
