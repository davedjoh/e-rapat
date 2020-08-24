<body>
    <div class="row">
        <div id="contextMenu" class="dropdown clearfix"></div>
        <div class="panel panel-default hidden-print">
            <div class="panel-heading">
                <h3 class="panel-title">Pengaturan Tampilan kalender</h3>
            </div>
            <div class="panel-body">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="calendar_view">Mode Tampilan</label>
                        <select class="form-control" id="calendar_view">
                            <option value="month">Bulan</option>
                            <option value="agendaWeek">Minggu</option>
                            <option value="agendaDay">Hari</option>
                            <option value="listWeek">Tampilan Daftar</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="calendar_start_time">Jam Awal Rapat :</label>
                        <select class="form-control" id="calendar_start_time">
                            <option value="01:00:00">01:00 AM</option>
                            <option value="02:00:00">02:00 AM</option>
                            <option value="03:00:00">03:00 AM</option>
                            <option value="04:00:00">04:00 AM</option>
                            <option value="05:00:00">05:00 AM</option>
                            <option value="06:00:00">06:00 AM</option>
                            <option value="07:00:00">07:00 AM</option>
                            <option value="08:00:00">08:00 AM</option>
                            <option value="09:00:00">09:00 AM</option>
                            <option value="10:00:00">10:00 AM</option>
                            <option value="11:00:00">11:00 AM</option>
                            <option value="12:00:00">12:00 PM</option>
                            <option value="13:00:00">13:00 PM</option>
                            <option value="14:00:00">14:00 PM</option>
                            <option value="15:00:00">15:00 PM</option>
                            <option value="16:00:00">16:00 PM</option>
                            <option value="17:00:00">17:00 PM</option>
                            <option value="18:00:00">18:00 PM</option>
                            <option value="19:00:00">19:00 PM</option>
                            <option value="20:00:00">20:00 PM</option>
                            <option value="21:00:00">21:00 PM</option>
                            <option value="22:00:00">22:00 PM</option>
                            <option value="23:00:00">23:00 PM</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="calendar_end_time">Jam Akhir Rapat :</label>
                        <select class="form-control" id="calendar_end_time">
                            <option value="01:00:00">01:00 AM</option>
                            <option value="02:00:00">02:00 AM</option>
                            <option value="03:00:00">03:00 AM</option>
                            <option value="04:00:00">04:00 AM</option>
                            <option value="05:00:00">05:00 AM</option>
                            <option value="06:00:00">06:00 AM</option>
                            <option value="07:00:00">07:00 AM</option>
                            <option value="08:00:00">08:00 AM</option>
                            <option value="09:00:00">09:00 AM</option>
                            <option value="10:00:00">10:00 AM</option>
                            <option value="11:00:00">11:00 AM</option>
                            <option value="12:00:00">12:00 PM</option>
                            <option value="13:00:00">13:00 PM</option>
                            <option value="14:00:00">14:00 PM</option>
                            <option value="15:00:00">15:00 PM</option>
                            <option value="16:00:00">16:00 PM</option>
                            <option value="17:00:00">17:00 PM</option>
                            <option value="18:00:00">18:00 PM</option>
                            <option value="19:00:00">19:00 PM</option>
                            <option value="20:00:00">20:00 PM</option>
                            <option value="21:00:00">21:00 PM</option>
                            <option value="22:00:00">22:00 PM</option>
                            <option value="23:00:00">23:00 PM</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="ShowWeekends">Tampilkan / Sembunyikan Akhir Pekan (Sabtu - Minggu)</label>
                        <div class="input-group">
                            <input class='showHideWeekend' type="checkbox" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default hidden-print">
            <div class="panel-heading">
                <h3 class="panel-title">Filter Kalender</h3>
            </div>
            <div class="panel-body">
                <div class="col-lg-10">
                    <label for="calendar_view">Berdasarkan Unit Kerja</label>
                    <div class="input-group">
                        <select class="filter" id="type_filter" multiple="multiple">
                            <option value='all'>Semua Bidang</option>
                            <option value='2'>Bidang Keuangan dan Perlengkapan</option>
                            <option value='3'>Bidang Perencanaan dan Kerja Sama</option>
                            <option value='4'>Bidang Kepegawaian</option>
                            <option value='5'>Bidang Data Humas dan Publikasi</option>
                            <option value='6'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi Udara</option>
                            <option value='7'>Bidang Pengembangan Teknologi dan Penunjang Penelitian Transportasi Puslitbang Udara</option>
                            <option value='8'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi LSDP</option>
                            <option value='9'>Bidang Pengembangan Teknologi dan Penunjang Penelitian Puslitbang Transportasi LSDP</option>
                            <option value='10'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi Jalan dan Perkertaapian</option>
                            <option value='11'>Bidang Pengembangan Teknologi dan Penunjang Penelitian Puslitbang Transportasi Jalan dan Perkeretaapian</option>
                            <option value='12'>Bidang Pelaporan dan Evaluasi Puslitbang Transportasi Antarmoda</option>
                            <option value='13'>Bidang Pengembangan Teknologi dan Penunjang Transportasi Antar Moda</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <label for="calendar_view">Berdasarkan Tipe Media</label>
                    <div class="input-group">
                        <label class="checkbox-inline"><input class='filter' type="checkbox" value="Online" checked>Online</label>
                        <label class="checkbox-inline"><input class='filter' type="checkbox" value="Offline" checked>Offline</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div id="loading"></div>
            <div class="print-visible" id="calendar"></div>
        </div>

        <!-- DETAIL EVENT MODAL -->

        <div class="modal fade" tabindex="-1" role="dialog" id="editEventModal" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Detail Rapat Tanggal : <span class="eventDate"></span> Pukul <span class="eventHourStart"></span> s/d <span class="eventHourEnd"></span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="col-xs-4" for="title">Nama Bagian</label>
                                    <input class="inputModal" disabled id="editTitle" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="col-xs-4" for="edit-event-desc">Agenda Rapat</label>
                                    <textarea rows="4" cols="50" class="inputModal" disabled id="edit-event-desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->