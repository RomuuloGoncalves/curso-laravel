@extends(layouts.main_layout)

@section('content')
    <h1>Welcome View and Blade</h1>
    <hr>
    <h3>O valor é: <?= $value ?></h3>
    <h3>O valor é: {{$value}}</h3>
@endsection