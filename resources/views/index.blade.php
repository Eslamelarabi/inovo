<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
    <div id="app">
        <main class="py-4 container">
            <div class="container">
                <div class="row justify-content-center">
                    <h2>NewsAgencies</h2>
                    <div class="row">

                        @foreach ($data as $item =>$val)
                            @foreach ($val['latestnews'] as $i)
                                <div class="col-4">
                                    <div class="card">

                                        <div class="card-body">
                                            <h4 class="card-title">{{$item}}</h4>
                                            <h4 class="card-title">{{$i['title']}}</h4>
                                            <p class="card-text">{{$i['Content']}}</p>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{$i['rating']}}</p>
                                            <p class="card-text">{{$i['datetime']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
