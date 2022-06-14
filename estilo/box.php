/* *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Open Sans";
}


/**Boot CSS**/

html,body{   /* tira a barra  erro4040 pagina inical*/ 
	
	height: 100%;
}

input{    /* todos os input caixa tenha bora 0*/
	border: 0;
}

img{
	width: 100%;
	max-width: 400px; /* tamanho da foto */
}

.center{

	max-width: 1280px;
	padding:0 2%;
	margin:0 auto;  /* centralizar site */
}

.w33{
	width: 33.3%;   /* magen daminha box 33.3%*/
	padding: 10px;
}

.w50{
	padding: 0 10px;  /*espaçamento */
	width: 50%;  /* magen daminha box 50%*/
}

.left{
	float: left;  /* flutuar a esquerda */
}

.right{
	float: right;  /* flutuar a direita */
}

.clear{
	clear: both;  /* limpar as flutuaçoes */
}





/** Estilizaçao do site **/ 

header{
	padding:20px 0;  /* espaçamento  no header*/
	background: #3D437A;
}

header .logo{
	font-size: 25px; /* tamanho da fonte */
	font-weight: 300;
	text-transform: uppercase; /* deixa logo maiusculas */
	 
}

.logo a{
	text-decoration: none;
	color: white; /* color da fonte */
}

.mobile{
	display: none;   
}

nav.desktop ul{
    position: relative;  /* posiçao das letras */
    top: 6px;   /* espaço */
	list-style-type: none;  /* para nao aparecer as bolinhas nas letras */

}

nav.desktop li{
	font-weight: 300; /* deixa a fonte mais leve */
	font-size: 15px; /* tamanho da fonte */
	padding:0 30px;   /* espaçamento do lado */
	text-transform: uppercase; /* deixa as letras home, serviço,contato, todas maiusculas */
	display: inline-block; /* para as letras  home, serviços , contato , fica uma do lado da outra */

}

nav.desktop a{  
	color: white;  /* cor das lentras,  home, serviços , contato */
	text-decoration: none;
}

nav.desktop a:hover{  /* coloca anderline ____  no menu  home, contato, serviço */
	text-decoration: underline;
}


section.banner-container{
	width: 100%;
	height: 600px;
	position: relative;
}

.banner-single{
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	width: 100%;
	height:100%;
	opacity: 0;
	background-size: cover;
	background-position: center;
}

.overlay{
	position: absolute; /* pra manipular a pociçao dentro da box section.banner-principal*/
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: 2;  /* vai antes do formulario */ /* quanto maior for o numero mais acima vai ficar*/
   background-color: rgba(0,0,0,0.7);*/
}


section.banner-container form{
	width: 93%;  /* lagura da caixa do formulario */
	max-width: 600px;  /* tamanho maximo da caixa do formulario */
	z-index: 3;  /* vai depois do formulario */ /* quanto maior for o numero mais acima vai ficar*/
	position: absolute;
	left: 50%;
	top: 50%;
	transform:translate(-50%,-50%);  /* centralizar formulario 100% */
	-ms-transform:translate(-50%,-50%);  /* centralizar formulario 100% */
}

section.banner-container form h2{
	color: white;  /* cor da caixa do fotmulario */
	font-weight: 300;
	font-size: 30px;  /* fonte das letras */
	text-align: center;  /* centralizar */
}

section.banner-container form input[type=email]{  
	width: 100%;
	height: 66px;
	margin: 10px;  /* espaçamento  pro botão cadastrar cair um pouco pra baixo*/
	background: white;
	color: #333;
	font-size: 22px;  /* fonte */
	padding-left: 10px;  /* espaçamento */

}

section.banner-container form input[type=submit]{  
	width: 100%;
	height: 66px;
	margin: 10px;  /* espaçamento  pro botão cadastrar cair um pouco pra baixo*/
	background: #00C59E;  /* cor do botão cadastrar */
	color: white;  /* cor da letra cadastrar */
	cursor: pointer;
	font-size: 22px;  /* fonte da letra cadastrar*/
	border: 0;  /* botão sem borta */

}

section.descrição-autor{
	padding: 40px 0;  /* espaçamento dos paragrafos */
}

section.descrição-autor h2{
	font-size: 28px;
	font-weight: 300;
	color: #444;
}
section.descrição-autor p{
	font-size: 16px;
	color: #444;
	font-weight: 300;
	margin-top: 10px;
}

section.especialiadades{
	padding: 40px;
	background: #E2E2E2;
}

section.especialiadades h2.title{
    font-size: 30px;
    text-align: center;  /* centralizar */
    font-weight: 400;
    color: #999;
}

