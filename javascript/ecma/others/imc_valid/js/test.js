let v = "12"
let k = v.split('')
k.splice( 1, 0, '.' )
k.join('')
console.log(v, k.join(''))