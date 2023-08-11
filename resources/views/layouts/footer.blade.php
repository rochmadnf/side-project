<footer class="absolute w-full h-fit bg-rose-500/30 bottom-0 left-0">
    <ul class="flex justify-between items-center">
        <x-menu-link label="Beranda" routeName="home" segment=''>
            <x-slot name="icon">
                <x-icon-house-fill class="group-hover:text-rose-500 w-6 h-6" />
            </x-slot>
        </x-menu-link>

        <x-menu-link label="Peta Kluster" segment='cluster'>
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
