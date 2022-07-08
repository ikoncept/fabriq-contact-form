Från: {{ $contactData['name']}} ({{ $contactData['email'] }})
@if(isset($contactData['phone']))
Tel: {{ $contactData['phone'] }}
@endif

Meddelande:
====
{{ $contactData['message'] }}
====

Tidpunkt: {{ now()->timezone('Europe/Stockholm') }}
