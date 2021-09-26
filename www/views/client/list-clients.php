
<h1>Clients List</h1>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>
    <?php
        foreach($arrayClients as $client) {
    ?>
        <tr>
            <td>
                <?=$client['idClient'];?>
            </td>
            <td>
                <?=$client['name'];?>
            </td><td>
                <?=$client['email'];?>
            </td><td>
                <?=$client['phone'];?>
            </td><td>
                <?=$client['address'];?>
            </td>
        </tr>
    <?
        }
    ?>
</table>