function verificar(){
    var data = new Date()
    var ano_Atual = data.getFullYear()
    var ano_NascimentoBruto = document.getElementById("ano_Nascimento")
    var ano_Nascimento = Number(ano_NascimentoBruto.value)
    var resp = document.getElementById("resposta")
    if (ano_Nascimento == 0 || ano_Nascimento > ano_Atual){
        window.alert("Erro")
    }
    else{
        var sexo = document.getElementsByName("sexo")
        var idade = ano_Atual - ano_Nascimento
        var genero = ""
        var img = document.createElement("img")
        img.setAttribute("id" , "foto")
        if(sexo[0].checked) {
            genero = "Homem"
            if (idade>=0 && idade <18){
                //criança
                img.setAttribute("src", "imagens/homem_criança.png")
            }
            else if (idade>=18 && idade <60){
                //adulto
                img.setAttribute("src", "imagens/homem_adulto.png")
            }
            else if (idade>=60){
                //idoso
                img.setAttribute("src", "imagens/homem_idoso.png")
            }

        
        }
        else if(sexo[1].checked){
            genero = "Mulher"
            if (idade>=0 && idade <18){
                //criança
                img.setAttribute("src", "imagens/mulher_criança.png")
            }
            else if (idade >= 18 && idade < 60){
                //adulto
                img.setAttribute("src", "imagens/mulher_adulta.png")
            }
            else if (idade >= 60){
                //idoso
                img.setAttribute("src", "imagens/mulher_idosa.png")
            }
        
        }  
        resp.style.textAlign= "center"
        resp.innerHTML = `A pessoa é ${genero}, com ${idade} anos de idade<br>`
        resp.appendChild(img)  
    }
    
}