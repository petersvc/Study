nome = input('Digite o seu nome: ')
vendas = float(input('Digite o valor total das vendas: '))

salario_normal = 260.00
comissao = vendas * 0.05
salario = 260.00 + comissao

if comissao < 260:
    print('Nome: {:s}\nTotal de suas vendas: {:.2f}\nSalário: {:.2f}'.format(nome, vendas, salario_normal))
else:
    print('Nome: {:s}\nTotal de suas vendas: {:.2f}\nSalário: {:.2f}'.format(nome, vendas, salario))
