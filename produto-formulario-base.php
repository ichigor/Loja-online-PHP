<tr>
  <td>Nome:</td>
  <td><input  class="form-control" type="text" name="nome"
    value="<?=$produto['nome']?>"></td>
</tr>
<tr>
  <td>Preco:</td>
  <td><input class="form-control" type="number" name="preco"
    value="<?=$produto['preco']?>"></td>
</tr>
<tr>
  <td>Descricao:</td>
  <td><textarea class="form-control" name = "descricao"><?=$produto['descricao']?></textarea></td>
</tr>
<tr>
  <td></td>
  <td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado</td>
</tr>
<tr>
  <td>Categoria:</td>
  <td>
    <select name="categoria_id" class="form-control">
    <?php foreach ($categorias as $categoria) :
      //Id
        $essaEhACategoria = $produto['categoria_id'] == $categoria['Id'];
        $selecao = $essaEhACategoria ? "selected='selected'" : "";
      ?>

      <option value="<?=$categoria['Id']?>" <?=$selecao?>>
        <?=$categoria['nome']?>
      </option>
    <?php endforeach ?>
  </select>
  </td>
</tr>
