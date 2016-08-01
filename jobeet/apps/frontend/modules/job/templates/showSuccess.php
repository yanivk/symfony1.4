<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $jobeet_job->get() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$jobeet_job->get()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
