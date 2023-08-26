@props(['exercisesCsv'])
@props(['exercise'])

@php
    $curexercises = explode(',', $exercisesCsv);
@endphp

<ul class="flex">
    @foreach($curexercises as $curexercise)
    <li class="flex items-center justify-center bg-blue-500 text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/exercises/{{$curexercise}}">{{$exercise->title}}</a>
    </li>
    @endforeach
</ul>