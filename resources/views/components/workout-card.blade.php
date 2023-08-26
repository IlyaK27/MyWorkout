@props(['workout'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-18 mr-6 md:block"
            src="{{$workout->logo ? asset('storage/' . $workout->logo) : asset('/images/no-workout-image.png')}}"
            width="125" 
            height="125"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/workouts/{{$workout->id}}">{{$workout->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-1"></div> {{--To create more space between title and tags--}}
            <x-workout-tags :tagsCsv="$workout->tags"/>
        </div>
    </div>
</x-card>