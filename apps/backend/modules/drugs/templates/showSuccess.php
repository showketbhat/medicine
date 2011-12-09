<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $medicine_drugs->getId() ?></td>
    </tr>
    <tr>
      <th>Drug:</th>
      <td><?php echo $medicine_drugs->getDrugId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $medicine_drugs->getType() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $medicine_drugs->getCompany() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $medicine_drugs->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $medicine_drugs->getUrl() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $medicine_drugs->getDescription() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $medicine_drugs->getPrice() ?></td>
    </tr>
    <tr>
      <th>Instock:</th>
      <td><?php echo $medicine_drugs->getInstock() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $medicine_drugs->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $medicine_drugs->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $medicine_drugs->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('drugs/edit?id='.$medicine_drugs->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('drugs/index') ?>">List</a>
