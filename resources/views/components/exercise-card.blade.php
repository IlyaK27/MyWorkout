@props(['exercise'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            {{--src="{{$exercise->logo ? asset('storage/' . $exercise->logo) : asset('/images/no-image.png')}}"--}}
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$exercise->id}}">{{$exercise->title}}</a>
            </h3>
            {{--<div class="text-xl font-bold mb-4">{{$listing->company}}</div>--}}
            <x-exercise-tags :tagsCsv="$exercise->tags"/>
        </div>
    </div>
</x-card>