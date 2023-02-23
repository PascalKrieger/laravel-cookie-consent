<div class="fixed top-0 left-0 w-screen h-screen flex overscroll-none bg-black bg-opacity-70" x-show="showConfigModal" x-transition>
    <div class="m-auto px-4">
        <div class="max-w-xl bg-white rounded-lg">
            <div class="px-4 py-4">
                <div class="text-xl font-bold">
                    {{ trans('laravel-cookie-consent::text.modal-heading') }}
                </div>
                <div class="mt-2">
                    <div class="text-sm">
                        Aquí puedes consultar las Cookies que utilizamos y configurar cuáles quieres permitir que se instalen en tu
                        navegador web.
                    </div>
                    <form class="py-4" x-ref="form">
                        <template x-for="cookie in allowedCookies">
                            <div class="py-2 border-b last:border-b-0 text-left">
                                <div class="flex justify-between items-center">
                                    <div class="flex flex-col lg:flex-row justify-start lg:gap-2 lg:items-center">
                                        <div class="font-semibold text-sm" x-text="cookie.type"></div>
                                        <div class="text-xs lg:text-sm" x-text="cookie.description"></div>
                                    </div>
                                    <label :for="cookie.type" class="inline-flex relative items-center cursor-pointer">
                                        <input x-model="formData[cookie.type]" :name="cookie.type" type="checkbox" value="true" class="sr-only peer" :checked="cookie.checked" :id="cookie.type" :disabled="cookie.disabled">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 opacity-60 peer-disabled:bg-black">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </template>
                    </form>
                </div>
            </div>
            <div class="bg-gray-100 rounded-b-lg px-4 py-4 flex justify-end gap-2">
                <button class="px-4 py-2 border rounded-lg text-sm md:text-xs font-bold text-gray-500 bg-gray-200 hover:bg-gray-300 transition" x-on:click="showMessage = true; showConfigModal = false">
                    {{ trans('laravel-cookie-consent::text.back') }}
                </button>
                <button class="px-4 py-2 border rounded-lg text-sm md:text-xs font-bold text-white bg-gray-900 hover:bg-gray-700 active:bg-gray-500 transition" x-on:click.prevent="save()">
                    {{ trans('laravel-cookie-consent::text.accept') }}
                </button>
            </div>
        </div>
    </div>
</div>
