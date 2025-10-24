<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1 class="text-3xl font-bold underline">
        Notas
    </h1>
    
    <br>

    {{-- Botón para volver al menu --}}
    <div class="mb-4">
        <a href="{{ url('/') }}" 
            class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 border border-transparent rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105"
            title="Volver al Menú"
            role="button">
            🔙Menú
            </a>
    </div>

    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Estudiante</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Curso</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Descripción</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Nota</th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr class="hover:bg-blue-100">
                        <td class="py-2 px-4 border-b border-gray-300">
                            {{ $nota->estudiante->nombres }} {{ $nota->estudiante->apellidos }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            {{ $nota->curso }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            {{ $nota->descripcion }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            {{ $nota->nota }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <a href="{{ route('notas.show', $nota->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
