function buscarAutor() {
    var livro = document.getElementsByName("livroReq")[0].value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var autor = this.responseText;

            if (autor == null || autor == "") {
                document.getElementsByName("autorReq")[0].value = "";
            } else {
                document.getElementsByName("autorReq")[0].value = autor;
            }
        }
    };
    var formData = new FormData();
    formData.append('livroReq', livro);
    xmlhttp.open("POST", "js/BuscarAutor.php", true);
    xmlhttp.send(formData);

}

