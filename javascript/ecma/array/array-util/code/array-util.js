
function min(array) {
  // TODO
  let mini = array[0]
  for(let value of array){
    if(mini > value){
      mini = value
    }
  }
  return mini
}

function max(array) {
  // TODO
  let maxi = array[0]
  for(let value of array){
    if(maxi < value){
      maxi = value
    }
  }
  return maxi
}

function range(length, last, step) {
  // TODO
}

function zip(...arrays) {
  // TODO
}

function uniq(array) {
  // TODO
}

function sortNum(array) {
  // TODO
}

export { min, max, range, zip, uniq, sortNum }
