<?php
$nome = 'Nome vindo do seu banco de dados';
?>
<form method="post">
<input type="text" value="<?php echo $nome; ?>" />
<input type="submit" value="alterar" />
</form>