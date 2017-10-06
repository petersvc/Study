chocolate = 1.50 * float(input('Quantidade de chocolate: '))
sorvete = 1.50 *float(input('Quantidade de sorvete: '))
refrigerante = 2.00 * float(input('Quantidade de refrigerante: '))
misto_quente = 2.00 * float(input('Quantidade de misto quente: '))

preco_total = chocolate + sorvete + refrigerante + misto_quente

print('O valor a ser pago é: {:.2f}R$'.format(preco_total)) 
