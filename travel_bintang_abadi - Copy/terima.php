<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title> 
    <link rel="icon" type="image/x-icon" href="icontrav-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideIn {
            animation: slideIn 1s ease-out;
        }

        .bg-custom {
            background: linear-gradient(135deg, #ff6f61 0%, #d5aaff 100%);
        }
    </style>
</head>
<body class="bg-custom text-white flex items-center justify-center min-h-screen">
    <div class="text-center p-8 bg-white text-gray-800 rounded-lg shadow-xl animate-slideIn">
        <div class="text-6xl mb-4">
            <span class="text-yellow-500">🚌</span>
        </div>
        <h1 class="text-4xl font-bold mb-4">Terima Kasih atas Pesanan Anda</h1>
        <p class="text-xl mb-6">Travel Bintang Abadi</p>
        <button class="bg-teal-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-teal-600 transition duration-300 ease-in-out" onclick="window.location.href='index.php'">Kembali ke Beranda</button>
    </div>
</body>
</html>
