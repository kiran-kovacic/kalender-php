<main>
  <?php
    $months = array(null, 'januari', 'febuari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'otktober', 'november', 'december');
    $day = null;
    $month = null;
    foreach ($birthdays as $birthday) {
    if ($month !== $birthday['month']) {
      echo "<h1>" . $months[$birthday['month']] . "</h1>";
      $month = $birthday['month'];
      $day = null;
    }
    if ($day !== $birthday['day']) {
      echo "<h2>" .$birthday['day']. "</h2>";
      $day = $birthday['day'];

    }
      echo "<p><a href=\"" . URL . 'calendar/editPage/' . $birthday['id'] . "\">" . $birthday['person'] . "(" . $birthday['year'] . ")" . "<a/><a href=\"" . URL . 'calendar/deletePage/' . $birthday['id'] . "\">x</a></p>";
    }
   ?>
  <p><a href="<?= URL ?>calendar/create">+ toevoegen</a></p>
</main>
