const ip = document.querySelector('input[name=ip]')
const mask = document.querySelector('input[name=mask]')
const version = document.querySelector('input[name=version]')
const tr = document.querySelector('table tbody')
const btn = document.querySelector('button')

//tr.innerHTML = `<tr><td>${ip.value}</td><tr><td>${ip.value}</td></tr>`
function create(){
    let ips = ip.value
    let masks = mask.value
    let versions = version.value
    tr.insertAdjacentHTML('afterbegin',`<tr><td>${ip.value}</td></tr>`)
}

btn.addEventListener('click', function(){
    tr.innerHTML += ip.value//`<tr><td>${ip.value}</td><tr><td>${ip.value}</td></tr>`
})