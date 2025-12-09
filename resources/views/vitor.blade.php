<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Currículo Profissional – Template CSS Externo</title>
  
  <!-- Link para o arquivo CSS externo -->
  <link rel="stylesheet" href="{{ asset('css/vitor.css') }}">
  
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
        <img src="https://media.licdn.com/dms/image/v2/D4D03AQH5qKlWM-sZHA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1711235289585?e=1766620800&v=beta&t=ah1FlTHStM66AVDrdxTJdca4s_9JbC4kY4-r_fAJ2SA" 
             alt="Foto de perfil" 
             class="foto-perfil"/>
      </div>
      
      <div class="info-principal">
        <h1 class="nome-completo">Vitor Hanauer Fontena</h1>
        <h2 class="cargo-objetivo">Desenvolvedor Fullstack | Laravel | VueJS</h2>
        <p class="resumo-profissional">
          Especializando-me em desenvolvimento de software, trabalho ativamente com PHP, 
          Laravel, Vue.js, Docker, SQL e PostgreSQL. 
          Sou proativo no aprendizado de novas ferramentas e metodologias, 
          sempre em busca de desafios que me permitam aplicar e aprimorar minhas habilidades em projetos reais.
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
            <i class="icone">📞</i>
            Contato
          </h3>
          <div class="lista-contato">
            <div class="item-contato">
              <span class="label">Email:</span>
              <a href="mailto:hanauer.fo@gmail.com" class="link-contato">
                <span class="__cf_email__" data-cfemail="6c1f09194209010d05002c091409011c0003420f0301">hanauer.fo@gmail.com</span>
              </a>
            </div>
            <div class="item-contato">
              <span class="label">Telefone:</span>
              <span class="valor">(51) 99318-9599</span>
            </div>
            <div class="item-contato">
              <span class="label">LinkedIn:</span>
              <a href="https://linkedin.com/in/vitorhanauer" target="_blank" class="link-contato">linkedin.com/in/vitorhanauer</a>
            </div>
            <div class="item-contato">
              <span class="label">GitHub:</span>
              <a href="https://github.com/vitorhanauer" target="_blank" class="link-contato">github.com/vitorhanauer</a>
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
            <i class="icone">🛠️</i>
            Habilidades Técnicas
          </h3>
          <div class="grid-habilidades">
            <span class="chip-habilidade">PHP</span>
            <span class="chip-habilidade">Laravel</span>
            <span class="chip-habilidade">HTML5</span>
            <span class="chip-habilidade">CSS3</span>
            <span class="chip-habilidade">JavaScript</span>
            <span class="chip-habilidade">VueJS</span>
            <span class="chip-habilidade">Node.js</span>
            <span class="chip-habilidade">Python</span>
            <span class="chip-habilidade">Flask</span>
            <span class="chip-habilidade">Git/GitHub</span>
            <span class="chip-habilidade">SQL</span>
            <span class="chip-habilidade">RabbitMQ</span>
            <span class="chip-habilidade">Docker</span>
          </div>
        </section>

        <!-- IDIOMAS -->
        <section class="secao-idiomas">
          <h3 class="titulo-secao">
            <i class="icone">🌐</i>
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
                <div class="nivel nivel-intermediario"></div>
              </div>
              <span class="texto-nivel">Avançado</span>
            </div>
            <div class="item-idioma">
              <span class="nome-idioma">Espanhol</span>
              <div class="barra-nivel">
                <div class="nivel nivel-basico"></div>
              </div>
              <span class="texto-nivel">Básico</span>
            </div>
          </div>
        </section>
      </aside>

      <!-- COLUNA DIREITA -->
      <main class="coluna-direita">
        
        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <section class="secao-experiencia">
          <h3 class="titulo-secao-principal">
            <i class="icone-principal">💼</i>
            Experiência Profissional
          </h3>
          
          <div class="timeline-experiencia">
            <article class="item-experiencia">
              <div class="marcador-timeline"></div>
              <div class="conteudo-experiencia">
                <div class="cabecalho-experiencia">
                  <h4 class="cargo">Bolsista - Desenvolvedor Fullstack</h4>
                  <span class="empresa">Rede SENAI-RS de Institutos de Tecnologia e Inovação</span>
                </div>
                <p class="periodo">Julho 2025 - Presente</p>
                <ul class="responsabilidades">
                  <li>Criação de sistemas backend e frontend.</li>
                  <li>Desenvolvimento de arquiteturas.</li>
                  <li>Elaboração de Diagramas.</li>
                  <li>Elaboração de Requisitos.</li>
                </ul>
                <div class="tags-tecnologias">
                  <span class="tag-tech">PHP</span>
                  <span class="tag-tech">Laravel</span>
                  <span class="tag-tech">NodeJS</span>
                  <span class="tag-tech">VueJS</span>
                  <span class="tag-tech">Python</span>
                  <span class="tag-tech">Flask</span>
                  <span class="tag-tech">MySQL</span>
                  <span class="tag-tech">Docker</span>
                  <span class="tag-tech">Git/GitHub</span>
                </div>
              </div>
            </article>

            <article class="item-experiencia">
              <div class="marcador-timeline"></div>
              <div class="conteudo-experiencia">
                <div class="cabecalho-experiencia">
                  <h4 class="cargo">Estagiário - Desenvolvedor Fullstack</h4>
                  <span class="empresa">CanoasTec</span>
                </div>
                <p class="periodo">Janeiro 2025 - Julho 2025</p>
                <ul class="responsabilidades">
                  <li>Criação de interfaces responsivas e acessíveis</li>
                  <li>Correção de Bugs</li>
                </ul>
                <div class="tags-tecnologias">
                  <span class="tag-tech">PHP</span>
                  <span class="tag-tech">Laravel</span>
                  <span class="tag-tech">VueJS</span>
                  <span class="tag-tech">Docker</span>
                  <span class="tag-tech">Git/GitLab</span>
                </div>
              </div>
            </article>

            <article class="item-experiencia">
              <div class="marcador-timeline"></div>
              <div class="conteudo-experiencia">
                <div class="cabecalho-experiencia">
                  <h4 class="cargo">Estagiário - Suporte Técnico</h4>
                  <span class="empresa">CanoasTec</span>
                </div>
                <p class="periodo">Julho 2024 - Janeiro 2025</p>
                <p class="descricao-simples">
                  Manutenção e formatação de computadores.
                </p>
              </div>
            </article>
          </div>
        </section>

        <!-- FORMAÇÃO ACADÊMICA -->
        <section class="secao-formacao">
          <h3 class="titulo-secao-principal">
            <i class="icone-principal">🎓</i>
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
                <span class="badge-cursando">Em Andamento</span>
              </div>
            </div>
            
            <div class="item-formacao">
              <div class="info-curso">
                <h4 class="nome-curso">Técnico em Eletrônica</h4>
                <p class="instituicao">IFRS Campus Canoas</p>
                <p class="periodo-curso">2020 - 2023</p>
              </div>
              <div class="status-curso">
                <span class="badge-concluido">Concluído</span>
              </div>
            </div>
          </div>
        </section>

        <!-- PROJETOS DESTACADOS -->
        <section class="secao-projetos">
          <h3 class="titulo-secao-principal">
            <i class="icone-principal">🚀</i>
            Projetos Destacados
          </h3>
          
          <div class="grid-projetos">
            <div class="card-projeto">
              <h4 class="nome-projeto">E-commerce Completo</h4>
              <p class="descricao-projeto">
                Plataforma de vendas online com painel administrativo, 
                sistema de pagamentos e gestão de estoque.
              </p>
              <div class="tecnologias-projeto">
                <span class="tech-tag">React</span>
                <span class="tech-tag">Node.js</span>
                <span class="tech-tag">MongoDB</span>
              </div>
              <div class="links-projeto">
                <a href="#" class="link-projeto">Ver Demo</a>
                <a href="#" class="link-projeto">GitHub</a>
              </div>
            </div>

            <div class="card-projeto">
              <h4 class="nome-projeto">App Mobile de Finanças</h4>
              <p class="descricao-projeto">
                Aplicativo para controle financeiro pessoal com 
                gráficos e relatórios detalhados.
              </p>
              <div class="tecnologias-projeto">
                <span class="tech-tag">React Native</span>
                <span class="tech-tag">Firebase</span>
                <span class="tech-tag">Chart.js</span>
              </div>
              <div class="links-projeto">
                <a href="#" class="link-projeto">Google Play</a>
                <a href="#" class="link-projeto">App Store</a>
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
          <i class="icone-btn">📄</i>
          Baixar PDF
        </a>
        <a href="#" class="btn-acao btn-secundario">
          <i class="icone-btn">💼</i>
          Ver Portfólio
        </a>
        <a href="/cdn-cgi/l/email-protection#dfacbaaaf1bab2beb6b39fbaa7bab2afb3b0f1bcb0b2" class="btn-acao btn-secundario">
          <i class="icone-btn">📧</i>
          Entrar em Contato
        </a>
      </div>
      
      <div class="info-rodape">
        <p>&copy; 2025 Vitor Hanauer Fontena. Todos os direitos reservados.</p>
        <p class="atualizacao">Última atualização: Outubro 2025</p>
      </div>
    </footer>
  </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>