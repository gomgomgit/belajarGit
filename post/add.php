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
        ADD USER
        <small>Add User Account</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../home/index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php"><i class="glyphicon glyphicon-user"></i> User</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Add User</li>
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
              <h3>Add Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="add_process.php">
              <div class="box-body">
              	<div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author Name">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea name="content" class="form-control" id="content" placeholder="Enter Content"></textarea> 
                </div>
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios1" value=1 checked>
                      Publish
                    </label>
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value=0 >
                      Draft
                    </label>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<a href="index.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
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
        $('#useractive').addClass('active');
        $('#postactive').addClass('active');
</script>
</body>
</html>
