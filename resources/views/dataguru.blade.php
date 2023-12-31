<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a href="/tambahguru" class="btn btn-primary mt-4">tambah guru+</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">kodeguru</th>
            <th scope="col">namaguru</th>
            <th scope="col">mapel</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no=1
            @endphp
            @foreach ($data as $guru)
          <tr>
            <td>{{$no}}</td>
            <td>{{$guru->kodeguru}}</td>
            <td>{{$guru->namaguru}}</td>
            <td>{{$guru->mapel}}</td>
            <td>
                <a href="/tampilguru/{{$guru->id}}"class="btn btn-warning">edit</a>
                <a href="/hapusguru/{{$guru->id}}"class="btn btn-danger">hapus</a>
            </td>
          </tr> 
          @php
            $no++
            @endphp
            @endforeach

        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>