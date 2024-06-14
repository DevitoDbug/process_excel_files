<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Laravel Class 2024</h1>
    <nav style="display: flex; gap: 1rem ; flex-direction: row; margin-bottom: 1rem;">
        <a href="{{ route('student.index') }}">Home</a>
        <a href="{{ route('student.show') }}">Students data</a>
        <a href="{{ route('student.show.analytics') }}">Analytics</a>
    </nav>
    {{ $slot }}
</body>

</html>
