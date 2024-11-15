<div class="p-4 w-[300px] h-dvh border-solid border-r border-grey-500 ">
    <h1 class="text-2xl">MNFORESUT</h1>

    <div class="flex flex-col mt-3">
        <a href="/" class="
            {{ (request()->routeIs('dashboard')) ? 'bg-violet-500  text-white' : '' }}
            mb-1 p-3 text-lg flex rounded-md hover:bg-violet-600 hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
            <x-grommet-apps-rounded class="w-6 h-6 mt-0.5 me-1" />Dashboard
        </a>
        
        <a href="/maps" class="
            {{ (request()->routeIs('maps')) ? 'bg-violet-500  text-white' : '' }}
            mb-1 p-3 text-lg flex rounded-md hover:bg-violet-600 hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
            <x-majestic-map-marker-path-solid class="w-6 h-6 mt-0.5 me-1" />Map
        </a>

        <div class="">
            <a href="/analytics" class="
                {{ (request()->routeIs('analytics')) ? 'bg-violet-500  text-white' : '' }}
                mb-1 p-3 text-lg justify-between flex rounded-md hover:bg-violet-600 hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                <span class="flex">
                    <x-uni-analytics class="w-6 h-6 me-1" />
                    Analytics
                </span>
    
                <x-hugeicons-arrow-down-01 class="align-right mt-0.5"/>
            </a>
            
            <div class="ms-4">
                @foreach ($devices as $device)
                    <a href="/device/{{ $device->id }}" 
                        id="device-{{ $device->id }}"
                        class="
                        {{ ($route_id == $device->id) ? 'bg-violet-500  text-white' : '' }}
                        mb-1 p-3 text-lg flex rounded-md hover:bg-violet-600 hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                        <span class="w-6 h-6 mt-0.5 me-1">@svg('gmdi-sensors-r')</span>
                        Thiết bị {{ $device->id }}
                    </a>
                @endforeach
            </div>
        </div>
        
        <a href="/warning" class="
            {{ (request()->routeIs('warning')) ? 'bg-violet-500  text-white' : '' }}
            p-3 text-lg flex rounded-md hover:bg-violet-600 hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
            <x-solar-shield-warning-bold class="w-6 h-6 mt-0.5 me-1" />Warning
        </a>
    </div>
</div>