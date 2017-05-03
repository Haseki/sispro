<!-- takvim ayarları ve containerları-->
<?php include'header.php' ?>
 <div class="container   " style=" 
            padding-left: 10px;
            padding-right: 20px;
            margin-top:20px;
            
            
           "
  >
 
  <div class="row"  >
      
        <div class="col-sm-3 col-lg-3 " style="height: 530px ;background-color: #ECECEA;margin-top: 10px ; box-shadow: 0 0 30px black;" id="takvimGirisSolContainer">
      
<!--            <a class="btn btn-danger btn-lg btn-block " style="margin-top:10px " href="#takvimgiris" role="button">Takvimi Görüntüle </a>
            <a class="btn btn-danger btn-lg btn-block" href="#bosgünleriayarla" role="button">Boş Günleri Ayarla </a>
            <a class="btn btn-danger btn-lg btn-block" href="#dolugünleriayarla" role="button">Dolu Günleri Ayarla </a>-->
            
            <ul class="nav nav-pills red nav-stacked " role="tablist" >
                <li class="active "><a   href="#takvimgiris" data-toggle="pill">Takvimi Görüntüle</a></li>
                <li><a  href="#empty"  data-toggle="pill">Boş Günleri Ayarla</a></li>
                <li><a  href="#full" data-toggle="pill">Dolu Günleri Ayarla</a></li>
            </ul>
 
        </div>
        
      
        <div class="tab-content">
                <div  class="tab-pane  active" id="takvimgiris">


                <div class="col-sm-8 col-lg-8 col-md-offset-1" style="background-color:#ECECEA;height:530px;margin-top: 10px ;box-shadow: 0 0 30px black" id="takvimGirisSagContainer">

                        <div class="row" style="margin:5px" id="dsf"> 
                            <div class="col-sm-12 col-lg-12" style="height:320px;background-color: white; box-shadow:0 0 30px gray;">
                                Hocanın takvimi<br>
                                 Hocanın takvimi
                            </div>
                        </div>

                        <div class="row" style="margin:5px " id="fdg"> 
                            <div class="col-sm-12 col-lg-12" style="height:130px;background-color: white; box-shadow:0 0 30px gray;">
                                Komut Ekleme Listesi<br>
                                  Komut Ekleme Listesi
                            </div>
                        </div>

                        <div style="margin-top:20px">
                        <button class="btn btn-info pull-right">Temizle</button>
                        <button class="btn btn-info pull-right" style="margin-right: 10px">Onayla</button>
                        </div>

                </div>

            </div>


           <div  class="tab-pane " id="empty">



                <div class="col-sm-8 col-lg-8 col-md-offset-1" style="background-color:#ECECEA;height:530px;margin-top: 10px ;box-shadow: 0 0 30px black" id="takvimGirisSagContainer">

                       bos günler

                </div>

            </div>


            <div class="tab-pane  " id="full">



                <div class="col-sm-8 col-lg-8 col-md-offset-1" style="background-color:#ECECEA;height:530px;margin-top: 10px ;box-shadow: 0 0 30px black" id="takvimGirisSagContainer">

                     dolu günler  

                </div>

            </div>
        </div>
    </div>
           
 </div>

<?php include'footer.php' ?>