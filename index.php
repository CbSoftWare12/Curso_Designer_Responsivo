<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NodeProp Especializado Em Soloções Digital</title>
        <meta name="viewport" content="widht=device-widht, inital-scale=1"/>
        <meta name="description" content="Agencia Especializada em Marketing
              digital, Criação de Sites e Aplicativos Mobile"/>
        <meta name="keyword" content="Agencia Digital, Software, Sites, e Publicidades"/>
        <meta name="robots" content="index, fllow"/>
        <meta name="author" content="Caique Bispo"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	<link rel="icon" href="img/icon.png">
        
    </head>
       <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           <a href="index.html"><h1 class="logo"> NodeProp - Especializada em Soluções Digitais </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Clientes</a></li>
                   <li><a href="#">Serviços</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="#">Quem somos</a></li>
                   <li><a href="#">Contato</a></li>
               </ul>
           </nav>          
        </header>
        <!-- BANNER --> 
        <div class="banner container">
            <div class="title">
                <h2> OUSE INOVAR! </h2>
                <h3> Criamos experiências e estabelecemos ações estratégicas que conectam marcas 
                    e consumidores.</h3>
            </div>
            <div class="buttons">
                <button class="btn btn-cadastrar bg-white radius"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
                <button class="btn btn-sobre bg-black radius"> Sobre <i class="fa fa-question-circle"></i></button>
            </div>
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
            <article class="servico bg-white radius">
               <a href="#"><img src="img/criacoes.jpg" alt="Campanhas publicitárias"></a>
               <div class="inner">
                   <a href="#"> Campanhas Publicitárias </a>
                   <h4>Impressos, VTs e Jingles</h4>
                   <p>Se você está precisando de criação de algum material em específico, conte com a nossa equipe de profissionais.
                   Eles farão toda campanha publicitária. VT, outdoor, folder, anúncio  e muito mais pela sua empresa no mais alto padrão de qualidade. </p>
               </div>
            </article>
            <article class="servico bg-white radius">
               <a href="#"><img src="img/md.jpg" alt="Marketing Digital"></a>
               <div class="inner">
                   <a href="#"> Marketing Digital </a>
                   <h4>Administração de Redes Sociais</h4>
                   <p>Como agência de publicidade aplicamos estratégias nos meios 
                   digitais para que a seu negócio seja visto por milhões de usuários. 
                   O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu 
                   negócio não pode ficar fora do do mercado digital </p>
               </div>
            </article>
            <article class="servico bg-white radius">
               <a href="#"><img src="img/cs.jpg" alt="Criação de Sites"></a>
               <div class="inner">
                   <a href="#"> Criação de Sites </a>
                   <h4> Sites Administráveis </h4>
                   <p>Agora você pode administrar seu site quando e como quiser.
                   E melhor ainda pois você pode pagar por este serviço, pois desenvolvemos de
                   forma. Seu site atualizado, com seus últimos 
                   produtos, integração com redes sociais, agora é possível. </p>
               </div>
            </article>
        </main>
        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
           <h2> Inscreva-se agora! </h2>
           <h3>  Receba novidades, dicas e muito mais </h3>
           <form>
              <input class="bg-black radius" type="email" name="email" placeholder="Seu email">
              <button class="bg-white radius"> Cadastrar </button>
           </form>
        </section>
        <!-- RODAPÉ -->
        <footer class="rodape container bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright">
            Copyright © NodeProp 2016. Todos os direitos reservados.
        </footer>       
        
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>      
    </body>
</html>
