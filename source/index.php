<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nokengo</title>
    <link rel="icon" type="image/png" href="./images/nokengo_logo_ciano.png">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1.0.0">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </head>
  <body>
    <section id="alert">
      
    </section>
    <section id="nav">
      <div class="wrapper">
        <div class="navbar">
          <img src="./images/nokengo_logo_ciano.png" alt="Nokengo logo">
          <a href="#" class="bars">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </div>
      <div class="menu">
        <ul>
          <a data-href="#header" class='nav-item'><li>Início</li></a>
          <a data-href="#header" class='nav-item'><li>O Estúdio</li></a>
          <a data-href="#tecnologia" class='nav-item'><li>Tecnologia</li></a>
          <a data-href="#capacidades" class='nav-item'><li>Capacidades</li></a>
          <a data-href="#labs" class='nav-item'><li>Inovação</li></a>
          <a data-href="#contato" class='nav-item'><li>Contato</li></a>
        </ul>
      </div>
    </section>

    <section id="header">
      <div class="wrapper">
        <div class="content">
          <p class="h-title">Você fala digital?</p>
          <!-- <span></span> -->
          <p>Nós fornecemos soluções digitais criativas para levar seus produtos e serviços a um público mais amplo.</p>
          <a data-href="#tecnologia" class="button to-screen">Vamos começar</a>
        </div>
        <div class="image">
          <div id="float-iphone">
            <div id="ball_1" class="ball"></div>
            <div id="ball_2" class="ball"></div>
            <div id="ball_3" class="ball"></div>
          </div>
          <span></span>
        </div>
      </div>

    </section>

    <section id="tecnologia">
      <div class="wrapper">
        <div class="t-intro">
          <span class="tag absolute" data-screen='tecnologia'>Tecnologia</span>
          <p>Nós projetamos, desenvolvemos e gerenciamos soluções baseadas na web e aplicativos corporativos móveis. Podemos fazer o seu negócio funcionar melhor, competir melhor e gerar mais retorno.</p>
        </div>
        <div class="t-content" data-id="1">
          <div class="image">
            <img src="./images/tech1.png" alt="image">
            <p class="index">1</p>
          </div>
          <div class="text">
            <p class="t-title">Projeto de branding e multimídia</p>
            <p class="t-paragraph">Nós trabalhamos para contar a história da sua marca, criar uma identidade autêntica e memorável e transformá-los em uma experiência interativa digital.</p>
          </div>
        </div>
        <div class="t-content" data-id="2">
          <div class="text">
            <p class="t-title">Desenvolvimento web e software</p>
            <p class="t-paragraph">Desenvolvemos soluções inovadoras para sua empresa e adaptamos para ficar mais próximo às suas necessidades.</p>
          </div>
          <div class="image">
            <img src="./images/tech2.png" alt="image">
            <p class="index">2</p>
          </div>
        </div>
        <div class="t-content" data-id="3">
          <div class="image">
            <img src="./images/tech3.png" alt="image">
            <p class="index">3</p>
          </div>
          <div class="text">
            <p class="t-title">Soluções web e mobile</p>
            <p class="t-paragraph">Do conceito ao protótipo, para o produto. Vamos trabalhar estreitamente com você durante todo o processo para entregar o produto que você sonhava.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="capacidades">
      <div class="wrapper">
        <div class="c-intro">
          <span class="tag absolute" data-screen='capacidades'>Capacidades</span>
          <div class="text">
            <p class="t-title">Qualidade, usabilidade e um processo fluido</p>
            <p class="t-paragraph">Todos os dias buscamos atingir uma exelência criativa através de processo fluido e inovador para gerar projetos bonitos e funcionais que se encaixam na vida das pessoas. </p>
          </div>
        </div>
      </div>
      <div class="items">
        <ul>
          <li><div class="li-content"><img src="./images/item1.png" alt="item"><p>Desenvolvimento de marca</p></div></li>
          <li><div class="li-content"><img src="./images/item2.png" alt="item"><p>Conteúdo interativo</p></div></li>
          <li><div class="li-content"><img src="./images/item3.png" alt="item"><p>Design de experiência</p></div></li>
          <li><div class="li-content"><img src="./images/item4.png" alt="item"><p>Tecnologia</p></div></li>
          <li><div class="li-content"><img src="./images/item5.png" alt="item"><p>Suporte ao cliente</p></div></li>
        </ul>
        <div class="arrows">
          <!-- <a href="#"><img src="./images/l-arrow.png" alt="left"> </a>
          <a href="#"><img src="./images/r-arrow.png" alt="right"> </a> -->
        </div>
      </div>
    </section>

    <section id="labs">
      <span class="watermark">inovação e criatividade</span>
      <div class="wrapper">
        <div class="intro">
          <span class="tag absolute" data-screen='labs'>nokengo labs</span>
          <div class="text">
            <p class="t-title">Inovação e criatividade</p>
            <p class="t-paragraph">A Nokengo Labs é um núcleo interno formados pela equipe Nokengo Studio. A ideia é manter um núcleo em constante pesquisa para desenvolver ferramentas próprias para o uso da Nokengo e dos nossos clientes.</p>
            <div class="link">
              <div class="line"></div>
              <a data-href="#contato" class="to-screen">Solicite um orçamento</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contato">
      <div class="wrapper">
        <span class="tag absolute"  data-screen='contato'>contato</span>
        <div class="text">
          <p class="t-title">Vamos trabalhar juntos?</p>
          <p class="t-paragraph">Fale digital e comunique-se com o resto do mundo. Mande um e-mail para gente. Nós podemos te ajudar!</p>
          <form class='contact' method="post" accept-charset="utf-8">
            <fieldset>
              <input type="text" name="name" class="contact_name" required>
              <label for="name">Seu nome</label>
            </fieldset>
            <fieldset>
              <input type="text" name="email" class="contact_email" required>
              <label for="contact">Seu contato, pode ser um e-mail ou telefone</label>
            </fieldset>
            <fieldset data-name="textarea">
              <textarea name="message" class="contact_message" required></textarea>
              <label for="message">Precisando de ajuda? <br>Nos mande sua mensagem aqui.</label>
            </fieldset>
            <input type="submit" class="button" value="Enviar mensagem">
          </form>
        </div>
        <div class="image">
          <img src="./images/contact.png" alt="contato">
        </div>
      </div>
    </section>
    <section id="footer">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <p>contato@nokengo.com.br</p>
    </section>

    <div class='modal disactivated'>
      <div class='text'>
        <p class="t-title white modal-message">Enviado com sucesso!</p>
      </div>
    </div>
  </body>
</html>
