function exibir_categoria(el) {
    let action_figures = document.getElementsByClassName("box_produto");
    for( let i=0; i<action_figures.length;i++){
        console.log(action_figures[i]);
        console.log(el);
        console.log(action_figures[i].id==el);
        if(action_figures[i].id==el){
            action_figures[i].style.display = "block";
        } else {
            action_figures[i].style.display = "none";
        }
    }
}

function exibir_todos() {
    let action_figures = document.getElementsByClassName("box_produto");
    for( let i=0; i<action_figures.length;i++){
        action_figures[i].style.display = "block";
    }
}

let destaque = (imagem) => {
    console.log(imagem);
   if (imagem.width == 400)
        imagem.width = 150;
        else
        imagem.width = 400;
  
}