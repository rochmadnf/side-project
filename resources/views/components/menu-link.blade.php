<li>
    <a type="button" href="{{ is_null($routeName ?? null) ? '#' : route($routeName) }}"
        class="group rounded-xl flex flex-col items-center text-neutral-600 justify-center gap-1 hover:text-rose-500 hover:bg-rose-50 p-2 transition duration-300 {{ (str()->contains(request()->segment(1), explode(",",$segment))) ? 'active-menu' : '' }}">
        {{ $icon }}
        <span class="block group-hover:text-rose-500 text-xs">{{ $label }}</span>
    </a>
</li>
