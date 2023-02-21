<div class="fixed bottom-5 inset-x-0 mx-auto w-full md:max-w-6xl px-4" x-show="showMessage" x-transition>
    <div class="px-4 py-4 bg-white rounded-xl border">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="w-full md:w-3/4">
                <p class="text-sm">{!! trans('laravel-cookie-consent::text.message') !!}</p>
            </div>
            <div class="pt-4 w-full md:w-1/4 flex justify-end gap-2">
                <button class="px-4 py-2 border rounded-lg text-sm md:text-xs font-bold text-gray-500 bg-gray-200 hover:bg-gray-300 transition" @click="configCookies()">
                    {{ trans('laravel-cookie-consent::text.configure') }}
                </button>
                <button class="px-4 py-2 border rounded-lg text-sm md:text-xs font-bold text-white bg-gray-900 hover:bg-gray-700 active:bg-gray-500 transition" @click="save()">
                    {{ trans('laravel-cookie-consent::text.accept') }}
                </button>
            </div>
        </div>
    </div>
</div>
