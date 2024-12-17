<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TinyMCE Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts-header')
</head>
<body>
    <main>
        <h1>Form with TinyMCE</h1>
        <form action="">
            <div class="mb-3">
                <x-form.tinymce-input name="user-bio" label="Test TinyMCE Input">Ciao</x-form.tinymce-input>
                <x-form.tinymce-input name="user-bio2" label="Test TinyMCE Input 2">Ciao2</x-form.tinymce-input>
            </div>
        </form>
    </main>

    @stack('scripts-footer')
</body>
</html>