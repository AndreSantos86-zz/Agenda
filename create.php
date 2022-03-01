<?php
 include_once("templates/header.php");
?>
 <div class="container">
     <?php include_once("templates/backBtn.html");?>
     <h1 id="main-title">Criar Contato</h1>
     <form action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone de contato:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite seu telefone" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações" rows ="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
 </div>
<?php
 include_once("templates/footer.php");
 
 /*function formataTelefone($numero){
    $formata = substr($numero, 0, 2);
    $formata_2 = substr($numero, 3, 5);
    $formata_3 = substr($numero, 4, 4);
    return "(".$formata.") " . $formata_2 . "-". $formata_3;
 }*/
?>