@component('mail::message')
# Account Verification

hi {{$name}},

Please make sure to activate your account by clicking the button below:

@component('mail::button', ['url' => $link, 'color'=>'blue'])
Activate Account
@endcomponent

Happy Shopping!!


Thanks,<br>
{{ config('app.name') }}
@endcomponent