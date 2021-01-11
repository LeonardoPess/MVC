<div class="chamada">
  <div class="container">
    <h2><?= $arr['titulo'] ?></h2>
  </div><!--container-->
</div><!--chamada-->

<div class="contato">
  <form method="post">
    <input type="text" name="nome" placeholder="Nome...">
    <textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
    <input type="submit" name="acao" value="Enviar!">
  </form>
</div><!--contato-->