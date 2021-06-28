function contar(){
    var inicio_Bruto = document.getElementById("inicio")
    var passo_Bruto = document.getElementById("passo")
    var fim_Bruto = document.getElementById("fim")
    var inicio = Number(inicio_Bruto.value)
    var passo = Number(passo_Bruto.value)
    var fim = Number(fim_Bruto.value)
    var resposta = document.getElementById("resposta")
    if (inicio_Bruto.value.length == 0 || fim_Bruto.value.length == 0 || passo_Bruto.value.length == 0){
        window.alert("Eerro")
    }
    else{
        resposta.innerHTML = "<strong>Contando: <br></strong>"
        // Contagem Crescente
        if(inicio < fim){
            for(var c = inicio;c<=fim;c+=passo){
                resposta.innerHTML += `\u{1F449} ${c} `
            }
        }
        // Contagem Decrescente
        else if(inicio > fim){
            for(var c = inicio;c>=fim;c-=passo){
                resposta.innerHTML += `\u{1F449} ${c} `
            }
        }
        
    }
    
}