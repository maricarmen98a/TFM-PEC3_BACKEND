@component('mail::message')
# Restablecer la contraseña
Restablecer o cambiar contraseña.
@component('mail::button', ['url' => 'http://localhost:4200/change-password?token='.$token])
Cambiar contraseña
@endcomponent
Muchas gracias,<br>
{{ config('app.name') }}
@endcomponent