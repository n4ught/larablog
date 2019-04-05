<div class="alert alert-danger col-md-5 col-md-offset-3">
    <p>Please fix the following errors:</p>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>