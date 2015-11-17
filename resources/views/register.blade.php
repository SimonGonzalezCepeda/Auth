<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Register</div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('register.postRegister')}}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">User name:</label>
                <input type="text" class="form-control" id="name" name="name"
                placeholder="El teu nom aquí" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email"
                placeholders="myemail@exemple.com" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Password confirm:</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
            </div>
            <button id="register" type="submit" class="btn btn-default">Register</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
        Ja ets usuari?
        <a id="login" href={{route("auth.login")}}>Logetja't</a>
    </div>
</div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
</html>
