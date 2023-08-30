@props(['workout'])
@props(['collumn'])

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
            <h3 class="text-2xl mb-2">
                <a href="/workouts/{{$workout->id}}">{{$workout->title}}</a>
            </h3>
            <x-workout-tags :tagsCsv="$workout->tags"/>
        </div>
        @if($workout->visibility == "Public")
            <div class="mt-1 ml-2" style="font-size:18px; float: right"> By: {{$collumn['name']}}</div>
        @endif
    </div>
</x-card>