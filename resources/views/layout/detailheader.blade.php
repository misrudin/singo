<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <title>Singo</title>
</head>
<body>
<!--nav-->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('front/assets/navbar/rikolto.svg')}}" alt="" width="128" height="46"
                 class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/detail') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/document') }}">Dokumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/publikasi') }}">Publikasi</a>
                </li>
            </ul>
            <form class="ms-3 p-0">
                <button class="btn btn-primary" type="button">Masuk</button>
            </form>
        </div>
    </div>
</nav>
<!--nav end-->