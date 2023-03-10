<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    
  
</head>
<body>
    <h2>Lista Libros</h2>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>  
										<th>Categoría</th>
										<th>Nombre</th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td> </td>
											<td>
                                                {{ $libro->categoria->nombre }}
                                            </td>
											<td>{{ $libro->nombre }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</body>
</html>