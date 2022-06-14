<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywordes" content="palavras-chaves,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8">
</head>
<body>

	<header>
	    <div class="center">
		<div class="logo left"><a href="/">Edilson Variedades</a></div><!--logo   o codigo  ><a href="/"> deixa a logomarca como link-->
		<nav class="desktop right">
                     <ul>

				<li><a href="">Pagina Incial</a></li>
        <li><a href="">Acessorios para Celular</a></li>
        <li><a href="">Caixa de Som</a></li>
        <li><a href="">Mochila</a></li>
        <li><a href="">Controle para TV/DVD/SOM</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
                <div class="botao-menu-mobile">
                   <i class="fa fa-bars" aria-hidden="true"></i><!-- codigo do menu-->
                     </div>
			<ul>
			<li><a href="">Pagina Incial</a></li>
        <li><a href="">Acessorios para Celular</a></li>
        <li><a href="">Caixa de Som</a></li>
        <li><a href="">Mochila</a></li>
        <li><a href="">Controle para TV/DVD/SOM</a></li>
			</ul>
		</nav>
           <div class="clear"></div><!--limpa toda flutuaçao e nao ter problema de espaçamento-->
	    </div><!--center-->
    </header>




<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/black.jpg');" class="banner-single"></div><!--banner-single-->
   <div style="background-image: url('<?php echo INCLUDE_PATH;?>images/black.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH;?>images/fone10.png');" class="banner-single"></div><!--banner-single-->

    <div class="overlay"></div><!--criar um efeito mover la em cima overlay-->
    	<div class="center">
    	<form>
    		<h2>Qual o seu melhor e-mail?</h2>
    		<input type="email" name="email" required />
    		<input type="submit" name="ação" value="Cadastrar!">
    	</form>
    </div><!--center-->
    </section><!--banner-principal-->

    
<ul>

  	<section class="especialidades">

  		<div class="center">
  		<h2 class="title">CAIXA DE SOM</h2>

</ul>

  		<div class="w33 left box-especialidade">
               <img class="" src="images/caixa 1.jpg" />
                <h4>CAIXA</h4>
                 <p>BOA QUALIDADE</p>
               <p>R$: 2880.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/caixa2.jpg" /></h3>
                <h4>CAIXA</h4>
                 <p>BOA QUALIDADE</p>
               <p>R$: 5650.00</p>
        </div><!--box-especialidade-->


         <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/caixa3.jpg" /></h3>
               <h4>CAIXA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 1150.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/caixa4.jpg" /></h3>
               <h4>CAIXA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 2150.00</p>
        </div><!--box-especialidade-->


        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/caixa5.jpg" /></h3>
                <h4>CAIXA</h4>
                 <p>BOA QUALIDADE</p>
               <p>R$: 2950.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/caixa6.jpg" /></h3>
               <h4>CAIXA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

       

       <div class="clear"></div><!--limpa toda flutuaçao e nao ter problema de espaçamento e pra autura ser levada em conta-->  
     </div><!--center-->
  </section><!--especialidades-->
  



<ul>

  <section class="especialidades">

        <div class="center">
        <h2 class="title">MOCHILA</h2>

</ul>




        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/mochila10.jpg" /></h3>
               <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/mochila2.jpg" /></h3>
               <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/mochila3.jpg" /></h3>
               <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/mochila4.jpg" /></h3>
                <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
 <h3> <img class="" src="images/mochila5.jpg" /></h3>
                <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/mochila6.jpg" /></h3>
               <h4>MOCHILA ESCOLA</h4>
                <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        

       <div class="clear"></div><!--limpa toda flutuaçao e nao ter problema de espaçamento e pra autura ser levada em conta-->  
     </div><!--center-->
  </section><!--especialidades-->







<ul>

  <section class="especialidades">

        <div class="center">
        <h2 class="title">CARREGADOR PARA CELULAR</h2>

</ul>




        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto1.jpg" /></h3>
               <h4>CARREGADOR</h4>
               <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/foto2.jpg" /></h3>
                <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto3.jpg" /></h3>
                <h4>CARREGADOR</h4>
               <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto4.jpg" /></h3>
               <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
 <h3> <img class="" src="images/foto5.jpg" /></h3>
                <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto6.jpg" /></h3>
               <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->


        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto7.jpg" /></h3>
               <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
              <h3> <img class="" src="images/foto8.jpg" /></h3>
                <h4>CARREGADOR</h4>
               <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto9.jpg" /></h3>
               <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto10.jpg" /></h3>
                <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
 <h3> <img class="" src="images/foto11.jpg" /></h3>
               <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->

        <div class="w33 left box-especialidade">
               <h3> <img class="" src="images/foto12.jpg" /></h3>
                <h4>CARREGADOR</h4>
                <p>TURBO</p>
               <p>BOA QUALIDADE</p>
               <p>R$: 250.00</p>
        </div><!--box-especialidade-->


        

       <div class="clear"></div><!--limpa toda flutuaçao e nao ter problema de espaçamento e pra autura ser levada em conta-->  
     </div><!--center-->
  </section><!--especialidades-->










<footer> 
  	<div class="center">
  		<p> Edilson/>Todos os direitos reservados</p>
  	</div><!--center-->
  </footer>
  <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>  <!--endereço onde ta meu arquivo jquery-->
  <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>


</body>
</html>  