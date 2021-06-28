function verificar(){
    var data = new Date()
    var ano_Atual = data.getFullYear()
    var ano_NascimentoBruto = document.getElementById("ano_Nascimento")
    var ano_Nascimento = Number(ano_NascimentoBruto.value)
    var resp = document.getElementById("resposta")
    if (ano_Nascimento == 0 || ano_Nascimento > ano_Atual){
        resp.innerHTML = window.alert("Errou, fera")
    }
    else{
        var sexo = document.getElementsByName("sexo")
        var idade = ano_Atual - ano_Nascimento
        var img = document.createElement("img")
        var genero = ""
        img.setAttribute("id", "foto")
        if(sexo[0].checked){
            genero = "Masculino"
            if(idade>0 && idade < 12){
                img.setAttribute("src", "imagens/homem_criança.png")
            }
            else if( idade < 18){
                img.setAttribute("src", "imagens/homem_jovem.png")
            }
            else if( idade < 64){
                img.setAttribute("src", "imagens/homem_adulto.png")
            }
            else if(idade>=64){
                img.setAttribute("src", "imagens/homem_idoso.png")
            }
        }
        else if(sexo[1].checked){
            genero = "Feminino"
            if(idade>0 && idade < 12){
                img.setAttribute("src", "imagens/mulher_criança.png")
            }
            else if( idade < 18){
                img.setAttribute("src", "imagens/mulher_jovem.png")
            }
            else if( idade < 64){
                img.setAttribute("src", "imagens/mulher_adulta.png")
            }
            else if(idade>=64){
                img.setAttribute("src", "imagens/mulher_idosa.png")
            }
        }
        resp.style.textAlign = "center"
        resp.innerHTML = `A pessoa é do gênero ${genero}, e possui ${idade} anos de idade.<br>`
        resp.appendChild(img)
        

    }
}