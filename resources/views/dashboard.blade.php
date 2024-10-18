<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
        @if (session('success'))
            <div id="successMessage"
                class="my-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transition transform duration-500 ease-in-out"
                role="alert">
                <span class="block ml-8 sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 left-0 px-4 py-3">
                    <i class="fa-solid fa-circle-info"></i>
                </span>
            </div>
        @endif
        <x-chat-g-p-t />
    </x-slot>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .card:nth-child(4) {
            animation-delay: 0.8s;
        }

        .card:nth-child(5) {
            animation-delay: 1s;
        }

        .card:nth-child(6) {
            animation-delay: 1.2s;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div
                    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <section id="cards-section" class="my-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Card 1 -->
                            <a href="{{ route('estrategias') }}" :active="request() - > routeIs('estrategias')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/estrategias.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Estrategias</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Se exploran aspectos
                                        clave como la formulación y selección de estrategias, utilizando herramientas
                                        esenciales que permiten tomar decisiones fundamentadas en entornos inciertos.
                                    </p>
                                </div>
                            </a>

                            <!-- Card 2 -->
                            <a href="{{ route('riesgos') }}" :active="request() - > routeIs('riesgos')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/riesgos.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Riesgos</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">La gestión de riesgos
                                        asegura la identificación, evaluación y monitoreo continuo de riesgos,
                                        preparando a la empresa para mitigar impactos potenciales.</p>
                                </div>
                            </a>

                            {{-- <!-- Card 3 -->
                            <a href="{{ route('crm') }}" :active="request() - > routeIs('crm')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/gdc.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Gestión de Clientes</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Una gestión efectiva de
                                        clientes mejora la satisfacción y fidelización, fortaleciendo la relación con
                                        los clientes y promoviendo el crecimiento del negocio.</p>
                                </div>
                            </a>

                            <!-- Card 4 -->
                            <a href="{{ route('rendimiento') }}" :active="request() - > routeIs('rendimiento')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/rendimiento.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Gestión de Rendimiento</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Optimiza el desempeño
                                        de los empleados mediante evaluaciones continuas, alineando sus esfuerzos con
                                        los objetivos estratégicos de la organización.</p>
                                </div>
                            </a>

                            <!-- Card 5 -->
                            <a href="{{ route('rse') }}" :active="request() - > routeIs('rse')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/rse.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Responsabilidad Social Empresarial</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">La RSE permite a las
                                        empresas contribuir positivamente al entorno social y ambiental, fortaleciendo
                                        su reputación y lealtad de los clientes.</p>
                                </div>
                            </a>

                            <!-- Card 6 -->
                            <a href="{{ route('cmi') }}" :active="request() - > routeIs('cmi')"
                                class="card flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-80 md:h-full md:w-48 md:rounded-none md:rounded-s-lg"
                                    src="/img/cmi.webp" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Cuadro de Mando Integral</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">El Cuadro de Mando
                                        Integral alinea los objetivos organizacionales en cuatro perspectivas clave,
                                        facilitando decisiones estratégicas y sostenibles a largo plazo.</p>
                                </div>
                            </a> --}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Encuentra el div del mensaje
            const successMessage = document.getElementById('successMessage');

            if (successMessage) {
                // Espera 5 segundos (5000 milisegundos) y luego aplica la animación
                setTimeout(() => {
                    successMessage.classList.add('opacity-0', '-translate-y-5');

                    // Espera a que termine la animación para eliminar el div del DOM
                    setTimeout(() => {
                        successMessage.remove();
                    }, 500); // La duración de la animación debe coincidir con la clase 'duration-500'

                }, 5000);
            }
        });
    </script>
</x-app-layout>
