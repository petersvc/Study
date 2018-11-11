
function sum(array) {
  // TODO
  let x = 0
  for(let value of array){
    x += value
  }
  return x
}

function product(array) {
  // TODO
  let a = 1
  for(let value of array){
    a *= value
  }
  return a
}

function sumOdds(array) {
  // TODO
  let a = 0
  for(let value of array){
    if(value % 2 != 0 || value == 1){
      a += value
    }
  }
  return a
}

export {
  sum,
  product,
  sumOdds
}
