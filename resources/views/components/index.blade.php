<div x-data="laravelCookieConsent()" x-cloak>

    <x-laravel-cookie-consent::message />
    <x-laravel-cookie-consent::config-modal />
    <x-laravel-cookie-consent::cookie-button />

    <script>
        function laravelCookieConsent () {
            return {
                showMessage: false,
                showConfigModal: false,
                showCookieButton: false,
                allowedCookies: @js(config('laravel-cookie-consent.cookies')),
                cookieConfig: @js(session('cookie-config')),
                formData: {},
                init () {
                    if(this.cookieConfig) {
                        this.showCookieButton = true
                        this.formData = this.cookieConfig
                    } else {
                        this.showMessage = true
                        this.allowedCookies.forEach(
                            cookie => this.formData[cookie.type] = cookie.checked
                        )
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
