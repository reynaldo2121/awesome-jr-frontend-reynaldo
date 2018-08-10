<!DOCTYPE html>
<html lang="en">
<head>    
  <title>Mata Daun</title>

  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="description" content="Penyedia Web Builder, Hosting, dan Domain Terpercaya di Seluruh Indonesia">
  <meta name="keywords" content="Web Builder, Domain, Hosting">
  <meta name="author" content="Afrikgo">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Icon -->
  <link rel="shortcut icon"                    href="<?php echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">
  <link rel="icon" sizes="130x128"             href="<?php echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">
  <link rel="apple-touch-icon" sizes="130x128" href="<?php echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">


  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/css/bootstrap.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/css/style.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/plugins/font.awesome.4.7.0/css/font-awesome.css');?>">

  <!--JavaScript-->
  <script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/jquery.3.2.1.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/bootstrap.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/jquery.easing.1.3.js');?>"></script>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhQoixZxrKvy4c7t5ewH26CQZYaLHIowk&callback=initMap">
</script>





</head>
<style>
  #map {
    height: 700px;
    width: 100%;
  }

  .map-utama{
    padding-top: 15px;
  }

</style>
<body>


 <header class="header-utama">
  <div class="header-nav">

    <nav class="navbar navbar-default navbar-home">
      <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('asset/tampilan_utama/img/Logo.png');?>" width="166" height="31" alt="Logo Mata Daun" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse animated" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
        

            <li><a href="<?php echo base_url('home/websiteGIS'); ?>" class="href-dua">WEBSITE GIS</a></li>
            <li><a href="<?php echo base_url('home/buatAkun'); ?>">DAFTAR</a></li>
            <li><a href="<?php echo base_url('home/login'); ?>">MASUK</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</header>


<section class="map-utama">

  <div class="container">
    <div class="row">


 <!--     <p>Kedelai<img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png"></p>
     <p>Padi<img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"></p>
   -->


   <br>
   <form method="POST" class="form-horizontal" id="form2">  

    <?php 
    $month = date('m');
    $year = date('Y');
      // echo $month;
    ?>



    <div class="col-xs-12 col-md-4" style="padding-bottom: 10px">
     <label for="tnm">Tahun</label>
     <select class="form-control" id="pertahun" name="pertahun" >
      <option value="semuatahun" >Semua Tahun</option>
      <option value="2016" <?php if($year=="2016") echo "selected"; ?> >2016 </option>
      <option value="2017" <?php if($year=="2017") echo "selected"; ?> >2017 </option>
      <option value="2018" <?php if($year=="2018") echo "selected"; ?> >2018 </option>
      <option value="2019" <?php if($year=="2019") echo "selected"; ?> >2019 </option>
      <option value="2020" <?php if($year=="2020") echo "selected"; ?> >2020 </option>
      <option value="2020" <?php if($year=="2021") echo "selected"; ?> >2021 </option>
      <option value="2020" <?php if($year=="2022") echo "selected"; ?> >2022 </option>

    </select>
  </div>




  <div class="col-xs-12 col-md-4" style="padding-bottom: 10px">
    <label for="tnm">Tanaman</label>
    <select class="form-control" id="pertanaman" name="pertanaman">
     <option value="semuatanaman" ?>pilih semua</option>
     <?php
     foreach ($tanaman_data as $tanaman_data) {
       ?>
       <option value="<?php echo $tanaman_data->id_tanaman ; ?>" ><?php echo $tanaman_data->nama_tanaman ;?></option>
       <?php
     }
     ?>
   </select>
 </div>

 <div class="col-xs-12 col-md-4 " style="padding-bottom: 10px">
  <label for="tnm">Daerah</label>
  <select class="form-control" id="perdaerah" name="perdaerah">
    <option value="semuadaerah" ?>pilih semua</option>
    <?php
    foreach ($daerah as $daerah) {
                 # code...
      ?>
      <option value="<?php echo $daerah->id_daerah ; ?>" ><?php echo $daerah->desa ;?></option>
      <?php
    }
    ?>
  </select>
</div>

<div class="col-xs-12 col-md-12">
 <label for="tnm" style="color:white">.</label>
 <button type="button" class="btn btn-primary col-xs-12" id="lihat" onclick="update()">TAMPILKAN</button>
</div>
</form>

<br>

<div class="col-md-2 col-xs-12">
  <br>
  <div class="card">
    <h5><strong>Icon</strong></h5>
    <hr>
    <p><img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png">Kedelai</p>
    <p><img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png">Padi</p>
    <br>
    <h5><strong>Warna</strong>    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Warna ditampilkan berdasarkan rata-rata kandungan klorofil tiap daerah"></i> 
    </h5>
    <hr>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon1.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> sangat kurang (0-10)
    </p>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon2.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> kurang baik (11-20)
    </p>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon3.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> cukup baik (21-30)
    </p>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon4.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> baik (31-40)
    </p>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon5.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> sangat baik (41-50)
    </p>
    <p><img src="<?php echo base_url('asset/tampilan_utama/img/icon6.png');?>" alt="Mata Daun Icon" style="width:30px;height:30px"> tidak ada data
    </p>
    <br>
    <h5><strong>Rata-rata Kandungan</strong>  
      <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Nilai rata-rata didapat sesuai dengan inputan diatas"></i> 
    </h5>
    <hr>
    <p id="tanaman_kedelai"><strong>Kedelai</strong></p>
    <p id="kandungan_klorofil_kedelai">Kandungan Klorofil</p>
    <p id="kandungan_nitrogen_kedelai">Kandungan Nitrogen</p>

    <p id="tanaman_padi"><strong>Padi</strong></p>
    <p id="kandungan_klorofil_padi">Kandungan Klorofil</p>
    <p id="kandungan_nitrogen_padi">Kandungan nitrogenogen</p>

  </div>
</div>
<div class="col-md-10 col-xs-12">
  <br>
  <div id="map"></div>
</div>


</div>
</div>
</section>



</section>


<footer class="footer-content">
  <div class="container">
    <div class="row">
     <div class="col-xs-12">
      <p>copyright mata daun © 2018. All Rights Reserved.</p> 
    </div>


  </div>
</div>
</footer>

