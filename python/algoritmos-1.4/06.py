carros_vendidos = int(input('Digite a quantidade de carros vendidos: '))
total_vendas = float(input('Digite o valor total das vendas de carros: '))

salario = (carros_vendidos * comissao) + (total_vendas * 0.05) + salario_fixo
salario_fixo= float(622)
comissao = int(30)

print('Seu salário é: {:.2f}R$'.format(salario))
