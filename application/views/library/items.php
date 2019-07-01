<div class="inner-block">
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-12 chart-layer1-left"> 
		<div class="table-responsive-sm">
            <table class="table" data-provide="datatables">
                <thead>
                <tr>

                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Barcode</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <!-- <th class="text-center w-100px">Action</th> -->
                </tr>
                </thead>
                <tbody>

                    <?php $i = 1; foreach($data as $d) : ?>

                    <tr>

                        <th scope="row"><?= $i ?></th>
                        <td><?= $d ->name ?></td>
                        <td><?= $d ->barcode ?></td>
                        <td><?= $d ->description ?></td>
                        <td style="width: 20%;"><img style="width: 50%;" src="<?php echo base_url(); ?>assets/gambar/<?= $d ->foto ?>"></td>


                        <!-- <td class="text-right table-actions">
                            <a class="table-action hover-primary" href="<?= $view.$d->slug ?>"> <i class="ti-book"></i> </a>
                            <a class="table-action hover-primary" href="<?= $edit.$d -> slug ?>"> <i class="ti-pencil"></i> </a>

                            <a class="table-action hover-danger" href="<?= $delete.$d ->slug ?>" data-toggle="modal" data-target="#modal-delete-<?= $d ->id_post ?>"> <i class="ti-trash"></i> </a>

                        </td> -->

                    </tr>

                    <?php $i++; endforeach; ?>

                </tbody>

            </table>

        </div>
  	</div>
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->

</div>
<!--inner block end here-->

            