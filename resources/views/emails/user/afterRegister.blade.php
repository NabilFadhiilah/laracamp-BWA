@component('mail::message')
    #Welcome

    Hi {{ $user->name }}
    <br>
    Welcom To Laracamp! Your account has been created successfully, Now You Can Choose Your Best Match Camp!

    @component('mail::button', ['url' => route('login')])
        Login Here
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
