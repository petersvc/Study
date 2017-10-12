nome = input('Digite o seu nome: ')
sexo = input('Digite o seu sexo (M ou F): ')

if sexo == 'm' or sexo == 'M':
    print('Olá, Sr. ' + nome)
elif sexo == 'f' or sexo == 'F':
   print('Olá, Sra. ' + nome)
else:
    print('Sexo inválido')
