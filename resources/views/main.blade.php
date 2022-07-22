<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Записная книжка</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class='div-table'>
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">Компания</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Дата рождения</th>
                        <th scope="col">Фото</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                    <tr>
                        <td>
                            {{$note->id}}
                        </td>
                        <td>
                            {{$note->fullName}}
                        </td>
                        <td>
                            {{$note->company}}
                        </td>
                        <td>
                            {{$note->phone}}
                        </td>
                        <td>
                            {{$note->mail}}
                        </td>
                        <td>
                            {{$note->birthDate}}
                        </td>
                        <td>
                            <img width="75" src="{{ asset('storage') .'/images/'.$note->photo}}">
                        </td>
                        <td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$notes->links();}}

    </body>
