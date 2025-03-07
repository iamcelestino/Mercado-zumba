<?php $this->view('partials/header') ?>

<main>
    <section>
        <div class="container py-16">
            <div class="mb-4 sm:flex itens-center justify-between">
                <h1 class="text-2xl font-bold">Encontre os Fornecedores Aqui</h1>
                <div class="">
                    <input type="text">
                    <button>Pesquisar</button>
                </div>
            </div>
            <div class="sm:grid grid-cols-4">
                <?php if($fornecedores): ?>
                <?php foreach($fornecedores as $fornecedor): ?>
                <div class="">
                    <img src="" alt="">
                    <div>
                        <p class=""><span class="font-bold">Nome: </span> <?= escape($fornecedor->nome)?></p>
                        <p class=""><span class="font-bold">Contacto: </span> <?= escape($fornecedor->contacto)?></p>
                        <p class=""><span class="font-bold">Endereco: </span> <?= escape($fornecedor->endereco)?></p>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else: ?>
                    <h1>NAO HA FORNECEDORES DISPONIVEIS POR ENQUANTO</h1>
                <?php endif?>
            
            </div>
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