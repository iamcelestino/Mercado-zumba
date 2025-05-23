<?php $this->view('partials/header') ?>
<main>
    <section>
        <div class="container py-16">
            <div class="mb-4 sm:flex itens-center justify-between">
                <h1 class="text-2xl font-bold"></h1>
            </div>
            <?php if($produto): ?>
            <div>
                <?php $imagem = busca_imagem($produto->imagem) ?>
                <?php dd($imagem)?>
                <div class="">
                    <img src="<?=$imagem?>" alt="">
                    <form method="POST">
                        <div>
                            <p class="">Nome <span><?=escape($produto->nome)?></span></p>
                            <p class="">Categoria <span><?=escape($produto->categoria)?></span></p>
                            <p class="">Preco<span><?= escape($produto->preco_unitario)?></span></p>
                        </div>
                        <div class="">
                            <input type="number" class="p-[0.4rem] font-medium rounded-md mt-4" name="quantidade">
                            <input class="" type="number" name="preco_unitario" value="<?=escape($produto->preco_unitario)?>">
                            <input class="" type="number" name="id_produto" value="<?=$produto->id_produto?>">
                        </div>
                        <button type="submit" class="bg-[#AD1FEA] p-[0.7rem]  text-white font-medium rounded-md mt-4">Registrar Venda</button>
                    </form>
                </div>
            </div>
            <?php else: ?>
                <h1>SELECIONE UM PRODUTO</h1>
            <?php endif ?>
        </div>
    </section>
</main>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }

</script>

<?php $this->view('partials/footer') ?>