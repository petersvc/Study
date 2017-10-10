nome = input('Digite seu nome: ')
salario = float(input('Digite o seu salário: '))
if salario > 5000:
    print('Nome: {:s}\nSalario: R$ {:.2f}'.format(nome, salario))
elif salario > 1000.01:
    print('Nome: {:s}\nSalario atual: R$ {:.2f}'.format(nome, salario))
    print('Salario reajustado: R$ {:.2f}'.format(salario + salario * 0.1))
else:
    print('Nome: {:s}\nSalario atual: R$ {:.2f}'.format(nome, salario))
    print('Salario reajustado: R$ {:.2f}'.format(salario + salario * 0.2))
