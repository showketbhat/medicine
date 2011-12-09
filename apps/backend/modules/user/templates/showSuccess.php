<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $medicine_user->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $medicine_user->getUserId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $medicine_user->getType() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $medicine_user->getName() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $medicine_user->getPassword() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $medicine_user->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $medicine_user->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$medicine_user->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
