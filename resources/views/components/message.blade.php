<div x-data="bakeCookies()" x-cloak>
    <x-laravel-cookie-consent::modal />
    <x-laravel-cookie-consent::config-modal />
    <x-laravel-cookie-consent::cookie-button />

    <script>
        function bakeCookies () {
            return {
                showMessage: false,
                showConfigModal: false,
                showCookieButton: false,
                allowedCookies: @js(config('laravel-cookie-consent.cookies')),
                session: @js(session('cookie-config')),
                formData: {},
                init () {
                    this.allowedCookies.forEach(cookie => this.formData[cookie.type] = cookie.checked)
                    if(this.session) {
                        this.showCookieButton = true
                    } else {
                        this.showMessage = true
                    }
                },
                configCookies () {
                    this.showMessage = false
                    this.showConfigModal = true
                    this.showCookieButton = false
                },
                save () {
                    axios.post('/save-cookie-config', this.formData)
                        .then(function (response) {

                        })

                    this.showConfigModal = false
                    this.showMessage = false
                    this.showCookieButton = true
                }
            }
        }
    </script>
</div>
