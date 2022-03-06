@component('mail::message')
    Ваша тематическая фотоссесия опубликована,
    можете просмотреть результат перейдя по ссылке:
{{-- Сайт + /themes/ + ID_темы --}}
    {{ url ('/themes/' . $theme_id) }}
@endcomponent
