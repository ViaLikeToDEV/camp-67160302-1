@extends('templates.default')
@section('content')
<ul>
    <?php
    for ($i=1; $i < 13; $i++) {
    ?>
    <li>Number: {{ $number }} * {{ $i }} = {{ $number * $i }}</li>
    <?php
    }
    ?>
</ul>

@endsection
