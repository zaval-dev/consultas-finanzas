<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Responsabilidad Social Empresarial') }}
        </h2>
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

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out forwards;
        }

        .hover-bg-custom:hover {
            background-color: #6875f5;
        }

        .card:hover i {
            color: white;
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
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="p-6 lg:p-8 bg-gray-800 dark:bg-gray-800 dark:via-transparent border-b border-gray-200 dark:border-gray-700 text-white">

                    <section id="rse" class="my-8">
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8 animate-fadeInUp">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Título y Texto de la definición -->
                                <div class="flex flex-col justify-center">
                                    <h1 class="text-4xl font-bold mb-4 self-start">Responsabilidad Social Empresarial
                                    </h1>
                                    <p>
                                        Es la práctica voluntaria de las empresas que refleja cómo estas se hacen
                                        responsables del impacto económico, social y ambiental que tienen en la
                                        sociedad, con el fin de apoyar el desarrollo sostenible.
                                    </p>
                                </div>
                                <!-- Imagen al lado del texto -->
                                <div>
                                    <img src="/img/rse-img.png" alt="Responsabilidad Social Empresarial"
                                        class="w-3/4 mx-auto rounded-lg shadow-md">
                                </div>
                            </div>
                        </div>
                    </section>

                    <br>

                    <section id="tipos-rse" class="my-8">
                        <h2 class="text-3xl font-bold mb-4 animate-fadeInUp">Tipos de Responsabilidad Social Empresarial
                        </h2>

                        <!-- Cards Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Responsabilidad Social Corporativa Interna -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-building text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad Interna</h4>
                                </div>
                                <p class="text-gray-300">Garantizar un entorno de trabajo seguro, desarrollo profesional
                                    y bienestar de los empleados.</p>
                            </div>

                            <!-- Responsabilidad Social Corporativa Externa -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-leaf text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad Externa</h4>
                                </div>
                                <p class="text-gray-300">Implementar prácticas sostenibles, compromiso comunitario y
                                    prácticas éticas de negocios.</p>
                            </div>

                            <!-- Responsabilidad Económica -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-chart-line text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad Económica</h4>
                                </div>
                                <p class="text-gray-300">Garantizar sostenibilidad financiera y realizar inversiones
                                    responsables.</p>
                            </div>

                            <!-- Responsabilidad Cultural -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-globe text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad Cultural</h4>
                                </div>
                                <p class="text-gray-300">Promover la preservación cultural, educación y desarrollo
                                    artístico en la comunidad.</p>
                            </div>

                            <!-- Responsabilidad con los Clientes -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-users text-purple-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad con los Clientes</h4>
                                </div>
                                <p class="text-gray-300">Garantizar calidad y seguridad en los productos y servicios,
                                    así como la satisfacción del cliente.</p>
                            </div>

                            <!-- Responsabilidad Filantrópica -->
                            <div
                                class="card bg-gray-800 p-6 rounded-lg shadow-md transition-transform duration-500 hover-bg-custom">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-hands-helping text-pink-400 text-2xl mr-4"></i>
                                    <h4 class="text-xl font-semibold text-white">Responsabilidad Filantrópica</h4>
                                </div>
                                <p class="text-gray-300">Realizar donaciones y patrocinios, y fomentar el voluntariado
                                    corporativo.</p>
                            </div>

                        </div>
                    </section>

                    <br>

                    <!-- Beneficios de la RSE -->
                    <section id="beneficios-rse" class="my-8">
                        <h2 class="text-3xl font-bold mb-6 text-white animate-fadeInUp">Beneficios de la Responsabilidad
                            Social
                            Empresarial (RSE)</h2>
                        <div class="bg-gray-900 shadow-lg rounded-lg p-8 mb-12 border border-gray-700 animate-fadeInUp">
                            <ul class="space-y-4 text-lg text-gray-300">
                                <li class="flex items-start space-x-4">
                                    <i class="fas fa-seedling text-green-400 text-2xl mt-1"></i>
                                    <span><strong class="text-white">Contribuye al desarrollo sostenible:</strong>
                                        Disminuye el impacto ambiental negativo, beneficiando a futuras
                                        generaciones.</span>
                                </li>
                                <li class="flex items-start space-x-4">
                                    <i class="fas fa-award text-yellow-400 text-2xl mt-1"></i>
                                    <span><strong class="text-white">Mejora la reputación y la imagen de la
                                            empresa:</strong> Fortalece las relaciones con grupos de interés.</span>
                                </li>
                                <li class="flex items-start space-x-4">
                                    <i class="fas fa-hand-holding-heart text-red-400 text-2xl mt-1"></i>
                                    <span><strong class="text-white">Fomenta la lealtad de los clientes:</strong> Los
                                        clientes prefieren marcas con impacto social y ambiental positivo.</span>
                                </li>
                                <li class="flex items-start space-x-4">
                                    <i class="fas fa-smile text-blue-400 text-2xl mt-1"></i>
                                    <span><strong class="text-white">Aumenta la motivación y la satisfacción de los
                                            empleados:</strong> Los empleados se sienten más orgullosos y motivados
                                        cuando la empresa tiene un impacto positivo.</span>
                                </li>
                                <li class="flex items-start space-x-4">
                                    <i class="fas fa-piggy-bank text-pink-400 text-2xl mt-1"></i>
                                    <span><strong class="text-white">Genera eficiencia y ahorros:</strong> Reduce el uso
                                        de recursos, energía, y costos operativos, aumentando la rentabilidad.</span>
                                </li>
                            </ul>
                        </div>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
