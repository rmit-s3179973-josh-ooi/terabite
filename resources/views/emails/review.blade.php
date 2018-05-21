@component('mail::message')
# Introduction

The body of your message.
@foreach($products as $p)

@component('mail::button', ['url' => url(route('website.get.review',['id'=>Hashids::encode($user_id,$p->id)]))])
Button Text
@endcomponent

@endforeach
Thanks,<br>
{{ config('app.name') }}
@endcomponent
