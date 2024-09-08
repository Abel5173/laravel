<button {{ $attributes->merge(['class'=>'rounded-md bg-emerald-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-900']) }}>
    {{ $slot }}
</button>