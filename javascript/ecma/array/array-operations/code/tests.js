
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

let values = [2, 2, 2]
console.log(product(values))