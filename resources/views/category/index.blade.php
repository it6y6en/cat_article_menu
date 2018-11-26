@extends('layouts.app')

@section('content')

    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th class="text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->title ?? 'no title' }}</td>
                    <td><a class="btn btn-primary" href="{{ Route('category.edit', $category) }}">Edit</a></td>
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
