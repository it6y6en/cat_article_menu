@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('article.create') }}" class="btn btn-primary">Create</a>

        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <td>{{ $article->id ?? '' }}</td>
                        <td><a href="{{ route('article.show', $article) }}">{{ $article->title ?? 'no title' }}</a></td>
                        <td>
                            @foreach ( $article->categories as $articleCategory )
                                <p>{{ $articleCategory->title }}</p>
                            @endforeach
                        </td>
                        <td><a class="btn btn-primary" href="{{ Route('article.edit', $article) }}">Edit</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Missing</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
