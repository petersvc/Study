kw = 5.00
qtde_kw = float(input('Digite a quantidade de Kw consumida: '))
conta = qtde_kw * kw
taxa = 40.00
if conta < taxa:
    print('O valor a ser pago é: {:.2f}R$'.format(taxa))
else:
    print('O valor a ser pago é: {:.2f}R$'.format(conta))
