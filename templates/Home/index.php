<ul>
    <?php foreach($users as $user): ?>
        <li> <?php echo $user->id ?>: <?php echo $user->firstName; ?> </li>
    <?php endforeach; ?>
</ul>