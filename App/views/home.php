<?php $this->view('partials/header') ?>

<main>
    <section>
        <div class="container py-16">
          <div class="mb-4 ">
            <h1 class="text-2xl"><span class="font-bold">Bem Vindo Sr.</span> Elisa</h1>
          </div>
          <div class="md:grid grid-cols-3 gap-10">

            <div class=" p-8 rounded-md bg-[#3A4374]">
                <ion-icon class="text-5xl text-[#AD1FEA]" name="person"></ion-icon>
                <a href=""></a>
                <h1 class="text-2xl font-bold text-white">Funcioarios</h1>
            </div>

            <div class="bg-[#3A4374] p-8 rounded-md">
              <ion-icon class="text-5xl text-[#AD1FEA]" name="people-circle"></ion-icon>
              <a href=""></a>
              <h1 class="text-2xl font-bold text-white">Fornecedores</h1>
            </div>

            <div class="bg-[#3A4374] p-8 rounded-md">
              <ion-icon class="text-5xl  text-[#AD1FEA]" name="apps"></ion-icon>
              <a href=""></a>
              <h1 class="text-2xl font-bold text-white">Produtos</h1>
            </div>

            <div class="bg-[#3A4374] p-8 rounded-md">
              <ion-icon class="text-5xl text-[#AD1FEA]" name="card"></ion-icon>
              <a href=""></a>
              <h1 class="text-2xl font-bold text-white">Vendas</h1>
            </div>

            <div class="bg-[#3A4374] p-8 rounded-md">
              <div>
                <ion-icon class="text-5xl text-[#AD1FEA]" name="clipboard"></ion-icon>
                <a href=""></a>
                <h1 class="text-2xl font-bold text-white">Facturas</h1>
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