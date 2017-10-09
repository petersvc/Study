num1 = int(input('Digite um número: '))
num2 = int(input('Digite outro número: '))
'''
if num1 > num2:
    print('O maior número é: ', num1)
else:
    print('O maior número é: ', num2)
'''
print('Maior número: ', num1 if num1 > num2 else num2)
