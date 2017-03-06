<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>
<?php mostraAlerta("success");
mostraAlerta("danger"); ?>
  <h1>Bem vindo!</h1>
  <?php if(usuarioEstaLogado()){?>
    <p class="text-success">Você esta logado como <?= usuarioLogado()?>.
      <a href="logout.php">Deslogar</a></p>
  <?php }else{ ?>
  <h2>Login</h2>
  <form class="" action="login.php" method="post">
    <table class="table">
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email" value=""></td>
      </tr>
      <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha" value=""></td>
      </tr>
      <tr>
        <td><button class="btn btn-primary" type="submit" name="button">Login</button></td>
      </tr>
    </table>
  </form>
  <?php } ?>
<?php include("rodape.php"); ?>
