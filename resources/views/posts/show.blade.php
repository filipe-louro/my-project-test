@include('layouts.navigation')
<script src="https://cdn.tailwindcss.com"></script>
<a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
<div class="mt-4 col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
            <p>Título: {{$post[$key]->title}}</p>
        </div>
    </div>
    <div>
        <div>
            <p class="col-md-12">Descrição: {!! $post[$key]->description !!}</p>
        </div>
    </div>
</div>
