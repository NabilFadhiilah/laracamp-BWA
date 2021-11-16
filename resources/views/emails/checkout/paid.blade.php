@component('mail::message')
    # Your Transaction Has Been Confirmed!

    Hi {{ $checkout->User->name }}
    <br>
    Your Transaction Has Been Confirmed, now you can enjoy the benefits <b>{{ $checkout->Camp->title }}</b> Camp.

    @component('mail::button', ['url' => 'user.dashboard'])
        My Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
