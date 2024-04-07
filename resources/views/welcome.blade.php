<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body data-bs-theme="dark">

    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <span class="fs-4">{{ config('app.name') }}</span>
            </a>
        </header>

        <div class="p-5 mb-4 bg-body rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Hello World</h1>
                <p class="col-md-8 fs-4">I am David Schneider and this is my website.</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>See my work</h2>
                    <p>Like most tech-affine people these days I do have a Github account.</p>
                    <a class="btn btn-primary btn-lg" href="https://github.com/DavidSchneiderInfo/" target="_blank">
                        View Github Profile
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Get in touch</h2>
                    <p>The best way to contact me is online via LinkedIn.</p>
                    <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/schneiderdavidb/" target="_blank">
                        View LinkedIn Profile
                    </a>
                </div>
            </div>
        </div>

        <footer class="pt-3 mt-4 text-body-secondary border-top">
            © {{ date('Y') }} David Schneider
        </footer>
    </div>
    </body>
</html>
