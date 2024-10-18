<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Estrategias') }}
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
    </style>

    <div class="py-12 animate-fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="p-6 lg:p-8 bg-gray-800 dark:bg-gray-800 dark:via-transparent border-b border-gray-200 dark:border-gray-700 text-white">

                    <section id="formulacion-estrategica" class="my-8">
                        <h2 class="text-3xl font-bold mb-4">Formulación Estratégica</h2>
                    </section>

                    <!-- Cards Section -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                        <!-- Card 1: Etapa de Entrada -->
                        <div class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-blue-500 bg-blue-900 p-6 rounded-lg shadow-md text-center"
                            onclick="openModal('modal-entrada')">
                            <div class="items-center justify-center">
                                <h4 class="text-2xl font-semibold text-white">
                                    <i class="fas fa-file-alt text-blue-400 text-2xl mr-4"></i>Etapa de Entrada
                                    (Insumos)
                                </h4>
                            </div>
                        </div>

                        <!-- Card 2: Etapa de Emparejamiento -->
                        <div class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-red-500 bg-red-900 p-6 rounded-lg shadow-md text-center"
                            onclick="openModal('modal-emparejamiento')">
                            <div class="items-center justify-center">
                                <h4 class="text-2xl font-semibold text-white">
                                    <i class="fas fa-project-diagram text-red-400 text-2xl mr-4"></i>Etapa de
                                    Emparejamiento
                                </h4>
                            </div>
                        </div>

                        <!-- Card 3: Etapa de Salida -->
                        <div class="card cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-yellow-500 bg-yellow-900 p-6 rounded-lg shadow-md text-center"
                            onclick="openModal('modal-salida')">
                            <div class="items-center justify-center">
                                <h4 class="text-2xl font-semibold text-white">
                                    <i class="fas fa-check-circle text-yellow-400 text-2xl mr-4"></i>Etapa de Salida
                                    (Decisión)
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Modals -->
                    <!-- Modal 1: Etapa de Entrada -->
                    <div id="modal-entrada" class="fixed inset-0  items-center justify-center hidden z-50">
                        <div class="absolute inset-0 backdrop-blur-lg bg-opacity-50"></div>
                        <!-- Aplica el desenfoque al fondo -->
                        <div
                            class="relative bg-gray-800 top-1/2 -translate-y-1/2 p-8 rounded-lg shadow-2xl border border-gray-600 max-w-md mx-auto text-white transform transition-transform duration-500 scale-95 opacity-0">
                            <!-- Botón de Cerrar (X) -->
                            <button class="absolute top-2 right-2 text-white text-2xl"
                                onclick="closeModal('modal-entrada')">&times;</button>

                            <h2 class="text-2xl font-bold mb-4">Etapa de Entrada (Insumos)</h2>
                            <p class="mb-4">Esta etapa proporciona los insumos fundamentales para las siguientes
                                etapas del proceso estratégico. Incluye las siguientes matrices:</p>
                            <ul class="list-disc list-inside mb-4">
                                <li>Matriz de Evaluación de los Factores Externos (MEFE)</li>
                                <li>Matriz del Perfil Competitivo (MPC)</li>
                                <li>Matriz de Evaluación de los Factores Internos (MEFI)</li>
                                <li>Matriz de Intereses Organizacionales (MIO)</li>
                            </ul>
                            <div class="mb-4">
                                <img src="/img/etapa1.png" alt="Imagen de Etapa de Entrada"
                                    class="w-full rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>



                    <!-- Modal 2: Etapa de Emparejamiento -->
                    <div id="modal-emparejamiento" class="fixed inset-0  items-center justify-center hidden z-50">
                        <div class="absolute inset-0 backdrop-blur-lg bg-opacity-50"></div>
                        <!-- Aplica el desenfoque al fondo -->
                        <div
                            class="relative bg-gray-800 top-1/2 -translate-y-1/2 p-8 rounded-lg shadow-2xl border border-gray-600 max-w-md mx-auto text-white transform transition-transform duration-500 scale-95 opacity-0">
                            <!-- Botón de Cerrar (X) -->
                            <button class="absolute top-2 right-2 text-white text-2xl"
                                onclick="closeModal('modal-emparejamiento')">&times;</button>

                            <h2 class="text-2xl font-bold mb-4">Etapa de Emparejamiento (Combinación/Intuición)</h2>
                            <p class="mb-4">En esta etapa, se generan estrategias a través del emparejamiento de
                                recursos y habilidades internas con oportunidades y amenazas externas. Las matrices
                                utilizadas incluyen:</p>
                            <ul class="list-disc list-inside mb-4">
                                <li>Matriz de Fortalezas, Oportunidades, Debilidades y Amenazas (MFODA)</li>
                                <li>Matriz de la Posición Estratégica y Evaluación de la Acción (MPEYEA)</li>
                                <li>Matriz del Boston Consulting Group (MBCG)</li>
                                <li>Matriz Interna-Externa (MIE)</li>
                                <li>Matriz de la Gran Estrategia (MGE)</li>
                            </ul>
                            <div class="mb-4">
                                <img src="/img/etapa2.png" alt="Imagen de Etapa de Emparejamiento"
                                    class="w-full rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>

                    <!-- Modal 3: Etapa de Salida -->
                    <div id="modal-salida" class="fixed inset-0  items-center justify-center hidden z-50">
                        <div class="absolute inset-0 backdrop-blur-lg bg-opacity-50"></div>
                        <!-- Aplica el desenfoque al fondo -->
                        <div
                            class="relative bg-gray-800 top-1/2 -translate-y-1/2 p-8 rounded-lg shadow-2xl border border-gray-600 max-w-md mx-auto text-white transform transition-transform duration-500 scale-95 opacity-0">
                            <!-- Botón de Cerrar (X) -->
                            <button class="absolute top-2 right-2 text-white text-2xl"
                                onclick="closeModal('modal-salida')">&times;</button>

                            <h2 class="text-2xl font-bold mb-4">Etapa de Salida (Decisión)</h2>
                            <p class="mb-4">Esta etapa evalúa y selecciona las estrategias generadas en la etapa de
                                emparejamiento. Las decisiones se basan en las siguientes matrices:</p>
                            <ul class="list-disc list-inside mb-4">
                                <li>Matriz Decisión (MD)</li>
                                <li>Matriz Cuantitativa de Planeamiento Estratégico (MCPE)</li>
                                <li>Matriz de Rumelt (MR)</li>
                                <li>Matriz Ética (ME)</li>
                            </ul>
                            <div class="mb-4">
                                <img src="/img/etapa3.png" alt="Imagen de Etapa de Salida"
                                    class="w-full rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>

                    <br>

                    <!-- Elección de Estrategias -->
                    <section id="eleccion-estrategias" class="my-8">
                        <h2 class="text-3xl font-bold mb-4 animate-fadeInUp">Elección de Estrategias</h2>
                        <div class="bg-gray-800 shadow-md rounded p-6 mb-8 animate-fadeInUp">
                            <p class="mb-4">
                                La elección de estrategias es crucial y se apoya en la intuición y creatividad de los
                                gerentes. Utiliza cinco matrices clave para combinar y analizar los factores internos y
                                externos:
                            </p>
                            <ul class="list-disc list-inside mb-4">
                                <li>Matriz FODA</li>
                                <li>Matriz de la Posición Estratégica y Evaluación de la Acción (PEYEA)</li>
                                <li>Matriz del Boston Consulting Group (BCG)</li>
                                <li>Matriz Interna-Externa (IE)</li>
                                <li>Matriz de la Gran Estrategia (GE)</li>
                            </ul>
                            <p class="mb-4">
                                Aunque se utilizan herramientas y análisis, siempre hay incertidumbre, lo que requiere
                                un buen juicio intuitivo y experiencia en la toma de decisiones estratégicas.
                            </p>
                        </div>
                    </section>
                </div>
            </div>

            <section id="herramientas-estrategias" class="my-8 animate-fadeInUp">
                <h2 class="text-3xl font-bold mb-4" style="color: #6875f5;">Herramientas para la Generación y Elección
                    de Estrategias</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz FODA</h4>
                        <img src="/img/images.png" alt="Ejemplo Matriz FODA"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz Interna-Externa (IE)</h4>
                        <img src="/img/ie.webp" alt="Ejemplo Matriz IE"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz de Decisión (MD)</h4>
                        <img src="/img/md.png" alt="Ejemplo Matriz MD"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz de la Posición Estratégica y Evaluación
                            de la Acción (PEYEA)</h4>
                        <img src="/img/peyea.png" alt="Ejemplo Matriz PEYEA"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz del Boston Consulting Group (BCG)</h4>
                        <img src="/img/bcg.webp" alt="Ejemplo Matriz BCG"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold mb-4 text-white">Matriz Cuantitativa de Planeamiento
                            Estratégico (MCPE)</h4>
                        <img src="/img/mcpe.png" alt="Ejemplo Matriz MCPE"
                            class="rounded-lg shadow-md w-full h-48 object-cover cursor-pointer"
                            onclick="openImageModal(this)">
                    </div>
                </div>
            </section>

            <!-- Modal para mostrar la imagen -->
            <div id="imageModal"
                class="fixed inset-0 hidden z-50  items-center justify-center bg-black bg-opacity-75">
                <div
                    class="max-w-lg relative bg-white top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 p-4 rounded-lg shadow-lg">
                    <button class="absolute top-2 right-2 text-black text-2xl"
                        onclick="closeImageModal()">&times;</button>
                    <img id="modalImage" src="" alt="Imagen ampliada"
                        class="rounded-lg shadow-md max-w-full h-auto mx-auto">
                </div>
            </div>

            <script>
                function openModal(modalId) {
                    const modal = document.getElementById(modalId);
                    modal.classList.remove('hidden');
                    setTimeout(() => {
                        modal.querySelector('.transform').classList.add('scale-100');
                        modal.querySelector('.transform').classList.remove('scale-95');
                        modal.querySelector('.transform').classList.add('opacity-100');
                        modal.querySelector('.transform').classList.remove('opacity-0');
                    }, 50);
                }

                function closeModal(modalId) {
                    const modal = document.getElementById(modalId);
                    modal.querySelector('.transform').classList.remove('scale-100');
                    modal.querySelector('.transform').classList.add('scale-95');
                    modal.querySelector('.transform').classList.remove('opacity-100');
                    modal.querySelector('.transform').classList.add('opacity-0');
                    setTimeout(() => {
                        modal.classList.add('hidden');
                    }, 300);
                }

                function openImageModal(imgElement) {
                    const modal = document.getElementById('imageModal');
                    const modalImg = document.getElementById('modalImage');
                    modalImg.src = imgElement.src;
                    modal.classList.remove('hidden');
                }

                function closeImageModal() {
                    const modal = document.getElementById('imageModal');
                    modal.classList.add('hidden');
                }
            </script>

        </div>


    </div>

</x-app-layout>
