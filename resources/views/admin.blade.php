<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
            @component('layout.alert',['class'=>'warning','judul'=>'Peringatan'])
                100 data mahasiswa perlu diperbaiki
            @endcomponent

            @component('layout.alert',['class'=>'danger','judul'=>'Awas'])
                Hari ini deadline laporan perjalanan dinas!
            @endcomponent

            @component('layout.alert',['class'=>'success','judul'=>'Kabar Baik'])
                Bulan depan cuti panjang...
            @endcomponent
            </div>
        </div>
    </div>

    <script src="jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>