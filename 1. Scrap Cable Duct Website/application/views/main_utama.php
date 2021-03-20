<!DOCTYPE html>
<html>
  <title>HOME</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?php echo base_url("assets/css/bootstrap.css") ?>" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <style>
        * {box-sizing: border-box}
      body {font-family: Verdana, sans-serif; margin:0}
      .mySlides {display: none}
      img {vertical-align: middle;}

      /* Slideshow container */
      .slideshow-container {
        max-width: 1350px;
        position: relative;
        margin: auto;
      }

      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 25px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(95,0,0.8);
      }

      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
      .faded {
        -webkit-animation-name: faded;
        -webkit-animation-duration: 1.5s;
        animation-name: faded;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes faded {
        from {opacity: .4} 
        to {opacity: 1}
      }

      @keyframes faded {
        from {opacity: .4} 
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }


    label{
      font-size: 15pt;
      font-style: initial;
      font-weight: bold;
      }
    small{
      font-style: italic;
      }
    .judul, .deskripsi,label,small,h1,h2,h6.deskripsi{
      color: white;
      }
  </style>

  <body style="background: linear-gradient(90deg, black, red, black); color: white;">
    <header style="background: linear-gradient(90deg, black, red, black); margin-top:20px;">
      <h1 class="Judul" style=" color:white; text-shadow: 100%; font-weight: bold; text-align: center;"> SCRAP CABLE </h1>
      <h6 class="deskripsi" style="text-align: center; font-size: 30px;color:white;"> " Menghitung Profit dari Penjualan Kabel Berdasarkan Berat" </h6>
    </header>

    <div class="w3-container w3-content" style="max-width:1400px;margin-top:30px">  
      <div class="w3-row-padding w3-card">
        <div class="w3-col m6" style="padding-bottom:10px; margin-top:20px;">
          <div class="w3-container w3-card w3-white w3-round ">
            <h4 style ="text-align:center;"> KURS USD - IDR </h4>
            <div class="embed-responsive embed-responsive-16by9">
              <div id="div_chart_spot_USD" align="center">
                <script src="https://kursdollar.net/widget/widget.js"></script>
                <script>
                  v_widget_type='chart_spot_USD';
                  v_width="100%";
                  v_height=300;
                  kdcom_chart(v_widget_type,v_width,v_height,'div_chart_spot_USD');
                </script>
              </div>
              <div id="seputarforex_kursdollar">
                <a href="/data/kurs_dollar_rupiah/" >seputarforex.com</a>
                <script type="text/javascript" src="https://www.seputarforex.com/widget/kurs_dollar_rupiah_ticker_js.php"></script> 
                <script language="javascript"> dollar_startticker(); </script>                
              </div>
            </div>
          </div>
        </div>

        <div class="w3-col m6" style="padding-bottom:10px; margin-top:20px;">
          <div class="w3-container w3-card w3-white w3-round">
            <h4 style="text-align:center;">LONDON METAL EXCHANGE COPPER</h4>
            <div class="embed-responsive embed-responsive-16by9">
                      <embed id="LME_CHART", src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_67ad7&symbol=OANDA%3AXCUUSD&interval=1&hidesidetoolbar=0&saveimage=0&toolbarbg=f1f3f6&studies=%5B%5D&hideideas=1&theme=White&style=1&timezone=Etc%2FUTC&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.livecharts.co.uk&utm_medium=widget&utm_campaign=chart&utm_term=
            OANDA%3AXCUUSD" width="600"height="300">
            </div>
            <small>Pound / USD</small>
          </div>   
        </div>
      </div>
      <!-- SECOND GRID -->

      <div class="slideshow-container">
        <div class="mySlides faded">
          <div class="w3-row-padding w3-card">
            <h2 style ="text-align:center; padding-top: 25px; margin-bottom: 20px;">  ESTIMASI PERHITUNGAN SCRAP CABLE </h2>
            <form action="<?php echo base_url('index.php/C_scrapt/insert')?>" method="POST">
            <!-- LEFT GRID -->
            <div class="w3-col m6">
              <div class="w3-col m6 w3-padding">
                <!-- PANJANG -->
                <div style="margin-left:10px;">
                    <p>       
                    <label style="margin-bottom:-10px; margin-right: 165px;">PANJANG</label>
                    <i class="fa fa-arrows-h" style="font-size:20px;padding-bottom: 5px;"></i> <br>
                  
                    <input type="text" class="w3-input w3-border" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"name="panjang" id="panjang_id" placeholder="Masukan Panjang Kabel" required="" oninput="check(this)" min="1" onkeyup="hitung()">
                    <script>
                            function hanyaAngka(evt) {
                              var charCode = (evt.which) ? evt.which : event.keyCode
                              if (charCode > 31 && (charCode < 48 || charCode > 57)){
                        
                                return false;
                              return true;
                            }
                          }
                      </script>
                      <script>
                          function check(input) {
                            if (input.value == 0) {
                              input.setCustomValidity('Inputan Tidak Boleh 0.');
                            } else {
                              // input is fine -- reset the error message
                              input.setCustomValidity('');
                            }
                          }
                      </script>
                    <small>Panjang dalam satuan Meter</small>
                    </p>
                </div>
                <!-- DIAMETER -->
                <div style="padding-left:10px;" >
                  <label style="margin-bottom:-10px; margin-right: 160px;" >DIAMETER</label>
                  <i class="fa fa-circle-o" style="font-size:20px;padding-bottom: 5px;"></i> <br>
                  <div>
                      <select name="diameter" class="form-control" id="diameter_id" style="padding-right:60px;padding-bottom:10px;overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"required=""onchange="hitung()">
                        <option value="" selected>--- Pilih Diameter --- </option>
                        <option value="0.4" >0.4 </option>
                        <option value="0.6" >0.6 </option>
                        <option value="0.8" >0.8 </option>
                      </select>
                      <small> Diameter Kabel</small>
                  </div>

                </div>
                <!-- KAPASITAS -->
                <div style="padding-left:10px; margin-top: 10px;">
                  <p>
                  <label style="margin-bottom:-10px; margin-right: 153px;" >KAPASITAS</label>
                   <i class=" fa fa-cube" style="font-size:20px;padding-bottom: 5px;"></i> <br>

                  <select name="kapasitas" class="form-control" id="kapasitas_id" style="padding-right:60px;padding-bottom:10px;overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"required="" onchange="hitung()">
                    <option value="" selected>--- Pilih Kapasitas --- </option>
                    <option value="100" >Kapasitas 100 </option>
                    <option value="200" >Kapasitas 200 </option>
                    <option value="300" >Kapasitas 300 </option>
                    <option value="400" >Kapasitas 400 </option>
                    <option value="600" >Kapasitas 600 </option>
                    <option value="800" >Kapasitas 800 </option>
                    <option value="1000" >Kapasitas 1000 </option>
                    <option value="1200" >Kapasitas 1200 </option>
                    <option value="2200" >Kapasitas 2200 </option>
                    <option value="2400" >Kapasitas 2400 </option>
                    <option value="4200" >Kapasitas 4200 </option>
                  </select>
                  <small>Kapasitas Kabel Tembaga</small>
                  </p>
                </div>
                <!-- PRIMER -->
                <div style="padding-left:10px;">

                </div> 
              </div>
              <div class="w3-col m6 w3-padding">
                    <label style="margin-bottom:-10px; margin-right: 220px;">STO</label>
                  <i class="fa fa-map-marker" style="font-size:20px;padding-bottom: 5px; margin-left: 15px;"></i> <br>
                  <select name="tempat" class="form-control" id="tempat_id" style="padding-right:60px;overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"required="" onchange="hitung()">
                    <option value="" selected>--- Pilih Tempat --- </option>
                    <option value="Bojong Lopang">Bojong Lopang </option>
                    <option value="Cibeber">Cibeber </option>
                    <option value="Cibadak">Cibadak </option>
                    <option value="Cicurug">Cicurug </option>
                    <option value="Ciranjang">Ciranjang </option>
                    <option value="Cianjur">Cianjur </option>
                    <option value="Cikembang">Cikembang </option>
                    <option value="Cikalong Kulok">Cikalong Kulok </option>
                    <option value="Cimangkok">Cimangkok </option>
                    <option value="Jampang Kulon">Jampang Kulon </option>
                    <option value="Kalapanunggal">Kalapanunggal </option>
                    <option value="Nyalindung">Nyalindung </option>
                    <option value="Pelabuhan Ratu">Pelabuhan Ratu </option>
                    <option value="Sindang Laya">Sindang Laya </option>
                    <option value="Sukanagara">Sukanagara </option>
                    <option value="Sagaranten">Sagaranten </option>
                    <option value="Sukareani">Sukareani </option>
                    <option value="Banjaran">Banjaran </option>
                    <option value="Batu Jajar">Batu Jajar </option>
                    <option value="Cikalong Wetan">Cikalong Wetan </option>
                    <option value="Cililin">Cililin </option>
                    <option value="Cimahi">Cimahi </option>
                    <option value="Cipatat">Cipatat </option>
                    <option value="Lembang-Cisarua">Lembang-Cisarua </option>
                    <option value="Gegerkalong">Gegerkalong </option>
                    <option value="Gunung Hulu">Gunung Halu </option>
                    <option value="Hegarmanah">Hegarmanah </option>
                    <option value="Jalan Cagak">Jalan Cagak </option>
                    <option value="Kopo">Kopo </option>
                    <option value="Lembang">Lembang </option>
                    <option value="Nanjung">Nanjung</option>
                    <option value="Padalarang">Padalarang </option>
                    <option value="Padalarang 2">Padalarang 2 </option>
                    <option value="Rajawali">Rajawali </option>
                    <option value="Soreang">Soreang </option>
                    <option value="Subang">Subang </option>
                    <option value="Tegalega">Tegalega </option>
                    <option value="Ahmad Yani">Ahmad Yani </option>
                    <option value="Cijaura">Cijaura </option>
                    <option value="Bandung Centrum">Bandung Centrum </option>
                    <option value="Dago">Dago </option>
                    <option value="Majalaya">Majalaya </option>
                    <option value="Rancekek">Rancekek </option>
                    <option value="Sumedang">Sumedang </option>
                    <option value="Tanjungsari">Tanjungsari </option>
                    <option value="Turangga">Turangga </option>
                    <option value="Ujung Berung">Ujung Berung </option>
                    <option value="Banjar">Banjar </option>
                    <option value="Banjarsari">Banjarsari </option>
                    <option value="Cibalong">Cibalong </option>
                    <option value="Cibatu">Cibatu </option>
                    <option value="Ciawi">Ciawi </option>
                    <option value="Cikajang">Cikajang </option>
                    <option value="Ciamis">Ciamis </option>
                    <option value="Cisompet Garut">Cisompet Garut </option>
                    <option value="Garut">Garut </option>
                    <option value="Karang Nunggal">Karang Nunggal </option>
                    <option value="Kawali">Kawali </option>
                    <option value="Kadungora">Kadungora </option>
                    <option value="Malangbong">Malangbong </option>
                    <option value="Pangandaran">Pangandaran </option>
                    <option value="Pameungpeuk">Pameungpeuk </option>
                    <option value="Rajapolah">Rajapolah </option>
                    <option value="Tasikmalaya">Tasikmalaya </option>
                    <option value="Singaparna">Singaparna </option>
                    <option value="Wanarwa">Wanarwa </option>
                    <option value="Arjawinangun">Arjawinangun </option>
                    <option value="Balongan">Balongan </option>
                    <option value="Cirebon Cirebon">Cirebon Centrum </option>
                    <option value="Kanci">Kanci </option>
                    <option value="Ciasem">Ciasem </option>
                    <option value="Haurgeulis">Haurgeulis </option>
                    <option value="Indramayu">Indramayu </option>
                    <option value="Jamblang">Jamblang </option>
                    <option value="Jati Barang">Jati Barang </option>
                    <option value="Jati Wangi">Jati Wangi </option>
                    <option value="Kadipaten">Kadipaten </option>
                    <option value="Kalijati">Kalijati </option>
                    <option value="Kuningan">Kuningan </option>
                    <option value="Karang Ampel">Karang Ampel </option>
                    <option value="Karyamulia">Karyamulia </option>
                    <option value="Linggarjati / Cilimus">Linggarjati / Cilimus </option>
                    <option value="Losari">Losari </option>
                    <option value="Losarang">Losarang </option>
                    <option value="Majalengka">Majalengka </option>
                    <option value="Pabuaran">Pabuaran </option>
                    <option value="Patrol">Patrol </option>
                    <option value="SU.Pabuaran">SU.Pabuaran </option>
                    <option value="Pagaden">Pagaden </option>
                    <option value="Plered">Plered </option>
                    <option value="Pampanukan">Pampanukan </option>
                    <option value="Rajagaluh">Rajagaluh </option>
                    <option value="Sindang Laut">Sindang Laut </option>
                    <option value="Cibungur">Cibungur </option>
                    <option value="Cikampek">Cikampek </option>
                    <option value="Cilamaya">Cilamaya </option>
                    <option value="Ciampel">Ciampel </option>
                    <option value="Jatisari">Jatisari </option>
                    <option value="Klari">Klari </option>
                    <option value="Karang Ligar">Karang Ligar </option>
                    <option value="Karawang">Karawang </option>
                    <option value="Purwakarta">Purwakarta </option>
                    <option value="Rengas Dengklok">Rengas Dengklok </option>
                    <option value="Teluk Jambe">Teluk Jambe </option>
                    <option value="Wadas">Wadas </option>
                    <option value="Sukabumi">Sukabumi </option>
                    <option value="Tanggeung">Tanggeung </option>
                    <option value="Ciwidey">Ciwidey </option>
                    <option value="Pangalengan">Pangalengan </option>
                    <option value="Limbangan">Limbangan </option>
                    <option value="Manonjaya">Manonjaya </option>
                    <option value="Cikijing">Cikijing </option>
                  </select>
                  <small>STO Jawa Barat</small>

               <div style="padding-top:18px;">   
                  <label style="margin-bottom:-10px; margin-right: 10px;" >TANGGAL PELAKSANAAN</label>
                    <i class="fa fa-calendar" style="font-size:20px;padding-bottom: 5px; margin-left: 13px;"></i> <br>
                    <input class="form-control" id="date" readonly="" name="tanggal" placeholder="DD/MM/YYYY" type="text" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"/>
                    <script>
                      $(document).ready(function(){
                        var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
                        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                        var options={
                          format: 'yyyy-mm-dd',
                          container: container,
                          todayHighlight: true,
                          autoclose: true,
                        };
                        date_input.datepicker(options);
                      })
                    </script> 
                </div>
                <div style="padding-top:35px;">   
                 <label style="margin-bottom:0px; margin-right: 31px;">PRIMER</label>
                  <i class=" fa fa-server" style="font-size:20px;"></i> <br>
                    <button type="button" class="btn btn-dark" onclick="openTab('Select')" value="Select" style="color: white">Select</button>
                    <button type="button" class="btn btn-dark" onclick="openTab('Other')" value="Other" style="color: white">Other</button>
                  <div id="Select" class="w3-dropdown primer2" style="display: none;margin-top: -20px;margin-bottom: 20px;"><small><br>Select Primer</small>
                    <br/>
                    <select name="primer_pilih" class="form-control" id="primer_id" style="">
                        <option value="" >--- Pilih Primer --- </option>
                        <option value="P.1">P.1</option>
                        <option value="P.2">P.2</option>
                        <option value="P.3">P.3</option>
                        <option value="P.4">P.4</option>
                        <option value="P.5">P.5</option>
                        <option value="P.6">P.6</option>
                        <option value="P.7">P.7</option>
                        <option value="P.8">P.8</option>
                        <option value="P.9">P.9</option>
                        <option value="P.10">P.10</option>
                        <option value="P.11">P.11</option>
                        <option value="P.12">P.12</option>
                        <option value="P.13">P.13</option>
                        <option value="P.14">P.14</option>
                        <option value="P.15">P.15</option>
                        <option value="P.16">P.16</option>
                        <option value="P.17">P.17</option>
                        <option value="P.18">P.18</option>
                        <option value="P.19">P.19</option>
                        <option value="P.20">P.20</option>
                        <option value="P.21">P.21</option>
                        <option value="P.22">P.22</option>
                        <option value="P.23">P.23</option>
                        <option value="P.24">P.24</option>
                        <option value="P.25">P.25</option>
                        <option value="P.26">P.26</option>
                        <option value="P.27">P.27</option>
                        <option value="P.28">P.28</option>
                        <option value="P.29">P.29</option>
                        <option value="P.30">P.30</option>
                        <option value="P.31">P.31</option>
                        <option value="P.32">P.32</option>
                        <option value="P.33">P.33</option>
                        <option value="P.34">P.34</option>
                        <option value="P.35">P.35</option>
                        <option value="P.36">P.36</option>
                        <option value="P.37">P.37</option>
                        <option value="P.38">P.38</option>
                        <option value="P.39">P.39</option>
                        <option value="P.40">P.40</option>
                        <option value="P.41">P.41</option>
                        <option value="P.42">P.42</option>
                        <option value="P.43">P.43</option>
                        <option value="P.44">P.44</option>
                        <option value="P.45">P.45</option>
                        <option value="P.46">P.46</option>
                        <option value="P.47">P.47</option>
                        <option value="P.48">P.48</option>
                        <option value="P.49">P.49</option>
                        <option value="P.50">P.50</option>
                        <option value="P.51">P.51</option>
                        <option value="P.52">P.52</option>
                        <option value="P.53">P.53</option>
                        <option value="P.54">P.54</option>
                        <option value="P.55">P.55</option>
                        <option value="P.56">P.56</option>
                        <option value="P.57">P.57</option>
                        <option value="P.58">P.58</option>
                        <option value="P.59">P.59</option>
                        <option value="P.60">P.60</option>
                        <option value="P.61">P.61</option>
                        <option value="P.62">P.62</option>
                        <option value="P.63">P.63</option>
                        <option value="P.64">P.64</option>
                        <option value="P.65">P.65</option>
                        <option value="P.66">P.66</option>
                        <option value="P.67">P.67</option>
                        <option value="P.68">P.68</option>
                        <option value="P.69">P.69</option>
                        <option value="P.70">P.70</option>
                        <option value="P.71">P.71</option>
                        <option value="P.72">P.72</option>
                        <option value="P.73">P.73</option>
                        <option value="P.74">P.74</option>
                        <option value="P.75">P.75</option>
                        <option value="P.76">P.76</option>
                        <option value="P.77">P.77</option>
                        <option value="P.78">P.78</option>
                        <option value="P.79">P.79</option>
                        <option value="P.80">P.80</option>
                        <option value="P.81">P.81</option>
                        <option value="P.82">P.82</option>
                        <option value="P.83">P.83</option>
                        <option value="P.84">P.84</option>
                        <option value="P.85">P.85</option>
                        <option value="P.86">P.86</option>
                        <option value="P.87">P.87</option>
                        <option value="P.88">P.88</option>
                        <option value="P.89">P.89</option>
                        <option value="P.90">P.90</option>
                        <option value="P.91">P.91</option>
                        <option value="P.92">P.92</option>
                        <option value="P.93">P.93</option>
                        <option value="P.94">P.94</option>
                        <option value="P.95">P.95</option>
                        <option value="P.96">P.96</option>
                        <option value="P.97">P.97</option>
                        <option value="P.98">P.98</option>
                        <option value="P.99">P.99</option>
                        <option value="P.100">P.100</option>
                    </select>
                  </div>
                  <div id="Other" class="primer2" style="display: none;margin-top: -20px;margin-bottom: 20px;"><small><br>Other Primer</small>
                    <input type="text" name="primer_lain" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;" id="primer_id" class="form-control" placeholder="Other">
                  </div>
                  <script>
                      function openTab(tabName) {
                      var i;
                      var x = document.getElementsByClassName("primer2");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                      }
                      document.getElementById(tabName).style.display = "block";  
                      }
                  </script>
                </div>
              </div>
                <!-- BUTTON -->
                <div style="padding-top: 100px; margin-bottom: 40px; ">
                    <button type="submit" class="btn btn-success btn-block" name="insert">Save Data</button>
                </div>

            </div>
            <!-- RIGHT GRID -->
            <div class="w3-col m6" style="margin-top: 10px;">
              <div class="w3-col m5" style="margin-left: 10px;">
                <label style="margin-bottom:-10px; margin-right: 60px;"> COPPER PRICE LME </label>
                   <i class="fa fa-line-chart" style="font-size:20px;padding-bottom: 5px;"></i> <br>

                  <input type="text"  class="w3-input" style ="padding-top:5px;overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc;background-color:#DCDCDC; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;" name="LME_sebelum" placeholder="LME"required="" id="LME_id" readonly="" oninput="check2(this)" onkeyup="hitung()">
                  <small>Harga Tembaga Per 1 TON /USD</small>
                  <br/>
                  <input type="text"  class="w3-input" style =" padding-bottom:5px;overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s; margin-top: 0px; background-color:#DCDCDC;" name="LME_kon" placeholder="Konversi LME - RP" id="LME_konversi" oninput="check2(this)" readonly="" onchange="hitung()">
                  <script>
                        function check2(input) {
                          if (input.value < 2.6) {
                            input.setCustomValidity('Inputan Tidak Boleh kurang dari 2,5 Dollar');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                        </script>
                            <script>
                        function check2(input) {
                          if (input.value < 2.6) {
                            input.setCustomValidity('Inputan Tidak Boleh kurang dari 2,5 Dollar');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                        </script>
                  <small>Harga Tembaga Per 1 TON / IDR</small><br>
                  <small>Source : <a href="https://www.lme.com/en-GB/Metals/Non-ferrous/Copper#tabIndex=0" style="color: white;" target="_blank">https://www.lme.com/</a></small>


              </div>
              <div class="w3-col m6" style="margin-left: 11px; padding-right: 0px;">
                <label style="margin-bottom:-10px; margin-right: 174px;"> USD - IDR </label>
                   <i class="fa fa-money" style="font-size:20px;padding-bottom: 5px; margin-left: 30px;"></i> 
                  <input class="w3-input" type="text" onkeyup="hitung()" style ="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;background-color:#DCDCDC;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;"  class="form_Calculator_USD" name="USD" id="USD_id" placeholder="USD"required="" onkeypress="return hanyaAngka(event)" readonly="">
                  <script>
                    function check(input) {
                          if (input.value == 0) {
                            input.setCustomValidity('Inputan Tidak Boleh 0.');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                    </script>

                    <script>
                        function check3(input) {
                          if (input.value < 10000) {
                            input.setCustomValidity('Inputan harus lebih Rp 10.000.');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                    </script>
                  <small>Konversi Dollar ke Rupiah</small><br>
                  <small>Source : <a href="https://kursdollar.net/" style="color: white;" target="_blank">https://kursdollar.net/</a></small>              
              </div>
              <br><br><br><br><br><br><br><br>
              <!-- RESULT BAR -->
              <div style="margin-left:10px;">
                <label style=" margin-top:20px;"> BERAT TEMBAGA </label>
                <input type="text" class="w3-input" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;padding-bottom:25px;text-align: left;font-size: 26px;background-color: white;background-color:#DCDCDC;" id="berat_id" name="berat" value="" readonly="" onchange="hitung()"><small>Satuan Dalam Ton<br/></small><br/>
              </div>
              <div style="margin-left:10px;">
                <label>PROFIT PENJUALAN KABEL TEMBAGA</label><br/>
                <input class="w3-input" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;padding-bottom:25px;text-align: left;font-size: 26px;background-color: white;background-color:#DCDCDC;" id="profit_id" name="profit" value="" readonly="" onchange="hitung()"><small>Satuan Dalam Milyar<br/></small><br/>
              </div>
            </div>
            </form>
          </div>
        </div>




        <div class="mySlides faded">
  <!-- CALCULATOR GRID  -->
    <div class="w3-row-padding w3-card">
        <h2 style ="text-align:center;margin-top: 20px;">  CALCULATOR SCRAP CABLE DUCT </h2>
        <!-- LEFT GRID -->
        <div class="w3-col m3">
        <p></p>
        </div>
        <!--CENTER GRID  -->
        <!-- <div class="w3-col m12 w3-padding">
              <div class="w3-col m4">        
                <div style="margin-left:10px;">
                  <label style="margin-bottom:-10px;"> BERAT TEMBAGA </label>
                  <input type="text" class="w3-input" placeholder="Berat Kg" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;text-align: left;background-color: white;" id="berat_idcalculator" name="berat" value="" onkeyup="hitungprofit()"><small>Satuan Dalam Kg<br/></small><br/>
                </div>
              </div>

                          <div class="w3-col m4">        
                <div style="margin-left:10px;">
    
                </div>
              </div>

                          <div class="w3-col m4">        
                <div style="margin-left:10px;">
                  
                </div>
              </div>
        </div> -->


        <div class="w3-col m6 w3-padding">
          <!-- USD -->
           <div class="w3-col m12">        
                <div style="margin-left:10px;">
                  <label style="margin-bottom:-10px;"> BERAT TEMBAGA </label>
                  <input type="text" class="w3-input" placeholder="Berat Kg" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;text-align: left;background-color: white;" id="berat_idcalculator" name="berat" value="" onkeyup="hitungprofit()"><small>Satuan Dalam Kg<br/></small><br/>
                </div>
              </div>

           
            <div class="w3-col m6">
                <div style="margin-left:10px;">
                  <p>
                  <label style="margin-bottom:-10px;"> USD - IDR </label>
                  <br/>
                  <input class="w3-input" type="text" onkeyup="hitungprofit()" style ="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc;background-color:#DCDCDC; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;" readonly="" name="USD_calculator" id="USD_idcalculator" placeholder="USD"required="" onkeypress="return hanyaAngka(event)" >
                  <script>
                    function check(input) {
                          if (input.value == 0) {
                            input.setCustomValidity('Inputan Tidak Boleh 0.');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                    </script>

                    <script>
                        function check3(input) {
                          if (input.value < 10000) {
                            input.setCustomValidity('Inputan harus lebih Rp 10.000.');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                    </script>
                  <small>Konversi Dollar ke Rupiah</small>
                  <small>Source : <a href="https://kursdollar.net/" style="color: white;" target="_blank">https://kursdollar.net/</a></small>

                  </p>
                </div>
            </div>
          <!-- LME -->
            <div class="w3-col m6">
        
                <div style="margin-left:10px;">
                  <p>
                  <label style="margin-bottom:-10px;"> COPPER PRICE LME </label>
                  <br/>
                  <input type="text"  class="w3-input" style ="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;background-color:#DCDCDC;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;" name="LME_sebelumcalculator" placeholder="LME"required="" readonly="" id="LME_idcalculator" oninput="check2(this)" onkeyup="hitungprofit()">
                  <small>Harga Tembaga Per 1 TON /USD</small>
                  <br/>
                  <input type="text"  class="w3-input" style =" overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s; margin-top: 0px; background-color:#DCDCDC;" name="LME_koncalculator" placeholder="Konversi LME - RP" id="LME_konversicalculator" oninput="check2(this)" readonly="" onkeyup="hitung()">
                  <script>
                        function check2(input) {
                          if (input.value < 2.6) {
                            input.setCustomValidity('Inputan Tidak Boleh kurang dari 2,5 Dollar');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                        </script>
                            <script>
                        function check2(input) {
                          if (input.value < 2.6) {
                            input.setCustomValidity('Inputan Tidak Boleh kurang dari 2,5 Dollar');
                          } else {
                            // input is fine -- reset the error message
                            input.setCustomValidity('');
                          }
                        }
                        </script>
                  <small>Harga Tembaga Per 1 TON / IDR</small>
                  <small>Source : <a href="https://www.lme.com/en-GB/Metals/Non-ferrous/Copper#tabIndex=0" style="color: white;" target="_blank">https://www.lme.com/</a></small>
                  </p>
                </div>
            </div>
          <!-- BERAT -->

          <!-- RESULT BAR -->
            <div style="margin-left:10px;">
              <label>PROFIT PENJUALAN KABEL TEMBAGA</label><br/>
              <input class="w3-input" style="overflow: hidden; background: no-repeat right  white; border: 1px solid #ccc; border-radius: 5px;-webkit-border-radius: 5px;transition:ease all 0.3s;-webkit-transition:ease all 0.3s;padding-bottom:25px;text-align: left;font-size: 26px;background-color: white;background-color:#DCDCDC;" id="profit_idcalculator" name="profit" value="" readonly="" onchange="hitungprofit()"><small>Satuan Dalam Milyar<br/></small><br/>
            </div>
        </div>
      </div>


        </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
  </body>
</html>

<?php
  function bacaHTML($url){
  // inisialisasi CURL
  $data = curl_init();
  // setting CURL
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  // menjalankan CURL untuk membaca isi file
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
  }

  $kodeHTML =  bacaHTML('https://kursdollar.org/');
  $pecah = explode('<td>', $kodeHTML);
  $pecahLagi = explode('</td>', $pecah[7]);
  $hasil = floatval($pecahLagi[0])*1000;
  echo "<br/>";

?>

<?php
  function bacaHTML2($url){
  // inisialisasi CURL
  $data = curl_init();
  // setting CURL
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  // menjalankan CURL untuk membaca isi file
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
  }

  $kodeHTML =  bacaHTML2('https://www.lme.com/en-GB/Metals/Non-ferrous/Copper#tabIndex=0');
  $pecah = explode('<td>', $kodeHTML);
  $pecahLagi = explode('</td>', $pecah[3]);
  $hasil2 = floatval($pecahLagi[0]);
  // echo $hasil;
  echo "<br/>";

?>

<?php
  function bacaHTML3($url){
  // inisialisasi CURL
  $data = curl_init();
  // setting CURL
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  // menjalankan CURL untuk membaca isi file
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
  }

  $kodeHTML =  bacaHTML3('https://kursdollar.org/');
  $pecah = explode('<td>', $kodeHTML);
  $pecahLagi = explode('</td>', $pecah[7]);
  $hasil3 = (floatval($pecahLagi[0])*1000);
  // echo $hasil;
  echo "<br/>";

?>

<?php
  function bacaHTML4($url){
  // inisialisasi CURL
  $data = curl_init();
  // setting CURL
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  // menjalankan CURL untuk membaca isi file
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
  }

  $kodeHTML =  bacaHTML4('https://www.lme.com/en-GB/Metals/Non-ferrous/Copper#tabIndex=0');
  $pecah = explode('<td>', $kodeHTML);
  $pecahLagi = explode('</td>', $pecah[3]);
  $hasil4 = floatval($pecahLagi[0]);
  // echo $hasil;
  echo "<br/>";

?>

<script type="text/javascript">
    function hitung(){
      var panjang = document.getElementById('panjang_id').value;
      var diameter = document.getElementById('diameter_id').value;      
      var kapasitas = document.getElementById('kapasitas_id').value;
      var LME = document.getElementById('LME_id').value='<?php echo $hasil2?>'; 
      var USD = document.getElementById('USD_id').value='<?php echo $hasil?>';
      var konversi = parseFloat(LME) * parseFloat(USD);
      
      if (!isNaN(konversi)){
        document.getElementById('LME_konversi').value = konversi.toFixed();
      } else{
        document.getElementById('LME_konversi').value = "Masukan nilai USD";
      }

      var hasil1 = (0.25 * 3.14 * Math.pow((parseFloat(diameter)/1000),2) *8920* parseFloat(panjang) * parseFloat(kapasitas) * 2)/1000;
      if (!isNaN(hasil1)) {
        document.getElementById('berat_id').value =  hasil1.toFixed(3);
        var profit2 = (hasil1*(parseFloat(LME))*(parseFloat(USD)))/(1000000000*0.76);
          if (!isNaN(profit2)){
            document.getElementById('profit_id').value = profit2.toFixed(5);
          }
        }   
      }

      function openTab(tabName) {
        var i;
        var x = document.getElementsByClassName("primer2");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        document.getElementById(tabName).style.display = "block";  
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

    function hitungprofit(){
      var LME = document.getElementById('LME_idcalculator').value='<?php echo $hasil4?>'; 
      var USD = document.getElementById('USD_idcalculator').value='<?php echo $hasil3?>';
      var konversi = (parseFloat(LME) * parseFloat(USD));
      var berat = document.getElementById('berat_idcalculator').value;

      if (!isNaN(konversi)){
        document.getElementById('LME_konversicalculator').value = konversi.toFixed();
      } else{
        document.getElementById('LME_konversicalculator').value = "Masukan nilai USD";
      }      
      if (!isNaN(berat)) {
          var profit2 = ((berat/1000)*parseFloat(LME)*parseFloat(USD))/(1000000000*0.76);
          if (!isNaN(profit2)){
            document.getElementById('profit_idcalculator').value = profit2.toFixed(5);
          }
      } 

    }
</script>