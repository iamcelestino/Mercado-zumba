<?php $this->view('partials/header') ?>

<main>
    <section>
        <div class="container py-16">
<<<<<<< HEAD
            <div class="mb-4 sm:flex itens-center justify-between">
                <h1 class="text-2xl font-bold">Encontre os Fornecedores Aqui</h1>
                <div class="">
                    <input type="text">
                    <button>Pesquisar</button>
                </div>
            </div>
            <?php if($produtos): ?>
            <div class="sm:grid grid-cols-4">
                <?php foreach($produtos as $produto): ?>
                    <?php $imagem = busca_imagem($produto->imagem) ?>
                <div class="bg-gray-300">
=======
            <div class="mb-4 sm:flex items-center justify-between">
                <h1 class="text-2xl font-bold">Encontre os Fornecedores Aqui</h1>
                <div class="">
                    <input class="p-[0.4rem] border-2 border-[#AD1FEA] rounded-md" type="text">
                    <button class="bg-[#AD1FEA] p-[0.4rem] rounded-md text-white">Pesquisar</button>
                </div>
            </div>
            <?php if($produtos): ?>
            <div class="sm:grid grid-cols-4 gap-10">
                <?php foreach($produtos as $produto): ?>
                    <?php $imagem = busca_imagem($produto->imagem) ?>
                <div class="bg-gray-300  rounded-md">
>>>>>>> 9567253 (feat: add methods to models)
                    <img src="<?=$imagem?>" alt="">
                    <div class="p-4">
                        <p class="">Nome: <span><?=escape($produto->nome)?></span></p>
                        <p class="">Categoria: <span><?=escape($produto->categoria)?></span></p>
                        <p class="">Preco: <span><?= escape($produto->preco_unitario)?></span></p>
                        <p class="">Quantidade Estoque: <span><?= $produto->quantidade_estoque?></span></p>
                        <a class="bg-[#AD1FEA] p-[0.7rem] text-white font-medium rounded-md mt-4 inline-block w-full text-center" href="<?=BASE_URL?>produto/detalhes/<?=$produto->id_produto?>">Detalhes</a>
                    </div>
                  
                </div>
                <?php endforeach ?>
            </div>
            <?php else: ?>
                <h1>AINDA NAO HA PRODUTOS REGISTRADOS</h1>
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