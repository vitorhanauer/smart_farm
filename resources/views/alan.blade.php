<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Currículo Profissional Alan Carrassai</title>
  
  <!-- Link para o arquivo CSS externo -->
  <link rel="stylesheet" href="styles.css">
  <!-- Link para ícones do Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/alan.css') }}">
  
  <!--
  ========================= INSTRUÇÕES PARA OS ALUNOS =========================
  1) Este template usa CSS EXTERNO (arquivo styles.css separado)
  2) NÃO use style="" nas tags HTML
  3) Modifique apenas o arquivo styles.css para estilização
  4) Mantenha os comentários TODO até completar todos os exercícios
  5) Personalize o conteúdo HTML com suas informações
  =========================================================================
  -->
</head>
<body>
  <!-- Container principal da página -->
  <div class="container">
    
    <!-- ===================== SEÇÃO CABEÇALHO ===================== -->
    <header class="cabecalho">
      <div class="foto-container">
        <img src="https://i.ibb.co/MDJ59Wjd/foto.jpg" 
             alt="Foto de perfil" 
             class="foto-perfil"/>
      </div>
      
      <div class="info-principal">
        <h1 class="nome-completo">Alan Giussani Carrassai</h1>
        <h2 class="cargo-objetivo">Desenvolvedor Web | Criar um aplicativo de sucesso</h2>
        <p class="resumo-profissional">
          Comecei a programar em 2024, e desde então venho me dedicando a aprender
          e aprimorar minhas habilidades em desenvolvimento web e desenvolvimento de jogos.
        </p>
      </div>
    </header>

    <!-- ===================== GRID PRINCIPAL ===================== -->
    <div class="grid-principal">
      
      <!-- COLUNA ESQUERDA -->
      <aside class="coluna-esquerda">
        
        <!-- INFORMAÇÕES DE CONTATO -->
        <section class="secao-contato">
          <h3 class="titulo-secao">
            <i class="fa-solid fa-phone"></i>
            Contato
          </h3>
          <div class="lista-contato">
            <div class="item-contato">
              <span class="label">Email:</span>
              <a href="/cdn-cgi/l/email-protection#235046560d464e424a4f63465b464e534f4c0d404c4e" class="link-contato">
                <span class="__cf_email__" data-cfemail="6c1f09194209010d05002c091409011c0003420f0301">alan.carrassai@hotmail.com</span>
              </a>
            </div>
            <div class="item-contato">
              <span class="label">Telefone:</span>
              <span class="valor">(51) 99335-2095</span>
            </div>
            <div class="item-contato">
              <span class="label">LinkedIn:</span>
              <a href="#" class="link-contato">https://linkedin.com/in/alan-carrassai-03949537a/</a>
            </div>
            <div class="item-contato">
              <span class="label">GitHub:</span>
              <a href="#" class="link-contato">https://github.com/AlanCarrassai</a>
            </div>
            <div class="item-contato">
              <span class="label">Localização:</span>
              <span class="valor">Canoas - RS</span>
            </div>
          </div>
        </section>

        <!-- HABILIDADES TÉCNICAS -->
        <section class="secao-habilidades">
          <h3 class="titulo-secao">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            Habilidades Técnicas
          </h3>
          <div class="grid-habilidades">
            <span class="chip-habilidade">HTML5</span>
            <span class="chip-habilidade">CSS3</span>
            <span class="chip-habilidade">Git/GitHub</span>
            <span class="chip-habilidade">SQL</span>
            <span class="chip-habilidade">Python</span>
            <span class="chip-habilidade">Unity</span>
          </div>
        </section>

        <!-- IDIOMAS -->
        <section class="secao-idiomas">
          <h3 class="titulo-secao">
            <i class="fa-solid fa-globe"></i>
            Idiomas
          </h3>
          <div class="lista-idiomas">
            <div class="item-idioma">
              <span class="nome-idioma">Português</span>
              <div class="barra-nivel">
                <div class="nivel nivel-nativo"></div>
              </div>
              <span class="texto-nivel">Nativo</span>
            </div>
            <div class="item-idioma">
              <span class="nome-idioma">Inglês</span>
              <div class="barra-nivel">
                <div class="nivel nivel-avancado"></div>
              </div>
              <span class="texto-nivel">Avançado</span>
            </div>
          </div>
        </section>

      <!-- COLUNA DIREITA -->
      <main class="coluna-direita">
        
        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <section class="secao-experiencia">
          <h3 class="titulo-secao-principal">
            <i class="fa-solid fa-briefcase"></i>
            Experiência Profissional
          </h3>
          
          <div class="timeline-experiencia">
            <article class="item-experiencia">
              <div class="marcador-timeline"></div>
              <div class="conteudo-experiencia">
                <div class="cabecalho-experiencia">
                  <h4 class="cargo">Microempreendedor</h4>
                  <span class="empresa">Voe Momentos</span>
                </div>
                <p class="periodo">Janeiro 2025 - Presente</p>
                <ul class="responsabilidades">
                  <li>Design de cards e stories para o Instagram</li>
                  <li>Cotação e venda de passagens aéreas</li>
                </ul>
              </div>
            </article>
          </div>
        </section>

        <!-- FORMAÇÃO ACADÊMICA -->
        <section class="secao-formacao">
          <h3 class="titulo-secao-principal">
            <i class="fa-solid fa-graduation-cap"></i>
            Formação Acadêmica
          </h3>
          
          <div class="lista-formacao">
            <div class="item-formacao">
              <div class="info-curso">
                <h4 class="nome-curso">Bacharelado em Ciência da Computação</h4>
                <p class="instituicao">Universidade La Salle</p>
                <p class="periodo-curso">2024 - 2027</p>
              </div>
              <div class="status-curso">
                <span class="badge-cursando">Cursando</span>
              </div>
            </div>

        <!-- PROJETOS ACADÊMICOS -->
        <section class="secao-projetos">
          <h3 class="titulo-secao-principal">
            <i class="fa-solid fa-rocket"></i>
            Projetos Acadêmicos
          </h3>
          
          <div class="grid-projetos">
            <div class="card-projeto">
              <h4 class="nome-projeto">Site para uma Academia</h4>
              <p class="descricao-projeto">
                Landing page responsiva para uma academia local, contendo as 
                informações de serviços, horários e contato.
              </p>
              <div class="tecnologias-projeto">
                <span class="tech-tag">HTML</span>
                <span class="tech-tag">CSS3</span>
                <span class="tech-tag">JavaScript</span>
              </div>
              <div class="links-projeto">
                <a href="#" class="link-projeto">Ver Site</a>
                <a href="#" class="link-projeto">GitHub</a>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- ===================== RODAPÉ COM AÇÕES ===================== -->
    <footer class="rodape">
      <div class="acoes-curriculo">
        <a href="#" class="btn-acao btn-primario">
          <i class="fa-solid fa-file"></i>
          Baixar PDF
        </a>
        <a href="#" class="btn-acao btn-secundario">
          <i class="fa-solid fa-briefcase"></i>
          Ver Portfólio
        </a>
        <a href="mailto:alan.carrassai@hotmail.com" class="btn-acao btn-secundario">
          <i class="fa-solid fa-envelope"></i>
          Entrar em Contato
        </a>
      </div>
      
      <div class="info-rodape">
        <p>&copy; 2025 Alan Carrassai. Todos os direitos reservados.</p>
        <p class="atualizacao">Última atualização: Outubro 2025</p>
      </div>
    </footer>
  </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>