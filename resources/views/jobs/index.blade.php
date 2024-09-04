
<x-layout>
    <x-slot:heading class="shadow-xl shadow-cyan-800"> 
        Jobs Listing Page
    </x-slot:heading>
    <div class="space-y-2">
        @foreach ($jobs as $job )
            <a href="/jobs/{{$job['id']}}" class="px-8 py-6 border border-gray-300 flex flex-col gap-2 rounded-lg shadow-md hover:bg-slate-200 hover:shadow-emerald-500/50 hover:shadow-xl hover:scale-105 transition-all duration-300">
                <div class="text-gray-500 text-sm">{{$job->employer->name}}</div>
                <div>
                    <strong>{{ $job['title']}}</strong>: Pays {{ $job['salary']}}
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>