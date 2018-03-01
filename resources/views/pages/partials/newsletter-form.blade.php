@if(session()->has('success'))
    <div class="notification is-primary">
        You've successfully signed up for the Newsletter! You should receive an email to confirm
        your address shortly.
    </div>
@endif

@include('layouts.partials.errors')

<form action="/newsletter" method="POST">
    {{ csrf_field() }}
    <div class="field">
        <input type="text" class="input is-medium"
               placeholder="Your email..."
               name="email"
               value="{{ old('email') }}"
        >
    </div>
    <div class="field">
        <input type="text" class="input is-medium"
               placeholder="First name..."
               name="first_name"
               value="{{ old('first_name') }}"
        >
    </div>
    <div class="field">
        <input type="text" class="input is-medium"
               placeholder="Last name..."
               name="last_name"
               value="{{ old('last_name') }}"
        >
    </div>
    <div class="field">
        <button type="submit"
                class="button is-medium is-fullwidth is-primary is-outlined"
        >
            Sign up!
        </button>
    </div>
</form>