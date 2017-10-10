peso = float(input('Digite o seu peso: '))
altura = float(input('Digite a sua altura (ex: 1.78): '))
massa = peso / (altura * altura)
if massa >= 30:
    print('Massa: {:.0f}\nSituação: Obeso Mórbido'.format(massa))
elif massa > 25:
    print('Massa: {:.0f}\nSituação: Obeso'.format(massa))
elif massa < 26:
    print('Massa: {:.0f}\nSituação: Normal'.format(massa))
else:
    print('valor inválido')
