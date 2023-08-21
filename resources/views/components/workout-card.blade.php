@props(['workout'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            {{--src="{{$exercise->logo ? asset('storage/' . $exercise->logo) : asset('/images/no-image.png')}}"--}}
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/workouts/{{$workout->id}}">{{$workout->title}}</a>
            </h3>
            {{--<div class="text-xl font-bold mb-4">{{$listing->company}}</div>--}}
            <x-workout-tags :tagsCsv="$workout->tags"/>
        </div>
    </div>
</x-card>