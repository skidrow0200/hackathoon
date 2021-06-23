<html>
  <head>
<?php 
header( "refresh:6;url=../index.html" );
?>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" type="image/svg" href="../media/logo.svg" sizes="128x128" />
    <title>Хакатон RSUE 2021</title>
  </head>
    <style>

      video{
        position: fixed;
        z-index: 1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;




      }
      @media (min-aspect-ratio: 16/9){
        video{
          width: 100%;
          height: auto;
        }

      @media (max-aspect-ratio: 16/9){
        video{
          width: auto;
          height: 100%;
        }

        @media (max-width: 767px){
          video{
            display: none;
            }
            body{
              background:url('../media/machine.png');
            }
        }
        img {
          max-width: 100%; 
          display:block; 
          height: auto;
                  }
@media only screen and (min-width: 400px) {
  img {
    width: 100%;
    height: 100%;
  }
}
@media only screen and (min-width: 500px) {
  img {
    width: 100%;
    height: 100%;
  }
}

@media only screen and (min-width: 600px) {
  img {
    width: 100%;
    height: 100%;
  }
}
@media only screen and (min-width: 700px) {
  img {
    width: 100%;
    height: 100%;
  }
}


@media only screen and (min-width: 800px) {
  img {
    width: 100%;
    height: 100%;
  }
}
@media only screen and (max-width: 900px) {
  img {
    width: 100%;
    height: 100%;
  }
}




            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <body>
      <div class="container">
      <center>
      <video id="video" poster="../media/machine.jpg" autoplay loop>
        <source src="../media/machine.mp4" type="video/mp4">
    </video></center>
      <center>

      <img src="../media/success.png" alt="Success" style="position: relative;z-index: 2;width: 50%;height: 80%;border-radius: 30px;border-radius: 30px;float: center;margin-top: 5%;">
      </center>

      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    </body>
</html>