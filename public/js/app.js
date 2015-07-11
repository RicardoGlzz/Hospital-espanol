$(window).load(function()
{	
	$(".modal").hide();
})  

$(document).on("ready",function()
{
	// ANIMACIONES
	$(".logo-animar").addClass("animar");
	$body = $("body");

	$(window).scroll(function()
	{	
		if($(window).scrollTop() == 0)
		{
			
			$(".menu").css("border-bottom","none");
			$(".social").removeClass("mostrar-social");
			$(".ayuda").removeClass("mostrar-ayuda");
			$(".calc-boton").removeClass("mostrar-calc");
			$(".menu .opcion").removeClass("animar-menuitem");
			$(".menu .opcion").removeClass("animated fadeIn menu-bordes");
			$("#barra-footer").css("bottom","-100%");
			$("#barra-footer figure ").css("right","-100%");
		}
		else
		{
			
			$(".menu").css("border-bottom","2px solid #28448C");
			$(".menu .opcion").addClass("animated slideInDown menu-bordes");
			$(".social").addClass("mostrar-social");
			$(".ayuda").addClass("mostrar-ayuda");
			$(".calc-boton").addClass("mostrar-calc");
			$(".ayuda").css("margin-top","-55px");
			$(".consulta").css("margin-top","-20px");
			$("#barra-footer").css("bottom","0");
			$("#barra-footer figure ").css("right","0");
		}
			if($(window).scrollTop() > $("#calculadora-imc").scrollTop()+350)
		{
			
			$(".img-uno").addClass("animated slideInLeft");	
			$(".img-dos").addClass("animated slideInRight");
			$(".calculadora").addClass("animated slideInUp");
			$(".bmi-titulo").addClass("animated slideInDown");		
		}		
		if($(window).scrollTop() > $(".sobrepeso").scrollTop()+950)
		{
			$(".peso-uno").addClass("animated slideInLeft");	
			$(".peso-dos").addClass("animated slideInRight");
			$(".sobrepeso h1").addClass("animated bounce");
		}

			if($(window).scrollTop() > $("#procedimientos").scrollTop()+1550)
		{
			$("#procedimientos section").addClass("animated slideInUp");	
			$("#procedimientos h1").addClass("animated slideInDown");
		}
		// ANIMACIONES DE SECCION DOCTORES
		
		if($(window).scrollTop() > $(".doctor2").scrollTop()+400)
			
		{
			$(".doctor2 h2,p").addClass("animated slideInRight");	
			$(".doctor2 figure img").addClass("animated slideInLeft");
		}
		if($(window).scrollTop() > $(".doctor3").scrollTop()+800)
		{
			$(".doctor3 h2").addClass("animated slideInRight");
			$(".doctor3 p").addClass("animated slideInRight");	
			$(".doctor3 figure img").addClass("animated slideInLeft");
		}
		if($(window).scrollTop() > $(".confianza").scrollTop()+1500)
		{
			$(".confianza h2,p").addClass("animated slideInRight");	
			$(".confianza figure img").addClass("animated fadeIn");
		}
		if($(window).scrollTop() > $(".equipo-tec").scrollTop()+2000)
		{
			$(".equipo-tec h1").addClass("animated slideInRight");
			$(".equipo-tec div p").addClass("animated slideInRight");	
			$(".equipo-tec figure img").addClass("animated fadeIn");
		}
		if($(window).scrollTop() > $(".instalaciones").scrollTop()+2500)
		{
			$(".instalaciones h1").addClass("animated slideInRight");
			$(".instalaciones div p").addClass("animated slideInRight");	
			$(".instalaciones figure img").addClass("animated fadeIn");
		}
		if($(window).scrollTop() > $(".visita-mazatlan").scrollTop()+3800)
		{
			$(".visita-mazatlan h1").addClass("animated slideInRight");
			
		}
		
		
	})
	// Animaciones de seccion pregunta al doctor
	$(".ayuda").on("click",function()
	{
		$(this).css("margin-right","220px");
		$(".consulta").css("margin-right","0");

	})
	$(".wrapper-content").on("click",function()
	{
		$(".ayuda").css("margin-right","-5px");	
		$(".consulta").css("margin-right","-250px");
		$(".calc-boton").css("right","1%");
		$("#calculadora-imc").css("right","-100%");
	})
	$("#calculadora-imc").on("click",function()
	{
		$(this).css("right","0px");
	})


	$(".ayuda").on("mouseover",function()
	{
		
		$(".ayuda i").css("display","block");
		$(".ayuda i").addClass("animated fadeIn");
		$(".ayuda span").css("display","none");
	}).mouseleave(function()
	{
		
		$(".ayuda i").css("display","none");
		$(".ayuda span").css("display","block");
	})
	$(".ocultar-consulta").on("click",function()
	{
		$(".ayuda").css("margin-right","-5px");
		$(".consulta").css("margin-right","-250px");
		$(".consulta2").css("margin-right","-250px");
		$(".consulta3").css("margin-right","-250px");
	})
	$(".enviar-duda").on("click",function()
	{
		$(".consulta").css("margin-right","-250px");
		$(".consulta2").css("margin-right","-250px");
		$(".consulta3").css("margin-right","0px");	
	})
	$(".regreso-consulta").on("click",function()
	{
		$(".consulta").css("margin-right","-250px");
		$(".consulta2").css("margin-right","0px");
		$(".consulta3").css("margin-right","-250px");	
	})
	$(".preguntar").on("click",function()
	{
		$(".consulta").css("margin-right","-250px");
		$(".consulta2").css("margin-right","0px");
	})
	// animacion de imagenes de sobrepeso
	$(".sobrepeso .peso-img img").hover(
		function(){
			$(".peso-img img").css("opacity",".2");
			$("h4").css("display","block");
			$(".sobrepeso figure h4").addClass("animated fadeInUp");
	},function(){
			$(".peso-img img").css("opacity","1");
			$("h4").addClass("animated fadeInDown");
			$(".sobrepeso figure h4").css("display","none");
		}
	);


	// calculadora en procedimientos
	$(".calc-boton").hover(function()
	{
		$(this).css("right","410px");
		$(".calc").css("right","0");
	})
	$(document).on("click",".hide-calc",function()
	{
		$(".calc-boton").css("right","1%");
		$(".calc").css("right","-100%");
	})	


		//MENU RESPONSIVE
		$(".ver-menu").on("click",function()
		{
			$(this).css("display","none");
			$(".cerrar-menu").css("display","block");
			$(".menu").css("height","100%");
			$(".menu .opcion").css("left","0");
			$(".menu .opcion").addClass("animated slideInDown");
		})
		$(".cerrar-menu").on("click",function()
		{
			$(this).css("display","none");
			$(".ver-menu").css("display","block");
			$(".menu").css("height","0");
			$(".menu .opcion").css("left","-100%");
		})
		



	// FIN DE ANIMACIONES

	// Calculadora de IMC / BMI
	//definimos la funcion
	$("#boton-imc").on("click",function()
	{
		
		//declaramos las variables
		var peso, altura, bmi, leyenda;
		//hacemos la llamada a los datos introducidos
		peso= $("#peso").val();
		altura= $("#altura").val();
		//calculamos el bmi
		bmi=(peso/(altura*altura))*703;
		//enviamos el resultado a la caja correspondiente y lo reducimos a 2 decimales
		document.getElementById("bmi").value=bmi.toFixed(2);
		//mediante if comparamos el resultado para determinar si es correcto el peso
		if(bmi<=18.5)
		{
		//determinamos el defecto en peso y definimos el comentario
			leyenda="You are under ther recommended value " ;
		}
		else if(bmi >= 18 && bmi <= 25)
		{
		//determinamos el exceso en peso y definimos el comentario
			leyenda="You are in the recommended value" ;
		}
		else if(bmi >= 25)
		{
			leyenda="You are above the recommended value";
		}
		//enviamos el comentario a la caja correspondiente
		$("#leyenda").val(leyenda);
	});

	$(".boton-bmi").on("click",function()
	{
		
	//declaramos las variables
	var peso, altura, bmi, leyenda;
	//hacemos la llamada a los datos introducidos
	peso= $(".peso").val();
	altura=$(".altura").val();
	//calculamos el bmi
	bmi=(peso/(altura*altura))*703;
	//enviamos el resultado a la caja correspondiente y lo reducimos a 2 decimales
	$(".bmi").val(bmi.toFixed(2));
	//mediante if comparamos el resultado para determinar si es correcto el peso
	if(bmi<=18.5)
	{
	//determinamos el defecto en peso y definimos el comentario
		leyenda="You are under ther recommended value " ;
	}
	else if(bmi >= 18 && bmi <= 25)
	{
	//determinamos el exceso en peso y definimos el comentario
		leyenda="You are in the recommended value" ;
	}
	else if(bmi >= 25)
	{
		leyenda="You are above the recommended value ";
	}
	//enviamos el comentario a la caja correspondiente
	document.getElementById("ley").value=leyenda;
	});


	$(".boton-imc").on("click",function()
	{
		
	//declaramos las variables
	var peso, altura, imc, conclusion;
	//hacemos la llamada a los datos introducidos
	altura =$(".alt").val()/100;
	peso =$(".pes").val();
	//calculamos el imc
	imc=peso/(altura*altura);
	//enviamos el resultado a la caja correspondiente y lo reducimos a 2 decimales
	$(".imc-val").val(imc.toFixed(2));
	//mediante if comparamos el resultado para determinar si es correcto el peso
	if(imc <= 18)
	{
	//determinamos el defecto en peso y definimos el comentario
		conclusion="Estas por debajo del valor recomendado " ;
	}
	else if(imc >= 18 && imc <= 25)
	{
	//determinamos el exceso en peso y definimos el comentario
		conclusion="Estas en valores recomendados" ;
	}
	else if(imc >= 25)
	{
		conclusion="Estas en valores mayores a los recomendados";
	}
	//enviamos el comentario a la caja correspondiente
	$("#legend").val(conclusion);
	});
})