

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Astrus
                   
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <br>
                            Tambah Data &nbsp
                            <!-- <button data-toggle="modal" data-target="#tambah-data" type="button" class="btn btn-primary waves-effect">
                        
                            <button data-toggle="modal" type="button" class="btn btn-primary waves-effect">
                                    <i class="material-icons">extension</i>
                                    <span>Tambah</span>
                            </button> -->
                            <a href="<?php echo base_url().'index.php/tampil_cr'?>">Tambah data</a>
                          
                            

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                               
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>id_form</th>
                                            <th>name</th>
                                            <th>address</th>
                                            <th>post_code</th>
                                            <th>telephone</th>
                                           

                                        </tr>
                                    </thead>
                                 
                                    <?php  
                                
                                    foreach ($data_show as $key) 
                                        {?>  
                                    <tbody>
                                        <tr>
                                           

                                            <td><?php echo $key['id_form']?></td>
                                            <td><?php echo $key['name']?></td>
                                            <td><?php echo $key['address']?></td>
                                            <td><?php echo $key['post_code']?></td>
                                            <td><?php echo $key['telephone']?></td>
                                            <td>
                        
                                                <?php// echo anchor('Link/edit_kecamatan/'.$temp,'Edit'); ?>
                                                <?php //echo anchor('Link/hapus_kecamatan/'.$temp,'Delete'); ?>
                                                

                                            </td>
                                            
                           
                                        </tr>     
                                    </tbody>
                                <?php } ?>
                            
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
  
    </div>
