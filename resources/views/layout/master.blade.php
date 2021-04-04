<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/mahasiswa" class="nav-link @yield('menuMahasiswa')">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a href="/dosen" class="nav-link @yield('menuDosen')">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a href="{{route('gambar')}}" class="nav-link @yield('menuGallery')">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="{{route('info',['fakultas'=>'Teknik','jurusan'=>'Teknik Informatika'])}}" class="nav-link @yield('menuInfo')">Info</a>
            </li>
        </ul>
    </nav>

<div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
@show

@yield('content')

    <footer class="bg-dark py-4 text-white mt-4">
    <div class="container">
        Sistem Informasi Mahasiswa | Copyright &copy; {{date("Y")}} Duniailkom
    </div>
    </footer>
</body>
</html>