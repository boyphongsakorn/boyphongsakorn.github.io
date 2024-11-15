<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phongsakorn "Boy" Wisetthon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" async>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet" async>
    <script src="https://kit.fontawesome.com/e46a42ada8.js" crossorigin="anonymous" async></script>
    <link rel="shortcut icon" type="image/png" href="image/favlogo.png"/>
    <style>
      body {
        font-family: 'Mitr', sans-serif;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> <img src="image/favlogo.png" width="30" class="d-inline-block align-top" alt=""> Phongsakorn Wisetthon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://shop.pwisetthon.com">Shop </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Team QuadB
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://itsupport.teamquadb.in.th/">IT.Support</a>
                <!--a class="dropdown-item" href="#"></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"></a-->
              </div>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Game Servers
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://minecraft.pwisetthon.com/">Minecraft</a>
                <a class="dropdown-item" href="#"></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"></a>
              </div>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="https://boyphongsakorn.github.io/">Github</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="archive.html">Archive</a>
            </li>
          </ul>
        </div>
      </nav>
    
      <div class="container">
        <?php
        //  Initiate curl
        //  $ch = curl_init();
        // Disable SSL verification
        //  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        //  curl_setopt($ch, CURLOPT_URL,"https://api.minetools.eu/ping/103.245.164.68/25565");
        // Execute
        //  $result=curl_exec($ch);
        // Closing
        //  curl_close($ch);
        // แปลงข้อมูลที่รับมาในรูป json มาเป็น array จะได้ใช้ง่าย ๆ
        //  $DATA= json_decode($result, true);
        //print_r($DATA);

        //  if ($DATA['players']['online'] > 0) {
        ?>
        <!--div class="alert alert-primary" role="alert" style="margin-top: 15px;">
          มีคนกำลังเล่น Minecraft อยู่ <?php echo $DATA['players']['online']; ?> คน <?php foreach ($DATA['players']['sample'] as $key) { ?> <img src="https://minotar.net/avatar/<?php echo $key['id']; ?>/25"> <?php } ?> <a data-toggle="tooltip" data-placement="top" title="139.99.121.1:25578">เล่นตอนนี้เลย</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div-->
        <?php
        //  }
        ?>
        <div class="alert alert-primary" role="alert" style="margin-top: 15px;">
          มาเข้าร่วม Discord ด้วยกันไหม? ผู้คนรออยู่มากมาย
          <?php
          //$url = 'https://discordapp.com/api/v6/guilds/443362659522445312/members?limit=100';

          //$ch = curl_init();
          //$f = fopen('request.txt', 'w');
          /*curl_setopt_array($ch, array(
            CURLOPT_URL            => $url, 
            CURLOPT_HTTPHEADER     => array('Authorization: Bot'), 
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_VERBOSE        => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
          //    CURLOPT_STDERR         => $f,
          ));
          $response = curl_exec($ch);
          //fclose($f);
          curl_close($ch);
          $DDATA= json_decode($response, true);
          //print_r($DDATA);
          $i=0;
          $random_keys=array_rand($DDATA,5);
          $dcr=0;
          foreach ($DDATA as $good) {
            if ($good['user']['bot'] != 1 /*&& isset($good['user']['avatar'])){
              if($random_keys[$i] == $dcr){
              echo '<img class="lazy" data-src="https://img.gs/fhcphvsghs/quality=low/https://cdn.discordapp.com/avatars/'.$good['user']['id'].'/'.$good['user']['avatar'].'.png" width="25px" data-toggle="tooltip" data-placement="bottom" title="'.$good['user']['username'].'" style="border-radius: 15px">';
              $i++;
              }
            }
            //echo $random_keys[$i].'<br>';
            //echo $dcr;
            $dcr++;
            if ($i==10){
              break;
            }
          }*/
          ?>
           <a href="https://discord.gg/mxRefzX">คลิกที่นี้เลย</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

          <div class="card-columns" style="margin-top: 15px;">
            <div class="card" >
              <img class="lazy card-img-top" data-src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://i.cultees.co/5e495afd279aa-front-img.png" alt="รูปเสื้อฉันหนึ่งคนมีเอฟได้หลายตัว">
              <div class="card-body">
                <h5 class="card-title">พาแหกกฎ</h5>
                <p class="card-text">อย่าไปทำอะไร แบบเดิมๆ น่าเบื่อ</p>
                <a href="https://cultees.co/preview.php?id=5e495afd279aa#/" class="btn btn-primary">Buy</a>
              </div>
              <div class="card-footer text-muted text-center">
                <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" data-src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://i.cultees.co/5e359b99c573f-front-img.png" alt="รูปเสื้อฉันหนึ่งคนมีเอฟได้หลายตัว">
              <div class="card-body">
                <h5 class="card-title">F 9 ตัว</h5>
                <p class="card-text">F 9 ตัว ไม่ไหวก็ลาออก แค่นั้นแหละ</p>
                <a href="https://cultees.co/preview.php?id=5e359b99c573f#/" class="btn btn-primary">Buy</a>
              </div>
              <div class="card-footer text-muted text-center">
                <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" data-src="image/777035536126581_QRCode.png" alt="">
              <div class="card-body">
                <h5 class="card-title">1:m f</h5>
                <p class="card-text">Facebook Camrea Effcet อันแรกที่ทำ</p>
                <a href="https://www.facebook.com/fbcameraeffects/tryit/777035536126581/" class="btn btn-primary">View</a>
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" src="image/790472258101600_QRCode.png" alt="">
              <div class="card-body">
                <h5 class="card-title">F จงออกไป</h5>
                <p class="card-text">Facebook Camrea Effcet อันที่สองที่ทำ</p>
                <a href="https://www.facebook.com/fbcameraeffects/tryit/790472258101600/" class="btn btn-primary">View</a>
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" src="image/602289590533088_QRCode.png" alt="">
              <div class="card-body">
                <h5 class="card-title">VB จงสถิต อยู่กับฉัน</h5>
                <p class="card-text">Facebook Camrea Effcet อันที่สามที่ทำ</p>
                <a href="https://www.facebook.com/fbcameraeffects/tryit/602289590533088/" class="btn btn-primary">View</a>
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://i.cultees.co/5e04a313ad7a7-front-img.png" alt="รูปเสื้อฉันหนึ่งคนมีเอฟได้หลายตัว">
              <div class="card-body">
                <h5 class="card-title">ฉันหนึ่งคนมีเอฟได้หลายตัว</h5>
                <p class="card-text">ฉันหนึ่งคนนั้นมีเอฟได้หลายตัว เอฟหลายตัวอยู่กับฉันได้แค่คนเดียว</p>
                <a href="https://cultees.co/preview.php?id=5e04a313ad7a7#/" class="btn btn-primary">Buy</a>
              </div>
              <div class="card-footer text-muted text-center">
                <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
              </div>
            </div>
            <div class="card" >
              <img class="lazy card-img-top" data-src="https://sv1.picz.in.th/images/2020/01/17/Rq6YAz.png" alt="">
              <div class="card-body">
                <h5 class="card-title">Quad B IT.Support</h5>
                <p class="card-text">รับซ่อมคอม,จัดสเปค,ประกอบคอม</p>
                <a href="https://www.facebook.com/quadbitss" class="btn btn-primary">View</a>
              </div>
            </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/บอยเองpost_14.png" alt="">
            <div class="card-body">
              <h5 class="card-title">รขน</h5>
              <p class="card-text">พูดถึงคนบ้างคน ที่ขึ้นต้นด้วย น</p>
              <a href="https://store.line.me/stickershop/product/9725771/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/บอยเองpost_13.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Kids Coloring Around The World</h5>
              <p class="card-text">Kids brain Sticker come to show Around The World</p>
              <a href="https://store.line.me/stickershop/product/8191497/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://cultees.co/canvas/5caebf5010aa4-front-img.png" alt="รูปเสื้อฉันหนึ่งคนมีเอฟได้หลายตัว">
            <div class="card-body">
              <h5 class="card-title">5 ปี กับ โค้ดโง่ๆ</h5>
              <p class="card-text">ฮั่นแน่</p>
              <a href="https://cultees.co/preview.php?id=5caebf5010aa4#/" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/lnw_list.png" alt="">
            <div class="card-body">
              <h5 class="card-title">เทพได้กล่าวเอาไว้</h5>
              <p class="card-text">ท่านเทพได้กล่าวทำเหล่านี้ไว้</p>
              <a href="https://store.line.me/stickershop/product/6144301/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://cultees.co/canvas/5a1c2662368b9-front-img.png" alt="รูปเสื้อฉันหนึ่งคนมีเอฟได้หลายตัว">
            <div class="card-body">
              <h5 class="card-title">The Alone</h5>
              <p class="card-text">บ้างที คนเราก็ต้องอยู่คนเดียวนะ</p>
              <a href="https://cultees.co/preview.php?id=5a1c2662368b9#/" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/kids2_list.png" alt="">
            <div class="card-body">
              <h5 class="card-title">เด็กชอบระบาย 2</h5>
              <p class="card-text">เด็กชอบระบาย กลับมาระบายสีแล้ว</p>
              <a href="https://store.line.me/stickershop/product/1628546/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/amboy_list.png" alt="">
            <div class="card-body">
              <h5 class="card-title">i am boy ok?</h5>
              <p class="card-text">ผมเป็นเด็กผู้ชาย โอเคยัง ?</p>
              <a href="https://cultees.co/preview.php?id=59be8faf438ae#/" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/kids1_list.png" alt="">
            <div class="card-body">
              <h5 class="card-title">เด็กชอบระบาย</h5>
              <p class="card-text">มันไม่น่าจะใช้คำพูดของเด็กน่ะ</p>
              <a href="https://store.line.me/stickershop/product/1333004/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/linethemeprome_2.png" alt="">
            <div class="card-body">
              <h5 class="card-title">ง่ายดี</h5>
              <p class="card-text">ง่ายดี ผมชอบ</p>
              <a href="https://store.line.me/themeshop/product/216f8baf-f4ec-44b7-bc07-6f97df034632/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/worms_list.png" alt="">
            <div class="card-body">
              <h5 class="card-title">หนอนน่ารัก</h5>
              <p class="card-text">หนอนที่สวยที่สุดในโลก</p>
              <a href="https://store.line.me/themeshop/product/ce6fc8fd-f17f-4e64-82e6-0a3d49be1a75/th" class="btn btn-primary">Buy</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/บอยเอง_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
              <iframe class="lazy" data-src="https://anchor.fm/quadbpodcast/embed" width="100%" height="100" frameborder="0" scrolling="no"></iframe>
            <div class="card-body">
              <h5 class="card-title">Quad B Podcast</h5>
              <p class="card-text">Podcast ที่พูดเรื่องไม่เป็นเรื่อง</p>
              <a href="https://anchor.fm/quadbpodcast" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F267235090730539%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
          </div>
          <div class="card-body">
              <h5 class="card-title">ผู้สาวเก่า - เมย์ จิราพร (unofficial MV)</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F213305809519680%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">ออนซอนอีสาน - เต้นประกอบเพลง</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F561500807675206%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">หนังสั้น "เพศที่สาม" Extended Version 15 นาที</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F2199603400355900%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">หนังสั้น "เพศที่สาม"</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F738323303183423%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">unfinished / ศาลาคนเมา - เพชร สหรัตน์</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F858940797828214%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
          <div class="card-body">
              <h5 class="card-title">การเดินทางไปร้านอาหารและสั่งอาหารภาษาอังกฤษ</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="lazy embed-responsive-item" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fquadbvideo%2Fvideos%2F396080437810145%2F&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title">รำตารีกีปัส</h5>
              <p class="card-text">Video ตัดต่อเอง</p>
              <a href="https://www.facebook.com/quadbvideo/" class="btn btn-primary">View</a>
            </div>
            <div class="card-footer text-muted text-center">
              <img class="lazy" data-src="image/quadbvideo_small.png" width="100px">
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="https://img.gs/fhcphvsghs/200x200,2x,quality=low/https://sv1.picz.in.th/images/2020/01/17/RqntU9.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Quad B Software</h5>
              <p class="card-text">นามแผงในการทำโปรแกรม</p>
              <a href="https://boyphongsakorn.github.io/" class="btn btn-primary">Website</a>
            </div>
          </div>
          <div class="card" >
            <img class="lazy card-img-top" data-src="image/49781267_2038774829569343_4890980968522842112_n.png" alt="">
            <div class="card-body">
              <h5 class="card-title">DuoWater</h5>
              <p class="card-text">เพจ สำหรับเล่นเกม ไลฟ์เกม</p>
              <a href="https://www.facebook.com/DuoWaterGaming" class="btn btn-primary">Visit</a>
            </div>
          </div>
          <!-- จบ card -->
        </div>
        <!-- จบ กลุ่ม card -->
      </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script>
    var lazyLoadInstance = new LazyLoad({
      elements_selector: ".lazy",
      load_delay: 500
      // ... more custom settings?
    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>
</html>