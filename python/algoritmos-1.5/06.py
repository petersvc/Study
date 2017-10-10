cpf = input('Digite o seu cpf: ')
rend_anual = float(input('Digite o seu rendimento anual: '))
imp_ret_font = float(input('Imposto retido na fonte: '))
contrib_previdenc = float(input('Contribuição previdenciária: '))
despesas_med = float(input('Despesas médicas: '))
num_depend = float(input('Número de dependentes: '))

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

imp_devido = base_calc * aliquota - parc_dedu
imp = imp_devido - imp_ret_font

if imp >= 0:
    print('Há {:.2f} à ser restituido'.format(imp))
else:
    print('Há {:.2f} à ser pago'.format(imp * (-1)))
