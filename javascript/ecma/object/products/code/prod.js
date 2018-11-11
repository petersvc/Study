const produtos = [
  {
    nome: 'Bicicleta',
    preco: 1200.0
  },
  {
    nome: 'Capacete',
    preco: 450.0
  },
  {
    nome: 'Roda',
    preco: 650.0
  }
]

const prod = produtos.reduce((total, e) => total + e.preco, 0)
const prod2 = produtos.map((e) => e.preco)
console.log(prod, prod2)