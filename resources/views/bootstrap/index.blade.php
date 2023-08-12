@extends('bootstrap.model')
@section('body')
<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
              <span class="fs-4 text-white">kingkernel - Vagas</span>
            </a>
          </header>
          <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5 text-black-50">
              <h1 class="display-5 fw-bold">Grátis e fácil</h1>
              <p class="col-md-8 fs-4">
                Desenvolvemos um sistema gratuito de divulgação e pesquisa de vagas. Fácil de pesquisar, fácil de cadastrar.
              </p>
              <button class="btn btn-success btn-lg" type="button">Eu Quero!</button>
            </div>
          </div>
          <div class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Pague apenas se :</h2>
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
              <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class=" text text-white fw-boldtext-body-emphasis">Criamos uma regra de negócio diferente</h2>
                <p class="text-body-secondary">Você paga apenas se quiser os recursos exclusivos de assinantes, como envio de e-mail, filtros dos melhores profissionais e empresas, destaque ou sigilo, entre outros.</p>
                <!-- <a href="#" class="btn btn-primary btn-lg">Primary button</a> -->
              </div>
              <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                  <div class="col d-flex flex-column gap-2">
                    
                      <span class="fa-solid fa-envelopes-bulk fa-3x"></span>
                    
                    <h4 class="text text-white fw-semibold mb-0">Email por filtros</h4>
                    <p class="text-body-secondary">Receba e-mail apenas se algum filtro for dentro do especificado, com valor, área, empresa ou tecnologia.</p>
                  </div>
                  <div class="col d-flex flex-column gap-2">
                    <span class="fa-solid fa-user-secret fa-3x"></span>
                    <h4 class="text text-white fw-semibold mb-0">Sigilo</h4>
                    <p class="text-body-secondary">Pesquisar secretamente, profissionais ou vagas</p>
                  </div>
                  <div class="col d-flex flex-column gap-2">
                        <span class="fa-solid fa-medal fa-3x"></span>
                    <h4 class="text text-white fw-semibold mb-0">Destaque</h4>
                    <p class="text-body-secondary">Seja destaque para os candidatos, ou seja detaque para as empresas.</p>
                  </div>
                  <div class="col d-flex flex-column gap-2">
                    <span class="fa-solid fa-print fa-3x"></span>
                    <h4 class="text text-white fw-semibold mb-0">Relatorios e Listas</h4>
                    <p class="text-body-secondary">Exporte informações</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="container text text-white">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-body-secondary">© 2023 Kingkernel, Inc</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class=" text-white fa-solid fa-house fa-3x"></span>
              </a>
          
              <ul class="nav col-md-4 justify-content-end">
               <!-- 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
               -->
              </ul>
            </footer>
          </div>
    </div>
</main>
@endsection