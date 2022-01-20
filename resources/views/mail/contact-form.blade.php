@component('mail::message')

A new person used the contact form

{{$data['firstName']}} {{$data['lastName']}}

### Email

{{ $data['email'] }}

### Phone

{{ $data['phone'] }}

### Subject

{{ $data['subject'] }}

### Message

@component('mail::panel')
{{ $data['message'] }}
@endcomponent

@endcomponent
