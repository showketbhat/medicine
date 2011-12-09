<h1>Medicine doctors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Doctor</th>
      <th>Type</th>
      <th>Name</th>
      <th>Spcialisation</th>
      <th>Photo</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($medicine_doctors as $medicine_doctor): ?>
    <tr>
      <td><a href="<?php echo url_for('doctor/show?id='.$medicine_doctor->getId()) ?>"><?php echo $medicine_doctor->getId() ?></a></td>
      <td><?php echo $medicine_doctor->getDoctorId() ?></td>
      <td><?php echo $medicine_doctor->getType() ?></td>
      <td><?php echo $medicine_doctor->getName() ?></td>
      <td><?php echo $medicine_doctor->getSpcialisation() ?></td>
      <td><?php echo $medicine_doctor->getPhoto() ?></td>
      <td><?php echo $medicine_doctor->getCreatedAt() ?></td>
      <td><?php echo $medicine_doctor->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('doctor/new') ?>">New</a>
