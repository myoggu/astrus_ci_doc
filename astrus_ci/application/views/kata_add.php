

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
              tambah data

                    
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <br>

    <form class="form-horizontal" action="<?php echo base_url(). 'index.php/Link/tambah_kecamatan'; ?>" method="post">
      
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="address" class="form-control" id="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">post_code</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="post_code" class="form-control" id="post_code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">telephone</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="telephone" class="form-control" id="telephone">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" value="Simpan" class="btn btn-primary m-t-15 waves-effect" id="Simpan">Proses data</button>
                                    </div>
                                </div>

    </form>    

                           
                        </div>
           
                    </div>
                </div>
            </div>

        </div>
    </section>
 



<?php
//besarkecil.php
$string = 'JOKO WIDODO SUBA ANGKORO Jl. Joyo Agung No.13 Merjosari Malang 00665 +0341-333444';
   //print_r(explode(" ", $string)) ;

$array =  explode(' ', $string);
$temp=0;
foreach ($array as $item) {
    echo $isi[$temp]=$item;
    $temp++;
}

echo "<br><br><br>";
 $jumlah_anggota=count($isi);

$j_nama=0;
$j_alamat=0;
$j_kodepos=0;
$j_telepon=0;


for($i=0;$i<$jumlah_anggota;$i++)
{
    if(ctype_upper($isi[$i]))
    {
         $nama[$j_nama]=$isi[$i]; echo "&nbsp";
        $j_nama++;
    }
    else if(is_numeric($isi[$i])&&strlen($isi[$i])==5)
    {
          $kode_pos=$isi[$i]; echo "&nbsp";
    }
    else
    {
        if (preg_match("/^[Tel]?[+]?[0-9]/",$isi[$i])) 
        {
            $telepon = $isi[$i];
        }
        else
        {
            $alamat[$j_alamat]=$isi[$i];
           $j_alamat++;
        }
    }
    

}
echo "<br><br><br>";
echo $f_nama = implode(" ",$nama);
echo "<br>";
echo $f_alamat = implode(" ",$alamat);
echo "<br>";
echo $f_kodepos = $kode_pos;
echo "<br>";
echo $f_telepon  = $telepon;
echo "<br>";

    //echo $alamat[];
   // echo implode(" ",$alamat);

   ?>