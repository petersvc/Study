salario_bruto = float(input('Digite o seu salário bruto: '))
valor_hora_extra = float(input('Digite o valor das horas extras: '))
salario_liquido = (salario_bruto + valor_hora_extra) - 0.08 * salario_bruto
print(salario_liquido)
