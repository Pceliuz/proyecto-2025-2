<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Notas</title>
</head>
<body class="bg-gradient-to-br from-green-500 via-emerald-500 to-teal-600 min-h-screen flex flex-col justify-center items-center text-white font-sans">

    <!-- Contenedor principal -->
    <div class="text-center bg-white/10 backdrop-blur-lg p-10 rounded-3xl shadow-2xl border border-white/20 w-[90%] md:w-[500px]">
        <h1 class="text-4xl font-extrabold mb-8 drop-shadow-md">
            🌿 Bienvenido a tu <span class="text-yellow-300">Gestor de Notas</span>
        </h1>

        <div class="flex flex-col space-y-4">
            <!-- Botón: Saluditos 
            <a href="{{ route('saluditos') }}" 
                class="bg-yellow-400 text-gray-900 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-yellow-300 transition transform hover:-translate-y-1 hover:shadow-xl">
                💬 Saluditos
            </a>-->

            <!-- Botón: Menú -->
            <a href="{{ route('bienvenidos') }}" 
                class="bg-blue-500 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-400 transition transform hover:-translate-y-1 hover:shadow-xl">
                📋 Menú
            </a>

            <!-- Botón: Estudiantes -->
            <a href="{{ route('estudiantes.index') }}" 
                class="bg-emerald-500 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-emerald-400 transition transform hover:-translate-y-1 hover:shadow-xl">
                🎓 Estudiantes
            </a>

            <!-- Botón: Notas -->
            <a href="{{ route('notas.index') }}" 
                class="bg-pink-500 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-pink-400 transition transform hover:-translate-y-1 hover:shadow-xl">
                📝 Notas
            </a>
        </div>

        <!-- Pie -->
        <p class="text-sm text-white/80 mt-8">
            © {{ date('Y') }} Gestor de Notas
        </p>
    </div>
</body>
</html>
