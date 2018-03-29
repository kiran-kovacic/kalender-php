<main>
  <form action="<?= URL ?>calendar/edit/<?= $birthday['id']; ?>" method="POST">
  	<input type="text" name="person" value="<?= $birthday['person']?>">
    <input type="number" name="day" value="<?= $birthday['day']?>">
  	<input type="number" name="month" value="<?= $birthday['month']?>">
  	<input type="number" name="year" value="<?= $birthday['year']?>">
  	<input type="submit" value="Opslaan">
  </form>
</main>
