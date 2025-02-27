<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="">
                <div class="flex h-screen">
                    <div class="w-full max-w-md mx-auto p-8 md:py-12 lg:w-1/2 self-center">
                        <form action="" method="POST">
                            <h1  class="text-[#3A4374] font-bold text-center text-2xl mb-4" > Editar Fornecedor</h1>
                            <div class="">
                                <div>
                                    <label class="block mb-2" for="">Nome Completo</label>
                                    <input value=" <?= buscar_var("nome", $fornecedor->nome) ?>" class="w-full p-[0.7rem] rounded-md" type="text"  name="nome">
                                </div>
                                <div>
                                    <label class="block my-2" for="">Contacto</label>
                                    <input value=" <?= buscar_var("nome", $fornecedor->contacto) ?>" class="w-full p-[0.7rem] rounded-md" type="text" name="contacto">
                                </div>
                                <div>
                                    <label class="block my-2" for="">Endereco</label>
                                    <input  value=" <?= buscar_var("nome", $fornecedor->endereco) ?>"  class="w-full p-[0.7rem] rounded-md" type="text" name="endereco">
                                </div>
                            </div>                           
                            <button type="submit" class="bg-[#AD1FEA] p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>