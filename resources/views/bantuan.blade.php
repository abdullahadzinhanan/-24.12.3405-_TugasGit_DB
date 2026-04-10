<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FAQ - Bantuan</title>
</head>
<body class="bg-slate-50 flex flex-col items-center justify-center min-h-screen p-6">
    <div class="bg-white p-10 rounded-2xl shadow-sm border border-slate-200 max-w-2xl w-full">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 underline decoration-indigo-500">FAQ Sederhana</h1>
        
        <div class="space-y-4">
            <details class="group p-4 bg-slate-50 rounded-lg">
                <summary class="font-semibold cursor-pointer text-slate-700">Bagaimana cara mendaftar event?</summary>
                <p class="mt-2 text-slate-500 text-sm">Klik tombol daftar pada detail event yang kamu pilih di halaman katalog.</p>
            </details>
            <details class="group p-4 bg-slate-50 rounded-lg">
                <summary class="font-semibold cursor-pointer text-slate-700">Apakah event ini gratis?</summary>
                <p class="mt-2 text-slate-500 text-sm">Tergantung pada jenis event yang diselenggarakan oleh panitia.</p>
            </details>
        </div>

        <div class="mt-8 flex justify-center gap-3">
            <a href="/profil" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50 transition">Profil</a>
            <a href="/katalog" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50 transition">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">Bantuan</a>
        </div>
    </div>
</body>
</html>