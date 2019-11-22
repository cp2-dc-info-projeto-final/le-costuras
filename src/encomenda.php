<?php
 require_once "conexao.php";

 function buscarvendas() {
    
    $conn=get_connection();
    if ($conn===false){
        die("Erro de conexão".mysqli_connect_error());
    }
    $sql = "SELECT 
                v.id,
                v.idusuario,
                v.dataa,
                v.vtotal,
                u.nome,
                u.email,
                u.endereco
            FROM venda as v
            JOIN usuario as u ON v.idusuario = u.id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }


 function buscaritens($id_venda) {
    
    $conn=get_connection();
    if ($conn===false){
        die("Erro de conexão".mysqli_connect_error());
    }
    $sql = " SELECT 
                v.id,
                v.idusuario,
                v.dataa,
                v.vtotal,
                p.nome,
                p.preco,
                p.descricao,
                pv.qtd
            FROM venda as v
            JOIN produtovenda as pv ON v.id = pv.id_venda
            JOIN produto as p ON p.id = pv.id_produto
            WHERE v.id = $id_venda";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }

 session_start();

 $vendas = buscarvendas();

 foreach($vendas as $venda) {

?>
    <div>
        <?php echo $venda["id"]; ?><br>
        <?php echo $venda["nome"]; ?><br>
        <?php echo $venda["email"]; ?><br>
        <?php echo $venda["endereco"]; ?><br>
        <?php echo $venda["dataa"]; ?><br>
        <?php echo $venda["vtotal"]; ?><br>
        <table>
            <tr>
                <th> Produto </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Subtotal </th>
            </tr>
            <?php
                $produtos = buscaritens($venda["id"]);
                foreach ($produtos as $produto) {
            ?>   
            <tr>
                <td> <?php echo $produto["nome"]; ?> </td>
                <td> <?php echo $produto["preco"]; ?> </td>
                <td> <?php echo $produto["qtd"]; ?> </td>
                <td> <?php echo $produto["preco"] * $produto["qtd"]; ?> </td>
            </tr>

            <?php
                }    
            ?>
    </div><br>
<?php
 }
?>

 