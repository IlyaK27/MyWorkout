@props(['exercise'])
<head>
    <link rel="stylesheet" href="radiostyle.css">
</head>
<x-card>
    <div class="flex">
        <img
            class="hidden w-18 mr-6 md:block"
            src="{{$exercise->logo ? asset('storage/' . $exercise->logo) : asset('/images/no-exercise-image.png')}}"
            width="125" 
            height="125"
            alt=""
        />
        <div class="text-2xl">
            {{$exercise->title}}
            <div class="text-xl font-bold mb-1"></div> {{--To create more space between title and tags--}}
            <x-exercise-tags :tagsCsv="$exercise->tags"/>
        </div>
    </div>
    <input
        type="radio"
        class="text-xl font-bold ml-5"
        name="exercise" 
        value="{{$exercise->id}}"
        style="float: right;"
    />
</x-card>