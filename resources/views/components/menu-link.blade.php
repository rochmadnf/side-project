<li>
    <a href="{{ is_null($routeName ?? null) ? '#' : route($routeName) }}"
        class="group flex flex-col items-center text-neutral-600 justify-center gap-1 hover:text-rose-500 hover:bg-rose-50 p-2 transition duration-300 {{ request()->segment(1) == $segment ? 'active-menu' : '' }}">
        {{ $icon }}
        <span class="block group-hover:text-rose-500 text-sm">{{ $label }}</span>
    </a>
</li>
