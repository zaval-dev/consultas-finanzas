<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión de clientes') }}
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
    </style>

    <div class="py-12 animate-fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="p-6 lg:p-8 bg-gray-800 dark:bg-gray-800 dark:via-transparent border-b border-gray-200 dark:border-gray-700 text-white">


                    <!-- Perspectiva de Clientes -->
                    <section id="perspectiva-clientes" class="my-8">
                        <h2 class="text-3xl font-bold mb-4 pl-3" style="color: #6875f5;">Importancia de la Gestión de
                            Clientes
                        </h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <p class="mb-4">
                                La gestión de clientes es crucial para el éxito y la rentabilidad a largo plazo de
                                cualquier compañía. Proporciona una visión integral de las interacciones con los
                                clientes, lo que permite identificar oportunidades de mejora y optimizar la
                                experiencia del cliente.
                            </p>
                        </div>
                        <section id="ventajas-gestion-clientes" class="my-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h2 class="text-3xl font-bold mb-4 pl-3" style="color: #6875f5;">Ventajas de una
                                        Buena
                                        Gestión de Clientes</h2>
                                    <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                                        <ul class="list-disc list-inside">
                                            <li class="mb-2">Conocer mejor a los clientes para anticipar sus
                                                necesidades y mejorar su satisfacción.</li>
                                            <li class="mb-2">Identificar problemas con antelación y mejorar el
                                                rendimiento del equipo de trabajo.</li>
                                            <li class="mb-2">Incrementar la fidelización de clientes y la eficiencia
                                                en la utilización de recursos.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center">
                                    <img src="/img/clientes.jpg" alt="Ventajas de Gestión de Clientes"
                                        class="rounded-lg shadow-md">
                                </div>
                            </div>
                        </section>


                        <h3 class="text-xl font-semibold mb-4" style="color: #6875f5;">Ejemplos de Estrategias de
                            Gestión de Clientes</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-user-cog text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Personalización</h4>
                                </div>
                                <p class="text-gray-300">Adaptar los productos y servicios a las preferencias
                                    individuales de los clientes.</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-gift text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Programas de Lealtad</h4>
                                </div>
                                <p class="text-gray-300">Ofrecer incentivos como descuentos y puntos de lealtad
                                    canjeables.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-headset text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Servicio al Cliente Excepcional</h4>
                                </div>
                                <p class="text-gray-300">Proporcionar un servicio al cliente receptivo, conocedor y
                                    empático.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-cogs text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Calidad de Productos y Servicios</h4>
                                </div>
                                <p class="text-gray-300">Entregar productos y servicios que cumplan o superen las
                                    expectativas del cliente.</p>
                            </div>
                        </div>

                        <section id="procesos-clave-gestion-clientes" class="my-8">
                            <h3 class="text-2xl font-semibold mb-4" style="color: #6875f5;">Procesos Clave en la Gestión
                                de Clientes</h3>
                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 rounded-t-lg focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>Captura de Datos</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l5 5a1 1 0 11-1.414 1.414L10 5.414 5.707 9.707a1 1 0 01-1.414-1.414l5-5A1 1 0 0110 3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Recopilación de información de clientes actuales y
                                            potenciales.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                        <span>Segmentación</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Clasificación de clientes según sus
                                            características para personalizar estrategias.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                        <span>Automatización de Marketing</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Uso de herramientas para campañas automatizadas.
                                        </p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-4">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-4">
                                        <span>Gestión de Ventas</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-4" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Seguimiento y gestión de oportunidades de ventas.
                                        </p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-5">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-5">
                                        <span>Atención al Cliente</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-5" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-5">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Proporcionar soporte y servicio al cliente para
                                            mantener la satisfacción.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-6">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 rounded-b-lg focus:ring-4 focus:ring-gray-800"
                                        data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-6">
                                        <span>Análisis y Reportes</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-6" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-6">
                                    <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                        <p class="mb-4 text-gray-300">Medición del rendimiento y ajuste de estrategias
                                            según sea necesario.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
