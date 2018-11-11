
function total(products) {
  return produtos.reduce((add, e) => add + e.preco, 0)
}

export { total }
