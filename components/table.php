
<div >
    <table class="table table-striped">
    <tr>
        <th>Usuario</th>
        <th colspan="2">E-mail</th>
    </tr>
    <?php foreach($users as $users) : ?>
        <tr id = "<?php echo $users['id']?>">
            <td><?php echo $users['username']?></td>
            <td><?php echo $users['mail']?></td>
            <td >
                <form action = "db/delete.php" style="display:inline;"method="post">
                    <button class="btn btn-danger" type="submit" name="delete" value="<?php echo $users['id']; ?>">Excluir</button>
                </form>
                <button class="btn btn-warning" name="update"  onclick="formToggle( <?php echo $users['id']; ?> , '<?php echo $users['username']; ?>' , '<?php echo $users['mail'] ; ?>' , '<?php echo $users['passw'];?>'  )" >Editar</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>