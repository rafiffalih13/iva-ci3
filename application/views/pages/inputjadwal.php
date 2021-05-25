<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<!-- <div class="form-group">
    <label>Nama Pasien</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama Pasien">
</div>

<div class="form-group">
    <label>Tanggal/Jam Praktek</label>
    <input type="datetime-local" id="tanggalpraktek" name="tanggalpraktek">
</div>

<button type="Submit" class="btn btn-default">Submit</button>
</form> -->

<?php echo form_open_multipart('c_jadwal/create_jadwal'); ?>
<div class="container-fluid"></div>
<div class="row">
    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="content">
            <!-- <h1>DateTimePicker Styles</h1> -->
            <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Pasien">
            </div>
            <div class="form-group">
                <label>Tanggal/Jam Praktek</label>
                <div class="input-group time" id="timepicker">
                    <input type="datetime-local" class="form-control" name="waktu" placeholder="HH:MM AM/PM" />
                </div>
            </div>
            <button type="Submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</div>