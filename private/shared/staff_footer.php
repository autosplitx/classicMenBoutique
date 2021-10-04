<footer class="footer">
  <div class="container-fluid">
    <nav class="pull-left d-none">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.themekita.com">
            ThemeKita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Help
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Licenses
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright ml-auto">
      Made with <i class="fa fa-heart heart text-danger"></i> by <a href="#!">ekogeda</a>
    </div>
  </div>
</footer>
</div>
</div>


<script src="<?php echo url_for('assets/js/core/jquery.3.2.1.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/core/popper.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/core/bootstrap.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/chart.js/chart.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/chart-circle/circles.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/datatables/datatables.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/plugin/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo url_for('assets/js/atlantis.min.js'); ?>"></script>

<script>
  $(document).ready(function() {
    $('#basic-datatables').DataTable({});

    $('#multi-filter-select').DataTable({
      "pageLength": 5,
      initComplete: function() {
        this.api().columns().every(function() {
          var column = this;
          var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
          });
        });
      }
    });

    // Add Row
    $('#add-row').DataTable({
      "pageLength": 5,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
      $('#add-row').dataTable().fnAddData([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
      ]);
      $('#addRowModal').modal('hide');

    });
  });

  Circles.create({
    id: 'circles-1',
    radius: 45,
    value: 60,
    maxValue: 100,
    width: 7,
    text: 5,
    colors: ['#f1f1f1', '#FF9E27'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
  })

  Circles.create({
    id: 'circles-2',
    radius: 45,
    value: 70,
    maxValue: 100,
    width: 7,
    text: 36,
    colors: ['#f1f1f1', '#2BB930'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
  })

  Circles.create({
    id: 'circles-3',
    radius: 45,
    value: 40,
    maxValue: 100,
    width: 7,
    text: 12,
    colors: ['#f1f1f1', '#F25961'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
  })

  var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

  var mytotalIncomeChart = new Chart(totalIncomeChart, {
    type: 'bar',
    data: {
      labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
      datasets: [{
        label: "Total Income",
        backgroundColor: '#ff9e27',
        borderColor: 'rgb(23, 125, 255)',
        data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
      scales: {
        yAxes: [{
          ticks: {
            display: false //this will remove only the label
          },
          gridLines: {
            drawBorder: false,
            display: false
          }
        }],
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false
          }
        }]
      },
    }
  });

  $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#ffa534',
    fillColor: 'rgba(255, 165, 52, .14)'
  });
</script>

</body>

</html>