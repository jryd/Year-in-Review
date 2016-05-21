<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<p>Hi {{ $first_name }},</p>

<div>
    <p>
        Welcome to Year in Review.
    </p>
    <p>
        We've done a lot over the last year, and we'd love to share it all with you and show you what you did in playing your part.
    </p>
    <p>
      Simply head over <a href="{{ url('/') }}">here</a> and log in to get started.
    </p>
    <p>
      To log in the first time, please use your email address ({{ $email }}) and the password <strong>{{ $password }}</strong>. Once you log in we'll get you to change it to something a little more familiar.
    </p>
    <p>Let's get stuck in.</p>
    <p>
        Thanks,
        <br/>
        James and the TL team
    </p>
</div>
</body>
</html>