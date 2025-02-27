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
            <div>
                <div class="">
                    <img src="" alt="">
                    <div>
                        <p class="">Nome <span>Celestino Trosso</span></p>
                        <p class="">Contacto <span>943047242</span></p>
                        <p class="">Endereco <span>Benguela</span></p>
                    </div>
                </div>
            
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