<footer id="bottom_navigation" class="absolute w-full h-max bg-rose-500/30 bottom-0 left-0">
    <ul class="flex justify-evenly items-center p-2 gap-1">
        <x-menu-link label="Beranda" routeName="home" segment="app-info,standard-mutu">
            <x-slot name="icon">
                <x-icon-house-fill class="group-hover:text-rose-500 w-6 h-6" />
            </x-slot>
        </x-menu-link>

        <x-menu-link label="Peta Kluster" routeName="cluster" segment='cluster-map'>
            <x-slot name="icon">
                <x-icon-map-trifold-fill class="group-hover:text-rose-500 w-6 h-6" />
            </x-slot>
        </x-menu-link>

        <x-menu-link label="Uji Data" routeName="check" segment='check'>
            <x-slot name="icon">
                <x-icon-test-tube-fill class="group-hover:text-rose-500 w-6 h-6" />
            </x-slot>
        </x-menu-link>

        <x-menu-link label="Peneliti" routeName="researcher" segment="researcher">
            <x-slot name="icon">
                <x-icon-users-three-fill class="group-hover:text-rose-500 w-6 h-6" />
            </x-slot>
        </x-menu-link>
    </ul>
</footer>