<!-- GOOGLE MAPS-->
<script>

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  var kalisongowarna;
  var kucurwarna;
  var petungsewuwarna;
  var selorejowarna;
  var tegalweruwarna;
  var karangwidorowarna;
  var landungsariwarna;
  var mulyoagungwarna;
  var gadingkulonwarna;
  var sumbersekarwarna;
  var tunjungsekarwarna;
  var sumbesariwarna;

  allData();
  initMap();

  //var warna global


  function allData(){



   $.ajax({
    url : "<?php echo base_url('home/websiteGISFunction')?>/",
    type: "POST",
    data:$("#form2").serialize(),
    dataType: "JSON",
    success: function(data)
    {

    // alert('global');

    //reset data tiap sukses
    $('#kandungan_klorofil_kedelai').text('-');
    $('#kandungan_nitrogen_kedelai').text('-');
    $('#kandungan_klorofil_padi').text('-');
    $('#kandungan_nitrogen_padi').text('-');

    // alert(String(data.data_kedelai.length));
    // alert(String(data.data_padi.length));
    
    for (var i = 0; i < data.data_kedelai.length; i++) 
    {

         // alert('kedelai');


         var kandungan_klorofil = String(data.data_kedelai[i].kandungan_klorofil);
         var kandungan_nitrogen = String(data.data_kedelai[i].kandungan_nitrogen);

         if(kandungan_klorofil=="null"){
          kandungan_klorofil="-";
        }


        if(kandungan_nitrogen=="null"){
          kandungan_nitrogen="-";
        }

        $('#kandungan_klorofil_kedelai').text("Klorofil : " + kandungan_klorofil);

        $('#kandungan_nitrogen_kedelai').text("Nitrogen : " + kandungan_nitrogen);
      }

      for (var i = 0; i < data.data_padi.length; i++) 
      {

   // alert('padi');


   var kandungan_klorofil = String(data.data_padi[i].kandungan_klorofil);
   var kandungan_nitrogen = String(data.data_padi[i].kandungan_nitrogen);

   if(kandungan_klorofil=="null"){
    kandungan_klorofil="-";
  }

  if(kandungan_nitrogen=="null"){
    kandungan_nitrogen="-";
  }

  $('#kandungan_klorofil_padi').text("Klorofil : " + kandungan_klorofil);
  $('#kandungan_nitrogen_padi').text("Nitrogen : " + kandungan_nitrogen);
}


for (var i = 0; i < data.peta.length; i++) 
{

         // alert('kedelai');


         var kandungan_klorofil = String(data.peta[i][0].kandungan_klorofil);
         var kandungan_nitrogen = String(data.peta[i][0].kandungan_nitrogen);
         var desa = String(data.peta[i][0].desa);

         // alert(desa);


         if(desa){
          if(desa=='kalisongo'){
            kalisongowarna = parseFloat(kandungan_klorofil);
            kalisongowarna = String(converterWarna(kalisongowarna));
            // alert(kalisongowarna);
          }
          else if(desa=='kucur'){
            kucurwarna = parseFloat(kandungan_klorofil);
            kucurwarna = String(converterWarna(kucurwarna));
            // alert(kandungan_klorofil);
          }
          else if(desa=='petungsewu')
          {
            petungsewuwarna = parseFloat(kandungan_klorofil);
            petungsewuwarna = String(converterWarna(petungsewuwarna));
            // alert(petungsewuwarna);
          }   
          else if(desa=='selorejo')
          {
            selorejowarna = parseFloat(kandungan_klorofil);
            selorejowarna = String(converterWarna(selorejowarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='tegalweru')
          {
            tegalweruwarna = parseFloat(kandungan_klorofil);
            tegalweruwarna = String(converterWarna(tegalweruwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='karangwidoro')
          {
            karangwidorowarna = parseFloat(kandungan_klorofil);
            karangwidorowarna = String(converterWarna(karangwidorowarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='landungsari')
          {
            landungsariwarna = parseFloat(kandungan_klorofil);
            landungsariwarna = String(converterWarna(landungsariwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='mulyoagung')
          {
            mulyoagungwarna = parseFloat(kandungan_klorofil);
            mulyoagungwarna = String(converterWarna(mulyoagungwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='gadingkulon')
          {
            gadingkulonwarna = parseFloat(kandungan_klorofil);
            gadingkulonwarna = String(converterWarna(gadingkulonwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='sumbersekar')
          {
            sumbersekarwarna = parseFloat(kandungan_klorofil);
            sumbersekarwarna = String(converterWarna(sumbersekarwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='tunjungsekar')
          {
            tunjungsekarwarna = parseFloat(kandungan_klorofil);
            tunjungsekarwarna = String(converterWarna(tunjungsekarwarna));
            // alert(kandungan_klorofil);
          }   
          else if(desa=='sumbesari')
          {
            sumbesariwarna = parseFloat(kandungan_klorofil);
            sumbesariwarna = String(converterWarna(sumbesariwarna));
            // alert(sumbersari);
          }   



        }//end if desa




      }//end of for peta

}//end of success

});// end of ajax

}// end of function all data

function converterWarna(klorofil){

  var warna;

 if(parseFloat(klorofil)>0&&parseFloat(klorofil)<=10.99)
  {
    warna = "#F4C871";
  }
 else if(parseFloat(klorofil)>=11&&parseFloat(klorofil)<=20.99){
    warna = "#F5EE6F";
  }
 else if(parseFloat(klorofil)>=21&&parseFloat(klorofil)<=30.99){
    warna = "#D2E174"
  }
 else if(parseFloat(klorofil)>=31&&parseFloat(klorofil)<=40.99){
    warna ="#90CA6D";
  }
     else if(parseFloat(klorofil)>=41&&parseFloat(klorofil)<=50.99){
    warna = "#44AA4F";
  }
  else{
    warna = "#89D3E0";
  }

  return warna;

}//end of converterWarna


function update(){
  perdaerah =  $('#perdaerah :selected').val();
    // alert('here');
    allData();
    initMap();

  }

  function initMap() {

    // alert(perdaerah);
    // alert('here');


    $.ajax({
      url : "<?php echo base_url('home/websiteGISFunction')?>/",
      type: "POST",
      data:$("#form2").serialize(),
      dataType: "JSON",
      success: function(data)
      {
        //function nentuin desa dimana dan titik tengah map dimana
        var dapat_daerah="";
        var lat_tengah;
        var long_tengah;
        var zoom1;
        for (var i = 0; i < data.daerah.length; i++) 
        {
          // alert(String(data.daerah[i].latitude_tengah));
          lat_tengah = parseFloat(data.daerah[i].latitude_tengah);
          long_tengah = parseFloat(data.daerah[i].longitude_tengah);


        }
        //end of function nentuin desa dimana dan titik tengah map dimana
        
        var infowindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat:lat_tengah, lng: long_tengah}
        });

        for (var i = 0; i < data.output.length; i++) 
        {
        // alert(data.output[i].lati);

        var longi = parseFloat(data.output[i].longi);
        var lati = parseFloat(data.output[i].lati);
        var test = String(data.output[i].longi);

        var klorofil ="";
        var nitrogen ="";
        var nama_lengkap="";
        var nama_tanaman="";
        var semua="";
        var icon ="";
        var iconcolor="";
        var desa="";
        var keadaan_tanaman="";
        var keadaan_tanaman1="";
        var tanggal="";

        klorofil = String(data.output[i].kandungan_klorofil);
        nitrogen = String(data.output[i].kandungan_nitrogen);
        nama_tanaman = String(data.output[i].nama_tanaman);
        desa = String(data.output[i].desa);
        
        tanggal= String(data.output[i].tanggal_waktu_ambil_gambar);
        var dateObj = new Date(tanggal);
        var month = dateObj.getUTCMonth() + 1; //months from 1-12
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();
        var combinedate = String(day+"-"+month+"-"+year);


//helper
if(nama_tanaman){

  if(nama_tanaman=="kedelai"){
    icon = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";
    iconcolor = "green";
  }
  else if(nama_tanaman=="padi"){
    icon = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
    iconcolor= "#ddd200";
  }
  else{
   icon = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
   iconcolor= "#ef0a0a";
 }
}

if(klorofil)
{
  if(nama_tanaman=="kedelai")
  {
    if(parseFloat(klorofil)>0&&parseFloat(klorofil)<=10.99)
    {
      keadaan_tanaman="sangat kurang";
    }
    else if(parseFloat(klorofil)>=11&&parseFloat(klorofil)<=20.99){
      keadaan_tanaman="kurang";
    }
    else if(parseFloat(klorofil)>=21&&parseFloat(klorofil)<=30.99){
      keadaan_tanaman="cukup";
    }
    else if(parseFloat(klorofil)>=31&&parseFloat(klorofil)<=40.99){
      keadaan_tanaman="baik";
    }
    else if(parseFloat(klorofil)>=41&&parseFloat(klorofil)<=50.99){
      keadaan_tanaman="sangat baik";
    }
    else{
      keadaan_tanaman="tidak diketahui";
    }



  }
  else if(nama_tanaman=="padi"){
    if(parseFloat(klorofil)>0&&parseFloat(klorofil)<=10.99)
    {
      keadaan_tanaman="sangat kurang";
    }
    else if(parseFloat(klorofil)>=11&&parseFloat(klorofil)<=20.99){
      keadaan_tanaman="kurang";
    }
    else if(parseFloat(klorofil)>=21&&parseFloat(klorofil)<=30.99){
      keadaan_tanaman="cukup";
    }
    else if(parseFloat(klorofil)>=31&&parseFloat(klorofil)<=40.99){
      keadaan_tanaman="baik";
    }
    else if(parseFloat(klorofil)>=41&&parseFloat(klorofil)<=50){
      keadaan_tanaman="sangat baik";
    }
    else{
      keadaan_tanaman="tidak diketahui";

    }
  }
}

if(nitrogen)
{
  if(nama_tanaman=="kedelai")
  {
    if(parseFloat(nitrogen)>0&&parseFloat(nitrogen)<=0.9)
    {
      keadaan_tanaman1="sangat kurang";
    }
    else if(parseFloat(nitrogen)>0.9&&parseFloat(nitrogen)<=1.8)
    {
      keadaan_tanaman1="kurang";
    }
    else if(parseFloat(nitrogen)>1.8&&parseFloat(nitrogen)<=2.7)
    {
      keadaan_tanaman1="cukup";
    }
    else if(parseFloat(nitrogen)>2.7&&parseFloat(nitrogen)<=3.6)
    {
      keadaan_tanaman1="bagus";
    }
    else if(parseFloat(nitrogen)>3.6&&parseFloat(nitrogen)<=4.5)
    {
      keadaan_tanaman1="sangat bagus";
    }
    else
    {
      keadaan_tanaman1="tidak diketahui";
    }

  }
  else if(nama_tanaman=="padi"){
    if(parseFloat(nitrogen)>0&&parseFloat(nitrogen)<=0.9)
    {
      keadaan_tanaman1="sangat kurang";
    }
    else if(parseFloat(nitrogen)>0.9&&parseFloat(nitrogen)<=1.8)
    {
      keadaan_tanaman1="kurang";
    }
    else if(parseFloat(nitrogen)>1.8&&parseFloat(nitrogen)<=2.7)
    {
      keadaan_tanaman1="cukup";
    }
    else if(parseFloat(nitrogen)>2.7&&parseFloat(nitrogen)<=3.6)
    {
      keadaan_tanaman1="bagus";
    }
    else if(parseFloat(nitrogen)>3.6&&parseFloat(nitrogen)<=4.5)
    {
      keadaan_tanaman1="sangat bagus";
    }
    else
    {
      keadaan_tanaman1="tidak diketahui";
    }
  }
}
      //end of helper





      semua = String(
        "<p style='font-size:15px;line-height:20px;'>"+
        "nama desa   : "+"<strong>"+desa+"</strong>"+"<br>"+
        "nama tanaman : "+"<strong style='color:"+iconcolor+"'>"+nama_tanaman+"</strong>"+"<br>"+
        "waktu pengambilan  : "+"<strong>"+combinedate+"</strong>"+"<br>"+
        " Kandungan Klorofil : "+"<strong>"+klorofil+"</strong>"+" "+keadaan_tanaman+"<br>"+
        " Kandungan Nitrogen : "+"<strong>"+nitrogen+"</strong>"+" "+keadaan_tanaman1+"<br>"

        +"</p>");
        // alert(semua);

        // var text = String(data.output[i].status);
        // alert(text);

        var marker = new google.maps.Marker({
          position: 
          {
            lat:lati , 
            lng:longi,
          },
          map: map,
          // title:semua,
          icon : icon
          // title: data.output[i].status
        });

        marker.infowindow = new google.maps.InfoWindow({ content: semua }); 

        google.maps.event.addListener(marker, 'click', function () {   
          infowindow.close();
          this.infowindow.open(map, this);          
        });


       }//end of for



       var kalisongonew=[
       {lat:-7.956256, lng: 112.574550 },
       {lat:-7.959168, lng: 112.580579 },
       {lat:-7.958424, lng: 112.581663 },
       {lat:-7.958318, lng: 112.582811 },
       {lat:-7.958796, lng: 112.584206 },
       {lat:-7.960018, lng: 112.586073 },
       {lat:-7.960591, lng: 112.587854 },
       {lat:-7.961325, lng: 112.588776},
       {lat:-7.961750, lng: 112.590697},
       {lat:-7.962238, lng: 112.591684},
       {lat:-7.961983, lng: 112.592370},
       {lat:-7.962249, lng: 112.592928},
       {lat:-7.961920, lng: 112.593572},
       {lat:-7.961888, lng: 112.594548},
       {lat:-7.961346, lng: 112.595428},
       {lat:-7.962653, lng: 112.596887},
       {lat:-7.962982, lng: 112.598014},
       {lat:-7.963248, lng: 112.598303},
       {lat:-7.963928, lng: 112.598507},
       {lat:-7.964470, lng: 112.599054},
       {lat:-7.965245, lng: 112.600385},
       {lat:-7.966297, lng: 112.600825},
       {lat:-7.967254, lng: 112.602166},
       {lat:-7.968720, lng: 112.602627},
       {lat:-7.970037, lng: 112.602745},
       {lat:-7.970218, lng: 112.602895},
       {lat:-7.971723, lng: 112.602730},
       {lat:-7.971759, lng: 112.601954},
       {lat:-7.972501, lng: 112.600655},
       {lat:-7.971929, lng: 112.599725},
       {lat:-7.974520, lng: 112.598706},
       {lat:-7.973367, lng: 112.595564},
       {lat:-7.973689, lng: 112.593886},
       {lat:-7.973144, lng: 112.593173},
       {lat:-7.972947, lng: 112.590602},
       {lat:-7.971764, lng: 112.588918},
       {lat:-7.971865, lng: 112.588178},
       {lat:-7.971157, lng: 112.586468},
       {lat:-7.969274, lng: 112.584018},
       {lat:-7.966886, lng: 112.582347},
       {lat:-7.966558, lng: 112.580816},
       {lat:-7.968087, lng: 112.578915},
       {lat:-7.967632, lng: 112.576542},
       {lat:-7.967708, lng: 112.575049},
       {lat:-7.967240, lng: 112.573722},
       {lat:-7.967455, lng: 112.572663},
       {lat:-7.970222, lng: 112.570698},
       {lat:-7.969871, lng: 112.567769},
       {lat:-7.971791, lng: 112.566940},
       {lat:-7.971475, lng: 112.565077},
       {lat:-7.974280, lng: 112.563087},
       {lat:-7.971678, lng: 112.562947},
       {lat:-7.968582, lng: 112.562117},
       {lat:-7.966788, lng: 112.560752},
       {lat:-7.964033, lng: 112.565026},
       {lat:-7.963907, lng: 112.567629},
       {lat:-7.963679, lng: 112.568063},
       {lat:-7.964260, lng: 112.569849},
       {lat:-7.963464, lng: 112.571061},
       {lat:-7.961203, lng: 112.572120},
       {lat:-7.961594, lng: 112.572720},
       {lat:-7.960786, lng: 112.573396},
       {lat:-7.960053, lng: 112.573256},
       {lat:-7.959674, lng: 112.573677},
       {lat:-7.958423, lng: 112.573511},
       {lat:-7.956256, lng: 112.574550},
       ];

       var kucurnew=[
       {lat:-7.922940, lng:112.512551 }, 
       {lat:-7.926062, lng:112.518540}, 
       {lat:-7.926572, lng:112.519484}, 
       {lat:-7.927124, lng:112.520429}, 
       {lat:-7.926954, lng:112.522188}, 
       {lat:-7.926954, lng:112.522188}, 
       {lat:-7.926954, lng:112.522188}, 
       {lat:-7.934053, lng:112.527209}, 
       {lat:-7.934478, lng:112.528110}, 
       {lat:-7.935101, lng:112.520131}, 
       {lat:-7.939549, lng:112.522887}, 
       {lat:-7.939606, lng:112.524013}, 
       {lat:-7.939691, lng:112.529120}, 
       {lat:-7.940116, lng:112.529720}, 
       {lat:-7.941731, lng:112.529034}, 
       {lat:-7.942539, lng:112.531180}, 
       {lat:-7.942114, lng:112.531737}, 
       {lat:-7.942836, lng:112.533239}, 
       {lat:-7.943686, lng:112.533111}, 
       {lat:-7.944494, lng:112.536544}, 
       {lat:-7.945727, lng:112.537874}, 
       {lat:-7.945897, lng:112.535986}, 
       {lat:-7.947032, lng:112.535297}, 
       {lat:-7.946122, lng:112.531316}, 
       {lat:-7.949003, lng:112.533562}, 
       {lat:-7.949256, lng:112.538512}, 
       {lat:-7.954714, lng:112.543718}, 
       {lat:-7.954310, lng:112.547392}, 
       {lat:-7.955119, lng:112.550506}, 
       {lat:-7.956079, lng:112.558620}, 
       {lat:-7.957292, lng:112.559488}, 
       {lat:-7.957798, lng:112.561325}, 
       {lat:-7.960982, lng:112.566173}, 
       {lat:-7.961437, lng:112.571226}, 
       {lat:-7.962902, lng:112.570869}, 
       {lat:-7.963357, lng:112.569848}, 
       {lat:-7.963509, lng:112.563469}, 
       {lat:-7.966440, lng:112.559794}, 
       {lat:-7.968816, lng:112.561274}, 
       {lat:-7.974022, lng:112.562550}, 
       {lat:-7.974274, lng:112.558161}, 
       {lat:-7.974780, lng:112.556732}, 
       {lat:-7.973668, lng:112.554435}, 
       {lat:-7.974173, lng:112.553619}, 
       {lat:-7.969119, lng:112.544892}, 
       {lat:-7.967653, lng:112.540503}, 
       {lat:-7.967957, lng:112.537645}, 
       {lat:-7.968765, lng:112.533766}, 
       {lat:-7.967047, lng:112.531520}, 
       {lat:-7.967552, lng:112.525907}, 
       {lat:-7.969524, lng:112.525856}, 
       {lat:-7.970787, lng:112.526570}, 
       {lat:-7.971495, lng:112.521262}, 
       {lat:-7.974224, lng:112.518047}, 
       {lat:-7.980542, lng:112.516822}, 
       {lat:-7.982260, lng:112.519987}, 
       {lat:-7.983928, lng:112.519782}, 
       {lat:-7.985242, lng:112.521415}, 
       {lat:-7.986000, lng:112.520599}, 
       {lat:-7.989841, lng:112.521824}, 
       {lat:-7.988426, lng:112.519476}, 
       {lat:-7.987213, lng:112.513454}, 
       {lat:-7.991003, lng:112.513505}, 
       {lat:-7.992570, lng:112.516363}, 
       {lat:-7.995249, lng:112.519680}, 
       {lat:-7.997624, lng:112.519476}, 
       {lat:-7.996917, lng:112.516618}, 
       {lat:-7.994844, lng:112.512688}, 
       {lat:-7.996664, lng:112.511208}, 
       {lat:-7.990801, lng:112.509371}, 
       {lat:-7.991509, lng:112.502992}, 
       {lat:-7.982756, lng:112.500331}, 
       {lat:-7.982351, lng:112.499055}, 
       {lat:-7.977264, lng:112.497014}, 
       {lat:-7.974181, lng:112.486756}, 
       {lat:-7.974939, lng:112.480785}, 
       {lat:-7.973271, lng:112.479151}, 
       {lat:-7.970441, lng:112.479611}, 
       {lat:-7.957350, lng:112.474456}, 
       {lat:-7.956239, lng:112.474366},

       {lat:-7.939724, lng:112.477186}, 
       {lat:-7.934113, lng:112.485769}, 
       {lat:-7.928673, lng:112.499073}, 
       {lat:-7.928078, lng:112.501734},  

       ];

       var petungsewunew=[
       {lat:-7.946928, lng: 112.532164  }, 
       {lat:-7.947480, lng: 112.534116 }, 
       {lat:-7.947757, lng: 112.535340 }, 
       {lat:-7.947438, lng: 112.536069 }, 
       {lat:-7.946354, lng: 112.536520 }, 
       {lat:-7.946205, lng: 112.537292 }, 
       {lat:-7.946588, lng: 112.538944 }, 
       {lat:-7.945908, lng: 112.540210 }, 
       {lat:-7.945568, lng: 112.539567 }, 
       {lat:-7.945653, lng: 112.538708 }, 
       {lat:-7.945037, lng: 112.538408 }, 
       {lat:-7.944633, lng: 112.537314 }, 
       {lat:-7.944250, lng: 112.537271 }, 
       {lat:-7.944505, lng: 112.538687 }, 
       {lat:-7.944867, lng: 112.539545 }, 
       {lat:-7.944505, lng: 112.541670 }, 
       {lat:-7.944526, lng: 112.543129 }, 
       {lat:-7.943549, lng: 112.544588 }, 
       {lat:-7.942444, lng: 112.545961 }, 
       {lat:-7.942295, lng: 112.547163 }, 
       {lat:-7.941764, lng: 112.547356 }, 
       {lat:-7.941317, lng: 112.547270 }, 
       {lat:-7.941636, lng: 112.547806 }, 
       {lat:-7.941658, lng: 112.548150 }, 
       {lat:-7.941955, lng: 112.548922 }, 
       {lat:-7.941828, lng: 112.549223 }, 
       {lat:-7.942083, lng: 112.550446 }, 
       {lat:-7.941955, lng: 112.550832 }, 
       {lat:-7.942508, lng: 112.552270 }, 
       {lat:-7.942083, lng: 112.552785 }, 
       {lat:-7.942954, lng: 112.553450 }, 
       {lat:-7.942741, lng: 112.554330 }, 
       {lat:-7.940149, lng: 112.554887 }, 
       {lat:-7.940170, lng: 112.555402 }, 
       {lat:-7.940786, lng: 112.555724 }, 
       {lat:-7.941636, lng: 112.558256 }, 
       {lat:-7.942699, lng: 112.558471 }, 
       {lat:-7.944760, lng: 112.561668 }, 
       {lat:-7.945929, lng: 112.562505 }, 
       {lat:-7.952113, lng: 112.560338 }, 
       {lat:-7.954578, lng: 112.557934 }, 
       {lat:-7.955195, lng: 112.556411 }, 
       {lat:-7.955216, lng: 112.554158 }, 
       {lat:-7.954855, lng: 112.552634 }, 
       {lat:-7.954876, lng: 112.551519 }, 
       {lat:-7.954068, lng: 112.550789 }, 
       {lat:-7.953367, lng: 112.547141 }, 
       {lat:-7.954260, lng: 112.545253 }, 
       {lat:-7.954153, lng: 112.544588 }, 
       {lat:-7.948246, lng: 112.538816 }, 
       {lat:-7.948798, lng: 112.536348 }, 
       {lat:-7.948331, lng: 112.534460 }, 
       {lat:-7.948394, lng: 112.533752 }, 
       {lat:-7.946928, lng: 112.532164 }
       ];

       var selorejonew = [
       {lat:-7.936293, lng: 112.521372}, 
       {lat:-7.936389, lng: 112.521930}, 
       {lat:-7.935709, lng: 112.522348}, 
       {lat:-7.935348, lng: 112.522831}, 
       {lat:-7.935103, lng: 112.523603}, 
       {lat:-7.934848, lng: 112.527691}, 
       {lat:-7.934593, lng: 112.528485}, 
       {lat:-7.934551, lng: 112.530706}, 
       {lat:-7.934083, lng: 112.531511}, 
       {lat:-7.933063, lng: 112.532111}, 
       {lat:-7.932712, lng: 112.533013},
       {lat:-7.932171, lng: 112.533249}, 
       {lat:-7.931097, lng: 112.534601}, 
       {lat:-7.931012, lng: 112.535309}, 
       {lat:-7.930322, lng: 112.535512}, 
       {lat:-7.930343, lng: 112.535770}, 
       {lat:-7.929716, lng: 112.536381}, 
       {lat:-7.929652, lng: 112.536521}, 
       {lat:-7.929843, lng: 112.537100}, 
       {lat:-7.929780, lng: 112.537562}, 
       {lat:-7.930747, lng: 112.538023}, 
       {lat:-7.931002, lng: 112.538860}, 
       {lat:-7.930566, lng: 112.539321}, 
       {lat:-7.932107, lng: 112.541671}, 
       {lat:-7.932436, lng: 112.542830}, 
       {lat:-7.932192, lng: 112.543559}, 
       {lat:-7.932256, lng: 112.544138}, 
       {lat:-7.932468, lng: 112.544299}, 
       {lat:-7.932489, lng: 112.544568}, 
       {lat:-7.932574, lng: 112.544857}, 
       {lat:-7.932553, lng: 112.545362}, 
       {lat:-7.933222, lng: 112.546252}, 
       {lat:-7.934126, lng: 112.546209}, 
       {lat:-7.936857, lng: 112.544868}, 
       {lat:-7.936857, lng: 112.545447}, 
       {lat:-7.936793, lng: 112.545780}, 
       {lat:-7.936761, lng: 112.547346}, 
       {lat:-7.937345, lng: 112.547615}, 
       {lat:-7.937250, lng: 112.548076}, 
       {lat:-7.937367, lng: 112.549202}, 
       {lat:-7.937452, lng: 112.549374}, 
       {lat:-7.937409, lng: 112.549696}, 
       {lat:-7.937462, lng: 112.551488}, 
       {lat:-7.938429, lng: 112.551713}, 
       {lat:-7.938504, lng: 112.552603}, 
       {lat:-7.937685, lng: 112.552614}, 
       {lat:-7.937781, lng: 112.553751}, 
       {lat:-7.937632, lng: 112.554138}, 
       {lat:-7.937547, lng: 112.554653}, 
       {lat:-7.937600, lng: 112.554996}, 
       {lat:-7.937600, lng: 112.555490}, 
       {lat:-7.938557, lng: 112.555425}, 
       {lat:-7.938801, lng: 112.554653}, 
       {lat:-7.942499, lng: 112.553998}, 
       {lat:-7.942669, lng: 112.553601}, 
       {lat:-7.942223, lng: 112.553440}, 
       {lat:-7.942095, lng: 112.553258}, 
       {lat:-7.941798, lng: 112.553108}, 
       {lat:-7.941819, lng: 112.552818}, 
       {lat:-7.941989, lng: 112.552561}, 
       {lat:-7.942191, lng: 112.552378}, 
       {lat:-7.942180, lng: 112.551970}, 
       {lat:-7.941681, lng: 112.550790}, 
       {lat:-7.941861, lng: 112.550361}, 
       {lat:-7.941755, lng: 112.549707}, 
       {lat:-7.941755, lng: 112.549503}, 
       {lat:-7.941511, lng: 112.549235}, 
       {lat:-7.941553, lng: 112.548999}, 
       {lat:-7.941723, lng: 112.548870}, 
       {lat:-7.941585, lng: 112.548516}, 
       {lat:-7.941575, lng: 112.548333}, 
       {lat:-7.941405, lng: 112.548146}, 
       {lat:-7.941405, lng: 112.547867}, 
       {lat:-7.941086, lng: 112.547405}, 
       {lat:-7.941086, lng: 112.546955}, 
       {lat:-7.941649, lng: 112.547041}, 
       {lat:-7.942010, lng: 112.546901}, 
       {lat:-7.942085, lng: 112.545818}, 
       {lat:-7.942775, lng: 112.544637}, 
       {lat:-7.943307, lng: 112.544337}, 
       {lat:-7.944114, lng: 112.542867}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.944603, lng: 112.539445}, 
       {lat:-7.941341, lng: 112.529531}, 
       {lat:-7.938737, lng: 112.531516}, 
       {lat:-7.938323, lng: 112.533286}, 
       {lat:-7.937345, lng: 112.533125}, 
       {lat:-7.938429, lng: 112.529488}, 
       {lat:-7.939269, lng: 112.528726}, 
       {lat:-7.938950, lng: 112.524467}, 
       {lat:-7.939088, lng: 112.523255}, 
       {lat:-7.937228, lng: 112.521517}, 
       {lat:-7.936293, lng: 112.521372}
       ];

       var tegalwerunew = [
       {lat:-7.938785, lng:  112.554899},  
       {lat:-7.938658, lng:  112.555601},
       {lat:-7.937433, lng:  112.555677},
       {lat:-7.937445, lng:  112.554963},
       {lat:-7.936118, lng:  112.554861},
       {lat:-7.935701, lng:  112.556226},
       {lat:-7.934842, lng:  112.556443},
       {lat:-7.934109, lng:  112.555971},
       {lat:-7.933755, lng:  112.555971},
       {lat:-7.933932, lng:  112.556366},
       {lat:-7.933591, lng:  112.556404},
       {lat:-7.933566, lng:  112.556672},
       {lat:-7.933326, lng:  112.556774},
       {lat:-7.933793, lng:  112.557412},
       {lat:-7.933654, lng:  112.557782},
       {lat:-7.933882, lng:  112.558280},
       {lat:-7.933793, lng:  112.559403},
       {lat:-7.933364, lng:  112.559505},
       {lat:-7.933263, lng:  112.560066},
       {lat:-7.932833, lng:  112.560296},
       {lat:-7.933263, lng:  112.560755},
       {lat:-7.933010, lng:  112.561801},
       {lat:-7.932403, lng:  112.562082},
       {lat:-7.932277, lng:  112.563294},
       {lat:-7.932896, lng:  112.563958},
       {lat:-7.932517, lng:  112.564251},
       {lat:-7.932833, lng:  112.564468},
       {lat:-7.933060, lng:  112.565131},
       {lat:-7.934577, lng:  112.564532},
       {lat:-7.934476, lng:  112.566241},
       {lat:-7.935145, lng:  112.569648},
       {lat:-7.935802, lng:  112.569725},
       {lat:-7.935866, lng:  112.570707},
       {lat:-7.936409, lng:  112.570733},
       {lat:-7.936674, lng:  112.569431},
       {lat:-7.938873, lng:  112.568985},
       {lat:-7.939088, lng:  112.570720},
       {lat:-7.939720, lng:  112.571051},
       {lat:-7.941868, lng:  112.575364},
       {lat:-7.941767, lng:  112.575862},
       {lat:-7.942854, lng:  112.577342},
       {lat:-7.943321, lng:  112.579919},
       {lat:-7.945002, lng:  112.581718},
       {lat:-7.944989, lng:  112.582394},
       {lat:-7.945381, lng:  112.583032},
       {lat:-7.945394, lng:  112.583351},
       {lat:-7.946190, lng:  112.583568},
       {lat:-7.946657, lng:  112.584117},
       {lat:-7.946480, lng:  112.584563},
       {lat:-7.947163, lng:  112.585061},
       {lat:-7.947175, lng:  112.585405},
       {lat:-7.947959, lng:  112.586592},
       {lat:-7.947643, lng:  112.587153},
       {lat:-7.946935, lng:  112.587510},
       {lat:-7.947150, lng:  112.587919},
       {lat:-7.947428, lng:  112.587842},
       {lat:-7.948098, lng:  112.589054},
       {lat:-7.946923, lng:  112.589616},
       {lat:-7.948072, lng:  112.592461},
       {lat:-7.949943, lng:  112.591772},
       {lat:-7.949589, lng:  112.590636},
       {lat:-7.950006, lng:  112.590113},
       {lat:-7.950132, lng:  112.589947},
       {lat:-7.950473, lng:  112.589960},
       {lat:-7.950663, lng:  112.589475},
       {lat:-7.949981, lng:  112.586936},
       {lat:-7.950018, lng:  112.585278},
       {lat:-7.949450, lng:  112.583593},
       {lat:-7.950006, lng:  112.582318},
       {lat:-7.949500, lng:  112.580608},
       {lat:-7.949273, lng:  112.579153},
       {lat:-7.949665, lng:  112.578005},
       {lat:-7.949500, lng:  112.576219},
       {lat:-7.949652, lng:  112.574637},
       {lat:-7.948932, lng:  112.572583},
       {lat:-7.948906, lng:  112.571728},
       {lat:-7.948174, lng:  112.570822},
       {lat:-7.947441, lng:  112.568168},
       {lat:-7.945634, lng:  112.562809},
       {lat:-7.944484, lng:  112.561929},
       {lat:-7.942337, lng:  112.558716},
       {lat:-7.941389, lng:  112.558499},
       {lat:-7.941389, lng:  112.558499},
       {lat:-7.939809, lng:  112.555514},
       {lat:-7.939822, lng:  112.554799},
       {lat:-7.938785, lng:  112.554899}

       ];

       var karangwidoronew = [
       {lat:-7.945894, lng: 112.562815},
       {lat:-7.947446, lng: 112.566806},
       {lat:-7.947765, lng: 112.568448},
       {lat:-7.948211, lng: 112.569574},
       {lat:-7.948487, lng: 112.570819},
       {lat:-7.949125, lng: 112.571613},
       {lat:-7.949178, lng: 112.572568},
       {lat:-7.949890, lng: 112.574606},
       {lat:-7.949730, lng: 112.576655},
       {lat:-7.949879, lng: 112.578050},
       {lat:-7.949539, lng: 112.579305},
       {lat:-7.949592, lng: 112.579928},
       {lat:-7.949794, lng: 112.580453},
       {lat:-7.949805, lng: 112.581398},
       {lat:-7.950092, lng: 112.582342},
       {lat:-7.949709, lng: 112.583575},
       {lat:-7.949868, lng: 112.584530},
       {lat:-7.950262, lng: 112.585324},
       {lat:-7.950155, lng: 112.586923},
       {lat:-7.950889, lng: 112.589466},
       {lat:-7.950644, lng: 112.589970},
       {lat:-7.954427, lng: 112.589734},
       {lat:-7.955553, lng: 112.590646},
       {lat:-7.955574, lng: 112.591188},
       {lat:-7.955132, lng: 112.591586},
       {lat:-7.954892, lng: 112.592163},
       {lat:-7.955222, lng: 112.593392},
       {lat:-7.955117, lng: 112.594591},
       {lat:-7.955012, lng: 112.595895},
       {lat:-7.956815, lng: 112.599097},
       {lat:-7.958919, lng: 112.598824},
       {lat:-7.959715, lng: 112.599203},
       {lat:-7.962706, lng: 112.598020},
       {lat:-7.962495, lng: 112.597064},
       {lat:-7.961579, lng: 112.596184},
       {lat:-7.961143, lng: 112.595364},
       {lat:-7.961654, lng: 112.594484},
       {lat:-7.961669, lng: 112.593498},
       {lat:-7.961924, lng: 112.592937},
       {lat:-7.961684, lng: 112.592375},
       {lat:-7.961909, lng: 112.591662},
       {lat:-7.961473, lng: 112.590615},
       {lat:-7.961083, lng: 112.588855},
       {lat:-7.960377, lng: 112.587899},
       {lat:-7.959790, lng: 112.586215},
       {lat:-7.958573, lng: 112.584227},
       {lat:-7.958438, lng: 112.583317},
       {lat:-7.958092, lng: 112.582847},
       {lat:-7.958168, lng: 112.581496},
       {lat:-7.958814, lng: 112.580480},
       {lat:-7.956515, lng: 112.576004},
       {lat:-7.956034, lng: 112.574395},
       {lat:-7.957687, lng: 112.573455},
       {lat:-7.958453, lng: 112.573106},
       {lat:-7.959685, lng: 112.573303},
       {lat:-7.959866, lng: 112.573030},
       {lat:-7.960662, lng: 112.573015},
       {lat:-7.961248, lng: 112.572620},
       {lat:-7.960797, lng: 112.571998},
       {lat:-7.960827, lng: 112.569555},
       {lat:-7.960572, lng: 112.568690},
       {lat:-7.960557, lng: 112.566612},
       {lat:-7.959265, lng: 112.564533},
       {lat:-7.958123, lng: 112.563168},
       {lat:-7.957071, lng: 112.561134},
       {lat:-7.957026, lng: 112.560087},
       {lat:-7.956635, lng: 112.559951},
       {lat:-7.956394, lng: 112.559314},
       {lat:-7.955643, lng: 112.558843},
       {lat:-7.955673, lng: 112.557812},
       {lat:-7.955493, lng: 112.556795},
       {lat:-7.954982, lng: 112.558252},
       {lat:-7.952337, lng: 112.560740},
       {lat:-7.949016, lng: 112.561741},
       {lat:-7.945894, lng: 112.562815}

       ];

       var landungsarinew= [
       {lat:-7.924727, lng: 112.580826},
       {lat:-7.925089, lng: 112.581223},
       {lat:-7.925121, lng: 112.581878},
       {lat:-7.925546, lng: 112.582575},
       {lat:-7.925535, lng: 112.582951},
       {lat:-7.925854, lng: 112.583326},
       {lat:-7.925354, lng: 112.583702},
       {lat:-7.925376, lng: 112.584099},
       {lat:-7.926035, lng: 112.584463},
       {lat:-7.925907, lng: 112.585257},
       {lat:-7.926109, lng: 112.585751},
       {lat:-7.926279, lng: 112.586137},
       {lat:-7.926003, lng: 112.586856},
       {lat:-7.925843, lng: 112.587467},
       {lat:-7.925907, lng: 112.587607},
       {lat:-7.926396, lng: 112.587253},
       {lat:-7.926831, lng: 112.587285},
       {lat:-7.927342, lng: 112.588551},
       {lat:-7.927002, lng: 112.590096},
       {lat:-7.927193, lng: 112.590225},
       {lat:-7.927214, lng: 112.590514},
       {lat:-7.927427, lng: 112.590708},
       {lat:-7.927873, lng: 112.590761},
       {lat:-7.928096, lng: 112.591416},
       {lat:-7.928595, lng: 112.592113},
       {lat:-7.926938, lng: 112.593325},
       {lat:-7.926863, lng: 112.593561},
       {lat:-7.926120, lng: 112.594023},
       {lat:-7.924940, lng: 112.594151},
       {lat:-7.924249, lng: 112.593969},
       {lat:-7.923389, lng: 112.593240},
       {lat:-7.923240, lng: 112.593336},
       {lat:-7.923314, lng: 112.595450},
       {lat:-7.922878, lng: 112.595514},
       {lat:-7.922719, lng: 112.595621},
       {lat:-7.922878, lng: 112.595922},
       {lat:-7.922762, lng: 112.596115},
       {lat:-7.923426, lng: 112.596565},
       {lat:-7.923468, lng: 112.597166},
       {lat:-7.924712, lng: 112.598443},
       {lat:-7.926412, lng: 112.599999},
       {lat:-7.926635, lng: 112.599677},
       {lat:-7.929317, lng: 112.598931},
       {lat:-7.930234, lng: 112.598992},
       {lat:-7.929865, lng: 112.597414},
       {lat:-7.930429, lng: 112.597323},
       {lat:-7.930745, lng: 112.597391},
       {lat:-7.930977, lng: 112.597338},
       {lat:-7.931135, lng: 112.597414},
       {lat:-7.931511, lng: 112.597323},
       {lat:-7.931616, lng: 112.597642},
       {lat:-7.931991, lng: 112.597571},
       {lat:-7.932310, lng: 112.597807},
       {lat:-7.932565, lng: 112.598097},
       {lat:-7.933447, lng: 112.597764},
       {lat:-7.934180, lng: 112.598451},
       {lat:-7.934573, lng: 112.598494},
       {lat:-7.935019, lng: 112.598086},
       {lat:-7.935285, lng: 112.598225},
       {lat:-7.935274, lng: 112.598547},
       {lat:-7.935444, lng: 112.598923},
       {lat:-7.935838, lng: 112.598933},
       {lat:-7.935453, lng: 112.573619},
       {lat:-7.935655, lng: 112.570969},
       {lat:-7.935273, lng: 112.571655},
       {lat:-7.934029, lng: 112.572718},
       {lat:-7.930948, lng: 112.573726},
       {lat:-7.929906, lng: 112.576312},
       {lat:-7.929619, lng: 112.576494},
       {lat:-7.927802, lng: 112.579133},
       {lat:-7.925868, lng: 112.579799},
       {lat:-7.924727, lng: 112.580826}];

       var mulyoagungnew = [
       {lat:-7.911738, lng: 112.580014},
       {lat:-7.911972, lng: 112.580872},
       {lat:-7.910867, lng: 112.581387 },
       {lat:-7.910867, lng: 112.581537},
       {lat:-7.910272, lng: 112.581752},
       {lat:-7.910909, lng: 112.582224},
       {lat:-7.909400, lng: 112.583511},
       {lat:-7.909719, lng: 112.585099},
       {lat:-7.910633, lng: 112.585228},
       {lat:-7.911271, lng: 112.585614},
       {lat:-7.911844, lng: 112.587116},
       {lat:-7.914374, lng: 112.588747},
       {lat:-7.915883, lng: 112.589391},
       {lat:-7.916286, lng: 112.589841},
       {lat:-7.915968, lng: 112.591021},
       {lat:-7.916031, lng: 112.591408},
       {lat:-7.916329, lng: 112.591536},
       {lat:-7.916818, lng: 112.590936},
       {lat:-7.917477, lng: 112.591021},
       {lat:-7.918932, lng: 112.592781},
       {lat:-7.918879, lng: 112.593382},
       {lat:-7.919719, lng: 112.593875},
       {lat:-7.920014, lng: 112.594007},
       {lat:-7.921626, lng: 112.593492},
       {lat:-7.923380, lng: 112.593041},
       {lat:-7.924357, lng: 112.593835},
       {lat:-7.924952, lng: 112.594007},
       {lat:-7.926132, lng: 112.593835},
       {lat:-7.926823, lng: 112.593213},
       {lat:-7.928374, lng: 112.592086},
       {lat:-7.927864, lng: 112.591335},
       {lat:-7.927736, lng: 112.590874},
       {lat:-7.927248, lng: 112.590777},
       {lat:-7.927067, lng: 112.590552},
       {lat:-7.927088, lng: 112.590273},
       {lat:-7.926854, lng: 112.590144},
       {lat:-7.927152, lng: 112.588524},
       {lat:-7.926738, lng: 112.587408},
       {lat:-7.926440, lng: 112.587408},
       {lat:-7.925856, lng: 112.587784},
       {lat:-7.925632, lng: 112.587494},
       {lat:-7.926164, lng: 112.586121},
       {lat:-7.925813, lng: 112.585778},
       {lat:-7.925739, lng: 112.585155},
       {lat:-7.925866, lng: 112.584533},
       {lat:-7.925186, lng: 112.584136},
       {lat:-7.925144, lng: 112.583600},
       {lat:-7.925600, lng: 112.583310},
       {lat:-7.925314, lng: 112.582988},
       {lat:-7.925356, lng: 112.582613},
       {lat:-7.924857, lng: 112.581829},
       {lat:-7.924899, lng: 112.581218},
       {lat:-7.924527, lng: 112.580885},
       {lat:-7.924740, lng: 112.580381},
       {lat:-7.925834, lng: 112.579576},
       {lat:-7.927726, lng: 112.578997},
       {lat:-7.928980, lng: 112.577667},
       {lat:-7.929543, lng: 112.576165},
       {lat:-7.929777, lng: 112.576014},
       {lat:-7.930850, lng: 112.573547},
       {lat:-7.933804, lng: 112.572603},
       {lat:-7.935143, lng: 112.571508},
       {lat:-7.935472, lng: 112.570822},
       {lat:-7.935664, lng: 112.569835},
       {lat:-7.935068, lng: 112.569845},
       {lat:-7.934293, lng: 112.566230},
       {lat:-7.934431, lng: 112.564717},
       {lat:-7.933060, lng: 112.565329},
       {lat:-7.932550, lng: 112.565221},
       {lat:-7.931966, lng: 112.566337},
       {lat:-7.931445, lng: 112.566412},
       {lat:-7.931009, lng: 112.566852},
       {lat:-7.931084, lng: 112.567539},
       {lat:-7.930733, lng: 112.567710},
       {lat:-7.930350, lng: 112.569459},
       {lat:-7.929628, lng: 112.569491},
       {lat:-7.929383, lng: 112.569920},
       {lat:-7.929628, lng: 112.570425},
       {lat:-7.929490, lng: 112.570693},
       {lat:-7.929692, lng: 112.571262},
       {lat:-7.927821, lng: 112.571787},
       {lat:-7.928130, lng: 112.572152},
       {lat:-7.928172, lng: 112.573000},
       {lat:-7.927843, lng: 112.573257},
       {lat:-7.927418, lng: 112.573429},
       {lat:-7.927418, lng: 112.573718},
       {lat:-7.927641, lng: 112.573869},
       {lat:-7.927694, lng: 112.574706},
       {lat:-7.927048, lng: 112.574539},
       {lat:-7.926379, lng: 112.576205},
       {lat:-7.925869, lng: 112.576495},
       {lat:-7.925486, lng: 112.576473},
       {lat:-7.924243, lng: 112.577042},
       {lat:-7.924264, lng: 112.577160},
       {lat:-7.923839, lng: 112.577643},
       {lat:-7.922596, lng: 112.578018},
       {lat:-7.922628, lng: 112.578265},
       {lat:-7.922150, lng: 112.578501},
       {lat:-7.922107, lng: 112.578673},
       {lat:-7.920747, lng: 112.578930},
       {lat:-7.920630, lng: 112.578801},
       {lat:-7.918855, lng: 112.579102},
       {lat:-7.918685, lng: 112.579477},
       {lat:-7.918887, lng: 112.579713},
       {lat:-7.918590, lng: 112.580132},
       {lat:-7.918175, lng: 112.580207},
       {lat:-7.916826, lng: 112.580614},
       {lat:-7.916061, lng: 112.580421},
       {lat:-7.915125, lng: 112.579681},
       {lat:-7.914966, lng: 112.579434},
       {lat:-7.914382, lng: 112.579724},
       {lat:-7.912065, lng: 112.579960},
       {lat:-7.911738, lng: 112.580014}
       ];

       var gadingkulonnew = [
       {lat:-7.927207, lng: 112.522894},
       {lat:-7.926974, lng: 112.523903},
       {lat:-7.926336, lng: 112.524654},
       {lat:-7.926081, lng: 112.525233},
       {lat:-7.925720, lng: 112.525770},
       {lat:-7.925443, lng: 112.528945},
       {lat:-7.924785, lng: 112.531435},
       {lat:-7.925613, lng: 112.534267},
       {lat:-7.924253, lng: 112.539352},
       {lat:-7.922829, lng: 112.542871},
       {lat:-7.925082, lng: 112.548279},
       {lat:-7.924870, lng: 112.550703},
       {lat:-7.924083, lng: 112.552120},
       {lat:-7.924296, lng: 112.555338},
       {lat:-7.923892, lng: 112.556905},
       {lat:-7.924636, lng: 112.559244},
       {lat:-7.925677, lng: 112.564823},
       {lat:-7.925635, lng: 112.566475},
       {lat:-7.925847, lng: 112.567741},
       {lat:-7.925741, lng: 112.568685},
       {lat:-7.926187, lng: 112.569286},
       {lat:-7.926187, lng: 112.569651},
       {lat:-7.926187, lng: 112.569651},
       {lat:-7.926527, lng: 112.570294},
       {lat:-7.927122, lng: 112.570402},
       {lat:-7.927802, lng: 112.571646},
       {lat:-7.929375, lng: 112.571174},
       {lat:-7.929333, lng: 112.570595},
       {lat:-7.929418, lng: 112.570273},
       {lat:-7.929078, lng: 112.569779},
       {lat:-7.929736, lng: 112.569372},
       {lat:-7.930289, lng: 112.569329},
       {lat:-7.930629, lng: 112.567505},
       {lat:-7.930948, lng: 112.567440},
       {lat:-7.930778, lng: 112.566775},
       {lat:-7.931224, lng: 112.566260},
       {lat:-7.931883, lng: 112.566153},
       {lat:-7.932414, lng: 112.564973},
       {lat:-7.932797, lng: 112.565059},
       {lat:-7.932287, lng: 112.564222},
       {lat:-7.932648, lng: 112.563900},
       {lat:-7.932053, lng: 112.563256},
       {lat:-7.932244, lng: 112.561947},
       {lat:-7.932861, lng: 112.561711},
       {lat:-7.933031, lng: 112.560767},
       {lat:-7.932648, lng: 112.560252},
       {lat:-7.933137, lng: 112.559909},
       {lat:-7.933243, lng: 112.559308},
       {lat:-7.933689, lng: 112.559244},
       {lat:-7.933711, lng: 112.558321},
       {lat:-7.933477, lng: 112.557827},
       {lat:-7.933541, lng: 112.557484},
       {lat:-7.933031, lng: 112.556647},
       {lat:-7.933626, lng: 112.555875},
       {lat:-7.934136, lng: 112.555832},
       {lat:-7.934773, lng: 112.556261},
       {lat:-7.935538, lng: 112.556046},
       {lat:-7.935963, lng: 112.554630},
       {lat:-7.937345, lng: 112.554738},
       {lat:-7.937430, lng: 112.552356},
       {lat:-7.938110, lng: 112.552420},
       {lat:-7.938131, lng: 112.551927},
       {lat:-7.937217, lng: 112.551712},
       {lat:-7.937217, lng: 112.551712},
       {lat:-7.936410, lng: 112.547764},
       {lat:-7.936580, lng: 112.545189},
       {lat:-7.933179, lng: 112.546605},
       {lat:-7.932350, lng: 112.545253},
       {lat:-7.931904, lng: 112.543558},
       {lat:-7.932138, lng: 112.542786},
       {lat:-7.930140, lng: 112.539202},
       {lat:-7.930693, lng: 112.538773},
       {lat:-7.930416, lng: 112.538086},
       {lat:-7.929566, lng: 112.537657},
       {lat:-7.929694, lng: 112.537078},
       {lat:-7.929503, lng: 112.536327},
       {lat:-7.930034, lng: 112.535383},
       {lat:-7.930757, lng: 112.535039},
       {lat:-7.930948, lng: 112.534353},
       {lat:-7.932074, lng: 112.533108},
       {lat:-7.932605, lng: 112.532808},
       {lat:-7.932776, lng: 112.532035},
       {lat:-7.933923, lng: 112.531241},
       {lat:-7.934412, lng: 112.529117},
       {lat:-7.933966, lng: 112.527615},
       {lat:-7.930183, lng: 112.525255},
       {lat:-7.928525, lng:112.523345},
       {lat:-7.927781, lng: 112.523388},
       {lat:-7.927207, lng: 112.522894}
       ];

       var sumbersekarnew = [
       {lat:-7.923282, lng: 112.544501},
       {lat:-7.922942, lng: 112.548202},
       {lat:-7.921592, lng: 112.548202},
       {lat:-7.920880, lng: 112.548042},
       {lat:-7.920051, lng: 112.548878},
       {lat:-7.919509, lng: 112.548996},
       {lat:-7.919392, lng: 112.549308},
       {lat:-7.919807, lng: 112.549329},
       {lat:-7.919966, lng: 112.549576},
       {lat:-7.919956, lng: 112.549919},
       {lat:-7.920466, lng: 112.549908},
       {lat:-7.920476, lng: 112.550788},
       {lat:-7.919191, lng: 112.551228},
       {lat:-7.919021, lng: 112.553148},
       {lat:-7.918521, lng: 112.553170},
       {lat:-7.918765, lng: 112.554618},
       {lat:-7.918595, lng: 112.554693},
       {lat:-7.918595, lng: 112.554854},
       {lat:-7.918319, lng: 112.555444},
       {lat:-7.917565, lng: 112.555798},
       {lat:-7.917522, lng: 112.556721},
       {lat:-7.916236, lng: 112.556957},
       {lat:-7.916385, lng: 112.558867},
       {lat:-7.916098, lng: 112.559360},
       {lat:-7.916215, lng: 112.560616},
       {lat:-7.914727, lng: 112.560820},
       {lat:-7.914685, lng: 112.561388},
       {lat:-7.914547, lng: 112.561571},
       {lat:-7.914563, lng: 112.562000},
       {lat:-7.914292, lng: 112.562150},
       {lat:-7.914233, lng: 112.562440},
       {lat:-7.914191, lng: 112.562783},
       {lat:-7.913564, lng: 112.562933},
       {lat:-7.913468, lng: 112.563105},
       {lat:-7.913606, lng: 112.563309},
       {lat:-7.913553, lng: 112.563512},
       {lat:-7.913649, lng: 112.563620},
       {lat:-7.914095, lng: 112.563813},
       {lat:-7.914116, lng: 112.564242},
       {lat:-7.913628, lng: 112.564982},
       {lat:-7.913819, lng: 112.565379},
       {lat:-7.913500, lng: 112.565690},
       {lat:-7.913489, lng: 112.566313},
       {lat:-7.913171, lng: 112.566763},
       {lat:-7.912618, lng: 112.567192},
       {lat:-7.912714, lng: 112.567901},
       {lat:-7.913404, lng: 112.568716},
       {lat:-7.913574, lng: 112.570883},
       {lat:-7.913914, lng: 112.571280},
       {lat:-7.913798, lng: 112.572932},
       {lat:-7.914403, lng: 112.573984},
       {lat:-7.914499, lng: 112.574467},
       {lat:-7.914839, lng: 112.574799},
       {lat:-7.915976, lng: 112.575153},
       {lat:-7.916050, lng: 112.575379},
       {lat:-7.916422, lng: 112.575507},
       {lat:-7.916454, lng: 112.575743},
       {lat:-7.916327, lng: 112.576012},
       {lat:-7.916401, lng: 112.576151},
       {lat:-7.916901, lng: 112.575958},
       {lat:-7.917315, lng: 112.576580},
       {lat:-7.917347, lng: 112.577782},
       {lat:-7.917836, lng: 112.578619},
       {lat:-7.918346, lng: 112.578983},
       {lat:-7.918781, lng: 112.578855},
       {lat:-7.918973, lng: 112.578962},
       {lat:-7.920715, lng: 112.578651},
       {lat:-7.920864, lng: 112.578780},
       {lat:-7.921991, lng: 112.578554},
       {lat:-7.922086, lng: 112.578340},
       {lat:-7.922458, lng: 112.578179},
       {lat:-7.922363, lng: 112.577878},
       {lat:-7.923712, lng: 112.577428},
       {lat:-7.924169, lng: 112.576881},
       {lat:-7.925444, lng: 112.576323},
       {lat:-7.925837, lng: 112.576387},
       {lat:-7.926326, lng: 112.576076},
       {lat:-7.926911, lng: 112.574467},
       {lat:-7.927538, lng: 112.574542},
       {lat:-7.927548, lng: 112.573877},
       {lat:-7.927272, lng: 112.573759},
       {lat:-7.927314, lng: 112.573362},
       {lat:-7.928069, lng: 112.572954},
       {lat:-7.928005, lng: 112.572653},
       {lat:-7.928026, lng: 112.572203},
       {lat:-7.927198, lng: 112.570948},
       {lat:-7.927006, lng: 112.570529},
       {lat:-7.926411, lng: 112.570336},
       {lat:-7.926050, lng: 112.569660},
       {lat:-7.925657, lng: 112.568641},
       {lat:-7.925646, lng: 112.567611},
       {lat:-7.925412, lng: 112.566345},
       {lat:-7.925529, lng: 112.564778},
       {lat:-7.923574, lng: 112.556828},
       {lat:-7.923882, lng: 112.555208},
       {lat:-7.923882, lng: 112.552097},
       {lat:-7.924626, lng: 112.550616},
       {lat:-7.924796, lng: 112.548235},
       {lat:-7.923282, lng: 112.544501}

       ];

       var kalisongolawas=[
       {lat:-7.972951, lng: 112.562493},
       {lat:-7.971192, lng: 112.562497},
       {lat:-7.969318 , lng:112.561059},
       {lat:-7.966529, lng: 112.561003},
       {lat:-7.963315, lng: 112.563101},
       {lat:-7.962989, lng: 112.566721},
       {lat:-7.963117, lng: 112.569842},
       {lat:-7.95918, lng: 112.573198},
       {lat:-7.958938, lng: 112.573351},
       {lat:-7.955968, lng: 112.575232},
       {lat:-7.954903, lng: 112.577756},
       {lat:-7.955473, lng: 112.580948},
       {lat:-7.95655, lng: 112.584151},
       {lat:-7.9575, lng: 112.590533},
       {lat:-7.957699, lng: 112.592247}, 
       {lat:-7.960804, lng: 112.596516},
       {lat:-7.967379, lng: 112.603903},
       {lat:-7.975558, lng: 112.607186},
       {lat:-7.981507, lng: 112.604698 },
       {lat:-7.985193, lng: 112.60301 },
       {lat:-7.982767, lng: 112.598807},
       {lat:-7.978595, lng: 112.591787},
       {lat:-7.975948, lng: 112.584671},
       {lat:-7.975764, lng: 112.58294},
       {lat:-7.974827, lng: 112.57415},
       {lat:-7.973087, lng: 112.562917},
       {lat:-7.972951, lng: 112.562493}
       ];

       var kucurlawas=[
       {lat:-7.962434 , lng:112.532798},
       {lat:-7.960428 , lng:112.533076},
       {lat:-7.958021 , lng:112.532901},
       {lat:-7.95754 , lng:112.531555 },
       {lat:-7.955438, lng: 112.532022 },
       {lat:-7.954828, lng: 112.530801},
       {lat:-7.953495, lng: 112.530838},
       {lat:-7.951818, lng: 112.532267 },
       {lat:-7.949566, lng: 112.533876},
       {lat:-7.948336, lng: 112.535124 },
       {lat:-7.947748, lng: 112.53909},
       {lat:-7.947874, lng: 112.539186},
       {lat:-7.949351, lng: 112.541443},
       {lat:-7.950983, lng: 112.545484},
       {lat:-7.953124, lng: 112.549408},
       {lat:-7.95424, lng: 112.553884},
       {lat:-7.954753, lng: 112.556757},
       {lat:-7.954429, lng: 112.56025},
       {lat:-7.953912, lng: 112.561238},
       {lat:-7.95529, lng: 112.561603 },
       {lat:-7.956556, lng: 112.564874},
       {lat:-7.957299, lng: 112.568961},
       {lat:-7.958938, lng: 112.573351},
       {lat:-7.95918, lng: 112.573198},
       {lat:-7.963117, lng: 112.569842 },
       {lat:-7.962989, lng: 112.566721 },
       {lat:-7.963315, lng: 112.563101},
       {lat:-7.966529, lng: 112.561003},
       {lat:-7.969318, lng: 112.561059},
       {lat:-7.971192, lng: 112.562497},
       {lat:-7.972951, lng: 112.562493},
       {lat:-7.970042, lng: 112.553439 },
       {lat:-7.969863, lng: 112.552797 },
       {lat:-7.967498, lng: 112.544289 },
       {lat:-7.964615, lng: 112.538576 },
       {lat:-7.963898, lng: 112.537155 },
       {lat:-7.962434, lng: 112.532798 }
       ];

       var petungsewulawas =[
       {lat:-7.953912, lng: 112.561238 },
       {lat:-7.954429, lng: 112.56025 },
       {lat:-7.954753, lng: 112.556757 },
       {lat:-7.95424, lng: 112.553884},
       {lat:-7.953124, lng: 112.549408 },
       {lat:-7.950983, lng: 112.545484},
       {lat:-7.949351, lng: 112.541443},
       {lat:-7.947874, lng: 112.539186},
       {lat:-7.947748, lng: 112.53909},
       {lat:-7.94625, lng: 112.537945},
       {lat:-7.94446, lng: 112.538609},
       {lat:-7.943615, lng: 112.538559},
       {lat:-7.944515, lng: 112.542236 },
       {lat:-7.943922, lng: 112.549668},
       {lat:-7.94194, lng: 112.556233},
       {lat:-7.943024, lng: 112.556521},
       {lat:-7.944295, lng: 112.559537},
       {lat:-7.945559, lng: 112.562934},
       {lat:-7.94636, lng: 112.565369},
       {lat:-7.948634, lng: 112.564587},
       {lat:-7.950409, lng: 112.564622},
       {lat:-7.951809, lng: 112.564396},
       {lat:-7.952581, lng: 112.563839},
       {lat:-7.95344, lng:  112.562139},
       {lat:-7.953912, lng: 112.561238}
       ];

       var kalisongoPolygon = new google.maps.Polygon({
        paths: kalisongonew,
        strokeColor: kalisongowarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: kalisongowarna,
        fillOpacity: 0.35
      });

      //  var kalisongoPolygon1 = new google.maps.Polygon({
      //   paths: kalisongolawas,
      //   strokeColor: '#FFC871',
      //   strokeOpacity: 0.8,
      //   strokeWeight: 2,
      //   fillColor: '#FFC871',
      //   fillOpacity: 0.35
      // });

       var kucurPolygon = new google.maps.Polygon({
        paths: kucurnew,
        strokeColor: kucurwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: kucurwarna,
        fillOpacity: 0.35
      });

      //  var kucurPolygon1 = new google.maps.Polygon({
      //   paths: kucurlawas,
      //   strokeColor: '#E5462C',
      //   strokeOpacity: 0.8,
      //   strokeWeight: 2,
      //   fillColor: '#E5462C',
      //   fillOpacity: 0.35
      // });

       var petungsewuPolygon = new google.maps.Polygon({
        paths: petungsewunew,
        strokeColor: petungsewuwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: petungsewuwarna,
        fillOpacity: 0.35
      });

      //  var petungsewuPolygon1 = new google.maps.Polygon({
      //   paths: petungsewulawas,
      //   strokeColor: '#DDE174',
      //   strokeOpacity: 0.8,
      //   strokeWeight: 2,
      //   fillColor: '#DDE174',
      //   fillOpacity: 0.35
      // });

       var selorejoPolygon = new google.maps.Polygon({
        paths: selorejonew,
        strokeColor: selorejowarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: selorejowarna,
        fillOpacity: 0.35
      });

       var tegaweruPolygon = new google.maps.Polygon({
        paths: tegalwerunew,
        strokeColor: tegalweruwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: tegalweruwarna,
        fillOpacity: 0.35
      });

       var karangwidoroPolygon = new google.maps.Polygon({
        paths: karangwidoronew,
        strokeColor: karangwidorowarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: karangwidorowarna,
        fillOpacity: 0.35
      });

       var landungsariPolygon = new google.maps.Polygon({
        paths: landungsarinew,
        strokeColor: landungsariwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor:landungsariwarna,
        fillOpacity: 0.35
      });

       var mulyoagungPolygon = new google.maps.Polygon({
        paths: mulyoagungnew,
        strokeColor: mulyoagungwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: mulyoagungwarna,
        fillOpacity: 0.35
      });

       var gadingkulonPolygon = new google.maps.Polygon({
        paths: gadingkulonnew,
        strokeColor: gadingkulonwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: gadingkulonwarna,
        fillOpacity: 0.35
      });
       var sumbersekarPolygon = new google.maps.Polygon({
        paths: sumbersekarnew,
        strokeColor: sumbersekarwarna,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: sumbersekarwarna ,
        fillOpacity: 0.35
      });

       
       // kalisongoPolygon1.setMap(map);
       // kucurPolygon1.setMap(map);
       // petungsewuPolygon1.setMap(map);

       kalisongoPolygon.setMap(map);
       kucurPolygon.setMap(map);
       petungsewuPolygon.setMap(map);
       
       selorejoPolygon.setMap(map);
       tegaweruPolygon.setMap(map);
       karangwidoroPolygon.setMap(map);
       landungsariPolygon.setMap(map);
       mulyoagungPolygon.setMap(map);
       gadingkulonPolygon.setMap(map);
       sumbersekarPolygon.setMap(map);



      }//end of success


    });

}

</script>




</body>
</html>
