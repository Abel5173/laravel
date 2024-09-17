@props(['job'])


<x-panel class="flex flex-col text-center px-8 py-6 border border-gray-300 gap-2 rounded-lg shadow-md hover:bg-slate-200 hover:shadow-emerald-500/50 hover:shadow-xl hover:scale-105 transition-all duration-300">
    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />                
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>