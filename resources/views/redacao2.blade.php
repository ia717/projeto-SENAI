<x-app-layout>

    
<div class="relative flex flex-col lg:flex-row items-start space-y-10 lg:space-y-0 lg:space-x-10 justify-center p-8">
        
        <div class="absolute right-0 top-0 mt-8 flex flex-col space-y-4">
            <button id="openSidebar1" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded"><img src="{{ asset('/images/book-01.png') }}" alt=""></button>
            <button id="openSidebar2" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded"><img src="{{ asset('/images/file-question-02.png') }}" alt=""></button>
            <button id="openSidebar3" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded"><img src="{{ asset('/images/server-02.png') }}" alt=""></button>
        </div>

        <!-- Container Principal -->
          <!-- Container principal para o conteúdo da redação -->
          <div class="w-full lg:w-3/4 max-w-4xl mb-8 lg:mb-0 mx-auto lg:ml-4">
            <!-- Botões acima do container de escrever -->
            <div class="flex justify-between mb-4">
                <a href="redacao" class="text-gray-600 hover:text-blue-600 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.707-10.707a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L8 10.414V15a1 1 0 102 0v-4.586l2.293 2.293a1 1 0 001.414-1.414l-3-3z" clip-rule="evenodd" />
                    </svg>
                    <span>Voltar</span>
                </a>
                <div class="flex space-x-2">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 12a1 1 0 011-1h4a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.5-10V7a1 1 0 10-2 0v1a1 1 0 102 0zm-2 4h2a1 1 0 110 2h-2a1 1 0 110-2z" clip-rule="evenodd" />
                        </svg>
                        <span>Salvar rascunho</span>
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 12a1 1 0 011-1h4a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.5-10V7a1 1 0 10-2 0v1a1 1 0 102 0zm-2 4h2a1 1 0 110 2h-2a1 1 0 110-2z" clip-rule="evenodd" />
                        </svg>
                        <span>Aplicar correção</span>
                    </button>
                </div>
            </div>

            <!-- Redação Section -->
            <div class="bg-white shadow-lg rounded-lg p-8">
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <input type="text" placeholder="A violência virtual e o desafio de garantir uma internet segura no Brasil" class="w-full bg-gray-100 p-4 mb-4 border border-gray-300 rounded text-gray-700">
                    <textarea rows="10" placeholder="Escreva aqui a sua redação..." class="w-full bg-gray-100 p-4 border border-gray-300 rounded text-gray-700"></textarea>
                </div>
            </div>
        </div>


        <div id="sidebar1" class="hidden fixed lg:static right-0 top-0 bg-gray-50 shadow-lg p-4 w-full lg:w-64 h-full z-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800">Estrutura</h2>
                <button id="closeSidebar1" class="bg-red-600 hover:bg-red-500 text-white px-2 py-1 rounded focus:outline-none">X</button>
            </div>


            <h3 class="font-semibold mb-2 text-gray-700">Introdução</h3>
            <div class="flex flex-col space-y-2 mb-4">
                <button style=" background-color: rgb(147 197 253 / var(--tw-bg-opacity))" class="bg-blue-300 text-blue-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-blue-400">Alusão</button>
                <button style=" background-color: rgb(147 197 253 / var(--tw-bg-opacity))" class="bg-blue-300 text-blue-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-blue-400">Conectivo</button>
                <button style=" background-color: rgb(147 197 253 / var(--tw-bg-opacity))" class="bg-blue-300 text-blue-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-blue-400">Contextualização</button>
                <button style=" background-color: rgb(147 197 253 / var(--tw-bg-opacity))" class="bg-blue-300 text-blue-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-blue-400">Tese</button>
            </div>


            <h3 class="font-semibold mb-2 text-gray-700">Desenvolvimento</h3>
            <div class="flex flex-col space-y-2 mb-4">
                <button class="bg-green-300 text-green-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-green-400">Conectivo</button>
                <button class="bg-green-300 text-green-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-green-400">Tóp. Frasal</button>
                <button class="bg-green-300 text-green-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-green-400">Repertório</button>
                <button class="bg-green-300 text-green-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-green-400">Legitimidade</button>
                <button class="bg-green-300 text-green-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-green-400">Finalização</button>
            </div>


            <h3 class="font-semibold mb-2 text-gray-700">Finalização</h3>
            <div class="flex flex-col space-y-2">
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Conectivo</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Tese</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Agente</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Ação</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Meio/Modo</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Finalidade</button>
                <button style="background-color:blueviolet" class="bg-purple-300 text-purple-800 px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-400">Retomada</button>
            </div>
        </div>



        <div id="sidebar2" class="hidden fixed lg:static right-0 top-0 bg-white shadow-lg p-4 w-full lg:w-64 h-full z-10">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold mb-4">Correção</h2>
                <button id="closeSidebar2" class="bg-red-600 hover:bg-red-500 text-white px-2 py-1 rounded">X</button>
            </div>

            <!-- Nota geral -->
            <div class="text-center mb-4">
                <span class="text-4xl font-bold text-blue-700">960</span>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-4 mb-4 text-xs flex rounded bg-gray-300">
                        <div style="width: 96%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700"></div>
                    </div>
                </div>
                <span class="text-gray-600 text-sm">960/1.000</span>
            </div>

            <!-- Competências -->
            <div class="space-y-2">
                <button id="toggleCompetencia1" class="bg-gray-200 text-gray-700 px-4 py-2 w-full flex justify-between items-center rounded">
                    Competência I
                    <span class="text-gray-500">▼</span>
                </button>
                <div id="competencia1" class="hidden text-sm text-gray-700 p-2">
                    Demonstrar domínio da norma padrão da língua escrita.
                </div>

                <button id="toggleCompetencia2" class="bg-gray-200 text-gray-700 px-4 py-2 w-full flex justify-between items-center rounded">
                    Competência II
                    <span class="text-gray-500">▼</span>
                </button>
                <div id="competencia2" class="hidden text-sm text-gray-700 p-2">
                    Compreender a proposta de redação e aplicar conceitos das várias áreas de conhecimento para desenvolver o tema dentro dos limites estruturais do texto dissertativo-argumentativo em prosa.
                </div>

                <button id="toggleCompetencia3" class="bg-gray-200 text-gray-700 px-4 py-2 w-full flex justify-between items-center rounded">
                    Competência III
                    <span class="text-gray-500">▼</span>
                </button>
                <div id="competencia3" class="hidden text-sm text-gray-700 p-2">
                    Selecionar, relacionar, organizar e interpretar informações, fatos, opiniões e argumentos em defesa de um ponto de vista.
                </div>

                <button id="toggleCompetencia4" class="bg-gray-200 text-gray-700 px-4 py-2 w-full flex justify-between items-center rounded">
                    Competência IV
                    <span class="text-gray-500">▼</span>
                </button>
                <div id="competencia4" class="hidden text-sm text-gray-700 p-2">
                    Demonstrar conhecimento dos mecanismos linguísticos necessários para a construção da argumentação.
                </div>

                <button id="toggleCompetencia5" class="bg-gray-200 text-gray-700 px-4 py-2 w-full flex justify-between items-center rounded">
                    Competência V
                    <span class="text-gray-500">▼</span>
                </button>
                <div id="competencia5" class="hidden text-sm text-gray-700 p-2">
                    Elaborar proposta de intervenção para o problema abordado, respeitando os direitos humanos.
                </div>
            </div>
        </div>

        <div id="sidebar3" class="hidden fixed right-0 top-0 bg-white shadow-lg p-4 w-64 h-full z-10">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold mb-4">Textos motivadores</h2>
                <button id="closeSidebar3" class="bg-red-600 hover:bg-red-500 text-white px-2 py-1 rounded">X</button>
            </div>

            <!-- Seção de Contadores -->
            <div class="space-y-2 text-sm mb-6">
                <div class="flex justify-between">
                    <span>Quantidade de palavras</span>
                    <span class="font-semibold">0</span>
                </div>
                <div class="flex justify-between">
                    <span>Quantidade de linhas</span>
                    <span class="font-semibold">0</span>
                </div>
                <div class="flex justify-between">
                    <span>Quantidade de parágrafos</span>
                    <span class="font-semibold">0</span>
                </div>
                <div class="flex justify-between">
                    <span>Tempo de prova</span>
                    <span class="font-semibold">00:00</span>
                </div>
            </div>


            <div class="text-sm">
                <h3 class="font-semibold mb-2">Texto I</h3>
                <p class="mb-4">
                    Violência virtual é a prática de violência através do uso de dispositivos tecnológicos, principalmente através da internet ou comunicadores instantâneos. A violência virtual está diretamente ligada à agressão moral e psicológica e pode causar danos irreparáveis. Mulheres, crianças, adolescentes e homens podem ser vítimas. A identificação se dá através das ações das pessoas. Pode envolver xingamentos e ameaças. Podemos identificar essas agressões tanto entre os jovens como entre adultos, brigas de condomínio, briga entre pais de alunos (grupos de escola), brigas entre profissionais, etc.
                </p>

                <h3 class="font-semibold mb-2">Texto II</h3>
                <p>
                    O fato de que na rede social não se pode fugir do agressor, por isso tende a ser mais massacrante. A pessoa vive constantemente cercada pelas agressões, que podem ser dirigidas diretamente a ela ou podem ser generalizadas, através de mensagens agressivas, ofensivas e caluniosas, sem que se dirijam a ninguém em particular.
                </p>
            </div>
        </div>
    </div>

    <!-- Scripts para abrir e fechar as sidebars -->
    <script>
       
        document.getElementById('openSidebar1').addEventListener('click', function() {
            document.getElementById('sidebar1').classList.remove('hidden');
        });
        document.getElementById('closeSidebar1').addEventListener('click', function() {
            document.getElementById('sidebar1').classList.add('hidden');
        });

        document.getElementById('openSidebar2').addEventListener('click', function() {
            document.getElementById('sidebar2').classList.remove('hidden');
        });
        document.getElementById('closeSidebar2').addEventListener('click', function() {
            document.getElementById('sidebar2').classList.add('hidden');
        });

        document.getElementById('openSidebar3').addEventListener('click', function() {
            document.getElementById('sidebar3').classList.remove('hidden');
        });
        document.getElementById('closeSidebar3').addEventListener('click', function() {
            document.getElementById('sidebar3').classList.add('hidden');
        });


    function toggleVisibility(buttonId, contentId) {
    document.getElementById(buttonId).addEventListener('click', function() {
        const content = document.getElementById(contentId);
        content.classList.toggle('hidden');
    });
    }

    // Ativar as funções para cada competência
    toggleVisibility('toggleCompetencia1', 'competencia1');
    toggleVisibility('toggleCompetencia2', 'competencia2');
    toggleVisibility('toggleCompetencia3', 'competencia3');
    toggleVisibility('toggleCompetencia4', 'competencia4');
    toggleVisibility('toggleCompetencia5', 'competencia5');
    </script>

</x-app-layout>
