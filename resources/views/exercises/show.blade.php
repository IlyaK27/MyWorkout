<x-layout>
    @include('exercise_partials._search')
    
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
                <div class="mx-4">
                    <x-card class="p-10">
                        <div class="flex flex-col items-center justify-center text-center">
                            <img
                                class="w-48 mr-6 mb-6"
                                {{--src="{{$exercise->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"--}}
                                alt=""
                            />
    
                            <h3 class="text-2xl mb-2">{{$exercise->title}}</h3>
                            <x-exercise-tags :tagsCsv="$exercise->tags"/>
                            <div class="border border-gray-200 w-full mt-4 mb-6"></div>
                            <div>
                                <h3 class="text-3xl font-bold mb-4">
                                    Exercise Description
                                </h3>
                                <div class="text-lg space-y-6">
                                    {{$exercise->description}}
                                </div>
                            </div>
                        </div>
                    </x-card>
                </div>
    </x-layout>