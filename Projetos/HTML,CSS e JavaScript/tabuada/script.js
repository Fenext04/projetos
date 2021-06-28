function gerar_Tabuada(){
    var numero_Bruto = document.getElementById("numero") 
    var numero = Number(numero_Bruto.value)
    var resposta = document.getElementById("resposta")
    
    if(numero == 0 || numero_Bruto.length){
        window.alert("Erro, informe um número diferente de 0")
    }
    else{
        
        var area_Tabuada = document.createElement("select")
        area_Tabuada.setAttribute("id", "tab")
        area_Tabuada.setAttribute("size", "10")
        for(var c = 1;c<=10;c++){
            var item = document.createElement("option")
            item.text = `${numero} x ${c} = ${numero*c}`
            resposta.innerHTML = `<strong>Tabuada do ${numero}:</strong><br>`
            area_Tabuada.appendChild(item)
            resposta.appendChild(area_Tabuada)
        }
    }

}