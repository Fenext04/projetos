function carregar(){
    var msg = document.getElementById("msg")
    var img = document.getElementById("img")
    var data = new Date()
    var hora = data.getHours()
    msg.innerHTML = `São ${hora} horas`
    if(hora>= 18 && hora < 24){
        img.src = "imagens/noite.jpg"
        document.body.style.background = "#00333c"
        
    }
    else if(hora>= 0 && hora < 12){
        img.src = 'imagens/manha.jpg'
        document.body.style.background = "#eee1d0"
    } 
    
    else if(hora >= 12 && hora < 18){
        img.src = 'imagens/tarde.jpg'
        document.body.style.background = "#c28961"
    }   
    
}