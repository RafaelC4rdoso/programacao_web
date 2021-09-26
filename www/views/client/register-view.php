
<h1>Registro de Cliente</h1>
<table class="table table-striped">
    <tr>
        <th>Nome:</th>
        <td>
            <?=$arrayClient['name']?>
        </td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>
            <?=$arrayClient['email']?>
        </td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>
            <?=$arrayClient['phone']?>
        </td>
    </tr>
    <tr>
        <th>Gender:</th>
        <td>
            <?=$arrayClient['gender']?>
        </td>
    </tr>
    <tr>
        <th>Accept:</th>
        <td>
            <?php
                if($arrayClient['accept']) {
                    echo('Terms accepted');
                } else {
                    echo('Terms denied');
                }
            ?>
        </td>
    </tr>

</table>
