
/*
$(function(){

	// aqui vai todo nosso codigo de javascript.
    $('nav.mobile').click(function(){
    	// oque vai acontecer quando clicarmos na nav.mobile!

    	var listaMenu= $('nav.mobile ul');

        // abrir menu atraves do fadeIn
        if (listaMenu.is(':hidden') == true){  
            listaMenu.fadeIn();
    }
        else{
            listaMenu.fadeOut();
        }

 })

})

*/

/****************************************************************************/


  // Abrir ou fechar o menu
/*
$(function(){
    $('nav.mobile').click(function(){
    var listaMenu= $('nav.mobile ul');
     listaMenu.slideToggle();



  })
})

*/





/****************************************************************************************/


/*
        // abrir  ou fechar sem efeitos

        $(function(){
      $('nav.mobile').click(function(){
         var listaMenu= $('nav.mobile ul');

        if (listaMenu.is(':hidden')== true){
       listaMenu.show();
      }
      else{
          listaMenu.hide();

      }
    
       })

    })


    */


/*********************************************************************/


// Abrir ou fechar o menu

$(function(){
    $('nav.mobile').click(function(){
    var listaMenu = $('nav.mobile ul');


 if(listaMenu.is(':hidden') == true){
 // alert('vamos abrir!');

 var icone = $('.botao-menu-mobile').find('i');
 icone.removeClass('fa-bars');
 icone.addClass('fa-times');
  listaMenu.slideToggle();


 }
else{
// alert('vamos fechar!');

var icone = $('.botao-menu-mobile').find('i');
 icone.removeClass('fa-times');
 icone.addClass('fa-bars');
     listaMenu.slideToggle();

  }

   })

    if($('target').length > 0){
        // o elemento existe, porntanto precisamos dar o scroll em algum elemento.
        var elemento = '#'+$('target').attr('target');
      
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll},2000);
    }
})