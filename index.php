<?php 

      // Monitoramento de leads
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Casa Blanca Investimentos</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet" />
  <link rel="preload" href="./libs/lite-youtube/lite-yt-embed.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <link rel="preload" href="./libs/accordions/accordion.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <link rel="shortcut icon" href="./images/Logo_icone_casa blanca_white.png" type="image/x-icon" />
</head>

<body>
  <!-- #navbar -->
  <nav class="navbar">
    <div class="navbar-container s-center">
      <input type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <ul class="menu-items">
        <img src="./images/Logo_icone_casa blanca_black.png" alt="" />
        <img class="eqi" src="./images/eqi--black.png" alt="" />
        <li><a href="#sVideo">Vídeo</a></li>
        <li><a href="#sInvestimentos">investimentos</a></li>
        <li><a href="#sHistoria">História</a></li>
        <li><a href="#sSolucao">Sua solução</a></li>
        <li><a href="#sEquipe">Equipe</a></li>
        <li><a href="#sFaq">Dúvidas</a></li>
      </ul>
      <img src="./images/logo.png" alt="" class="logo" />
    </div>
  </nav>
  <!-- navbar -->

  <!-- #s-hero -->
  <section class="s-hero">
    <div class="bg-cover"></div>
    <div class="s-center">
      <img class="logo" src="./images/logo_casa_blanca_white.png" alt="" />
      <h1>Simplifique seus investimentos com a Casa Blanca</h1>
      <span>Abra sua conta de forma rápida e gratuita</span>
      <button class="btn--cta">Abra sua conta</button>
    </div>
  </section>

  <!-- #s-video -->
  <section id="sVideo" class="s-video">
    <div class="s-center">
      <h2>
        Desfrute de total controle e transparência à medida que seus investimentos
        crescem no piloto automático.
      </h2>
      <video type="video/mp4" controls preload="auto" src="./images/video-compressed.mp4"></video>
      <button class="btn--cta">Começar agora</button>
    </div>
  </section>

  <!-- #s-investimentos -->
  <section id="sInvestimentos" class="s-investimentos">
    <div class="s-center">
      <span>INVESTIMENTOS</span>
      <h2>
        Existem mais de mil alternativas de investimentos disponíveis para ajudá-lo
        a impulsionar o crescimento do seu patrimônio.
      </h2>
      <p>
        A Casa Blanca identifica o perfil e o momento de vida de cada cliente, para
        que assim possa oferecer o melhor caminho para que seus objetivos sejam
        alcançados a curto, médio e longo prazo. Apoia na estruturação de um
        portfólio personalizado de investimentos, de acordo seu perfil e a alocação
        estratégica do seu portfólio.
      </p>
      <div class="cards">
        <article class="cards__card">
          <img src="./images/elevacao.png" alt="" class="icon" />
          <h3>Renda variável</h3>
          <p>
            Aposte na renda variável e impulsione seus ganhos financeiros. Esse
            tipo de investimento envolve maior risco, mas também oferece potencial
            de retorno mais alto. Descubra como investir em ações, fundos
            imobiliários e outros ativos que podem valorizar e trazer lucros
            significativos para o seu patrimônio.
          </p>
        </article>
        <article class="cards__card">
          <img src="./images/elevacao.png" alt="" class="icon" />
          <h3>Renda fixa</h3>
          <p>
            Invista com segurança e estabilidade na renda fixa. Com essa opção de
            investimento, você pode contar com uma remuneração previsível e baixo
            risco, geralmente baseada em taxas de juros. Descubra como garantir uma
            rentabilidade estável para o seu dinheiro.
          </p>
        </article>
        <article class="cards__card">
          <img src="./images/house.png" alt="" class="icon" />
          <h3>Offshore</h3>
          <p>
            Hospedados fora do território empresas offshore oferecem vantagens para
            quem busca proteger seu patrimônio, com menor incidência de impostos e
            benefícios como proteção patrimonial e facilidade no planejamento
            sucessório.
          </p>
        </article>
        <article class="cards__card">
          <img src="./images/house.png" alt="" class="icon" />
          <h3>Holding patrimonial</h3>
          <p>
            A distribuição de bens entre os herdeiros pode ser planejada
            antecipadamente por meio de uma holding patrimonial, evitando processos
            judiciais e reduzindo a carga tributária sobre os bens. Isso facilita o
            processo sucessório.
          </p>
        </article>
        <article class="cards__card">
          <img src="./images/house.png" alt="" class="icon" />
          <h3>Investimentos imobiliários</h3>
          <p>
            Um especialista em investimentos imobiliários pode ajudar a encontrar
            as melhores opções de financiamento e aproveitar as vantagens
            oferecidas pelo banco, tornando o investimento imobiliário mais
            rentável e seguro, com taxas de juros reduzidas e prazos de pagamento
            flexíveis.
          </p>
        </article>
      </div>
      <button class="btn--cta">Comece a investir agora mesmo</button>
    </div>
  </section>

  <!-- #s-historia -->
  <section id="sHistoria" class="s-historia">
    <h2>Conheça nossa história</h2>
    <div class="s-center">
      <div class="up-to-tablet">
        <div class="img-wrapper"><img src="./images/owners.jpg" alt="" /></div>
        <div class="img-wrapper"><img src="./images/building.jpg" alt="" /></div>
      </div>
      <div class="img-wrapper"><img src="./images/owners.jpg" alt="" /></div>
      <div class="wrapper">
        <div class="text">
          <p>
            Na Casa Blanca - Assessoria de Investimentos acreditamos que a sua
            liberdade financeira deve ser descomplicada, por isso somos
            credenciamos à EQI e ao Banco BTG, conforme registro de verificação
            disponível através do site da CVM e ANCORD.
          </p>
          <p>
            Nossa missão é simplificar e otimizar sua experiência de investimento,
            para que você possa se concentrar no que mais importa em sua vida.
            Queremos que você desfrute de total controle e tranquilidade, enquanto
            seus investimentos crescem de forma automatizada.
          </p>
          <p>
            Somos mais do que uma empresa de investimentos. Somos seus parceiros
            confiáveis, cuidando dos seus ativos e abrindo caminhos para seu
            sucesso financeiro.
          </p>
        </div>
        <div class="inner-wrapper">
          <div class="img-wrapper"><img src="./images/building.jpg" alt="" /></div>
          <div class="text">
            <p>
              Nossos assessores possuem um número limitado de clientes investidores
              para garantir um atendimento altamente qualificado e personalizado em
              todos os processos.
            </p>
            <p>
              Valorizamos a transparência, a ética e a sustentabilidade em todas as
              nossas operações, buscando construir relacionamentos e ser o seu guia
              confiável durante sua jornada financeira.
            </p>
            <p>
              Conte com o aconselhamento profissional de seu assessor certificado,
              comprometido em fornecer serviços de excelência com seriedade e
              competência, para ajudar você a alcançar seus objetivos financeiros.
            </p>
            <p>
              Deixe-nos cuidar do seu patrimônio enquanto você desfruta da vida,
              sua jornada para a prosperidade começa agora.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- #s-ajudar -->
  <section id="sSolucao" class="s-ajudar">
    <div class="s-center">
      <h2>Como podemos te ajudar?</h2>
      <div class="wrapper">
        <div class="text">
          <h3>Tenha os seus investimentos na palma das suas mãos!</h3>
          <img class="dashboard" src="./images/dashboard.png" alt="" />
          <p>
            Se você está procurando um lugar confiável e experiente para cuidar dos
            seus investimentos, a Casa Blanca é a escolha certa para você. Com uma
            equipe altamente qualificada, a Casa Blanca pode ajudá-lo a alcançar
            seus objetivos financeiros.
          </p>
          <p>
            Uma das principais razões pelas quais a Casa Blanca é uma ótima escolha
            para cuidar dos seus investimentos é a sua abordagem personalizada. Nós
            entendemos que cada investidor tem necessidades e objetivos únicos, e é
            por isso que criamos soluções de investimento sob medida para cada
            cliente.
          </p>
          <p>
            Trabalhamos com você para entender suas metas financeiras e criar um
            plano de investimento personalizado que leve em consideração sua
            tolerância ao risco, horizonte de investimento e outras necessidades
            específicas.
          </p>
        </div>
        <img class="phone" src="./images/phone.png" alt="" />
      </div>
    </div>

    <button class="btn--cta btn--black">Invista agora mesmo</button>
  </section>

  <!-- #s-equipe -->
  <section id="sEquipe" class="s-equipe s-center">
    <div class="membros">
      <div class="membros__membro">
        <div class="img-wrapper"><img src="./images/jaque.png" alt="" /></div>

        <h3>Jacqueline Bueno</h3>
        <span>Sócia - Casa Blanca</span>

        <ul>
          <li>
            <p>
              Experiência no mercado financeiro e especialista em renda fixa,
              variável e gestão patrimonial
            </p>
          </li>
          <li>
            <p>
              Assessora de investimentos certificado pela Ancord e credenciado da
              CVM
            </p>
          </li>
          <li>
            <p>Advogada. Pós-graduada pela Fundação Getúlio Vargas - FGV</p>
          </li>
        </ul>
      </div>

      <div class="membros__membro">
        <div class="img-wrapper"><img src="./images/jose.png" alt="" /></div>

        <h3>José Eduardo Nabuco</h3>
        <span>Assessor</span>

        <ul>
          <li>
            <p>
              Experiência no mercado financeiro e especialista em fundos
              imobiliários
            </p>
          </li>
          <li>
            <p>
              Assessor de investimentos certificado pela Ancord e credenciado da
              CVM
            </p>
          </li>
          <li>
            <p>
              Bacharel em Engenharia de Produção, com pós-graduação em Mercado
              financeiro e banking
            </p>
          </li>
        </ul>
      </div>

      <div class="membros__membro">
        <div class="img-wrapper"><img src="./images/lucas.png" alt="" /></div>

        <h3>Lucas Toledo</h3>
        <span>Sócia - Casa Blanca</span>

        <ul>
          <li>
            <p>
              Experiência no mercado financeiro e especialista em renda variável
            </p>
          </li>
          <li>
            <p>
              Assessor de investimentos certificado pela Ancord e credenciado da
              CVM.
            </p>
          </li>
          <p>
            <li>
              <p>Oficial da Marinha Mercante</p>
            </li>
          </p>
          <li>
            <p>Mestre em Engenharia Mecânica - Unesp</p>
          </li>
        </ul>
      </div>
    </div>

    <button class="btn--cta btn--black">Invista com quem entende</button>
  </section>

  <!-- #s-faq -->
  <section id="sFaq" class="s-faq s-center">
    <h2>Saiba quais são as dúvidas frequêntes de nossos clientes</h2>
    <div class="accordion-container">
      <div class="ac">
        <h5 class="ac-header">
          <img src="./images/Logo_icone_casa blanca_black 2.png" alt="" />
          <button class="ac-trigger">
            <span>O que é um assessor de investimentos e por quê eu preciso de
              um?</span>
          </button>
        </h5>
        <div class="ac-panel">
          <p class="ac-text">
            Um assessor de investimentos é um profissional que ajuda os
            investidores a tomar decisões informadas sobre como investir seu
            dinheiro. Podemos te ajudar com a análise do mercado financeiro, a
            seleção de ativos para investir e a elaboração de um plano de
            investimento personalizado.<br /><br />
            Ter um assessor de investimentos pode ser benéfico porque eles podem
            ajudar a maximizar seus retornos de investimento e minimizar o risco.
          </p>
        </div>
      </div>

      <div class="ac">
        <h5 class="ac-header">
          <img src="./images/Logo_icone_casa blanca_black 2.png" alt="" />
          <button class="ac-trigger">
            <span>Qualquer um pode abrir uma conta na Casa Blanca?</span>
          </button>
        </h5>
        <div class="ac-panel">
          <p class="ac-text">
            Sim, a plataforma foi desenvolvida pensando em todos os perfis de
            usuários e investidores, para que invistam de forma simples e
            descomplicada.
          </p>
        </div>
      </div>

      <div class="ac">
        <h5 class="ac-header">
          <img src="./images/Logo_icone_casa blanca_black 2.png" alt="" />
          <button class="ac-trigger">
            <span>Qual o valor mínimo para começar a investir com a Casa Blanca?</span>
          </button>
        </h5>
        <div class="ac-panel">
          <p class="ac-text">
            Você pode começar a investir partindo de qualquer valor, porém alguns
            investimentos possuem valor de aplicação mínima que você confere
            diretamente na plataforma. Além disso, você pode sanar todas as suas
            dúvidas sempre que precisar com um de nossos assessores ou nos nossos
            canais oficiais.
          </p>
        </div>
      </div>

      <div class="ac">
        <h5 class="ac-header">
          <img src="./images/Logo_icone_casa blanca_black 2.png" alt="" />
          <button class="ac-trigger">
            <span> Qual o papel do assessor Casa Blanca? </span>
          </button>
        </h5>
        <div class="ac-panel">
          <p class="ac-text">
            O assessor Casa Blanca atua auxiliando o cliente a definir a melhor
            estratégia financeira, sanando dúvidas, apresentando oportunidades
            sempre alinhadas com o perfil e objetivos do cliente.
          </p>
        </div>
      </div>

      <div class="ac">
        <h5 class="ac-header">
          <img src="./images/Logo_icone_casa blanca_black 2.png" alt="" />
          <button class="ac-trigger">
            <span>
              Eu não tenho tempo para ficar acompanhando o mercado, ainda assim,
              posso investir?
            </span>
          </button>
        </h5>
        <div class="ac-panel">
          <p class="ac-text">
            Sim! Como seu parceiro de investimentos, a EQI irá te apoiar
            acompanhando o mercado, trazendo informações rápidas e oportunidades de
            forma ágil, através do seu assessor ou dos nossos canais de comunicação
            oficiais.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="modal modal--main-form is-hidden" id="modal">
    <div class="modal__image-wrapper">
      <img data-src="./public/images/ft05.jpg" class="lazyload" alt="" />
    </div>

    <form method="post" action="enviar.php" id="enviar" name="enviar" class="form" autocomplete="off"
      onsubmit="return validateForm(e)">
      <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />
      <div class="wrapper">
        <button class="btn btn--full btn--close" type="button">&times;</button>

        <h6>Simulador de Renda Fixa</h6>
        <p>
          Descubra qual o melhor investimento em renda fixa para ter mais
          rentabilidade com a mesma segurança. <br />
          Preencha os campos para fazer o download gratuito.
        </p>
        <p id="alertForm" class="alert is-hidden">
          Preencha todos os campos corretamente!
        </p>
        <!-- FORM__NAME -->
        <div class="form__field-wrapper">
          <label class="" for="name-form">Nome*</label>
          <input type="text" name="name-form" id="nameForm" placeholder="Seu nome aqui" autocomplete="off"
            oninput="validateName(this)" required />
        </div>

        <!-- FORM__EMAIL -->
        <div class="form__field-wrapper">
          <label for="email-form">Seu melhor e-mail para contato*</label>
          <input type="email" name="email-form" id="emailForm" placeholder="email@exemplo.com"
            oninput="validateEmail(this)" required />
        </div>

        <!-- FORM__CELLPHONE -->
        <div class="form__field-wrapper">
          <label class="" for="cellphone-form">Número de celular*</label>
          <input type="tel" name="cellphone-form" id="cellphoneForm" placeholder="Seu número aqui"
            title="Seu número de celular com o código de área" oninput="validateNumber(this)" onkeypress="mascara(this)"
            maxlength="15" autocomplete="off" required />
        </div>

        <!-- FORM__QUANTIA -->
        <div class="form__field-wrapper">
          <label for="capital-form">Faixa de patrimônio que tem investido*</label>
          <div class="form__select-wrapper">
            <select name="capital-form" required>
              <option selected="selected" value="Não tenho valor para investir">
                Não tenho valor para investir
              </option>
              <option value="Até 30 mil">Até R$30 mil</option>
              <option value="De R$ 30 mil a R$ 60 mil">
                De R$ 30 mil a R$ 60 mil
              </option>
              <option value="De R$ 60 mil a R$ 100 mil">
                De R$ 60 mil a R$ 100 mil
              </option>
              <option value="De R$ 100 mil a R$ 300 mil">
                De R$ 100 mil a R$ 300 mil
              </option>
              <option value="De R$ 300 mil a R$ 500 mil">
                De R$ 300 mil a R$ 500 mil
              </option>
              <option value="De R$ 500 mil a R$ 1 milhão">
                De R$ 500 mil a R$ 1 milhão
              </option>
              <option value="De R$ 1 milhão a R$ 5 milhões">
                De R$ 1 milhão a R$ 5 milhões
              </option>
              <option value="Acima de 5 milhões">Acima de 5 milhões</option>
            </select>
          </div>
        </div>

        <div class="form__field-wrapper">
          <p class="button-title">Já investe?</p>
          <div class="button-wrapper">
            <div class="inner-wrapper">
              <label for="investeFormSim">Sim</label>
              <input type="radio" id="investeFormSim" name="sn-investe-form" value="sim" />
            </div>
            <div class="inner-wrapper">
              <label for="investeFormNao">Não</label>
              <input type="radio" id="investeFormNao" name="sn-investe-form" value="nao" />
            </div>
          </div>
        </div>

        <button class="btn btn--black btn--full btn--submit" name="submit-btn" formaction="enviar.php" type="submit"
          id="enviar" title="Enviar formulário">
          Quero minha planilha grátis!
        </button>
      </div>
    </form>
  </div>

  <footer>
    <p>Feito com ❤️ por Blanc Digital.</p>
  </footer>

  <script src="./main.js"></script>
  <script src="./libs/lite-youtube/lite-yt-embed.js" async></script>
  <script src="./libs/accordions/accordion.min.js" defer></script>
  <script type="module">
  import "./libs/accordions/accordion.min.js"
  new Accordion(".accordion-container", {
    duration: 250,
    showMultiple: true,
  })
  </script>
</body>

</html>