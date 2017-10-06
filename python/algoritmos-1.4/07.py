custo_fabrica = float(input('Digite o custo de fábrica do carro: '))

porcetagem_distribuidor = float(custo_fabrica * 0.28)
impostos = float(custo_fabrica * 0.45)
custo_final = custo_fabrica + porcetagem_distribuidor + impostos

print('Custo final do carro: {:.2f}R$'.format(custo_final))
