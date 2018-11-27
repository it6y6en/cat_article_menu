@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="{{ route('article.update', $article) }}" method="post">
            @method('PUT')
            @csrf

            @include('article._form')
        </form>

    </div>

@endsection
