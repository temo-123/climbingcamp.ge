<x-mail::message>
# User message from {{ config('app.name') }}

{{$message}}
<hr />

<strong>Email</strong> - {{$email}} <br />

<strong>From</strong> - {{$name}} {{$surname}} <br />
<strong>Country</strong> - {{$country}}, {{$city}} <br />

{{ config('app.name') }}
</x-mail::message>
