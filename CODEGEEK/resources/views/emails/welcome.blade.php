@component('mail::message')
# Hi, {{$detail['name']}}

Thanks For Registering.

Your Confirmation Code Is
{{$detail['code']}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
