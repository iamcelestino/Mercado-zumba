<?php $this->view('partials/header') ?>

<main>
    <section>
        <div class="container py-16">
            <div class="mb-4 sm:flex itens-center justify-between">
                <h1 class="text-2xl font-bold"></h1>
            </div>
            <?php if($produto): ?>
            <div>
                <div class="">
                    <img src="" alt="">
                    <div>
                        <p class="">Nome <span><?=escape($produto->nome)?></span></p>
                        <p class="">Categoria <span><?=escape($produto->categoria)?></span></p>
                        <p class="">Preco<span><?= escape($produto->preco_unitario)?></span></p>
                    </div>
                    <a class="bg-[#AD1FEA] p-[0.7rem] w-full text-white font-medium rounded-md mt-4" href="">Vender</a>
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