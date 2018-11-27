@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="{{ route('article.store') }}" method="post">
            @csrf

            @include('article._form')
        </form>

    </div>

@endsection