.box-especialiadade{
	margin:40px 0;  /* espaço da margem */
	padding:0 30px;
	text-align: center;  /* centralizar*/
}

.box-especialiadade h3{  /* formataçao da box especialidade */
	color: #404580;  /* cor */
	font-size: 40px;  /* fonte */
}
.box-especialiadade h4{
	font-weight: 300;
	font-size: 25px;
	color: #BABABA;
}

.box-especialiadade p{  /* formataçao do paragrafo */
	color: #444;
	font-size: 15px;
	margin-top: 10px;
}


section.extras{
	padding:30px 0;
	background: #404580;  /* cor da caixa de textos */
}

.serviços-container,.depoimentos-container{
	padding:0 50px;
}


section.extras .title{
	color: white;
	font-weight: 300;
	font-size: 25px;
	margin-bottom: 15px;
}

.depoimento-single{
	padding:15px 0;
	border-bottom: 1px solid #5056A0;  /* linha para separa o texto */
}

p.depoimento-descrição{
	font-size: 15px;
	color: white;
	font-weight: 300;
}

p.nome-Autor{
	font-size: 15px;
	color: white;
	margin: 9px;
	font-weight: bold;

}

.serviços ul{  /* ul chama direto */
	margin:20px 0;
	/*list-style-position: inside;  /* para a bolinhas do paragrafo fica dentro do nosso conteine */
}

.serviços li{
	margin-bottom: 15px;  /* margem de 15 px de cada texto */
	font-size: 15px;
	color: white;
	font-weight: 300;
}

footer{
	background: #313462;
	padding: 30px 0;
}

footer.fixed{
	position: fixed;
	bottom: 0;
	width: 100%;

}

footer p{
	color: white;
	text-align: center;
	font-weight: 400;
	font-size: 16px;



}

/* Para arrumar o scroll-x IE e EDGE*/
body{
	overflow-x: hidden;
}





section.erro-404 h2{

	text-align: center;
	color: #444;
	font-weight: 400;
	font-size: 28PX;
	border-top: 2px solid #444;
}

section.erro-404 p{
	margin-top: 8px;
	text-align: center;
	font-size: 16px;
	color: #444;
	font-weight: 300;
}

section.erro-404 a{
	color: #444;
}

.wraper-404{
	transform: translate(-50%,-50%);
	-ms- transform:translate(-50%,-50%);
    width: 100%;
    left: 50%;
    padding:0 2%;
    max-width: 1280px;
    text-align: center;
    position: absolute;
    top: 50%;
}


#map{
	width: 100%;
	height: 400px;
}

.contato-container{
	padding: 40px;
	text-align: center;
}

.contato-container input[type=text]{
	margin:8px 0;
	width: 100%;
	height: 40px;
	border: 1px solid #ccc;
	padding-left: 8px;
	font-size: 16px;
	max-width: 800px;
	color: #444;
}

.contato-container textarea{
	padding: 8px;
	margin:8px 0;
	width: 100%;
	height: 120px;
	border: 1px solid #ccc;
	padding-left: 8px;
	font-size: 16px;
	max-width: 800px;
	resize: vertical;
	color: #444;

}


.contato-container input[type=submit]{
	background: #00C59E;
	width: 140px;
	height: 40px;
	color: white;
	cursor: pointer;
}






@media screen and (max-width: 768px){  /* quando chega em 768 vai fica tudo em 100% igual tela */
	img{
		float: none !important;´/* pra força , pra rescrever a regra posta */
		display: block;
		margin:0 auto;
		
	}
	.w50{
		padding: 20px;
		width: 100%;
	}
	.w33{

		width: 100%;
		padding: 20px;
	}

	.box-especialiadade{  /*  igualar espaçamento */
		padding:40px 20px;
		margin: 0;
	}
}




@media screen and (max-width: 700px){  /* quando chegar em 700 px , vai oucutar  a as letras e aparecer o menu*/
	nav.desktop{
		display: none;
	}

	nav.mobile{
		display: block;
	}

	.botao-menu-mobile{  /* o menu vai aparecer sem redimecior o mobile aba */
		font-size: 24px;
		cursor: pointer;
		color: white;
	}

	nav.mobile ul{ /* a lista do menu em ci */
		top: 55px;
		z-index: 3;
		position: absolute;
		left: 0;
		width: 100%;
		display: none;   /* ativa janela do menu com (none ou block) */
		text-align: center;
	}

	nav.mobile li{
		font-weight: 300;
		width: 100%;
		display: block;
		background: white;
		border-bottom: 1px solid #ccc;
		font-size: 17px;
		padding:8px 0;

	}

	nav.mobile li a{
		display: block;
		color: #444;
		text-decoration: none;
	}
}
