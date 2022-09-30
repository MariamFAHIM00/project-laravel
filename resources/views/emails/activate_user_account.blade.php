@component('mail::message')
    # Thank you for activating your account
@endcomponent

@component('mail::panel')
     For activating your account
@endcomponent

@component('mail::button',['url'=>$url])
    Click here
@endcomponent

Thank you.
<br>
equipe {{config("app.name")}}
