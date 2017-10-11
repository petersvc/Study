num_ap = input('Digite o número do apartamento: ')
tipo_ap = input('Digite o tipo do apartamento: ')
num_diarias = int(input('Digite o numero de diárias: '))
consumo_interno = float(input('Digite o valor total do consumo interno: '))

if tipo_ap == 'a' or tipo_ap == 'A':
    valor_diaria = 150.00
elif tipo_ap == 'b' or tipo_ap == 'B':
    valor_diaria = 100.00
elif tipo_ap == 'c' or tipo_ap == 'C':
    valor_diaria = 75.00
else:
    valor_diaria = 50.00

total_diaria = valor_diaria * num_diarias
subtotal = total_diaria + consumo_interno
taxa = subtotal * 0.1
total_geral = subtotal + taxa

print('\nNumero do apartamento: {:s}\nTipo do apartamento: {:s}'.format(num_ap, tipo_ap))
print('Número de diárias: {:d}\nValor unitário da diária: R$ {:.2f}'.format(num_diarias, valor_diaria))
print('Valor total da(s) diária(s): R$ {:.2f}\nConsumo interno: R$ {:.2f}'.format(total_diaria, consumo_interno))
print('Subtotal: R$ {:.2f}\nValor da taxa de serviço: R$ {:.2f}'.format(subtotal, taxa))
print('Total geral: R$ {:.2f}'.format(total_geral))
