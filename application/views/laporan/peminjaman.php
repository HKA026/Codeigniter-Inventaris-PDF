<style>
    div#loader {
        text-align: center;
        z-index: 9999;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fas fa-share-square"></i> LAPORAN PEMINJAMAN
            </div>
            <div class="panel-body">
               <br />
               <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-lg-2">Tanggal Awal</label>
                        <div class="col-lg-5">
                            <input type="text" id="tanggal1" class="form-control">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-lg-2">Tanggal Akhir</label>
                        <div class="col-lg-5">
                            <input type="text" id="tanggal2" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <button id="tampilkan" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Tampilkan</button>
                        </div>
                    </div>    
               
               </div><br />
               <div id="loader"></div>
               
                <form target="_blank" action="<?=base_url('DataPeminjaman/CetakPDF')?>" method='post'>
                
                <button id="cetak" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                <br><br> 
               <div id="tampil"></div>
               </form>
            
            </div> <!-- end panel body -->
        
        </div><!-- end panel -->

    </div> <!-- end lg -->
</div> <!-- end row -->


<script>
$(document).ready(function() {

    //alert('');

    //load datatable
    $('#dataTables-example').DataTable({
        responsive: true
    });

    $('#cetak').hide();


    //datepicker
    $("#tanggal1").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal2").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal").datepicker({
        format:'yyyy-mm-dd'
    });


    //get data via ajax 
    $("#tampilkan").click(function(){

        var tanggal1 = $("#tanggal1").val();
        var tanggal2 = $("#tanggal2").val();

        

        if(tanggal1 == "") {
            alert("Silahkan isi periode tanggal awal")
            $("#tanggal1").focus();
            return false;
        }
        else if(tanggal2 == ""){
            alert("Silahkan isi periode tanggal akhir")
            $("#tanggal2").focus();
            return false;
        }
        else{

            $('#loader').html('<img src="<assets/charisma/img/ajax-loaders/ajax-loader-6.gif"title="img/ajax-loaders/ajax-loader-6.gif">');

            $.ajax({
                url:"<?php echo site_url('DataPeminjaman/cari_pinjaman');?>",
                type:"POST",
                data:"tanggal1="+tanggal1+"&tanggal2="+tanggal2,
                cache:false,
                success:function(hasil){
                    // console.log(hasil);
                    $("#tampil").html(hasil);

                     $('#loader').html("").hide();
                     $('#cetak').show();
                }
            })

            //  $('#loader').html("").hide();

        }

        

    }) //end #tampilkan
    

}); //end document
</script>



