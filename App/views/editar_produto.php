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
                                    <label class="block mb-2" for="">Nome do Produto</label>
                                    <input value=" <?=buscar_var('categoria', $produto->nome)?>"class="w-full p-[0.7rem] rounded-md" type="text" placeholder="nome" name="nome">
                                </div>
                                <div>
                                    <label class="block my-2" for="">categoria</label>
                                    <input value=" <?=buscar_var('categoria', $produto->categoria)?>" class="w-full p-[0.7rem] rounded-md" type="text" placeholder="categoria" name="categoria">
                                </div>
                                 <div>
                                    <label class="block my-2" for="">Fornecedor</label>
                                    <?php if($fornecedores): ?>
                                        <?php foreach($fornecedores as $fornecedor): ?>
                                            <select name="id_fornecedor" id="" class="w-full p-[0.7rem] rounded-md">
                                                <option <?=buscar_selecionado('id_fornecedor', '')?> value="">Seleciona o fornecedor do producto</option>
                                                <option <?=buscar_selecionado('id_fornecedor', $fornecedor->id_fornecedor)?> value="<?=$fornecedor->id_fornecedor?>"><?= escape($fornecedor->nome)?></option>
                                            </select>
                                        <?php endforeach ?>
                                    <?php else: ?>
                                        <select name="fornecedores" id="" class="w-full p-[0.7rem] rounded-md">
                                            <option value="">Seleciona o fornecedor do producto</option>
                                            <option value=""></option>
                                        </select>
                                    <?php endif ?> 
                                </div> 
                                <div>
                                    <label class="block my-2" for="">Preco Unitario</label>
                                    <input value="<?=buscar_var('preco_unitario', $produto->preco_unitario)?>" class="w-full p-[0.7rem] rounded-md" type="number" placeholder="preco unitario" name="preco_unitario">
                                </div>
                                <div>
                                    <label class="block my-2" for="">Quantidade</label>
                                    <input value="<?=buscar_var('quantidade_estoque', $produto->quantidade_estoque)?>"  class="w-full p-[0.7rem] rounded-md" type="number" placeholder="Quantidade" name="quantidade_estoque">
                                </div>
                            </div>                           
                            <button type="submit" class="bg-[#AD1FEA] p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>