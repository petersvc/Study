km_litros = int(input('Quantidade de km/l do carro: '))
tempo_viagem = int(input('Tempo gasto na viagem (em minutos): '))
veloc_media = int(input('Velocidade media durante a viagem (em km): '))

dist_percorrida = veloc_media * (tempo_viagem / 60)
qtde_litros = dist_percorrida/km_litros

print('Distancia percorrida: ',dist_percorrida,'\nLitros de combustíveis consumidos: ', qtde_litros)
