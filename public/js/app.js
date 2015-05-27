$(document).on("ready",function()
{
	$(".logo-animar").addClass("animar");

	$(window).scroll(function()
	{	
		if($(window).scrollTop() == 0)
		{
			
			$(".menu").css("border-bottom","none");
			$(".social").removeClass("mostrar-social");
			$(".ayuda").removeClass("mostrar-ayuda");
			$(".menu .opcion").removeClass("animar-menuitem");

		}
		else
		{
			$(".menu .opcion").addClass("animar-menuitem");
			$(".menu").css("border-bottom","2px solid #28448C");
			$(".social").addClass("mostrar-social");
			$(".ayuda").addClass("mostrar-ayuda");
			$(".ayuda").css("margin-top","-55px");
			$(".consulta").css("margin-top","-20px");
		}

			if($(window).scrollTop() > $(".inicio-bypass").get(0).offsetHeight+350)
		{
			
			
		}
	
			if($(window).scrollTop() > $(".inicio-balloon").get(0).offsetHeight+800)
		{
			
			
			
		}
			if($(window).scrollTop() > $(".inicio-metabolica").get(0).offsetHeight+1500)
		{
			
			
		}
		
	})
	$(".ayuda").on("click",function()
	{
		$(".consulta").css("margin-right","0");

	})
	$(".ayuda").on("mouseover",function()
	{
		$(this).addClass("ayuda-animar");
		$(".ayuda i").css("display","block");
		$(".ayuda span").css("display","none");
	}).mouseleave(function()
	{
		$(this).removeClass("ayuda-animar");
		$(".ayuda i").css("display","none");
		$(".ayuda span").css("display","block");
	})
	$(".ocultar-consulta").on("click",function()
	{
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