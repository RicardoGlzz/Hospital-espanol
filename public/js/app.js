$(document).on("ready",function()
{
	// ANIMACIONES
	$(".logo-animar").addClass("animar");

	$(window).scroll(function()
	{	
		if($(window).scrollTop() == 0)
		{
			
			$(".menu").css("border-bottom","none");
			$(".social").removeClass("mostrar-social");
			$(".ayuda").removeClass("mostrar-ayuda");
			$(".menu .opcion").removeClass("animar-menuitem");
			$(".menu .opcion").removeClass("animated fadeIn menu-bordes");
		}
		else
		{
			
			$(".menu").css("border-bottom","2px solid #28448C");
			$(".menu .opcion").addClass("animated slideInDown menu-bordes");
			$(".social").addClass("mostrar-social");
			$(".ayuda").addClass("mostrar-ayuda");
			$(".ayuda").css("margin-top","-55px");
			$(".consulta").css("margin-top","-20px");
		}
			if($(window).scrollTop() > $("#calculadora-imc").get(0).offsetHeight+100)
		{
			
			$(".img-uno").addClass("animated slideInLeft");	
			$(".img-dos").addClass("animated slideInRight");
			$(".calculadora").addClass("animated slideInUp");
			$(".bmi-titulo").addClass("animated slideInDown");		
		}		
		if($(window).scrollTop() > $(".sobrepeso").get(0).offsetHeight+350)
		{
			$(".peso-uno").addClass("animated slideInLeft");	
			$(".peso-dos").addClass("animated slideInRight");
			$(".sobrepeso h1").addClass("animated bounce");
		}

			if($(window).scrollTop() > $("#procedimientos").get(0).offsetHeight)
		{
			$("#procedimientos section").addClass("animated slideInUp");	
			$("#procedimientos h1").addClass("animated slideInDown");
		}
	
		
		
	})
	// Animaciones de seccion pregunta al doctor
	$(".ayuda").on("click",function()
	{
		$(this).css("margin-right","220px");
		$(".consulta").css("margin-right","0");

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




	// FIN DE ANIMACIONES

	// Calculadora de IMC / BMI
	//definimos la funcion
	$("#boton-imc").on("click",function()
	{
		
	//declaramos las variables
	var peso, altura, imc, leyenda;
	//hacemos la llamada a los datos introducidos
	peso=document.getElementById("peso").value;
	altura=document.getElementById("altura").value/100;
	//calculamos el imc
	imc=peso/(altura*altura);
	//enviamos el resultado a la caja correspondiente y lo reducimos a 2 decimales
	document.getElementById("imc").value=imc.toFixed(2);
	//mediante if comparamos el resultado para determinar si es correcto el peso
	if(imc<=20.5)
	{
	//determinamos el defecto en peso y definimos el comentario
		leyenda="You are under ther recommended value by " + (altura*altura*20.5-peso).toFixed(1) + " kgs";
	}
	else if(imc>=25.5)
	{
	//determinamos el exceso en peso y definimos el comentario
		leyenda="You are above the recommended value by "+(peso-altura*altura*25.5).toFixed(1) +" kgs";
	}
	else
	{
		leyenda="You are in the recommended value ";
	}
	//enviamos el comentario a la caja correspondiente
	document.getElementById("leyenda").value=leyenda;
	});

})