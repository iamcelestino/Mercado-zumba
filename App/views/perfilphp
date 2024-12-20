<?php $this->view('partials/header') ?>

<nav class="bg-blue-800 text-white p-4 block sm:hidden">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">CONOTA</a></h1>
    </div>
    <button class="text-white focus:outline-none" onclick="toggleMenu()">
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white"></span>
    </button>
  </div>
  <div class="mt-2 hidden" id="mobile-menu">
    <ul class="space-y-2">
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="albums"></ion-icon>
            <a class="block px-2 py-1 " href="#">Professores</a>
        </li>
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="apps"></ion-icon>
            <a class="block px-2 py-1 " href="#">Disciplinas</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="person"></ion-icon>
            <a class="block px-2 py-1 " href="#">Conta</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="copy"></ion-icon>
            <a class="block px-2 py-1 " href="#">Percurso Academico</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="copy"></ion-icon>
            <a class="block px-2 py-1 " href="#">Definicoes</a>
        </li>
    </ul>
  </div>
</nav>

<div class="flex flex-col sm:flex-row">

  <div class="hidden sm:block w-full sm:w-1/4 bg-blue-800 text-white h-screen p-4">
     <div class="flex items-center mb-6">
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">CONOTA</a></h1>
    </div>
    <ul class="space-y-4">
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="albums"></ion-icon>
            <a class="block px-2 py-1 " href="#">Professores</a>
        </li>
        <li class="flex items-center hover:bg-gray-700 rounded">
            <ion-icon name="apps"></ion-icon>
            <a class="block px-2 py-1 " href="#">Disciplinas</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="person"></ion-icon>
            <a class="block px-2 py-1 " href="#">Conta</a>
        </li>
        <li class="flex items-center  hover:bg-gray-700 rounded">
            <ion-icon name="copy"></ion-icon>
            <a class="block px-2 py-1 " href="#">Definicoes</a>
        </li>
    </ul>
  </div>

  <div class="w-full sm:w-3/4 p-6">
    <div class="flex justify-between">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
      <p>Profile</p>
    </div>
    <div class=" ">


  <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">

    <div class="relative">
      <img src="<?=ASSETS_URL?>/images/244835289_133254449042198_8478864432922741442_n.jpg" alt="Banner" class="rounded-lg object-cover h-40 w-full">

      <div class="absolute top-20 left-1/2 transform -translate-x-1/2">
        <img src="<?=ASSETS_URL ?>/images/Ellipse 14.png" alt="Profile" class="rounded-full border-4 border-white w-40 h-40">
      </div>
    </div>

    <div class="text-center mt-24">
      <h2 class="text-2xl font-semibold">Celestino Trosso-Aluno</h2>
    </div>

    <form class="mt-8 space-y-4" method="POST">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="school-name" class="block text-gray-600 font-medium">Curso</label>
          <input type="text" id="school-name" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Firm Foundation School - Accra" />
        </div>
        <div>
          <label for="email" class="block text-gray-600 font-medium">Email *</label>
          <input type="email" id="email" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="arabagrant@gmail.com" />
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="mobile" class="block text-gray-600 font-medium">Mobile No</label>
          <input type="text" id="mobile" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="0264622310" />
        </div>
        <div>
          <label for="city" class="block text-gray-600 font-medium">Endereco</label>
          <input type="text" id="city" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Accra" />
        </div>
      </div>

      <div class="text-center mt-4 sm:flex items-center justify-center">
      <input type="text" id="" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="pesquisar" />
        <button type="submit" class="bg-blue-900  text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 font-bold">
          pesquisar
        </button>
      </div>
    </form>
  </div>

  </div>
</div>

<script>

  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }

</script>

</body>
</html>