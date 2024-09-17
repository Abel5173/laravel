<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6 ">
                <input type="text" placeholder="Web Developer..." class="bg-gray-200 rounded-3xl border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
{{-- 
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">--}}

        <section class="pt-10">
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section> 
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />                    
                @endforeach
            </div>
        </section>
    </div>
</x-layout>





{{-- <x-layout>
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
</x-layout> --}}