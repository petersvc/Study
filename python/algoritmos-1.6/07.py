nome = input('Digite o seu nome: ')
qtde_pecas = int(input('Digite a quantidade de peças fabricadas: '))
salario_normal = 260.00
adicional = 5.00
if qtde_pecas < 31:
    classe = 'A'
    print('\nNome: {:s}\nClasse: {:s}\nSalario: {:.2f}'.format(nome, classe, salario_normal))
else:
    classe = 'B'
    salario = salario_normal + ((qtde_pecas - 30) * adicional)
    print('\nNome: {:s}\nClasse: {:s}\nSalario: {:.2f}'.format(nome, classe, salario))
