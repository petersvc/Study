dia_nasc, mes_nasc, ano_nasc = (input('Digite a sua data de nascimento(d/m/aaaa): ').split('/'))
dia_nasc = int(dia_nasc); mes_nasc = int(mes_nasc); ano_nasc = int(ano_nasc)

dia_atual, mes_atual, ano_atual = (input('Digite a data atual: ').split('/'))
dia_atual = int(dia_atual); mes_atual = int(mes_atual); ano_atual = int(ano_atual)

if mes_atual >= mes_nasc & dia_atual >= dia_nasc:
    print(ano_atual-ano_nasc)
else:
    print(ano_atual-ano_nasc-1)
