<div class="fixed bottom-5 right-5" x-show="showCookieButton">
    <button class="px-3 py-2 rounded-lg text-gray-500 bg-gray-200 hover:bg-gray-300 transition flex items-center gap-1 font-bold text-sm" @click="configCookies()">
        <i class="fa-solid fa-cookie"></i> {{ trans('laravel-cookie-consent::text.my-cookies-button') }}
    </button>
</div>
