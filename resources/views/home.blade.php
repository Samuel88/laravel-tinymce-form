<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TinyMCE Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @vite('resources/js/tinyMCE.js')
</head>
<body>
    <main>
        <h1>Form with TinyMCE</h1>
        <form action="">
            <div class="mb-3">
                <label for="user-bio"></label>
                <textarea class="tinyMce" name="user-bio" id="user-bio"></textarea>
            </div>
        </form>
    </main>
</body>
</html>