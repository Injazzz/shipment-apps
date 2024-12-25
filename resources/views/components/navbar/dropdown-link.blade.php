<a {{$attributes}} class="{{ request()->fullUrlIs(url($href)) ? " text-cyan-500"
    : "text-black/75 dark:text-white/75 hover:text-cyan-700 rounded-md" }} block px-3 py-2 text-base font-medium ">
    {{$slot}}
</a>