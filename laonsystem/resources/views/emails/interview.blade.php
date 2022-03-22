@component('mail::message')
Hi, {{$info['user']}}


@if ($info['type'] == 'SCHEDULE')
    Thank you for appling for a JUMBO Loan.

    One of our representative has reviewed your application and a interview date is set for you. 
    You can visit us any time between {{date('j F Y',strtotime($info['start_date']))}} and {{date('j F Y',strtotime($info['end_date']))}} form {{$info['start_time']}} to {{$info['end_time']}}.

    You can also start your interview via zoom.
    Meeting URL: {{$info['meeting_url']}}
    Meeting Password: {{$info['meeting_pass']}}
@endif

@if ($info['type'] == 'RESCHEDULE')

    A interview has been reschedule for you between {{date('j F Y',strtotime($info['start_date']))}} and {{date('j F Y',strtotime($info['end_date']))}} form {{$info['start_time']}} to {{$info['end_time']}}.
    
    You can also start your interview via zoom.
    Meeting URL: {{$info['meeting_url']}}
    Meeting Password: {{$info['meeting_pass']}}
@endif


{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
