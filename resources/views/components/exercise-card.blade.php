@props(['exercise'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-18 mr-6 md:block"
            src="{{$exercise->logo ? asset('images/exercise-icons/' . $exercise->logo) : asset('/images/no-exercise-image.png')}}"
            width="125" 
            height="125"
            alt=""
        />
        <div>
            <h3 class="text-2xl mb-2">
                <a href="/exercises/{{$exercise->id}}">{{$exercise->title}}</a>
            </h3>
            <x-exercise-tags :tagsCsv="$exercise->tags"/>
        </div>
    </div>
</x-card>