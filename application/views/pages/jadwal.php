<div class="container">

    <h2><?= $title; ?></h2>
    <p class="lead">
        Jadwal konsultasi yang sudah disetujui
    </p>

    <!-- <div class="alert alert-warning">
        <h4>Mobile Support</h4>
        <p>In order to get the lines between cells looking their best without any JavaScript, I had to use tables for this design. While this could be done in ".row", doing so will cause issues when displaying the vertical borders between cells, which is a compromise I wasn't willing to make this time.'</p>
    </div> -->

    <hr />

    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-striped" style="text-align: center;">
                <thead style="vertical-align: middle;">
                    <tr style="text-align: center; vertical-align: middle;">
                        <th scope="col" rowspan="2">Nomor</th>
                        <th scope="col" rowspan="2">Nama Pasien</th>
                        <th scope="col" rowspan="2">Nomor Urut<br> Pasien</th>
                        <th scope="col" colspan="2">Jadwal</th>
                    </tr>
                    <tr>
                        <td scope="col">Tanggal</td>
                        <td scope="col">Jam</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                    <?php
                    $i = 1;
                    $x = 1;
                    $datein = strtotime($jadwal[0]['waktu']);
                    $date = date('y-m-d', $datein);
                    ?>
                    <?php foreach ($jadwal as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <?php echo $row['pasien']; ?>
                            </td>
                            <td>
                                <?php
                                $datein = strtotime($row['waktu']);
                                if ($date == date('y-m-d', $datein)) {
                                    echo $x++;
                                } else {
                                    $x = 1;
                                    echo $x;
                                    $date = $datein;
                                }
                                ?>
                            </td>
                            <td>
                                <?= date('D j M Y', $datein); ?>
                            </td>
                            <td>
                                <?= date('H:i', $datein); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- Multiple events in a single day (note the rowspan) -->
                    <!-- <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Thursday</div>
                            <div class="shortdate text-muted">July, 2014</div>
                        </td>
                        <td class="agenda-time">
                            8:00 - 9:00 AM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Doctor's Appointment
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            10:15 AM - 12:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Meeting with executives
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            7:00 - 9:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Aria's dance recital
                            </div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>