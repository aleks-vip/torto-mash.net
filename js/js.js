
    $('.your-class').slick();

$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
	$('a#go').click( function(event){ // лoвим клик пo ссылки с id="go"
		event.preventDefault(); // выключaем стaндaртную рoль элементa
		$('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
		 	function(){ // пoсле выпoлнения предъидущей aнимaции
				$('#modal_form') 
					.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
		});
	});
	/* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
	$('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
				function(){ // пoсле aнимaции
					$(this).css('display', 'none'); // делaем ему display: none;
					$('#overlay').fadeOut(400); // скрывaем пoдлoжку
				}
			);
	});
});

$(document).ready(function(){
    $(function(){
  $('#open').on('click', function(){
    $('#for_the_holidays').css('opacity', '1');
     $('#child').css('opacity', '0');
      $('#for_one_year').css('opacity', '0');
      $('#corporate').css('opacity', '0');
       $('#woman').css('opacity', '0');
        $('#man').css('opacity', '0');
         $('#сupcakes').css('opacity', '0');
      $("#for_the_holidays").css({'z-index' :1});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 0});
       $("#woman").css({'z-index' : 0});
       $("#man").css({'z-index' : 0});
       $("#сupcakes").css({'z-index' : 0});
     
  });
});
});

$(document).ready(function(){
    $(function(){
  $('#open2').on('click', function(){
    $('#child').css('opacity', '1');
    $('#for_the_holidays').css('opacity', '0');
     $('#for_one_year').css('opacity', '0');
      $('#corporate').css('opacity', '0');
      $('#woman').css('opacity', '0');
      $('#man').css('opacity', '0');
       $('#сupcakes').css('opacity', '0');
      $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 1});
      $("#for_one_year").css({'z-index' : 0});
       $("#corporate").css({'z-index' : 0});
       $("#woman").css({'z-index' : 0});
        $("#man").css({'z-index' : 0});
        $("#сupcakes").css({'z-index' : 0});
  });
});
});

$(document).ready(function(){
    $(function(){
  $('#open3').on('click', function(){
    $('#for_one_year').css('opacity', '1');
    $('#for_the_holidays').css('opacity', '0');
     $('#child').css('opacity', '0');
     $('#corporate').css('opacity', '0');
      $('#woman').css('opacity', '0');
       $('#man').css('opacity', '0');
        $('#сupcakes').css('opacity', '0');
     $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 1});
       $("#corporate").css({'z-index' : 0});
        $("#woman").css({'z-index' : 0});
        $("#man").css({'z-index' : 0});
        $("#сupcakes").css({'z-index' : 0});
  });
});
});

$(document).ready(function(){
    $(function(){
  $('#open4').on('click', function(){
    $('#corporate').css('opacity', '0');
    $('#for_the_holidays').css('opacity', '0');
     $('#child').css('opacity', '0');
     $('#corporate').css('opacity', '1');
      $('#woman').css('opacity', '0');
      $('#man').css('opacity', '0');
       $('#сupcakes').css('opacity', '0');
     $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 0});
       $("#corporate").css({'z-index' : 1});
        $("#woman").css({'z-index' : 0});
         $("#man").css({'z-index' : 0});
         $("#сupcakes").css({'z-index' : 0});
  });
});
});
$(document).ready(function(){
    $(function(){
  $('#open5').on('click', function(){
    $('#corporate').css('opacity', '0');
    $('#for_the_holidays').css('opacity', '0');
     $('#child').css('opacity', '0');
     $('#corporate').css('opacity', '0');
      $('#woman').css('opacity', '1');
       $('#man').css('opacity', '0');
        $('#сupcakes').css('opacity', '0');
     $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 0});
       $("#corporate").css({'z-index' : 0});
        $("#woman").css({'z-index' : 1});
         $("#man").css({'z-index' : 0});
         $("#сupcakes").css({'z-index' : 0});

  });
});
});

$(document).ready(function(){
    $(function(){
  $('#open6').on('click', function(){
    $('#corporate').css('opacity', '0');
    $('#for_the_holidays').css('opacity', '0');
     $('#child').css('opacity', '0');
     $('#corporate').css('opacity', '0');
      $('#woman').css('opacity', '0');
       $('#man').css('opacity', '1');
        $('#сupcakes').css('opacity', '0');
     $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 0});
       $("#corporate").css({'z-index' : 0});
        $("#woman").css({'z-index' : 0});
         $("#man").css({'z-index' : 1});
         $("#сupcakes").css({'z-index' : 0});

  });
});
});
$(document).ready(function(){
    $(function(){
  $('#open7').on('click', function(){
    $('#corporate').css('opacity', '0');
    $('#for_the_holidays').css('opacity', '0');
     $('#child').css('opacity', '0');
     $('#corporate').css('opacity', '0');
      $('#woman').css('opacity', '0');
       $('#man').css('opacity', '0');
        $('#сupcakes').css('opacity', '1');
     $("#for_the_holidays").css({'z-index' :0});
       $("#child").css({'z-index' : 0});
      $("#for_one_year").css({'z-index' : 0});
       $("#corporate").css({'z-index' : 0});
        $("#woman").css({'z-index' : 0});
         $("#man").css({'z-index' : 0});
         $("#сupcakes").css({'z-index' : 1});

  });
});
});
