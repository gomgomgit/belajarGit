<!DOCTYPE html>
<html>
<head>
  <?php
    include '../template/link.php';
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php
    include '../template/header.php';
  ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php
  include '../template/sidebar.php';
  ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        POST
        <small>Beranda Post</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application! I hope so!
        </div>
        <!-- /.box-body -->
        <div class="box">
            <div class="box-header with-border">
              <a href="add.php" class="btn btn-sm btn-primary"><i class="fa fa-user-plus"></i> Add Post</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                </tr>
                <?php

                  include '../connect/connect.php';
                  $number = 1;
                  $sql    = "SELECT * FROM post";
                  $result = mysqli_query($connect, $sql);

                  if (mysqli_num_rows($result)>0 ) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                  <td><?= $number++ ."." ?></td>
                  <td><?= $row['author'] ?></td>
                  <td><?= $row['title'] ?></td>
                  <td><?= $row['content'] ?></td>
                  <td><?= $row['status']?"Publish":"Draft" ?></td>
                  <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit </a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="javascript:return confirm('Are you sure?')"><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                </tr>

                <?php
                    }
                  }

                ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include '../template/footer.php';
  ?>

  <!-- Control Sidebar -->
  <?php
  include '../template/controlSidebar.php';
  ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
  <?php
    include '../template/jquery.php';
  ?>
<script type="text/javascript">
        $('#postactive').addClass('active');
</script>
</body>
</html>
