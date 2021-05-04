@component('mail::message')
# Hi

Here is your new quote enquiry:

Name: {{$enquiry->name}}\
Email: {{$enquiry->email}}\
Service: {{$enquiry->service}}\
Message: {{$enquiry->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
