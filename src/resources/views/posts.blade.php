<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<div class="container mx-auto my-4">
    <div class="grid grid-cols-2 gap-6 pb-8">
        @foreach($posts as $post)
            <div class="post bg-gray-100 py-2 px-4 rounded">
                <h3 class="text-xl">{{ $post->title }}</h3>
                <p class="font-light text-gray-700">{{ $post->content }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
