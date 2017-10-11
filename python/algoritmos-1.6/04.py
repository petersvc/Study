nota1 = float(input('Digite a primeira nota: '))
nota2 = float(input('Digite a segunda nota: '))

media1 = (nota1 + nota2) / 2

if media1 >= 7:
    nota3 = float(input('Nota da segunda etapa: '))
    if nota3 >= 8:
        print('Aprovado')
    else:
        print('Reprovado')
else:
    print('Não apto à segunda etapa')
