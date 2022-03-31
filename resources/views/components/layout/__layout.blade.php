<div class="gap-4 grid grid-cols-6 grid-flow-col h-s h-screen">
    {{-- Admin panel --}}
    <div class="bg-blue-200 col-span-1">
        {{ $admin }}
    </div>

    {{-- Main body --}}
    <div class="bg-blue-500 col-span-3 p-5">
        {{ $slot }}
    </div>

    {{-- Extra content --}}
    <div class="bg-blue-800 col-span-2 text-gray-500">
        {{ $extra }}
    </div>
</div>
