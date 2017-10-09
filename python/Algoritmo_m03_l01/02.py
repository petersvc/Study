num1 = input('Digite um número: ')
num2 = input('Digite outro número: ')

'''if num1 > num2:
    print(num1 + ', ' + num2)
else:
    print(num2 + ', ' + num1)'''

print(num1 + ', ' + num2 if num1 > num2 else num2 + ', ' + num1)
