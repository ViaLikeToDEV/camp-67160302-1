@extends("templates.default")

@section('title', 'myview')
@section('content')
<h1>
    my view
</h1>

<?php
    echo "my view content";
    echo '<br>';
    $myval = 'this is my value';
    echo $myval;
    $myval = 1;

?>

<?php
    echo '<br>';
    echo $myval;
    $myarr = [10,20,30,40,50];
    echo '<br>';
    echo $myarr[2];
    echo '<br>';
    for ($i=0; $i < count($myarr); $i++) {
        echo 'Index '.$i.' = '.$myarr[$i].'<br>';
    }
?>




@endsection
