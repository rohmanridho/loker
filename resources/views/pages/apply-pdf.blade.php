<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data->user->name }}_{{ $data->job->company->name }}</title>
    <style>
        .date {
            text-align: right;
            color: #333;
        }

        .status {
            text-align: right;
            color: #555;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .fw-bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="date">{{ $data->user->city }},{{ $data->created_at->toDateString() }}</div>
    <div class="status">Status: {{ $data->status }}</div>
    <div class="container">
        <div class="">
            <div class=""><span class="fw-bold">Lowongan Pekerjaan: </span>{{ $data->job->name }}</div>
            <div class=""><span class="fw-bold">Posisi: </span>{{ $data->job->category->name }}</div>
        </div>
        <br><br>
        <div class="left">
            <div class="">Pelamar Pekerjaan:</div>
            <div class=""><span class="fw-bold">Nama: </span>{{ $data->user->name }}</div>
            <div class=""><span class="fw-bold">Alamat: </span>{{ $data->user->address }}</div>
            <div class=""><span class="fw-bold">Email: </span>{{ $data->user->email }}</div>
            <div class=""><span class="fw-bold">Nomor Telepon: </span>{{ $data->user->phone_number }}</div>
        </div>
        <div class="right">
            <div class="">Penyedia Pekerjaan:</div>
            <div class=""><span class="fw-bold">Perusahaan: </span>{{ $data->job->company->name }}</div>
            <div class=""><span class="fw-bold">Alamat: </span>{{ $data->job->company->address }}</div>
            <div class=""><span class="fw-bold">Email: </span>{{ $data->job->company->user->email }}</div>
            <div class=""><span class="fw-bold">Nomor Telepon: </span>{{ $data->job->company->user->phone_number }}
            </div>
        </div>
    </div>
</body>

</html>