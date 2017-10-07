ano_nascimento = int(input('Digite o seu ano de nascimento: '))
from datetime import datetime
now = datetime.now()
print('Você tem', now.year - ano_nascimento)
