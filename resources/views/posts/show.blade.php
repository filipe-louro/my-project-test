@include('layouts.navigation')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
<div class="mt-4 col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
            <p>Título: {{$post->title}}</p>
        </div>
    </div>
    <div>
        <div>
            <p class="col-md-12">Descrição: {!! $post->description !!}</p>
        </div>
    </div>
</div>
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="mt-4" value="delete">Deletar <ion-icon name="trash-outline"></ion-icon></button>
</form>
