<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title> <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <a href="/" class="text-blue-500 mb-4 inline-block">&larr; Kembali</a>
        
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-96 object-cover rounded-lg mb-6">
        @endif

        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        
        <div class="flex items-center gap-2 mb-6">
            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">
                {{ $post->category->name }}
            </span>
        </div>

        <div class="prose max-w-none text-gray-800 leading-relaxed">
            {!! $post->content !!}
        </div>
    </div>
</body>
</html>