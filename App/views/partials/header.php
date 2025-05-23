<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?=ASSETS_URL?>/style/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-[#F7F8FD]">

    <header class="">
        <div class="container py-4">
            <div class="flex items-center justify-between border-b-2 pb-4">
                <div class="">
                    <a href="">
                        <h1 class="font-bold text-2xl"> Mercado Zumba</h1>
                    </a>
                </div>
                <nav class="">
<<<<<<< HEAD
                    <ul class="flex itens-center">
                       <div class="">
                            <ul class="flex itens-center justify-center">
=======
                    <ul class="flex items-center">
                       <div class="">
                            <ul class="flex items-center justify-center">
>>>>>>> 9567253 (feat: add methods to models)
                                <li class="group relative  ml-4 list-none">
                                    <div class="">
                                        <a href="">
                                            <ion-icon class="text-xl" name="person-outline"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="hidden group-hover:block absolute bg-gray-100 min-w-[100px] shadow-lg z-10">
                                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>perfil">Perfil</a>
<<<<<<< HEAD
                                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>logout">Logout</a>
                                    </div>
                                </li>
                                <li class="ml-4"><a href="">Home</a></li>
                                <li class="ml-4 bg-[#AD1FEA] font-bold text-white px-4 py-2"><a href="<?=BASE_URL?>login">login</a></li>
=======
                                         <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>admin">Dashboard</a>
                                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>logout">Logout</a>
                                    </div>
                                </li>
                                <li class="ml-4"><a href="<?=BASE_URL?>">Pagina Inicial</a></li>
                                <li class="ml-4"><a href="<?=BASE_URL?>produto">Produtos</a></li>
                                <li class="ml-4 bg-[#AD1FEA] font-bold text-white px-4 py-2 rounded-md"><a href="<?=BASE_URL?>login">login</a></li>
                                <li class="ml-4 bg-[#AD1FEA] font-bold text-white px-4 py-2 rounded-md"><a href="<?=BASE_URL?>login">Cadastro</a></li>
>>>>>>> 9567253 (feat: add methods to models)
                            </ul>
                       </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
