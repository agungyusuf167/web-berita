<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Cempaka</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <nav class="bg-blue-600 p-4 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold italic tracking-tighter">CEMPAKA NEWS</h1>
            <ul class="flex space-x-6 items-center">
                <li><a href="/" class="hover:text-blue-200 transition font-medium">Home</a></li>
                @auth
                    <li class="flex items-center space-x-3 bg-blue-700 px-3 py-1 rounded-lg border border-blue-500">
                        <span class="text-xs font-semibold">Halo, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-[10px] px-2 py-1 rounded-full font-bold uppercase transition">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="/login" class="hover:text-gray-200 text-sm font-medium">Login</a></li>
                    <li><a href="/register" class="bg-white text-blue-600 px-4 py-1 rounded-full font-bold hover:bg-blue-50 transition shadow-md text-sm">Daftar</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container mx-auto mt-8 p-4 flex-grow">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-2/3 px-4 mb-8">
                <h3 class="text-xl font-bold mb-6 border-l-4 border-blue-600 pl-3">Berita Terbaru</h3>
                
                @forelse($berita as $item)
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 border border-gray-200 mb-8">
                    <a href="{{ route('berita.show', $item->slug) }}">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-72 object-cover hover:scale-105 transition duration-500">
                    </a>
                    
                    <div class="p-6">
                        <span class="bg-blue-600 text-white text-[10px] px-3 py-1 rounded-md font-bold uppercase">{{ $item->category }}</span>
                        
                        <h2 class="text-2xl font-bold text-gray-800 leading-tight mt-2 hover:text-blue-600 transition">
                            <a href="{{ route('berita.show', $item->slug) }}">{{ $item->title }}</a>
                        </h2>

                        <div class="text-gray-600 mt-4 leading-relaxed line-clamp-3">
                            {!! Str::limit(strip_tags($item->content), 200) !!}
                        </div>
                        
                        <a href="{{ route('berita.show', $item->slug) }}" class="text-blue-600 font-bold text-sm mt-4 inline-block hover:underline hover:pl-2 transition-all">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
                @empty
                <div class="bg-white p-20 text-center rounded-xl border-2 border-dashed border-gray-200">
                    <p class="text-gray-400">Belum ada berita.</p>
                </div>
                @endforelse
            </div>

            <div class="w-full lg:w-1/3 px-4">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 sticky top-24">
                    <h3 class="text-lg font-bold mb-6 text-gray-800 border-b pb-2 border-blue-600">Terpopuler</h3>
                    <div class="space-y-6">
                        @foreach($berita->take(5) as $popular)
                        <a href="{{ route('berita.show', $popular->slug) }}" class="flex items-center space-x-4 group">
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $popular->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition">
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-700 group-hover:text-blue-600 transition line-clamp-2">{{ $popular->title }}</h4>
                                <span class="text-[10px] text-gray-400 font-bold uppercase">{{ $popular->category }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-gray-200 p-8 mt-10">
        <div class="container mx-auto text-center text-gray-400 text-xs font-bold uppercase tracking-widest">
            &copy; {{ date('Y') }} Cempaka News Portal. All Rights Reserved.
        </div>
    </footer>

</body>
</html>