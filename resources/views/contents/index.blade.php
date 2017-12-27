<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
 
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2 class="page-header">List of Content</h2>
        <table class="table table-hover table-bordered table-stripped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->title }}</td>
                    <td>{{ $d->excerpt }}</td>
                    <td>{{ $d->created_at->format('d/M/Y') }}</td>
                    <td>{{ $d->updated_at->format('d/M/Y') }}</td>
                    <td><a href="get-article/{{ $d->id }}" class="btn btn-xs btn-primary">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div><br>
</div>
 
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>