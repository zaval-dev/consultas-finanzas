<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Riesgos') }}
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
                    <!-- Introducción -->
                    <section id="introduccion" class="my-8">
                        <h2 class="text-3xl font-bold mb-4" style="color: #6875f5;">Gestión de Riesgos</h2>
                        <p class="mb-4">
                            La gestión de riesgos implica la identificación, evaluación y priorización de los riesgos,
                            seguida de la aplicación de recursos para minimizar, monitorear y controlar la probabilidad
                            o el impacto de eventos desafortunados.
                        </p>
                        <p class="mb-4">
                            Es crucial para garantizar la precisión de los estados financieros, proteger los activos de
                            la empresa, asegurar el cumplimiento normativo y prevenir fraudes.
                        </p>
                    </section>

                    <!-- Tipos de Riesgos - Cards -->
                    <section id="tipos-riesgos" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Tipos de Riesgos</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <div class="card bg-slate-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-coins text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Riesgo Financiero</h4>
                                </div>
                                <p class="text-gray-300">Pérdidas financieras debido a factores internos y externos que
                                    afectan la capacidad de la empresa para cumplir sus obligaciones.</p>
                            </div>

                            <div class="card bg-slate-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-cogs text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Riesgo Operacional</h4>
                                </div>
                                <p class="text-gray-300">Fallos en procesos internos, sistemas, personas o eventos
                                    externos, como errores humanos o fallos en sistemas informáticos.</p>
                            </div>

                            <div class="card bg-slate-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-balance-scale text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Riesgo de Cumplimiento</h4>
                                </div>
                                <p class="text-gray-300">Incumplimiento de leyes y regulaciones, que puede resultar en
                                    sanciones legales.</p>
                            </div>

                            <div class="card bg-slate-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-chess text-purple-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Riesgo Estratégico</h4>
                                </div>
                                <p class="text-gray-300">Decisiones empresariales que afectan la capacidad de la empresa
                                    para alcanzar sus objetivos.</p>
                            </div>

                            <div class="card bg-slate-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-exclamation-triangle text-yellow-600 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Riesgo Reputacional</h4>
                                </div>
                                <p class="text-gray-300">Posibilidad de daño a la imagen y reputación de la empresa,
                                    afectando la confianza de los clientes e inversores.</p>
                            </div>

                        </div>
                    </section>

                    <!-- Identificación y Evaluación de Riesgos - Acordeón -->
                    <section id="identificacion-evaluacion" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Identificación y Evaluación de Riesgos</h3>
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 rounded-t-lg focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>Métodos de Identificación</span>
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
                                    <ul class="list-disc list-inside text-gray-300">
                                        <li class="mb-2">Lluvia de ideas (Brainstorming)</li>
                                        <li class="mb-2">Análisis FODA (SWOT)</li>
                                        <li class="mb-2">Entrevistas y cuestionarios</li>
                                        <li class="mb-2">Revisión de documentos históricos</li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>Herramientas para la Evaluación</span>
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
                                    <ul class="list-disc list-inside text-gray-300">
                                        <li class="mb-2">Checklists de riesgos</li>
                                        <li class="mb-2">Diagramas de Causa y Efecto (Ishikawa)</li>
                                        <li class="mb-2">Mapas de Riesgo</li>
                                        <li class="mb-2">Software de Gestión de Riesgos</li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 rounded-b-lg focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span>Análisis Cualitativo y Cuantitativo</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                    <p class="mb-4 text-gray-300">El análisis cualitativo consiste en evaluar el riesgo
                                        basado en la percepción de gravedad y probabilidad, mientras que el análisis
                                        cuantitativo calcula el riesgo a partir de datos concretos para estimar su
                                        impacto financiero.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Estrategias de Respuesta a los Riesgos - Cards con Iconos -->
                    <section id="estrategias-respuesta" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Estrategias de Respuesta a los Riesgos</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-shield-alt text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Mitigación</h4>
                                </div>
                                <p class="text-gray-300">Reducir la probabilidad o el impacto del riesgo. Ejemplo:
                                    Implementar verificaciones para reducir el riesgo de fraude.</p>
                            </div>
                            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-handshake text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Transferencia</h4>
                                </div>
                                <p class="text-gray-300">Pasar el riesgo a otra parte. Ejemplo: Contratar un seguro
                                    para protegerse contra pérdidas financieras.</p>
                            </div>
                            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-check-circle text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Aceptación</h4>
                                </div>
                                <p class="text-gray-300">Reconocer el riesgo y planificar cómo manejarlo si ocurre.
                                    Ejemplo: Analizar el riesgo de fluctuaciones en el mercado de valores y planificar
                                    para posibles pérdidas.</p>
                            </div>
                            <div class="bg-gray-700 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-ban text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Eliminación</h4>
                                </div>
                                <p class="text-gray-300">Evitar el riesgo eliminando la causa raíz. Ejemplo:
                                    Descontinuar un producto que tiene un alto riesgo de fallos de calidad.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Monitoreo y Revisión de Riesgos - Gráficos -->
                    <section id="monitoreo-revision" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Monitoreo y Revisión de Riesgos</h3>
                        <p class="mb-4">
                            El monitoreo de riesgos implica la revisión periódica de la efectividad de los controles de
                            riesgo y la actualización de las evaluaciones de riesgos existentes.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                                <h4 class="text-lg font-semibold mb-4">Probabilidad vs Impacto</h4>
                                <table class="probabilidad-impacto-table w-full text-gray-800">
                                    <tr>
                                        <th rowspan="6" class="vertical-text bg-gray-700 text-white">Probabilidad
                                        </th>
                                        <th></th>
                                        <th class="text-xs">Inferior</th>
                                        <th class="text-xs">Menor</th>
                                        <th class="text-xs">Importante</th>
                                        <th class="text-xs">Mayor</th>
                                        <th class="text-xs">Superior</th>
                                    </tr>
                                    <tr>
                                        <td class="text-xs bg-gray-700 text-white">Muy alta</td>
                                        <td class="high-risk"></td>
                                        <td class="high-risk"></td>
                                        <td class="very-high-risk"></td>
                                        <td class="very-high-risk"></td>
                                        <td class="very-high-risk"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-xs bg-gray-700 text-white">Alta <span
                                                class="text-transparent">span</span></td>
                                        <td class="moderate-risk"></td>
                                        <td class="high-risk"></td>
                                        <td class="high-risk"></td>
                                        <td class="very-high-risk"></td>
                                        <td class="very-high-risk"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-xs bg-gray-700 text-white">Media <span
                                                class="text-transparent">span</span></td>
                                        <td class="moderate-risk"></td>
                                        <td class="moderate-risk"></td>
                                        <td class="high-risk"></td>
                                        <td class="very-high-risk"></td>
                                        <td class="very-high-risk"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-xs bg-gray-700 text-white">Baja <span
                                                class="text-transparent">span</span></td>
                                        <td class="low-risk"></td>
                                        <td class="moderate-risk"></td>
                                        <td class="moderate-risk font-bold text-3xl">R</td>
                                        <td class="high-risk"></td>
                                        <td class="very-high-risk"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-xs bg-gray-700 text-white">Muy baja</td>
                                        <td class="low-risk"></td>
                                        <td class="low-risk"></td>
                                        <td class="moderate-risk"></td>
                                        <td class="high-risk"></td>
                                        <td class="very-high-risk"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <th colspan="6" class="bg-gray-700 text-white">Impacto</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                                <h4 class="text-lg font-semibold mb-4">Tabla de Técnicas de Administración del Riesgo
                                </h4>
                                <div class="techniques-table">
                                    <div class="technique-reduce">REDUCIR</div>
                                    <div class="technique-avoid">EVITAR</div>
                                    <div class="technique-accept">ACEPTAR</div>
                                    <div class="technique-transfer">TRANSFERIR</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Aspectos Normativos y Regulatorios - Acordeón -->
                    <section id="normas-regulaciones" class="my-8">
                        <h3 class="text-2xl font-semibold mb-4">Aspectos Normativos y Regulatorios</h3>
                        <div id="accordion-collapse-1" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-4">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 rounded-t-lg focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>Normas Internacionales</span>
                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l5 5a1 1 0 11-1.414 1.414L10 5.414 5.707 9.707a1 1 0 01-1.414-1.414l5-5A1 1 0 0110 3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-4 font-light border border-t-0 border-gray-700 bg-gray-900">
                                    <ul class="list-disc list-inside text-gray-300">
                                        <li class="mb-2"><strong>ISO 31000:</strong> Proporciona principios y
                                            directrices generales para la gestión de riesgos.</li>
                                        <li class="mb-2"><strong>COSO:</strong> Marco para gestionar el riesgo
                                            empresarial, centrado en la identificación y gestión de riesgos.</li>
                                        <li class="mb-2"><strong>ISO/IEC 27005:</strong> Específico para la gestión
                                            de riesgos en seguridad de la información, complementando a ISO/IEC 27001.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-5">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-500 bg-gray-800 border border-gray-700 focus:ring-4 focus:ring-gray-800"
                                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-5">
                                    <span>Cumplimiento Legal y Regulaciones</span>
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
                                    <p class="mb-4 text-gray-300">El cumplimiento de las regulaciones y leyes locales e
                                        internacionales es fundamental en la gestión de riesgos. Esto incluye:</p>
                                    <ul class="list-disc list-inside text-gray-300">
                                        <li class="mb-2">Regulaciones sectoriales específicas de cada industria.</li>
                                        <li class="mb-2">Leyes nacionales e internacionales, como el GDPR en Europa.
                                        </li>
                                        <li class="mb-2">Requisitos específicos del país en el que operan las
                                            empresas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
