@props(['exercise'])
@props(['workout'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-18 mr-6 md:block"
            src="{{$exercise->logo ? asset('images/exercise-icons/' . $exercise->logo) : asset('/images/no-exercise-image.png')}}"
            width="125" 
            height="125"
            alt=""
        />
        <div class="text-2xl">
            <a href="/exercises/{{$exercise->id}}">{{$exercise->title}}</a>
            <div class="text-xl font-bold mb-1"></div> {{--To create more space between title and tags--}}
            <x-exercise-select-tags :tagsCsv="$exercise->tags" :id="$workout->id"/>
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