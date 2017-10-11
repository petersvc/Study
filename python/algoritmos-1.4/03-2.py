dia_nasc, mes_nasc, ano_nasc = (input('Digite a sua data de nascimento(d/m/aaaa): ').split('/'))
dia_nasc = int(dia_nasc); mes_nasc = int(mes_nasc); ano_nasc = int(ano_nasc)

from datetime import datetime
now = datetime.now()

dia_atual = int(now.day)
mes_atual = int(now.month)
ano_atual = int(now.year)

if mes_atual >= mes_nasc and dia_atual >= dia_nasc:
    print(ano_atual-ano_nasc)
else:
    print(ano_atual-ano_nasc-1)
