<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="">
                <div class="flex h-screen bg-blue-800">
                    <div class="hidden lg:flex lg:w-1/2 bg-cover bg-blend-multiply bg-red-400" style="background-image: url('./public/assets/images/pexels-olly-3807755.jpg');">
                    </div>
                    <div class="w-full max-w-md mx-auto p-8 md:py-12 lg:w-1/2 self-center">
                        <div class="mb-5">
                            <h1 class="text-3xl mb-4 text-white">BEM VINDO<br><span class="text-red-500 font-bold">CONOTA</span></h1>
                            <p class="text-white">Consulte suas notas, sem Filas, com privacidade e muitos outros beneficios</p>
                        </div>
                        <form action="" method="">
                            <div class="">
                                <div>
                                    <label class="block mb-2 text-white" for="">Email</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="text" placeholder="Nome Completo" name="nome">
                                </div>
                                <div>
                                    <label class="block my-2 text-white" for="">Palavra Passe</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="text" placeholder="Data de Nascimento" name="">
                                </div>
                            </div>
                            <p class="mt-4 text-center text-white">Ainda nao possui uma conta? <a class="text-red-400 inline-block" href="<?= BASE_URL?>cadastro">Crie Agora</a></p>
                            <button type="submit" class="bg-red-500 p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>
<?php $this->view('partials/footer') ?>