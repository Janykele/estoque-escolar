<?php
class Nota{
    public function cadastrar_nota(){
        $fornecedor = $_POST['id_fornecedor'];
        $num_nota = $_POST['num_nota'];
        $recurso = $_POST['recurso'];
        $total_nf = $_POST['total_nf'];

        global $db;

        $sql = "INSERT INTO entrada_nota SET id_fornecedor = :id_fornecedor, numero_nota = :num_nota, id_recurso = :recurso, total_nota = :total_nf";
        $sql = $db->prepare($sql);
        $sql->bindValue(":id_fornecedor", $fornecedor);
        $sql->bindValue(":num_nota", $num_nota);
        $sql->bindValue(":recurso", $recurso);
        $sql->bindValue(":total_nf", $total_nf);        
        $sql->execute();

        header("Location: {$url}cad-prod-nota.php");
    }
    
}


?>
