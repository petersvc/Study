const heightElm = document.querySelector('input[name=altura]')
const weightElm = document.querySelector('input[name=peso]')
const imcElm = document.querySelector('#imc')
const imcBtn = document.querySelector('button')

function imc(height, weight, sex){    
    const imc = weight / height ** 2

    if (sex == 'feminino')
        if (imc < 19.1)
            return 'Abaixo do Peso'
        else if(imc < 25.8)
            return 'Peso Normal'
        else if(imc > 27.3)
            return 'Marginalmente Acima do Peso'
        else if(imc > 32.3)
            return 'Acima do Peso Ideal'
        else
            return 'Obeso' 
    else
        if (imc < 20.7)
            return 'Abaixo do Peso'
        else if (imc < 26.4)
            return 'Peso Normal'
        else if (imc < 27.8)
            return 'Marginalmente Acima do Peso'
        else if (imc < 31.1)
            return 'Acima do Peso Ideal'
        else
            return 'Obeso'
}

function imcCalc(){
    let height = heightElm.value
    let weight = weightElm.value
    let sex = document.querySelector('input[name=sexo]:checked').value
    
    if  (weight > 0 && isNaN(weight) == false && isNaN(height) == false && height > 0){
        imcElm.value = imc(height, weight, sex)
        if (imcElm.value == 'Peso Normal')
            Object.assign(imcElm.style,{backgroundColor: "green", color: "white"})
        else if (imcElm.value == 'Obeso')
            Object.assign(imcElm.style,{backgroundColor: "red", color: "white"})
        else
            Object.assign(imcElm.style,{backgroundColor: "goldenRod", color: "white"})
    }
    else{
        alert('Informe o peso e ou a altura corretamente.')
        cleaner()  
    }
}

document.addEventListener('keyup', function(event){
    if (event.key == 'Escape')
        cleaner()
    else if (event.key == 'Enter')
        imcCalc()
})

function cleaner(){
    heightElm.value = weightElm.value = imcElm.value = ''
    heightElm.focus()
    imcElm.style.backgroundColor = "transparent"
}

let keep

if(heightElm.value == 2)
    heightElm.value += '.'


heightElm.addEventListener('keyup', function(event){

    if (event.key < '3' && heightElm.value.length == 0){
        keep = heightElm.value
        keep += '.'
        return keep
   }
/* 
   if (event.key < '3' && heightElm.value.length == 1){
        heightElm.value += '.'

   }
*/ 
})