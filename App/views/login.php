<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="">
                <div class="flex h-screen">
                    <div class="w-full max-w-md mx-auto p-8 md:py-12 lg:w-1/2 self-center">
                        <form action="" method="POST">
                            <h1  class="text-[#3A4374] font-bold text-center text-2xl mb-4" > Mini Mercado Zumba</h1>
                            <div class="">
                                <div>
                                    <label class="block mb-2" for="">Nome Completo</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="text" placeholder="Nome Completo" name="nome">
                                </div>
    
                                <div>
                                    <label class="block my-2" for="">Plavra-passe</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="password" placeholder="palavra_passe" name="palavra_passe">
                                </div>
                            </div>                           
                            <button type="submit" class="bg-[#AD1FEA] p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Cadastrar-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>