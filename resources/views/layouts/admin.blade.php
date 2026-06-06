<!DOCTYPE html>
<html>

<head>
    <title>Administration</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <aside class="w-64 bg-gray-900 text-white">

            <div class="p-6 text-xl font-bold">
                CoursPart Admin
            </div>

            <nav class="mt-6">

                <a href="{{ route('admin.dashboard') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Dashboard
                </a>

                <a href="{{ route('subjects.index') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Matières
                </a>
                <a href="{{ route('school-levels.index') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Niveaux scolaires
                </a>
                <a href="{{ route('teachers.index') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Professeurs
                </a>
                <a href="{{ route('students.index') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Élèves
                </a>
                <a href="{{ route('bookings.index') }}" class="block px-6 py-3 hover:bg-gray-800">
                    Réservations
                </a>

            </nav>

        </aside>

        <main class="flex-1 p-8">

            @yield('content')

        </main>

    </div>

</body>

</html>
