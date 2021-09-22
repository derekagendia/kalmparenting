@component('mail::message')

    @if(isset($data['content']))
        # Introduction

        {{ $data['content'] }}
    @endif

    # Information of user

    First Name : {{ $data['first_name'] }}
    Last Name : {{ $data['last_name'] }}
    Whatsapp Number : {{ $data['phone'] }}


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
