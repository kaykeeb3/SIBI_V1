<?php
 $username = 'root';
 $password = '';
 $database = 'biblioteca_teste';
 $hostname = 'localhost';

 $mysqli = new mysqli($hostname, $username, $password, $database);

  $sql = "SELECT id, aluno_req, turma_req, livro_req, dataRequisicao_req, dataDevolucao_req FROM requisicao";
  $dados = mysqli_query($mysqli, $sql);
  
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../style.css">
    <title>Requisição</title>
</head>
<body>
    <header>
        <div class="bg-green">⠀</div>
        <div class="bg-yellow">⠀</div>
      </header>


<?php 

 if (isset($_POST['request'])){
       $requisicao = $_POST['request'];

     } else {
       $requisicao = '';
     }

     $sql = "SELECT * FROM requisicao WHERE aluno_req like '%$requisicao%' OR turma_req LIKE '%$requisicao%' OR dataRequisicao_req LIKE '%$requisicao%' OR dataDevolucao_req LIKE '%$requisicao%' ";
     $dados = mysqli_query($mysqli, $sql); 
     ?>

<?php
$id = $_POST['idReq'];
$sql = " DELETE FROM requisicao WHERE ID like $id ";
$resultado = mysqli_query($mysqli, $sql);

  if ($resultado) {
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#modal-sucesso').classList.add('show');
        setTimeout(function() {
           document.querySelector('#modal-sucesso').classList.remove('show');
        }, 2500);
     });
     

     </script>";
     } else  { 
 
        echo "<script>document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#modal-fail').classList.add('show');
            setTimeout(function() {
               document.querySelector('#modal-fail').classList.remove('show');
            }, 2500);
         });

         </script>"; 
    }  
 ?>

 <div id="modal-sucesso" class="hide">
                  <div class="modal-conteudo">
                     <h1>Requisição Excluida com Sucesso!</h1>
                  </div>
               </div>
 
    <div id="modal-fail" class="hide">
    <div class="modal-conteudo">
    <h1>Falha em Excluir Requisição!</h1>
    </div>
    </div>


      <form class="search" method="POST" action="request.php">
        <div class="search-box">
            <input type="search" placeholder="Pesquisar ex: Requisição, Aluno..." name="request">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
            
    </form>
         <div class="container" id="teste">
         <div class="container-content">
         <main>

         <?php

                 while ($linha = mysqli_fetch_assoc($dados) ) {
                 $ID = $linha['id'];
                 $aluno_req = $linha['aluno_req']; 
                 $turma_req = $linha['turma_req']; 
                 $livro = $linha['livro_req'];
                 $DataReq = date("d/m/Y", strtotime($linha['dataRequisicao_req'])); 
                 $DataEntrega = date("d/m/Y", strtotime($linha['dataDevolucao_req'])); 
                  
                 $dataAtual = date("Y-m-d");
                 if ($linha['dataDevolucao_req'] <= $dataAtual) {
                  $color = 'red';
                 }else{
                  $color = '#2bb572';  
                 }  
                echo "<div class='card' style='border-color: $color;'>
                <div class='row1' >
                  <label>ALUNO</label>
                  <p>$aluno_req</p>
                </div>
                <div class='row' >
                    <label>SÉRIE/CURSO</label>
                    <p>$turma_req</p>
                </div>
                <div class='row' >
                    <label>DATA</label>
                    <p>$DataReq - $DataEntrega</p>
                </div>
                <div class='row' >
                    <label>LIVRO - N°</label>
                    <p>$livro</p>  
                </div>
                <div class='row-icons'>
                    
                    <div class='edit'> 
                            <a class=''><i class='fa-solid fa-pen-to-square'></i></div> </a>                                
                    <div class='delete'>
                        <a href=''><i class='fa-regular fa-trash-can' onclick=" . '"' . "openModal(event)" . '"' . "></i></a>
                    </div>   
                    </div>
                </div>" ;
             
                  }     
             ?>                
         </main>


  <div class="modal">
  <form method="POST" action="actions/delete.php" id="form-modal">
  <?php echo "<input type='hidden' name='idReq' value=$ID>"?>   
  <p>Deseja Mesmo Excluir?</p>
  <button onClick="lockModal()" id="Cancel" type="buttom">Cancelar</button>
  <button type="submit">Confirmar</button>
  </form>
</div>


         
         <footer>
            <div class="quit">
                <a><button><a><i class="fa-solid fa-power-off"></i>Sair</a></button></a>
            </div>
            <div class="addNew">
                <a><button><a>Cadastrar Requisição<i class="fa-solid fa-arrow-right-to-bracket"></i></a></button> 
            </div>
            <div class="emptyspace">
             
            </div>
         </footer>
       
    
    </div>
   </div>
</div>



<script>
    function openModal(event) {
     event.preventDefault();   

     let modal = document.querySelector('.modal')

     modal.style.display = "block";

    }

    function lockModal() {
 
     let modal = document.querySelector('.modal')
     modal.style.display = "none";    

    }

    var form = document.getElementById("form-modal");
  var btnCancelar = document.getElementById("Cancel");
  
  btnCancelar.addEventListener("click", function(event) {
    event.preventDefault();
});
 
     
function voltarPaginaAnterior() {
  setTimeout(function() {
    location.href = "../request.php"; 
  }, 3000);
};


voltarPaginaAnterior();


</script>

   <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</body>
</html>