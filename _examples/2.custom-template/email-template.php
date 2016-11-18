<table>

    <tr>
        <th>Name: </th>
        <td><?php echo htmlspecialchars($fields['name']) ?></td>
    </tr>

    <tr>
        <th>Email: </th>
        <td><?php echo htmlspecialchars($fields['email']) ?></td>
    </tr>

    <tr>
        <th>Message: </th>
        <td><?php echo htmlspecialchars(nl2br($fields['message'])) ?></td>
    </tr>

</table>