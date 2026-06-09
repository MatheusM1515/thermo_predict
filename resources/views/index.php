<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thermo Predict</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans:wght@400&family=Poppins:wght@500&display=swap" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script defer src="/assets/js/script.js"></script>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <svg viewBox="0 0 300 70">
                <path d="M35 10 L55 20 L55 40 Q35 60 15 40 L15 20 Z" fill="#FFFFFF" />
                <polyline points="20,35 28,28 35,32 45,22" fill="none" stroke="#06B6D4" stroke-width="2" />
                <text x="70" y="40" font-family="Montserrat" font-size="22" fill="#FFFFFF" font-weight="600">
                    Thermo_Predict
                </text>
            </svg>
        </div>

        <nav>
            <a href="#inicio">Início</a>
            <a href="#problema">Problema</a>
            <a href="#projeto">Projeto</a>
            <a href="#solucao">Solução</a>
            <a href="#sobre_nos">Sobre Nós</a>
            <a href="#contato">Contato</a>
        </nav>

    </header>

    <section id="inicio" class="hero">
            <video autoplay muted loop playsinline class="video-banner">
                <source src="/assets/img/banner.mp4" type="video/mp4">
            </video>

            <div class="hero-conteudo">
                <h1>Monitoramento Inteligente da Cadeia Fria de Vacinas</h1>
                <br>
                <p>Segurança, Precisão e Tecnologia em tempo real.</p>
            </div>
    </section>

    <!-- PROBLEMA -->
    <section id="problema" class="problema-detalhado">
        <div class="topo-problema">
            <h2>Problema</h2>
        </div>
        <div class="subtitulo">
            <p>
                A conservação inadequada de vacinas, causada por falhas no controle de temperatura
                e pela abertura frequente de geladeiras, pode comprometer sua eficácia, gerar
                desperdícios e representar <strong>riscos à saúde pública, como:</strong>
            </p>
        </div>
        <div class="cards">
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Termômetro" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M14 14.76V3a2 2 0 0 0-4 0v11.76a4 4 0 1 0 4 0z" />
                </svg>
                <span>Falta de monitoramento contínuo da temperatura</span>
            </div>
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Geladeira aberta" viewBox="0 0 24 24" width="28"
                    height="28">
                    <path d="M6 2h12v20H6V2zm2 2v16h8V4H8z" />
                </svg>
                <span>Aberturas frequentes e não controladas da geladeira</span>
            </div>
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Alerta" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14h-2v-2h2zm0-4h-2V7h2z" />
                </svg>
                <span>Ausência de alertas em tempo real</span>
            </div>
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Perda de vacinas" viewBox="0 0 24 24" width="28"
                    height="28">
                    <rect x="4" y="6" width="16" height="12" rx="2" ry="2" fill="none" stroke="#0ea5e9"
                        stroke-width="2" />
                    <line x1="8" y1="10" x2="16" y2="10" stroke="#0ea5e9" stroke-width="2" />
                    <line x1="12" y1="12" x2="12" y2="16" stroke="#0ea5e9" stroke-width="2" />
                    <circle cx="12" cy="18" r="1" fill="#0ea5e9" />
                </svg>
                <span>Perda de vacinas por falhas na cadeia fria</span>
            </div>
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Gráfico de dados" viewBox="0 0 24 24" width="28"
                    height="28">
                    <path d="M3 3v18h18v-2H5V3zm4 10h2v4H7zm4-6h2v10h-2zm4 4h2v6h-2z" />
                </svg>
                <span>Dificuldade no registro e análise de dados</span>
            </div>
            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Risco à saúde" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M12 2L2 22h20L12 2zm1 14h-2v-2h2zm0-4h-2V8h2z" />
                </svg>
                <span>Riscos à eficácia dos imunobiológicos</span>
            </div>
        </div>
    </section>

     <!-- PROJETO -->
    <section id="projeto" class="projeto-detalhado">

        <div class="container-projeto">

            <div class="texto-projeto">

                <h2>O Projeto</h2>

                <h3>Monitoramento Inteligente de Vacinas</h3>

                <p>
                    O <strong>Thermo_Predict</strong> é um sistema inteligente desenvolvido para o monitoramento e
                    previsão de risco na conservação de vacinas termolábeis. A solução utiliza tecnologias de
                    Internet das Coisas (IoT) para acompanhar continuamente a temperatura interna e o estado
                    de abertura da porta de equipamentos de armazenamento.

                    <br><br>

                    Através da coleta e análise de dados em tempo real, o sistema é capaz de identificar padrões
                    de risco, como variações térmicas e tempo de exposição inadequado, permitindo a emissão de
                    alertas preventivos antes que a qualidade dos imunobiológicos seja comprometida.

                    <br><br>

                    Com isso, o Thermo_Predict contribui para a redução de desperdícios, aumento da segurança
                    na cadeia fria e maior eficiência nos processos de imunização.
                </p>

            </div>

            <div class="imagem-projeto">
                <img src="assets/img/img2.png" alt="Sistema de refrigeracao com infos" />
            </div>
        </div>
    </section>

    <!-- SOLUÇÃO -->
    <section id="solucao" class="solucao-detalhado">

        <div class="topo-solucao">
            <h2>A Solução</h2>
        </div>

        <div class="subtitulo">
            <p>
                O <strong>Thermo_Predict</strong> desenvolveu uma solução inovadora para o monitoramento de vacinas termolábeis,
                utilizando tecnologia de ponta para garantir a segurança e eficácia das vacinas durante o armazenamento. O sistema é
                desenvolvido para monitorar continuamente as condições de armazenamento de vacinas termolábeis,
                integrando sensores, processamento de dados e análise preditiva para identificar riscos,
                antecipar falhas na cadeia fria e emitir alertas preventivos.
                <br><br>
                <strong>Esse funcionamento é possível por meio das seguintes funcionalidades:</strong>
            </p>
        </div>

        <div class="cards">

            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Termômetro" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M14 14.76V3a2 2 0 0 0-4 0v11.76a4 4 0 1 0 4 0z" />
                </svg>
                <span> Monitoramento contínuo da temperatura interna da geladeira por meio de sensores digitais de alta
                    precisão</span>
            </div>

            <div class="card">
                <svg class="icon" fill="none" stroke="#0ea5e9" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24" width="28" height="28">

                    <rect x="6" y="3" width="10" height="18" rx="1" />
                    <circle cx="13" cy="12" r="1.2" fill="#0ea5e9" />
                </svg>

                <span> Detecção automática de abertura e fechamento da porta, permitindo identificar falhas
                    operacionais</span>
            </div>

            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Análise de dados" viewBox="0 0 24 24" width="28"
                    height="28">
                    <path d="M3 3v18h18v-2H5V3H3zm4 10h2v4H7v-4zm4-6h2v10h-2V7zm4 4h2v6h-2v-6z" />
                </svg>
                <span> Análise inteligente dos dados com base na relação entre temperatura, tempo de exposição e eventos
                    de risco</span>
            </div>

            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Alerta" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M12 22a2 2 0 0 0 2-2H10a2 2 0 0 0 2 2zm6-6V11a6 6 0 1 0-12 0v5L4 18v1h16v-1l-2-2z" />
                </svg>
                <span> Geração de alertas preventivos progressivos, antecipando riscos antes da perda das vacinas</span>
            </div>

            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Nuvem" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M19 18H6a4 4 0 1 1 0-8 5 5 0 0 1 9.7-1.3A4 4 0 1 1 19 18z" />
                </svg>
                <span> Armazenamento seguro dos dados em nuvem, garantindo histórico completo e rastreabilidade das
                    informações</span>
            </div>

            <div class="card">
                <svg class="icon" fill="#0ea5e9" aria-label="Dashboard" viewBox="0 0 24 24" width="28" height="28">
                    <path d="M3 13h4v8H3v-8zm6-6h4v14H9V7zm6 3h4v11h-4V10z" />
                </svg>
                <span> Dashboard interativo para visualização em tempo real e análise histórica dos dados
                    coletados</span>
            </div>
        </div>
    </section>

    <!-- SOBRE NÓS -->
     <section id="sobre_nos" class="sobrenos-detalhado">
        <div class="topo-sobrenos">
            <h2>Sobre Nós</h2>
        </div>
        <div class="subtitulo">
            <p>
                O Thermo_Predict é fruto do trabalho de uma equipe comprometida com a inovação e a segurança no
                armazenamento de vacinas termolábeis. Unindo conhecimento técnico e visão estratégica, desenvolvemos uma
                solução capaz de realizar monitoramento contínuo e análise de riscos em tempo real.
            </p>

            <br>

            <p>
                Mais do que um sistema, o projeto representa o esforço conjunto de profissionais dedicados a criar uma
                tecnologia confiável, eficiente e alinhada às necessidades do setor de saúde.
            </p>

            <br>

            <h3>Conheça as pessoas que tornam este projeto possível:</h3>

        </div>

        <div class="cards-equipe">
            <div class="card-membro">
                <img src="/assets/img/markos.jpeg">
                <div class="info">
                    <h4>Markos Samuell Neves Cota Silva</h4>
                    <h4>Scrum Master (SM)</h4>
                    <br>
                    <a href="https://www.linkedin.com/in/markos-samuell/" target="_blank"> LinkedIn</a>
                </div>
            </div>

            <div class="card-membro">
                <img src="/assets/img/guilherme.png">
                <div class="info">
                    <h4>Guilherme Caçuci Ladislau</h4>
                    <h4>Product Owner (PO)</h4>
                    <br>
                    <a href="https://www.linkedin.com/in/guilherme-ca%C3%A7uci-b2ab5b210/" target="_blank"> LinkedIn</a>
                </div>
            </div>

            <div class="card-membro">
                <img src="/assets/img/arthur.jpeg">
                <div class="info">
                    <h4>Arthur Rodrigues Silva</h4>
                    <h4>Desenvolvedor</h4>
                    <br>
                    <a href="https://www.linkedin.com/in/arthur-rsilva/" target="_blank"> LinkedIn</a>
                </div>
            </div>

            <div class="card-membro">
                <img src="/assets/img/matheus.jpeg">
                <div class="info">
                    <h4>Matheus Araújo Rodrigues Silva</h4>
                    <h4>Desenvolvedor</h4>
                    <br>
                    <a href="https://www.linkedin.com/in/matheus-ara%C3%BAjo-rodrigues-silva-7869163a7/" target="_blank"> LinkedIn</a>
                </div>
            </div>

            <div class="card-membro">
                <img src="/assets/img/wesley.png">
                <div class="info">
                    <h4>Wesley Amaral De Carvalho</h4>
                    <h4>Desenvolvedor</h4>
                    <br>
                    <a href="https://www.linkedin.com/in/wesley-carvalho-68a2302b5/" target="_blank"> LinkedIn</a>
                </div>    
            </div>
        </div>
    </section>

    <!-- CONTATO  -->
     <section id="contato" class="contato-detalhado">
        <div class="topo-contato">
            <h2>Contato</h2>
        </div>
        <div class="subtitulo">
            <p>
                Entre em contato conosco para saber mais sobre como o Thermo_Predict pode transformar a gestão de
                energia da sua empresa. <strong>Estamos prontos para ajudar você a alcançar eficiência e sustentabilidade.</strong>
            </p>
        </div>
    </section>

    <form>

        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" placeholder="Fale Conosco"></textarea><br><br>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar Formulário</button>

    </form>

    <!-- RODAPÉ  -->
    <footer>
        <p>© 2026 Thermo_Predict — Inovação e tecnologia a serviço da saúde.</p>
    </footer>

</body>
</html>