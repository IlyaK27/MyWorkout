@props(['tagsCsv'])
@props(['id'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-blue-500 text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/workouts/{{$id}}/customize/select/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>