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
  <div class="bg-blue-800 text-white w-64 h-screen">
  <ul class="space-y-2">
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="home-outline" class="mr-2"></ion-icon>
                Dashboard
            </a>
        </li>

        
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="people-outline" class="mr-2"></ion-icon>
                    Students
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos Estudantes</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Estudante</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="school-outline" class="mr-2"></ion-icon>
                    Professores
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos professores</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">adicionar professores</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="wallet-outline" class="mr-2"></ion-icon>
                    Conta
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Perfil</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Definicoes</a>
                </li>
            </ul>
        </li>

       
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="book-outline" class="mr-2"></ion-icon>
                Disciplina
            </a>
        </li>

        
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="settings-outline" class="mr-2"></ion-icon>
                Definicoes
            </a>
        </li>
    </ul>
</div>

  </div>
</nav>

<div class="flex flex-col sm:flex-row">

  <div class="hidden sm:block w-full sm:w-1/4 bg-blue-800 text-white h-screen p-4">
     <div class="flex items-center mb-6">
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">CONOTA</a></h1>
    </div>
    <div class="bg-blue-800 text-white w-64 h-screen">
    <ul class="space-y-2">
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="home-outline" class="mr-2"></ion-icon>
                Dashboard
            </a>
        </li>

        
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="people-outline" class="mr-2"></ion-icon>
                    Students
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos Estudantes</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Estudante</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="school-outline" class="mr-2"></ion-icon>
                    Professores
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos professores</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">adicionar professores</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="wallet-outline" class="mr-2"></ion-icon>
                    Conta
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Perfil</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Definicoes</a>
                </li>
            </ul>
        </li>

       
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="book-outline" class="mr-2"></ion-icon>
                Disciplina
            </a>
        </li>

        
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="settings-outline" class="mr-2"></ion-icon>
                Definicoes
            </a>
        </li>
    </ul>
</div>

  </div>

  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino-Admin</h4>
    </div>

        <div class="bg-white shadow-lg rounded-lg">
                    <div class="w-full p-4  mx-auto">
                        <form action="" method="">
                            <h1 class="text-2xl font-bold">Adicionar Estudante</h1>
                            <div class="">
                                <div class="sm:flex items-center mb-4">
                                    <div class="sm:flex-1">
                                        <label class="" for="">Nome Completo</label>
                                        <input class="w-full p-[0.7rem] rounded-md border-2 border-gray-200" type="text" placeholder="Nome Completo" name="nome">
                                    </div>
                                    <div class="sm:flex-1">
                                        <label class="" for="">Data de Nascimeto</label>
                                        <input class="w-full p-[0.7rem] rounded-md  border-2 border-gray-200" type="text" placeholder="Data de Nascimento" name="">
                                    </div>
                                </div>
                                <div class="sm:flex items-center mb-4">
                                    <div class="sm:flex-1 sm:mt-0">
                                        <select name="" id="" class="w-full p-[0.7rem] border-2 border-gray-200 rounded-md">                                            <option value="">Professor</option>
                                        </select>
                                    </div>
                                    <div class="md:flex-1">
                                        <label class="" for=""></label>
                                        <input class="w-full p-[0.7rem] border-2 border-gray-200 rounded-md" type="email" placeholder="eamil" name="email">
                                    </div>
                                </div>
                                <div class="sm:flex items-center">
                                    <div class="sm:flex-1">
                                        <select name="" id="" class="w-full p-[0.7rem] border-2 border-gray-200 rounded-md">
                                            <option value="">Seleciona o curso</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="sm:flex-1">
                                        <label class="" for="">Palavra Passe</label>
                                        <input class="w-full p-[0.7rem] rounded-md  border-2 border-gray-200" type="text" placeholder="password" name="">
                                    </div>
                                </div>
        

                            </div>
                        
                            <div class="text-right"><button type="submit" class="bg-blue-800 p-[0.7rem] text-white font-medium rounded-md mt-4">Cadastrar-se</button></div>
                        </form>
                    </div>
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