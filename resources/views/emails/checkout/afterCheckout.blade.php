@component('mail::message')
    # Register camp: {{ $checkout->Camp->title }}

    Hi! {{ $checkout->User->name }}
    <br>
    Thank You For Registered On Class <b>{{ $checkout->Camp->title }}</b>, please see payment instruction by clickin this
    button below.
    @component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
        Get invoice
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
