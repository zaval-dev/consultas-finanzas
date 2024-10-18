<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión del rendimiento') }}
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
    </style>


    <div class="py-12 animate-fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 text-white">
                    <!-- Definición de Gestión de Rendimiento -->
                    <section id="definicion" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Gestión de Rendimiento</h2>
                        <p class="mb-8">
                            La gestión de rendimiento implica el monitoreo y evaluación continua del desempeño de los
                            empleados, equipos y procesos dentro de una organización para mejorar la eficiencia y
                            efectividad.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div
                                class="cursor-pointer transform transition-all duration-500 bg-gray-700 hover:bg-indigo-800 hover:-translate-y-4 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold mb-4">Mejorar la Productividad</h3>
                                <p class="text-gray-300">Incrementar la eficiencia y el rendimiento de los empleados.
                                </p>
                            </div>
                            <div
                                class="cursor-pointer transform transition-all duration-500 bg-gray-700 hover:bg-indigo-800 hover:-translate-y-4 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold mb-4">Identificar y Desarrollar Talentos</h3>
                                <p class="text-gray-300">Reconocer y nutrir las habilidades clave en la organización.
                                </p>
                            </div>
                            <div
                                class="cursor-pointer transform transition-all duration-500 bg-gray-700 hover:bg-indigo-800 hover:-translate-y-4 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold mb-4">Alinear Desempeño con Objetivos</h3>
                                <p class="text-gray-300">Asegurar que el trabajo individual esté alineado con los
                                    objetivos organizacionales.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Proceso de Gestión de Rendimiento -->
                    <section id="proceso" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Proceso de Gestión de Rendimiento</h3>
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">

                            <div
                                class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-yellow-500 bg-yellow-600 p-6 rounded-lg shadow-md text-center">
                                <div class="my-8"><span class="aspect-square py-4 px-5 rounded-full bg-slate-200"><i
                                            class="fa-solid fa-1" style="color:#1F2937;"></i></span></div>
                                <h4 class="text-lg font-semibold mb-2">Planificación del Rendimiento</h4>
                                <p class="text-gray-300 text-sm">Establecimiento de objetivos claros y medibles.</p>
                            </div>

                            <div
                                class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-green-500 bg-green-800 p-6 rounded-lg shadow-md text-center">
                                <div class="my-8"><span class="aspect-square py-4 px-5 rounded-full bg-slate-200"><i
                                            class="fa-solid fa-2" style="color:#1F2937;"></i></span></div>
                                <h4 class="text-lg font-semibold mb-2">Monitoreo del Rendimiento</h4>
                                <p class="text-gray-300 text-sm">Revisiones periódicas del progreso hacia los objetivos.
                                </p>
                            </div>

                            <div
                                class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-red-500 bg-red-800 p-6 rounded-lg shadow-md text-center">
                                <div class="my-8"><span class="aspect-square py-4 px-5 rounded-full bg-slate-200"><i
                                            class="fa-solid fa-3" style="color:#1F2937;"></i></span></div>
                                <h4 class="text-lg font-semibold mb-2">Evaluación del Rendimiento</h4>
                                <p class="text-gray-300 text-sm">Uso de métodos como la evaluación de 360 grados.</p>
                            </div>

                            <div
                                class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-orange-500 bg-orange-800 p-6 rounded-lg shadow-md text-center">
                                <div class="my-8"><span class="aspect-square py-4 px-5 rounded-full bg-slate-200"><i
                                            class="fa-solid fa-4" style="color:#1F2937;"></i></span></div>
                                <h4 class="text-lg font-semibold mb-2">Desarrollo del Rendimiento</h4>
                                <p class="text-gray-300 text-sm">Creación de Planes de Desarrollo Individual (PDI).</p>
                            </div>

                            <div
                                class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-blue-500 bg-blue-800 p-6 rounded-lg shadow-md text-center">
                                <div class="my-8"><span class="aspect-square py-4 px-5 rounded-full bg-slate-200"><i
                                            class="fa-solid fa-5" style="color:#1F2937;"></i></span></div>
                                <h4 class="text-lg font-semibold mb-2">Reconocimiento y Recompensa</h4>
                                <p class="text-gray-300 text-sm">Implementación de sistemas de incentivos y
                                    reconocimiento.</p>
                            </div>

                        </div>
                    </section>


                    <!-- Beneficios de la Gestión de Rendimiento -->
                    <section id="beneficios" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Beneficios de una Gestión de Rendimiento Efectiva</h3>
                        <ul class="list-disc list-inside text-gray-300">
                            <li class="mb-2"><strong>Mejora del Desempeño:</strong> Incrementa la productividad y
                                eficiencia al alinear los esfuerzos individuales con los objetivos organizacionales.
                            </li>
                            <li class="mb-2"><strong>Satisfacción del Empleado:</strong> Mejora la moral y la
                                satisfacción de los empleados al proporcionar claridad en las expectativas y
                                reconocimiento por su trabajo.</li>
                            <li class="mb-2"><strong>Desarrollo Profesional:</strong> Fomenta el crecimiento y
                                desarrollo continuo de los empleados, mejorando sus habilidades y competencias.</li>
                            <li class="mb-2"><strong>Toma de Decisiones Informada:</strong> Proporciona datos y
                                métricas que informan la toma de decisiones estratégicas.</li>
                        </ul>
                    </section>

                    <button data-modal-toggle="evaluationModal" class="bg-blue-500 text-white px-4 py-2 rounded">Ver
                        Evaluación Detallada</button>
                    <div id="evaluationModal" tabindex="-1"
                        class="hidden fixed z-50 w-full p-4 overflow-x-hidden overflow-y-auto h-full">
                        <div class="relative w-full max-w-2xl">
                            <div class="bg-white rounded-lg shadow p-6">
                                <h2 class="text-2xl font-semibold">Evaluación de Rendimiento</h2>
                                <p class="mt-4">Detalles de la evaluación del empleado con indicadores clave...</p>
                                <button data-modal-toggle="evaluationModal"
                                    class="mt-6 bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
                            </div>
                        </div>
                    </div>


                    <!-- Métodos de Evaluación del Desempeño -->
                    <section id="metodos-evaluacion" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Métodos de Evaluación del Desempeño</h3>
                        <table class="min-w-full bg-gray-800 text-gray-200">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-700">Método</th>
                                    <th class="py-2 px-4 border-b border-gray-700">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cursor-pointer transition-colors duration-300 hover:bg-gray-600">
                                    <td class="py-2 px-4 border-b border-gray-700">Autoevaluaciones</td>
                                    <td class="py-2 px-4 border-b border-gray-700">Los empleados evalúan su propio
                                        desempeño.</td>
                                </tr>
                                <tr class="cursor-pointer transition-colors duration-300 hover:bg-gray-600">
                                    <td class="py-2 px-4 border-b border-gray-700">Evaluaciones de los Gerentes</td>
                                    <td class="py-2 px-4 border-b border-gray-700">Supervisores directos proporcionan
                                        feedback.</td>
                                </tr>
                                <tr class="cursor-pointer transition-colors duration-300 hover:bg-gray-600">
                                    <td class="py-2 px-4 border-b border-gray-700">Evaluaciones de Pares</td>
                                    <td class="py-2 px-4 border-b border-gray-700">Colegas del mismo nivel ofrecen su
                                        opinión.</td>
                                </tr>
                                <tr class="cursor-pointer transition-colors duration-300 hover:bg-gray-600">
                                    <td class="py-2 px-4 border-b border-gray-700">Evaluaciones de 360 Grados</td>
                                    <td class="py-2 px-4 border-b border-gray-700">Feedback de múltiples fuentes,
                                        incluyendo clientes y subordinados.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Desafíos y Consideraciones -->
                    <section id="desafios" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Desafíos y Consideraciones</h3>
                        <div id="accordion-desafios" data-accordion="collapse">
                            <h2 id="accordion-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-body-1" aria-expanded="true"
                                    aria-controls="accordion-body-1">
                                    <span>Resistencia al Cambio</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-1" class="hidden" aria-labelledby="accordion-heading-1">
                                <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                    <p class="text-gray-300">La implementación de nuevos procesos de gestión de
                                        rendimiento puede encontrar resistencia por parte de los empleados y gerentes.
                                    </p>
                                </div>
                            </div>

                            <h2 id="accordion-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-body-2" aria-expanded="false"
                                    aria-controls="accordion-body-2">
                                    <span>Imparcialidad y Objetividad</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-2" class="hidden" aria-labelledby="accordion-heading-2">
                                <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                    <p class="text-gray-300">Garantizar que las evaluaciones sean justas y objetivas
                                        para evitar sesgos y favoritismos.</p>
                                </div>
                            </div>

                            <h2 id="accordion-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-body-3" aria-expanded="false"
                                    aria-controls="accordion-body-3">
                                    <span>Integración de Sistemas</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-3" class="hidden" aria-labelledby="accordion-heading-3">
                                <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                    <p class="text-gray-300">Asegurar que los sistemas de gestión de rendimiento se
                                        integren eficazmente con otros sistemas organizacionales.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
