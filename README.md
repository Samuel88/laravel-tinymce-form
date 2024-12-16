# Aggiunta di TinyMCE a un progetto Laravel

## Ringraziamenti
Per l'integrazione con TinyMCE
- https://laracasts.com/discuss/channels/laravel/tinymce-with-laravel-10-and-vite?page=1&replyId=893145
- https://laracoding.com/how-to-add-tinymce-using-laravel-10-and-vite/

Per il caricamento dei file
- https://laravel.com/docs/11.x/filesystem#file-uploads
- https://laracasts.com/discuss/channels/javascript/tincymce-image-upload-to-server-with-laravel
- https://www.dbestech.com/tutorials/easiest-way-to-upload-image-in-laravel
- https://www.oklaravel.com/tinymce-editor-server-side-image-upload-using-laravel-a-comprehensive-guide/
- https://stackoverflow.com/questions/49120997/laravel-tinymce-upload-images

## Note
Ricordarsi di collegare lo storage `php artisan storage:link`

Per il momento si è ovviato a inserire la rotta di upload come skippata dal controllo CSRF `app/Http/Middleware/VerifyCsrfToken.php`

