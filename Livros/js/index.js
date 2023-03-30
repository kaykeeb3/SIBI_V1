let livroQuantidade = document.getElementsByClassName("livro-quantidade");
let divSpan = document.getElementsByClassName("span");

for (let index = 0; index < livroQuantidade.length; index++) {
  
  if (livroQuantidade[index].innerHTML == "0") {
    divSpan[index].style.backgroundColor = '#ff3131';
		       }
	if (livroQuantidade[index].innerHTML == "1") {
	  divSpan[index].style.backgroundColor = '#ffba00'
	}
}