const a = [1,2,3,4,5,6]

let f = e => e * 2
let f2 = e => e / 2
let f3 = e => e % 2 == 0

const b = a.map(f)
const c = a.map(f2)

let bla = a.map( (e, i) => e * i)

let bla2 = a.filter(e => e % 2 == 0)
console.log(b + '\n' + c + '\n' + bla + '\n' + bla2)

let d = a.includes(9)
//console.log(a.splice(1, 5), d)
console.log(a.reduce((add, value) => add * value))
console.log(a.join(''))
console.log(a.slice(0, 3))