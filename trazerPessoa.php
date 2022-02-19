<?php
 //echo("Parabéns você conectou na API a");
 $id = $_GET["id"];
 


 $conn = mysqli_connect("localhost","root","root","bd_cia");

 if(!$conn){
     echo( mysqli_errno($conn) . " -> " . mysqli_error($conn));
     die;
 }

 $sql ="SELECT * FROM tb_pessoa WHERE id = $id";

 $result = mysqli_query($conn, $sql);

 $linha = mysqli_fetch_assoc($result);

 echo json_encode(array("Pessoa"=>$linha));

 //print_r($linha);

?>