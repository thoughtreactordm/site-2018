@if(isset($errors) && count($errors))
    <div class="notification is-danger content has-text-left">
        <strong>Oops!</strong> There were some errors with your submission:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif