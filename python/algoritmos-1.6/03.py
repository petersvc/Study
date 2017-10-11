operacao = input('Digite a operação (+, -, *, /): ')
num1 = int(input('Digite um número: '))
num2 = int(input('Digite um segundo número: '))
if operacao == '+':
    print("{:d} + {:d} é: {:d}".format(num1, num2, num1 + num2))
elif operacao == '-':
    print("{:d} - {:d} é: {:d}".format(num1, num2, num1 - num2))
elif operacao == '*':
    print("{:d} * {:d} é: {:d}".format(num1, num2, num1 * num2))
elif operacao == '/':
    print("{:.2f} / {:.2f} é: {:.2f}".format(num1, num2, num1 / num2))
else:
    print('Operação inválida')
