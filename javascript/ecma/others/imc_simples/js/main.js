const heightElm = document.querySelector('input[name=altura]')
const weightElm = document.querySelector('input[name=peso]')
const imcElm = document.querySelector('#imc')
const imcBtn = document.querySelector('button')

function imc(height, weight, sex){    
    const imc = weight / height ** 2

    if (sex == 'feminino')
        if (imc < 19.1)
            return 'Abaixo do Peso, molier'
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
    imcElm.value = imc(height, weight, sex)
}