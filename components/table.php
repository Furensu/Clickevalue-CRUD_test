
<div class="container">
    <table>
    <tr>
        <th>Usuario</th>
        <th>E-mail</th>
    </tr>
    <?php foreach($users as $users) : ?>
        <tr>
            <td><?php echo $users['username']?></td>
            <td><?php echo $users['mail']?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>