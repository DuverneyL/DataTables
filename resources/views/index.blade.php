<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <lin rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></lin>
        <lin rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></lin>


        <title>Data Tables</title>

    </head>
    <body>
        <div class="container">
            <table id=users"">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($users as $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>

            </table>

            <scrip scr="https://code.jquery.com/jquery-3.5.1.js"></scrip>
            <scrip scr="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></scrip>
            <scrip scr="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></scrip>

            <script>
                $(document).ready(function () {
                    $('#users').DataTable();
                });
            </script>

        </div>
    </body>
</html>
