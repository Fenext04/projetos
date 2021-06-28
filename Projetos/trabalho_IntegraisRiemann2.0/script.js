function calcular1(){
    var res = document.getElementById("resposta_questao1") //peguei a aréa de resposta e converti em uma variável
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n_Bruto = document.getElementById("nR_questao1") // pegar o N informado
    var n = Number(n_Bruto.value) //converter o N informado de String para Number
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0 // soma de f(xi), que agora é 0
    var cE // contador que será usado no laço das somas da Esquerda
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    } // soma as funções de f(x0) até f(xn-1) até 
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    } // soma as funções de f(x1) até f(xn) até 
    var integral = (Math.pow(b,3) / 3) - (Math.pow(a,3) / 3) // valor da integral
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    
    res.innerHTML = `<strong>Soma pela Esquerda:</strong> ${sE} <br>
    <strong>Soma pela Direita:</strong> ${sD}<br>
    <strong>Valor real da área:</strong> ${integral}<br>
    <strong>Como x² é crescente no intervalo dado</strong><br>
    ${sD} > ${integral} > ${sE}
     `}
    // Nos valores  ${} serão colocados as respostas das variáveis respectivas.
    // os comentários de cima são válidos para as próximas "function" só mudando as funções f(x)
 function calcular2A(){
    var resD = document.getElementById("respQ2A")
    var resE = document.getElementById("respQ2A_Esquerda")
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n = 10
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0
    var cE
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    }
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    }
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
    resE.innerText = (sE)
}
function calcular2B(){
    var resD = document.getElementById("respQ2B")
    var resE = document.getElementById("respQ2B_Esquerda")
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n = 30
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0
    var cE
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    }
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    }
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
    resE.innerText = (sE)
}
function calcular2C(){
    var resD = document.getElementById("respQ2C")
    var resE = document.getElementById("respQ2C_Esquerda")
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n = 50
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0
    var cE
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    }
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    }
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
    resE.innerText = (sE)
}
function calcular2D(){
    var resD = document.getElementById("respQ2D")
    var resE = document.getElementById("respQ2D_Esquerda")
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n = 100
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0
    var cE
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    }
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    }
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
    resE.innerText = (sE)
}

function calcular2E(){
    var resD = document.getElementById("respQ2E")
    var resE = document.getElementById("respQ2E_Esquerda")
    var b =  1 // valor de b
    var a = 0  //valor de a                                                                                                     
    var n = 1000
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxE = 0
    var cE
    for (cE = 0;cE <=(n-1);cE++){
        soma_fxE += Math.pow((a + (cE*deltaX)),2)
    }
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.pow((a + (cD*deltaX)),2)
    }
    var sE = deltaX * soma_fxE //Soma pela Esquerda
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
    resE.innerText = (sE)
}

function calcular3A(){
    var resD = document.getElementById("respQ3A")
    var a = 0
    var b = 2                                                                                                  
    var n = 2
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.exp(-(a + (cD*deltaX)))
    }
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
}
function calcular3B(){
    var resD = document.getElementById("respQ3B")
    var a = 0
    var b = 2                                                                                                  
    var n = 4
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.exp(-(a + (cD*deltaX)))
    }
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
}
function calcular3C(){
    var resD = document.getElementById("respQ3C")
    var a = 0
    var b = 2                                                                                                  
    var n = 8
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.exp(-(a + (cD*deltaX)))
    }
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
}
function calcular3D(){
    var resD = document.getElementById("respQ3D")
    var a = 0
    var b = 2                                                                                                  
    var n = 10
    var deltaX = (b-a) / n // valor de DeltaX
    var soma_fxD = 0
    var cD
    for (cD = 1;cD <=(n);cD++){
        soma_fxD += Math.exp(-(a + (cD*deltaX)))
    }
    var sD = deltaX * soma_fxD //Soma pela Direita
    resD.innerText = (sD)
}
function calcular4(){
    var resp = document.getElementById("resposta_questao4")
    var a = 0
    var b =  1
    var valor_M = Math.exp(-Math.pow(0,2)) * (b-a)
    var valor_m = Math.exp(-Math.pow(1,2)) * (b-a)
    var integral = "∫[0;1] e-x² dx"
    if(valor_m == 0.36787944117144233){
        valor_m = "1 / e"
    }
    resp.innerHTML = `Pelo grafico sabemos que f(x) = e-x², em 0<=x<=1, pode ser expresso da seguinte forma:<br>
    <1 / e<=e-x²<=1<br>
    Note que <strong>${valor_m}</strong> é o minimo global e <strong>${valor_M}</strong> é máximo global em em 0<=x<=1.Logo, podemos utilizar a propriedade<br>
    <strong>${valor_m}<=${integral}<=${valor_M}</strong>`        }