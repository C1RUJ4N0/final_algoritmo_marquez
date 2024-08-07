Algoritmo Calculadora
	Definir num1, num2 Como Real
	Escribir "Ingresa dos Numeros"
	Leer Num1, num2
	Escribir "Seleccione una de las 4 operaciones"
	Leer operacion
	Segun operacion Hacer
		1 opcion:
			resultado <- num1 + num2
		2:
			resultado <- num1 - num2
		3:
			resultado  <- num1 * num2
		4:
			resultado  <- num1 / num2
		De Otro Modo:
			Escribir "No selecciono una operacion existente"
	Fin Segun
	Escribir "El resultado de la operacion es :" , resultado
FinAlgoritmo
