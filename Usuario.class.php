<?php
+
+class Usuario{
+    public function login($email,$senha){
+        global $pdo;
+
+        $sql = "SELECT * FROM usuarios WHERE email=:email AND senha=:senha";
+        $sql = $pdo->prepare($sql);
+        $sql->bindValue("email",$email);
+        $sql->bindValue("senha",md5($senha));
+        $sql->execute();
+
+        if($sql->rowCount() > 0){
+            $dado = $sql->fetch();
+
+            $_SESSION['email'] = $dado['email'];
+
+            return true;
+        }else{
+            return false;
+        }
+    }
+
+    public function cadastrar($cpf,$nome,$senha,$email,$telefone,$nascimento){
+        global $pdo;
+
+        $sql = $pdo->prepare("SELECT *FROM usuarios where email = :email");
+        $sql->bindValue(':email',$email);
+        $sql->execute();
+
+        if($sql->rowCount() === 0){
+
+        $sql = $pdo->prepare("INSERT INTO usuarios ('cpf','nome','senha','email','telefone','nascimento') VALUES
+            (:cpf,:nome,:senha,:email,:telefone,:nascimento)");
+        $sql->bindValue(':cpf',$cpf);
+
+        if($sql->rowCount() === 0){
+
+        $sql = $pdo->prepare("INSERT INTO usuarios ('cpf','nome','senha','emai
l','telefone','nascimento') VALUES
+            (:cpf,:nome,:senha,:email,:telefone,:nascimento)");
+        $sql->bindValue(':cpf',$cpf);
+        $sql->bindValue(':nome',$nome);
+        $sql->bindValue(':senha',md5($senha));
+        $sql->bindValue(':email',$email);
+        $sql->bindValue(':telefone',$telefone);
+        $sql->bindValue(':nascimento',$nascimento);
+        $sql->execute();
+    }
+
+        return true;
+        header("Location: cadastrado.php");
+    }
+}
