@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Noticias de Videojuegos</h1>
        <div class="grid grid-cols-3 gap-4">
            @foreach($posts as $post)
                <div class="bg-white p-4 rounded shadow">
                    <img src="{{ $post->thumbnail }}" alt="Miniatura" class="w-full h-40 object-cover rounded">
                    <h2 class="text-xl font-bold mt-2">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->summary }}</p>
                    <p class="text-sm text-gray-500">Por {{ $post->author ? $post->author->name : 'Autor desconocido'  }} - {{ $post->created_at->format('d M, Y') }}</p>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
