<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        
        {{-- Captcha --}}
        {{-- {!! NoCaptcha::renderJs() !!} --}}
        <script src="https://www.google.com/recaptcha/api.js?render=6LdbrsMoAAAAAAWG8cOd6vVIp4t49fjdF2tnvvyY"></script>

        <script>
            document.addEventListener('submit',function(e){
                e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LdbrsMoAAAAAAWG8cOd6vVIp4t49fjdF2tnvvyY', {action: 'submit'}).then(function(token) {
                        let form = e.target;
                        let input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'response';
                        input.value = token;

                        form.appendChild(input);
                        form.submit();

                    });
                });
            });
        </script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
