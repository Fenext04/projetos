function verificar(){
    var data = new Date()
    var ano_Atual = data.getFullYear()
    var ano_NascimentoBruto = document.getElementById("nascimento")
    var ano_Nascimento = Number(ano_NascimentoBruto.value)
    var sexo = document.getElementsByName("sexo")
    var resposta = document.getElementById("resposta")
    var idade = ano_Atual - ano_Nascimento

    if(ano_Nascimento <= 0 || ano_Nascimento > ano_Atual){
        window.alert("erro")
    }
    else{
        var genero = ""
        var imagem = document.createElement("img")
        imagem.setAttribute("id", "foto")

        if(sexo[0].checked){
            var genero = "Homem"
            if (idade > 0 && idade < 12){
                // criança
                imagem.setAttribute("src", "imagens/homem_criança.png")
            }
            else if (idade >= 12  && idade < 18){
                // jovem
                imagem.setAttribute("src", "imagens/homem_jovem.png")
            }
            else if (idade >= 18  && idade < 60){
                // adulto
                imagem.setAttribute("src", "imagens/homem_adulto.png")
            }
            else if (idade >= 60){
                // idoso
                imagem.setAttribute("src", "imagens/homem_idoso.png")
            }
        }

        if(sexo[1].checked){
            var genero = "Mulher"
            if (idade > 0 && idade < 12){
                // criança
                imagem.setAttribute("src", "imagens/mulher_criança.png")
            }
            else if (idade >= 12  && idade < 18){
                // jovem
                imagem.setAttribute("src", "imagens/mulher_jovem.png")
            }
            else if (idade >= 18  && idade < 60){
                // adulto
                imagem.setAttribute("src", "imagens/mulher_adulta.png")
            }
            else if (idade >= 60){
                // adulto
                imagem.setAttribute("src", "imagens/mulher_idosa.png")
            }
        }
        resposta.style.textAlign = "center"
        resposta.innerHTML = `Você é ${genero} e possui ${idade} anos de idade`
        resposta.appendChild(imagem)
    }
}