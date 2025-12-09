<!DOCTYPE html>
<html lang="pt-BR" class="theme-blue"><!-- remove 'theme-blue' pra voltar ao laranja -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Currículo — MAICON LEITES</title>
  <link rel="stylesheet" href="{{ asset('css/maicon.css') }}">
  <meta name="description" content="Currículo de Maicon Leites — Infraestrutura, vSphere, Veeam, Linux.">
</head>
<body>
  <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>
  <div class="page-accent-left" aria-hidden="true"></div>

  <div class="container">
    <!-- ===================== HEADER ===================== -->
    <header class="cabecalho" role="banner" aria-labelledby="nome">
      <div class="foto-hero">
        <div class="foto-ring">
          <!-- imagem: agora caminho RELATIVO + dimensões pra evitar layout shift -->
          <img src="https://media.licdn.com/dms/image/v2/D4D03AQGPxb2dJjVXHQ/profile-displayphoto-crop_800_800/B4DZlzvHsVJIAU-/0/1758583368489?e=1766620800&v=beta&t=lcgm3gQWSEIWrtKUPiwIO1jkXTJFagpLCehKd0GmGdU"
               alt="Foto de MAICON LEITES"
               class="foto-perfil"
               width="880" height="1174"
               loading="lazy"
               decoding="async"
               fetchpriority="high"/>
        </div>
      </div>

      <div class="info-principal">
        <h1 class="nome-completo" id="nome">MAICON LEITES</h1>
        <p class="subtitulo">Analista de Infraestrutura • vSphere • Veeam • Linux</p>

        <!-- SOBRE MIM -->
        <section class="sobre" aria-labelledby="sobre-titulo">
          <h2 class="ribbon-title" id="sobre-titulo"><span>Sobre mim</span></h2>
          <p class="resumo-profissional">
            Acadêmico de Ciências da Computação com foco em Infraestrutura, Redes, VMware e Veeam.
            Experiência em automação de templates Windows com Packer + PowerCLI,
            hardening de repositórios Linux (XFS + Imutabilidade) e documentação clara para troubleshooting.
          </p>

          <!-- CONTATOS -->
          <div class="contatos-inline" aria-label="Contatos">
            <a href="mailto:maiconblrs@gmail.com">maiconblrs@gmail.com</a>
            <span class="sep">•</span>
            <a href="https://www.linkedin.com/feed/?trk=404_page" target="_blank" rel="noopener">
              LinkedIn
            </a>
            <span class="sep">•</span>
            <a href="https://wa.me/5551989103776" target="_blank" rel="noopener">📱 WhatsApp</a>
            <span class="sep">•</span>
            <a href="https://www.google.com/maps/search/?api=1&query=Canoas,+RS,+Brasil" target="_blank" rel="noopener">📍 Canoas–RS, Brasil</a>
          </div>
        </section>
      </div>
    </header>

    <!-- ===================== GRID PRINCIPAL ===================== -->
    <div class="grid-principal" id="conteudo">
      <!-- ===== COLUNA ESQUERDA (sticky) ===== -->
      <aside class="coluna-esquerda" aria-label="Painel lateral">
        <!-- HABILIDADES -->
        <section class="secao-bloco" aria-labelledby="hab-title">
          <h2 class="sec-title" id="hab-title">Habilidades</h2>
          <div class="chips" role="list">
            <a class="chip" role="listitem" href="https://www.veeam.com/" target="_blank" rel="noopener">Veeam</a>
            <a class="chip" role="listitem" href="https://www.vmware.com/products/vsphere.html" target="_blank" rel="noopener">vSphere/ESXi</a>
            <a class="chip" role="listitem" href="https://www.linux.org/" target="_blank" rel="noopener">Linux</a>
            <a class="chip" role="listitem" href="https://www.microsoft.com/windows-server" target="_blank" rel="noopener">Windows Server</a>
            <a class="chip" role="listitem" href="https://developer.vmware.com/powercli" target="_blank" rel="noopener">PowerCLI</a>
          </div>
        </section>

        <!-- IDIOMAS -->
        <section class="secao-bloco" aria-labelledby="idi-title">
          <h2 class="sec-title" id="idi-title">Idiomas</h2>
          <div class="idioma">
            <span>Português</span>
            <div class="bar"><div class="bar-fill" style="width:100%"></div></div>
            <span class="nivel">Nativo</span>
          </div>
        </section>

        <!-- HOBBIES -->
        <section class="hobbies-panel" aria-labelledby="hob-title">
          <h2 class="panel-title" id="hob-title">Hobbies</h2>
          <ul class="hobbies-list" role="list">
            <li class="hobbie"><span class="icon">🎧</span><span class="label">Música</span></li>
            <li class="hobbie"><span class="icon">📝</span><span class="label">Escrever</span></li>
            <li class="hobbie"><span class="icon">♟️</span><span class="label">Xadrez</span></li>
            <li class="hobbie"><span class="icon">🎮</span><span class="label">Jogos</span></li>
            <li class="hobbie"><span class="icon">⚽</span><span class="label">Futebol</span></li>
            <li class="hobbie"><span class="icon">📺</span><span class="label">TV</span></li>
          </ul>
        </section>
      </aside>

      <!-- ===== COLUNA DIREITA ===== -->
      <main class="coluna-direita" aria-label="Conteúdo principal">
        <!-- EXPERIÊNCIA -->
        <section class="secao-conteudo" aria-labelledby="exp-title">
          <h2 class="ribbon-title" id="exp-title"><span>Experiência</span></h2>
          <div class="timeline">
            <article class="timeline-item">
              <div class="dot"></div>
              <div class="card">
                <h3 class="cargo">Analista de Infraestrutura</h3>
                <p class="empresa">Infiniit</p>
                <p class="periodo">Abr 2025 – Atual • Canoas/RS</p>
                <ul>
                  <li>Automação de templates Windows (Packer + PowerCLI).</li>
                  <li>Hardening de repositórios Linux (XFS + Imutability).</li>
                  <li>Documentação e troubleshooting em vSphere/Redes.</li>
                </ul>
              </div>
            </article>
          </div>
        </section>

        <!-- PROJETOS -->
        <section class="secao-conteudo" aria-labelledby="proj-title">
          <h2 class="ribbon-title" id="proj-title"><span>Projetos</span></h2>
          <div class="projetos-grid">
            <article class="proj-card">
              <h3 class="proj-title">Pipeline de Template Windows Server</h3>
              <p>Automação de VM base com hardening e sysprep.</p>
            </article>
            <article class="proj-card">
              <h3 class="proj-title">Repositório Veeam Imutável</h3>
              <p>Implementação de Linux + XFS com Immutability.</p>
            </article>
          </div>
        </section>

        <!-- FORMAÇÃO -->
        <section class="secao-conteudo" aria-labelledby="form-title">
          <h2 class="ribbon-title" id="form-title"><span>Formação & Certificações</span></h2>
          <ul class="lista-formacao">
            <li>Bacharelado em Ciências da Computação — Univ. La Salle (2023 – Atual)</li>
            <li>Técnico em Enfermagem — O Acadêmico (2019 – 2021)</li>
            <li>VTSP VMware (<span class="badge badge-ok">concluído</span>)</li>
            <li>Veeam VMCE (<span class="badge badge-estudo">concluído</span>)</li>
            <li>Udemy TCP/IP & Wireshark (<span class="badge badge-ok">concluído</span>)</li>
          </ul>
        </section>
      </main>
    </div>

    <!-- ===================== RODAPÉ ===================== -->
    <footer class="rodape" role="contentinfo">
      <p>© 2025 MAICON LEITES — Última atualização: Outubro 2025</p>
      <button class="btn-print" onclick="window.print()" aria-label="Salvar currículo em PDF">
        🖨️ Salvar PDF
      </button>
    </footer>
  </div>
</body>
</html>
