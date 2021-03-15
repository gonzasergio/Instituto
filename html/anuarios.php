<?php 
session_start();

if (isset($_POST['anuaryDate'])){
    $_SESSION["anuary_age"] = $_POST['anuaryDate'];
}

?>

<html>
  <!-- head -->
  <?php include '../templates/head.html'?>
  
<body>
  <!-- header -->
  <?php include '../templates/navbar.html'?>

  <script>
    $(document).ready(function() {
      $("img").click(function(){
        $(".image-container").removeClass("d-none");
        $(".image-container").addClass("d-flex");
        $("#img").html('<img src="../img/' + $(this).attr("img") + '" alt="">');
        console.log($(this).attr("img"));

      });
      $("#closeImageContainer").click(function(){
        $(".image-container").removeClass("d-flex");
        $(".image-container").addClass("d-none");
        $("#img").html('');
      });
    });
  </script>

  <div class="image-container d-none">
    <div class="d-block text-right">
      <span class="d-block"><i id="closeImageContainer" class="fas fa-times"></i></span>
      <span id="img" class="d-block"></span>
    </div>
  </div>

  <main>
    <div class="container">
      
      <!--selector del año-->
      <div class="mb-3 d-flex justify-content-center">
        <form class="form-inline" action="" method="post">
          <div class="form-group h5">
            <label for="year" class="mr-2">Anuario del curso </label>
            <input name="anuaryDate" type="number" class="rounded pl-2" style="width: 74px" min="1900" max="<?php echo date("Y"); ?>" value="<?php if (!isset($_SESSION["anuary_age"])){ echo date("Y");} else { echo $_SESSION["anuary_age"]; }?>" />
          </div>
        </form>
      </div>

      <?php if (isset($_SESSION["anuary_age"])){ if ($_SESSION["anuary_age"] == "2019"){ ?>
        <!--imagenes-->
        <div class="images text-center">
            <img img="familiaJF.jpg" class="mt-1" src="../img/familiaJF.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
        </div>
      <?php } else if ($_SESSION["anuary_age"] == "2020"){?>
        <!--imagenes-->
        <div class="images text-center">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="neptune.png" class="mt-1" src="../img/neptune.png" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
        </div>
      <?php }} else {?>
        <!--imagenes-->
        <div class="images text-center">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
            <img img="usuario.jpg" class="mt-1" src="../img/usuario.jpg" alt="">
        </div>
      <?php }?>

    </div>
  </main>

  <?php include '../templates/footer.html'?>
  
</body>
</html>