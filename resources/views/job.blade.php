
<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p class="text-gray-700">This Job pays {{ $job['salary'] }} per year.</p>
</x-layout>