@props(['name'])

<div
    x-data="{ open: false }"
    x-show="open"
    @hashchange.window="
        open = (location.hash === '#{{ $name }}')
    "
    class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    style="display: none"
>
    <!--
        Background backdrop, show/hide based on modal state.

        Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
        Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <!--
                Modal panel, show/hide based on modal state.

                Entering: "ease-out duration-300"
                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                    From: "opacity-100 translate-y-0 sm:scale-100"
                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
                    <a href="#">
                        <div class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </div>
                    </a>
                </div>
                <div>
                    @isset($slot)
                        {{ $slot }}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
