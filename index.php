<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("flatlab/operator/head.php") ?>
  </head>

  <body>
  <section id="container" >
      <!--header start-->
       <?php $this->load->view("flatlab/operator/header.php") ?>
      <!--header end-->

      <!--sidebar start-->
       <?php $this->load->view("flatlab/operator/sidebar.php") ?>
      <!--sidebar end-->

      <!--main content start-->
       <?php $this->load->view("flatlab/operator/dispo/main.php") ?>
      <!--main content end-->

      <!--footer start-->
       <?php $this->load->view("flatlab/operator/footer.php") ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery-1.8.3.min.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/owl.carousel.js" ></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.customSelect.min.js" ></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/respond.min.js" ></script>

    <script class="include" type="text/javascript" src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/jquery.dcjqaccordion.2.7.js"></script>

    <!--common script for all pages-->
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/sparkline-chart.js"></script>
    <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/easy-pie-chart.js"></script>
    <!-- <script src="<?=base_url($frameworks_dir)?>/flatlab/admin/template_content/js/count.js"></script> -->

  <script>
      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
  </script>
  <script>
  function countUp(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp(<?php
        $this->db->from('ta_SPM_masuk');
        echo($this->db->count_all_results());
        ?>
);

function countUp2(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp2(2);

function countUp3(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count3'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp3(8);

function countUp4(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count4'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp4(1000);
  </script>

  </body>
</html>
