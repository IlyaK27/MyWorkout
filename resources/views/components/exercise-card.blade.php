@props(['exercise'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-18 mr-6 md:block"
            src="{{$exercise->logo ? asset('storage/' . $exercise->logo) : asset('/images/no-exercise-image.png')}}"
            width="125" 
            height="125"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/exercises/{{$exercise->id}}">{{$exercise->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-1"></div> {{--To create more space between title and tags--}}
            <x-exercise-tags :tagsCsv="$exercise->tags"/>
        </div>
    </div>
</x-card>