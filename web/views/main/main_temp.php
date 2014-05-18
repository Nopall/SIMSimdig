<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('include/head');?>
  <body>
    <?php if($navbar == false) echo ""; else $this->load->view('include/header');?>
    <div id="main">
      <div class="container">
      <?php if($sidebar == false) echo "";else$this->load->view('include/sidebar');?>
        <?php echo $content;?>
      </div>
    </div>
    <?php $this->load->view('include/foot');?>
  </body>
</html>