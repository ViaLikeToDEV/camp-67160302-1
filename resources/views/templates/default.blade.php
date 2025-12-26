<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop #HTML - FORM (Bootstrap Edition)</title>
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts (Prompt for Thai) -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;

        }

        .form-container {
            background-color: white;
            margin-top: 2rem;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-weight: 600;
            margin-bottom: 2rem;
            text-align: center;
            color: #212529;
        }

        .form-label {
            font-weight: 500;
        }
    </style>
    @stack('style')
</head>

<body>
    <div class="container">
        <div class="form-container">
            {{-- <h1>Called from default page</h1> --}}
            @yield('header')
            @yield('content')
        </div>
    </div>

    {{-- @push('scripts')
    <script>
        let Clickme = function() {
            document.getElementById("firstName").value = "Ratrawe";
            console.log(document.getElementById("firstName").value);
        }
    alert('Hello from HTML FORM Bootstrap Edition!');
    </script>
@endpush --}}
    @stack('scripts')

    @push('form-validation')
    @endpush
</body>

</html>
