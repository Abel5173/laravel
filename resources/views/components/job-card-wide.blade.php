@props(['job'])

<div class="px-8 py-6 border border-gray-300 flex gap-5 rounded-lg shadow-lg hover:bg-gray-300 hover:shadow-gray-900/50 hover:shadow-xl hover:scale-105 transition-all duration-300">
    <a class="">
        <div>
            <x-employer-logo />
        </div>

        <div class="flex-1 flex flex-col">
            <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{$job->employer->name}}</a>

            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{$job->title}}</h3>

            <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
        </div>

        <div>
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" />                
            @endforeach
        </div>
    </a>
</div>