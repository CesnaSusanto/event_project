<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>cek</title>
</head>
<body class="bg-[#131B21]">
    <x-navbar></x-navbar>
    <div id="dashboard" class="relative">
        <div id="banner" class="w-full h-[600px] bg-cover" style="background-image: url('img/banner.jpeg');">
            <div class="inner-banner h-full w-full flex items-center justify-center py-10 backdrop-blur-sm bg-black/50 ">
                <img src="img/banner.jpeg" alt="" class="h-full object-contain">
                
            </div>
            
        </div>
        <div id="trending" class="h-screen bg-red-500">
            <x-cardEvent></x-cardEvent>
        </div>
        <div id="NearBy" class="h-screen bg-blue-500">
        </div>
    </div>


</body>
</html>