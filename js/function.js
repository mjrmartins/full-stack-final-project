function voltar(){
    window.history.back();
}

function alterarHamburger(){

    if(img.getAttribute("src") == "img/menu.svg"){
        img.src = "img/fechar.svg";
    }
    else{
        img.src = "img/menu.svg";
    }
    
}

function ativarDrop(){
    drop.scrollIntoView();
    setTimeout(clicar, 950);
}

function clicar(){
    drop.click();
}

function verMais(){
    div_desktop.classList.add("d-none");
    div_botao.classList.add("d-none");
    div_mobile.classList.replace("d-none", "d-block");
}