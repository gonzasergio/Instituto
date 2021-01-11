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
      });
      $("#closeImageContainer").click(function(){
        $(".image-container").removeClass("d-flex");
        $(".image-container").addClass("d-none");
      });
    });
  </script>

  <div class="image-container d-none">
    <div class="d-block text-right">
      <span class="d-block"><i id="closeImageContainer" class="fas fa-times"></i></span>
      <span class="d-block"><img src="../img/usuario.jpg" alt=""></span>
    </div>
  </div>

  <main>
    <div class="container">
      
      <!--selector del año-->
      <div class="mb-3 d-flex justify-content-center">
        <form class="form-inline">
          <div class="form-group h5">
            <label for="year" class="mr-2">Anuario del curso </label>
            <input type="number" class="rounded pl-2" style="width: 74px" min="1900" max="<?php echo date("Y"); ?>" value="<?php echo date("Y"); ?>" />
          </div>
        </form>
      </div>

      <!--imagenes-->
      <div class="images">
        <img src="../img/usuario.jpg" alt="">
        <img src="../img/usuario.jpg" alt="">
        <img src="../img/usuario.jpg" alt="">
        <img src="../img/usuario.jpg" alt="">
        <img src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
        <img class="mt-1" src="../img/usuario.jpg" alt="">
      </div>

    </div>
  </main>

  <?php include '../templates/footer.html'?>
  
</body>
</html>