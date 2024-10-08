<x-app-layout> 

<div class="bg-white w-1/2 flex justify-around p-8 rounded-lg mt-4">
  <div class="w-1/2">
  <h6 class="text-md flex font-semibold text-gray-800 mb-4">Desafios para o enfrentamento da invisibilidade do trabalho de cuidado realizado pela mulher no Brasil - ENEM 2023</h6>
  </div>
  <div class="flex justify-between">
  <button class="w-1/2 h-1/2 p-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Trabalho</button>
      <button class="w-1/2 h-1/2 p-2 bg-gray-500 text-white text-sm rounded-md hover:bg-gray-600">Ver Tema</button>
  </div>
</div>

<div class="bg-white w-1/2 flex justify-around p-8 rounded-lg mt-4">
  <div class="w-1/2">
  <h6 class="text-md flex font-semibold text-gray-800 mb-4">Desafios para a valorização de comunidades e povos tradicionais no Brasil - ENEM 2022</h6>
  </div>
  <div class="flex justify-between">
  <button class="w-1/2 h-1/2 p-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Trabalho</button>
      <button class="w-1/2 h-1/2 p-2 bg-gray-500 text-white text-sm rounded-md hover:bg-gray-600">Ver Tema</button>
  </div>
</div>

<div class="bg-white w-1/2 flex justify-around p-8 rounded-lg mt-4">
  <div class="w-1/2">
  <h6 class="text-md flex font-semibold text-gray-800 mb-4">Invisibilidade e registro civil: garantia de acesso à cidadania no Brasil - ENEM 2021</h6>
  </div>
  <div class="flex justify-between">
  <button class="w-1/2 h-1/2 p-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Trabalho</button>
      <button class="w-1/2 h-1/2 p-2 bg-gray-500 text-white text-sm rounded-md hover:bg-gray-600">Ver Tema</button>
  </div>
</div>

<div class="bg-white w-1/2 flex justify-around p-8 rounded-lg mt-4">
  <div class="w-1/2">
  <h6 class="text-md flex font-semibold text-gray-800 mb-4">O estigma associado às doenças mentais na sociedade brasileira - ENEM 2020</h6>
  </div>
  <div class="flex justify-between">
  <button class="w-1/2 h-1/2 p-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Trabalho</button>
      <button class="w-1/2 h-1/2 p-2 bg-gray-500 text-white text-sm rounded-md hover:bg-gray-600">Ver Tema</button>
  </div>
</div>

    <div class="drawer drawer-end lg:drawer-open mr-96">
  <input id="filtro-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex flex-col">
    <!-- Botão para abrir o filtro em telas móveis -->
    <div class="fixed top-0 right-0 p-2 lg:hidden">
      <label for="filtro-drawer" class="btn btn-ghost">
        <!-- Filter Icon -->
        <svg class="h-6 w-6 text-gray-700 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-6.414 6.414A1 1 0 0014 13v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5a1 1 0 00-.293-.707L3.293 6.707A1 1 0 013 6V4z" />
        </svg>
      </label>
    </div>
  </div>
  <!-- Sidebar do Filtro -->
  <div class="drawer-side">
    <!-- Overlay para fechar o filtro ao clicar fora -->
    <label for="filtro-drawer" class="drawer-overlay"></label>
    <!-- Caixa de Filtros (sem modificações) -->
    <div class="h-full p-4 rounded-r shadow-lg transition duration-300 hover:shadow-xl overflow-y-auto bg-white text-black dark:bg-neutral-800 dark:text-white">
    <h2 class="text-xl font-medium mb-4">Filtrar</h2>
    <div class="space-y-4">
      <div>
        <label for="disciplina" class="block mb-1">Palavras Chave</label>
        <input type="text" id="palavraschave" class="rounded-lg" placeholder="Buscar por palavras chave">
      </div>
      <div>
        <label for="tipo" class="block mb-1">Vestibular</label>
        <select id="tipo" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
        <option value="">Selecione um Vestibular</option>  
          @foreach ($vestibulares as $vestibular)
            <option value="">{{ $vestibular->name }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label for="banca" class="block mb-1">Eixos Temáticos</label>
        <select id="banca" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option value="">Selecione um Tema</option>
          @foreach ($temaRedacao as $tema)
          <option value="">{{ $tema->name }}</option>
          @endforeach
        </select>

        <button class="w-full flex justify-center p-2 mt-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
      <button class="w-full flex justify-center p-2 bg-gray-500 text-white rounded-md mt-2 hover:bg-gray-600">Baixar PDF</button>
      </div>
  </div>
</div>




</x-app-layout>