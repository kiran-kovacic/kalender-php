<main>
  <form action="<?= URL ?>calendar/delete/<?= $birthday['id']; ?>" method="post">
    <p>Weet je zeker dat je <?= $birthday['person'] ?> wilt verwijdern.</p>
    <input type="submit" name="delete" value="ja">
    <a href="<?= URL ?>calendar/index">nee</a>
  </form>
</main>
