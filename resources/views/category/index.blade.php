@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create</a>

        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Parent</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id ?? '' }}</td>
                        <td><a href="{{ route('category.show',$category) }}">{{ $category->title ?? 'no title' }}</a></td>
                        <td>{{ $category->parent_id ?? '-' }}</td>
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
