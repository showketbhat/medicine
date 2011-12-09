<h1>Medicine drugss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Drug</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Description</th>
      <th>Price</th>
      <th>Instock</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($medicine_drugss as $medicine_drugs): ?>
    <tr>
      <td><a href="<?php echo url_for('drugs/show?id='.$medicine_drugs->getId()) ?>"><?php echo $medicine_drugs->getId() ?></a></td>
      <td><?php echo $medicine_drugs->getDrugId() ?></td>
      <td><?php echo $medicine_drugs->getType() ?></td>
      <td><?php echo $medicine_drugs->getCompany() ?></td>
      <td><?php echo $medicine_drugs->getLogo() ?></td>
      <td><?php echo $medicine_drugs->getUrl() ?></td>
      <td><?php echo $medicine_drugs->getDescription() ?></td>
      <td><?php echo $medicine_drugs->getPrice() ?></td>
      <td><?php echo $medicine_drugs->getInstock() ?></td>
      <td><?php echo $medicine_drugs->getExpiresAt() ?></td>
      <td><?php echo $medicine_drugs->getCreatedAt() ?></td>
      <td><?php echo $medicine_drugs->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('drugs/new') ?>">New</a>
