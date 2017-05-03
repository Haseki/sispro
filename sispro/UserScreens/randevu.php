 <!-- randevu ayarları ve containerı-->
           
<?php include 'header.php';?>
<div class="container   " style=" 
            padding-left: 10px;
            padding-right: 20px;
            margin-top:20px;
            
            
           "
  >
 
  <div class="row"  >
      

            <div class="col-sm-3 col-lg-3 " style="height:530px ;background-color: #ECECEA;margin-top: 10px ; box-shadow: 0 0 30px black;" id="randevu">
      
<!--                <a class="btn btn-danger btn-lg btn-block " style="margin-top:10px " href="#" role="button">Randevu Ayarla</a>
                <a class="btn btn-danger btn-lg btn-block" href="#" role="button">Randevu İstekleri</a>
                <a class="btn btn-danger btn-lg btn-block" href="#" role="button">Randevu Al</a>-->
                <ul class="nav nav-pills nav-stacked red" role="tablist" >
                    <li class="active "> <a   href="#ayarla" data-toggle="pill" id="linkayarla">Randevu Ayarla</a> 
                        <div id="demo" >
                                <div class="row" style="margin-bottom: 2px;margin-top: 5px;">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="isim"/>
                                          <span class="input-group-btn">
                                              <button class="btn btn-info" type="button" style="height:34px"><span class="glyphicon glyphicon-search"></span></button>
                                          </span>
                                        </div>
                                      </div>
                                    
                                </div>
                            <div class="container" style="height:60% ;width:100%; border:1px solid black ;background-color: white">
                                 isimler
                            </div>
                            
                        </div>
                        
                    </li>
                    <li><a  href="#istek"  data-toggle="pill" id="linkistek">Randevu İstekleri</a></li>
                    <li><a  href="#al" data-toggle="pill" id="linkal">Randevu Al</a></li>
                </ul>

                

 
            </div>
            
            <div class="tab-content ">
                <div class="col-sm-8 col-lg-8  col-md-offset-1 tab-pane active" style="background-color:white ; height: 530px ; margin-top: 10px ; box-shadow: 0 0 30px black " id="ayarla">
                    <div class="class-content">
                        <div class="row" style="margin-top:5px;">
                            <div class="col-xs-1 table-bordered " id="s1">Saat</div>
                            <div class="col-xs-2 table-bordered " id="s2">Pazartesi</div>
                            <div class="col-xs-1 table-bordered">Salı</div>
                            <div class="col-xs-2 table-bordered">Çarşamba</div>
                            <div class="col-xs-2 table-bordered">Perşembe</div>
                            <div class="col-xs-1 table-bordered">Cuma</div>
                            <div class="col-xs-2 table-bordered">Cumartesi</div>
                            <div class="col-xs-1 table-bordered">Pazar</div>
                        </div>
                        <div class="saatler" style="margin-top: 5px;">
                            
                            
                            <div class="row">
                                <div class="col-lg-1 table-bordered " style="border-bottom: none">8.00<br></div>
                                <div class="col-lg-2 table-bordered tam cell"  ><br></div>
                                <div class="col-lg-1 table-bordered tam cell" ><br></div>
                                <div class="col-lg-2 table-bordered tam cell" ><br></div>
                                <div class="col-lg-2 table-bordered tam cell" ><br></div>
                                <div class="col-lg-1 table-bordered tam cell" ><br></div>
                                <div class="col-lg-2 table-bordered tam cell" ><br></div>
                                <div class="col-lg-1 table-bordered tam cell" ><br></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-1 table-bordered " style="border-top: none;"><br></div>
                                <div class="col-lg-2 table-bordered yarim cell"><br></div>
                                <div class="col-lg-1 table-bordered yarim cell"><br></div>
                                <div class="col-lg-2 table-bordered yarim cell"><br></div>
                                <div class="col-lg-2 table-bordered yarim cell"><br></div>
                                <div class="col-lg-1 table-bordered yarim cell"><br></div>
                                <div class="col-lg-2 table-bordered yarim cell"><br></div>
                                <div class="col-lg-1 table-bordered yarim cell"><br></div>
                            </div>
                            
                           
                      
                            
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-8 col-lg-8  col-md-offset-1 tab-pane" style="background-color:#ECECEA ; height: 530px ; margin-top: 10px ; box-shadow: 0 0 30px black " id="istek">
                istek
                </div>
                
                <div class="col-sm-8 col-lg-8  col-md-offset-1 tab-pane " style="background-color:#ECECEA ; height: 530px ; margin-top: 10px ; box-shadow: 0 0 30px black " id="al">
                al
                </div>
            </div>
      
      
     </div>
    </div>
<?php include 'footer.php';?>            