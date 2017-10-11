cpf = input('Digite o seu cpf: ')
rend_anual = float(input('Digite o seu rendimento anual: '))
imp_ret_font = float(input('Imposto retido na fonte: '))
contrib_previdenc = float(input('Contribuição previdenciária: '))
despesas_med = float(input('Despesas médicas: '))
num_depend = int(input('Número de dependentes: '))

dedu_depend = num_depend * 1080.00
total_dedu = contrib_previdenc + despesas_med + dedu_depend
base_calc = rend_anual - total_dedu

if base_calc > 21600.00:
    aliquota = float(0.25)
    parc_dedu = float(3780.00)
elif base_calc > 10800.01:
    aliquota = float(0.15)
    parc_dedu = float(1620.00)
else:
    aliquota = float(0)
    parc_dedu = float(0)

imp_devido = (base_calc * aliquota) - parc_dedu
imp = imp_devido - imp_ret_font

print('\nCpf: {:s}\nRendimento anual: R$ {:.2f}\nImposto retido na fonte: R$ {:.2f}'.format(cpf, rend_anual, imp_ret_font))
print('Contribuição previdenciária: R$ {:.2f}\nDespesas médicas: R$ {:.2f}\nNúmero de dependentes: {:d}'.format(contrib_previdenc, despesas_med, num_depend))
print('Dedução dos dependentes: R$ {:.2f}\nTotal das deduções: R$ {:.2f}\nBase de cálculo: {:.2f}'.format(dedu_depend, total_dedu, base_calc))

if imp >= 0:
    print('Valor à ser pago: R$ {:.2f}'.format(imp))
else:
    print('Valor à ser restituído: R$ {:.2f}'.format(imp * (-1)))
