@if(session()->has('success'))
    <div class="notification is-primary">
        You've successfully signed up for the Newsletter! You should receive an email to confirm
        your address shortly.
    </div>
@endif

@include('layouts.partials.errors')

<form action="/newsletter" method="POST" style="width: 100%;">
    {{ csrf_field() }}
    <div class="field">
        <input type="text" class="input"
               placeholder="Email"
               name="email"
               value="{{ old('email') }}"
        >
    </div>
    <div class="field">
        <input type="text" class="input"
               placeholder="Name"
               name="name"
               value="{{ old('name') }}"
        >
    </div>
    <div class="field">
        <button type="submit"
                class="button is-fullwidth is-primary is-outlined"
        >
            Sign up!
        </button>
    </div>
</form>