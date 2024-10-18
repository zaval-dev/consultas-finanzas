<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuración Inicial</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex justify-center items-center bg-gray-900" style="font-family: 'Figtree';">
    <div class="p-10 xl:p-0 container h-3/4 rounded-lg">
        <div class="h-full grid grid-cols-1 xl:grid-cols-3">
            <div class="hidden xl:block h-full col-span-1 text-center">
                <div class="rounded-l-lg h-full bg-cover bg-center opacity-75" style="background-image: url('https://plus.unsplash.com/premium_photo-1678567671940-64eeefe22e5b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
                </div>
            </div>
            <div class="h-full col-span-2 rounded-r-lg bg-gray-950">
                <div class="h-full flex items-center justify-center">
                    <div class="mx-auto space-y-6 text-white max-w-full px-10">
                        <h1 class="text-center text-2xl font-semibold">Primeras configuraciones</h1>
                        <h2 class="text-center">Seleccione el rubro de empresa con la que identifica a su negocio:</h2>
                        {{-- <div class="mx-auto w-full max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center py-10">
                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://elcomercio.pe/resizer/v2/HYZIFMY6ONBFLGXV6ESREBSJJU.jpg?auth=201f039d8ad2f892097c4b4ac40cfafabcd873c888444aca0d04ad9a270fb378&width=580&height=330&quality=75&smart=true" alt="Bonnie image"/>
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Rubro 1</h5>
                                <div class="flex mt-4 md:mt-6">
                                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Swiper -->
                        <div class="swiper mySwiper max-w-full">
                            <div class="swiper-wrapper w-full">
                                @foreach($rubros as $rubro)
                                    <div class="swiper-slide h-full">
                                        <div class="mx-auto h-full w-full max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <div class="h-full flex flex-col items-center py-10">
                                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/rubro.webp') }}" alt="Bonnie image"/>
                                                <h5 class="px-2 mb-1 text-lg font-medium text-gray-900 dark:text-white text-center">{{ $rubro->detalle }}</h5>
                                                <form action="{{ route('establecerRubro', $rubro->id) }}" method="POST" class="flex mt-4 md:mt-6">
                                                    @csrf
                                                    <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seleccionar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End of Swiper -->
                        <div class="flex justify-end">
                            <a href="{{ route('dashboard') }}" class="bg-red-700 px-4 py-2 rounded-md"><i class="mr-3 fa-solid fa-forward"></i>Saltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          grabCursor: true,
          loop: true,
          pagination: {
            clickable: true,
          },
          breakpoints: {
            768: {
            slidesPerView: 2,
            spaceBetween: 40,
            },
            1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            },
          },
        });
    </script>
</body>
</html>
