@extends('layouts.app')
@section('content')
<h1>Danh sach</h1>
@foreach ($articles as $article)
    <div>
        {{ $article->title }}
    </div>
@endforeach
<div>
    {{ $articles->links() }}
</div>
@endsection