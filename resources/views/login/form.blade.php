<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto p-6">
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

        <h1 class="text-3xl font-bold mb-6">Data Kehadiran</h1>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Kehadiran</th>
                    <th scope="col">Jumlah Orang</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->nama }}</td>
                        <td>{{ $attendance->kehadiran }}</td>
                        <td>{{ $attendance->jumlah }}</td>
                        <td>{{ $attendance->created_at }}</td>
                        <td>
                            <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h1 class="text-3xl font-bold mt-10 mb-6">Data Pesan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td>
                        <td>
                            <form action="{{ route('message.destroy', $message->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
