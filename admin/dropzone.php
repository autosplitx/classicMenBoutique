<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DropZone</title>

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/dropzone.min.css">
  <link rel="stylesheet" href="../assets/css/atlantis.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>How to Delete Uploaded File in Dropzone JS? - ItSolutionStuff.com</h2>
        <form action="./upload.php" method="post" enctype="multipart/form-data" class="dropzone" id="image-upload">
          <input type="submit" name="request" value="add" id="uploadFile">
          <div>
            <h3>Upload Multiple Image By Click On Box</h3>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <button type="submit" id="submit-all" class="btn btn-primary btn-xs">Upload the file</button> -->


  <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

  <script type="text/javascript">
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone(".dropzone", {
      maxFilesize: 10,
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      addRemoveLinks: true,

      removedfile: function(file) {
        var fileName = file.name;

        $.ajax({
          type: 'POST',
          url: 'upload.php',
          data: {
            name: fileName,
            request: 'delete'
          },
          success: function(data) {
            console.log('success: ' + data);
          }
        });

        var _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
      }
    });

    $('#uploadFile').click(function() {
      myDropzone.processQueue();
      var fileName = file.name;

      $.ajax({
        type: 'POST',
        url: './upload.php',
        data: {
          name: fileName,
          request: 'add'
        },
        success: function(data) {
          console.log('success: ' + data);
        }
      });
    });
  </script>
</body>

</html>