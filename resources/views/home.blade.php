<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="bg-success">Operation successfull</h1>
    {{-- <h1> {{$data->educationend}} </h1> --}}
    <h1>Selected Options</h1>
    
    <ul>
        {{-- @foreach($data as $option)
        <div>
            <h3>Option Title: {{ $option->title }}</h3>
            <ul>
                <li>Self: {{ $option->self }}</li>
                <li>Job: {{ $option->job  }}</li>
                <li>University: {{ $option->university  }}</li>
                <li>Training: {{ $option->training  }}</li>
                <li>Life/Death: {{ $option->lifeDeath  }}</li>
            </ul>
        </div>
    @endforeach --}}
    </ul>
</body>
</html>