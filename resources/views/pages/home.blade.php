@extends('layouts.master')

@section('title', 'Engaging Indie Games')

@section('content')
    @foreach($posts as $post)
        @include('blog.list')
    @endforeach

    {{ $posts->links('vendor.pagination.simple-default') }}
@endsection

@section('scripts')
    <script>
        $("a#blog").addClass('active');
    </script>
@endsection