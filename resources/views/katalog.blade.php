<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Katalog Event</title>
</head>
<body class="bg-slate-50 flex flex-col items-center justify-center min-h-screen p-6">
    <div class="max-w-4xl w-full">
        <h1 class="text-3xl font-bold text-slate-800 mb-6 text-center">Daftar Event AmikomEventHub</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500 hover:shadow-lg transition">
                <h3 class="font-bold text-lg text-slate-700">Workshop UI/UX</h3>
                <p class="text-slate-500 text-sm">Belajar desain modern dengan Figma.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500 hover:shadow-lg transition">
                <h3 class="font-bold text-lg text-slate-700">Web Development Bootcamp</h3>
                <p class="text-slate-500 text-sm">Kuasai Laravel dalam 30 hari.</p>
            </div>
        </div>

        <div class="mt-10 flex justify-center gap-3">
            <a href="/profil" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50 transition">Profil</a>
            <a href="/katalog" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50 transition">Bantuan</a>
        </div>
    </div>
</body>
</html>