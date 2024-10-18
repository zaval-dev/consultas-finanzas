<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cuadro de mando integral') }}
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

                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#mapa-estrategico" aria-current="page"
                                class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Mapa
                                Estratégico</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-financiera"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                Financiera</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-clientes"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Clientes</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-procesos"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Procesos Internos</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-aprendizaje"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Aprendizaje</a>
                        </li>
                        <li class="me-2">
                            <a href="#cmi-ejemplo"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Ejemplo</a>
                        </li>
                        {{-- <li>
                            <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                        </li> --}}
                    </ul>

                    <!-- Mapa Estratégico -->
                    <section id="mapa-estrategico" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Mapa Estratégico</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Teoría General</h3>
                            <p class="mb-4">
                                El Mapa Estratégico es una herramienta visual que conecta los objetivos estratégicos en
                                las cuatro perspectivas clave del Cuadro de Mando Integral: Financiera, Clientes,
                                Procesos Internos, y Aprendizaje y Crecimiento. Esta herramienta permite visualizar cómo
                                cada objetivo se alinea para cumplir con la visión y estrategia general de la
                                organización.
                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">Mejorar la rentabilidad aumentando los ingresos y reduciendo costos.
                                </li>
                                <li class="mb-2">Incrementar la satisfacción del cliente mediante productos y
                                    servicios de alta calidad.</li>
                                <li class="mb-2">Optimizar los procesos internos para mejorar la eficiencia y reducir
                                    el tiempo de ciclo.</li>
                                <li class="mb-2">Fomentar la innovación y el desarrollo del personal para mantener una
                                    ventaja competitiva.</li>
                            </ul>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Ejemplos de KPI</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-dollar-sign text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Crecimiento de Ingresos</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): $500,000 - Crecimiento del 10% respecto
                                    al año anterior.</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-percentage text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Margen de Beneficio</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 25% - Margen de beneficio neto.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-user-check text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Retención de Clientes</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 85% - Tasa de retención de clientes.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-clock text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Eficiencia Operacional</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): Reducción del 15% en el tiempo de ciclo.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Perspectiva Financiera -->
                    <section id="perspectiva-financiera" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Perspectiva Financiera</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Teoría General</h3>
                            <p class="mb-4">
                                La perspectiva financiera del Cuadro de Mando Integral se enfoca en medir el éxito
                                financiero de la organización a través de objetivos y KPIs clave. Estos indicadores
                                reflejan cómo la estrategia de la organización está impactando su rendimiento
                                financiero.
                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">Aumentar los ingresos anuales en un 10%.</li>
                                <li class="mb-2">Reducir los costos operativos en un 5%.</li>
                                <li class="mb-2">Incrementar el retorno sobre la inversión (ROI) en un 8%.</li>
                                <li class="mb-2">Mejorar el flujo de caja en un 15%.</li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-semibold mb-4">Ejemplos de KPI</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-dollar-sign text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Crecimiento de Ingresos</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): $500,000 - Crecimiento del 10% respecto
                                    al año anterior.</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-percentage text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Margen de Beneficio</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 25% - Margen de beneficio neto.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-chart-line text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Retorno sobre la Inversión (ROI)</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 8% - ROI anual.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-hand-holding-usd text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Flujo de Caja</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +15% - Mejora en el flujo de caja.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Perspectiva de Clientes -->
                    <section id="perspectiva-clientes" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Perspectiva de Clientes</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Teoría General</h3>
                            <p class="mb-4">
                                La perspectiva de clientes se enfoca en cómo la organización puede ofrecer valor
                                superior a los clientes para lograr una mayor satisfacción, retención, y adquisición de
                                nuevos clientes. Esta perspectiva mide el impacto de las estrategias en la experiencia
                                del cliente.
                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">Aumentar la satisfacción del cliente en un 15%.</li>
                                <li class="mb-2">Incrementar la tasa de retención de clientes en un 10%.</li>
                                <li class="mb-2">Expandir la cuota de mercado en un 5%.</li>
                                <li class="mb-2">Mejorar la calidad del servicio al cliente.</li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-semibold mb-4">Ejemplos de KPI</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-smile text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Satisfacción del Cliente</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 85% - NPS (Net Promoter Score).</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-user-lock text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Retención de Clientes</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 90% - Tasa de Retención.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-chart-pie text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Cuota de Mercado</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 30% - Cuota de Mercado.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-headset text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Calidad del Servicio</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): 95% - Tasa de Resolución en el Primer
                                    Contacto.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Perspectiva de Procesos Internos -->
                    <section id="perspectiva-procesos" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Perspectiva de Procesos Internos</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Teoría General</h3>
                            <p class="mb-4">
                                La perspectiva de procesos internos se centra en los procesos críticos que la
                                organización necesita optimizar para satisfacer las expectativas de los clientes y
                                alcanzar los objetivos financieros. Los KPIs en esta perspectiva miden la eficiencia,
                                calidad y capacidad de innovación de los procesos internos.
                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">Reducir el tiempo de ciclo de los procesos clave en un 20%.</li>
                                <li class="mb-2">Mejorar la calidad de los productos y servicios en un 10%.</li>
                                <li class="mb-2">Incrementar la eficiencia operativa en un 15%.</li>
                                <li class="mb-2">Fomentar la innovación en procesos con un 5% más de inversión en
                                    I+D.</li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-semibold mb-4">Ejemplos de KPI</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-clock text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Tiempo de Ciclo</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): -20% en el tiempo de ciclo.</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-tasks text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Calidad de Productos</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +10% en la calidad.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-cogs text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Eficiencia Operativa</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +15% en la eficiencia.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-lightbulb text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Innovación en Procesos</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +5% en inversión I+D.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Perspectiva de Aprendizaje y Crecimiento -->
                    <section id="perspectiva-aprendizaje" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Perspectiva de Aprendizaje y Crecimiento</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Teoría General</h3>
                            <p class="mb-4">
                                La perspectiva de aprendizaje y crecimiento se enfoca en la infraestructura que la
                                organización necesita para crear valor a largo plazo, incluyendo el desarrollo de
                                habilidades del personal, la tecnología y la cultura organizacional. Los KPIs en esta
                                perspectiva miden la satisfacción y desarrollo del personal, la innovación y la cultura
                                organizacional.
                            </p>
                        </div>

                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8">
                            <h3 class="text-xl font-semibold mb-4">Objetivos</h3>
                            <ul class="list-disc list-inside">
                                <li class="mb-2">Mejorar la satisfacción del personal en un 10%.</li>
                                <li class="mb-2">Incrementar las horas de capacitación por empleado en un 15%.</li>
                                <li class="mb-2">Fomentar la innovación mediante un 10% más de ideas implementadas.
                                </li>
                                <li class="mb-2">Fortalecer la cultura organizacional con un 5% más de participación
                                    en encuestas de clima laboral.</li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-semibold mb-4">Ejemplos de KPI</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-users text-blue-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Satisfacción del Personal</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +10% en satisfacción.</p>
                            </div>
                            <div class="bg-green-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-chalkboard-teacher text-green-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Capacitación por Empleado</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +15% en horas de capacitación.</p>
                            </div>
                            <div class="bg-yellow-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-lightbulb text-yellow-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Innovación</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +10% en ideas implementadas.</p>
                            </div>
                            <div class="bg-red-900 p-6 rounded-lg shadow-md">
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-building text-red-400 text-2xl mr-4"></i>
                                    <h4 class="text-lg font-semibold">Cultura Organizacional</h4>
                                </div>
                                <p class="text-gray-300">Indicador Clave (KPI): +5% en participación en encuestas de
                                    clima laboral.</p>
                            </div>
                        </div>
                    </section>
                    <section id="cmi-ejemplo" class="my-16">
                        <h2 class="text-3xl font-bold mb-2 text-center">Ejemplo de Cuadro de Mando Integral</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-2 overflow-auto">
                            <table class="min-w-full bg-gray-800 border border-gray-700 text-gray-200">
                                <thead>
                                    <tr>
                                        <th class="border border-gray-700 p-4 bg-gray-700">Perspectiva</th>
                                        <th class="border border-gray-700 p-4 bg-yellow-600">Financiera</th>
                                        <th class="border border-gray-700 p-4 bg-red-600">Clientes</th>
                                        <th class="border border-gray-700 p-4 bg-orange-600">Procesos Internos</th>
                                        <th class="border border-gray-700 p-4 bg-red-600">Aprendizaje y Crecimiento
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-700 p-4 bg-gray-700">Crecimiento</td>
                                        <td class="border border-gray-700 p-4 bg-yellow-500">Ventas y resultados</td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Precios: Rentabilidad y cuota
                                            de mercado</td>
                                        <td class="border border-gray-700 p-4 bg-orange-500">Operaciones: Productividad
                                        </td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Personas: Capacitación</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-700 p-4 bg-gray-700">Rentabilidad</td>
                                        <td class="border border-gray-700 p-4 bg-yellow-500">De ventas, capital e
                                            inversión</td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Servicio: Fidelización y
                                            satisfacción</td>
                                        <td class="border border-gray-700 p-4 bg-orange-500">Logística: Plazo de
                                            servicio</td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Herramientas: Digitalización
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-700 p-4 bg-gray-700">Equilibrio</td>
                                        <td class="border border-gray-700 p-4 bg-yellow-500">Liquidez y autonomía</td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Producto: Imagen de marca y
                                            calidad</td>
                                        <td class="border border-gray-700 p-4 bg-orange-500">Estructura: Eficiencia
                                        </td>
                                        <td class="border border-gray-700 p-4 bg-red-500">Organización: Productividad
                                            interna</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-t.00 .000border-gray-200 dark:border-gray-700 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#mapa-estrategico" aria-current="page"
                                class="inline-block p-4 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:hover:text-gray-300">Mapa
                                Estratégico</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-financiera"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                Financiera</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-clientes"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Clientes</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-procesos"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Procesos Internos</a>
                        </li>
                        <li class="me-2">
                            <a href="#perspectiva-aprendizaje"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Perspectiva
                                de Aprendizaje</a>
                        </li>
                        <li class="me-2">
                            <a href="#cmi-ejemplo"
                                class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:text-blue-500">Ejemplo</a>
                        </li>
                        {{-- <li>
                            <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
