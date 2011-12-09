<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $medicine_doctor->getId() ?></td>
    </tr>
    <tr>
      <th>Doctor:</th>
      <td><?php echo $medicine_doctor->getDoctorId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $medicine_doctor->getType() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $medicine_doctor->getName() ?></td>
    </tr>
    <tr>
      <th>Spcialisation:</th>
      <td><?php echo $medicine_doctor->getSpcialisation() ?></td>
    </tr>
    <tr>
      <th>Photo:</th>
      <td><?php echo $medicine_doctor->getPhoto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $medicine_doctor->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $medicine_doctor->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('doctor/edit?id='.$medicine_doctor->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('doctor/index') ?>">List</a>
