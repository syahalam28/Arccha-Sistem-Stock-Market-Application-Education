<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>
<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <!-- <svg width="100vw" height="100vh">
        <text></text>
    </svg> -->

    <div class="row">
        <div class="container mt-3 w-100">

            <div class="card shadow-sm w-100">

                <div class="col-sm-12 mt-3  ">

                    <div class="row" id="view-image">

                        <img id="selected-image" src="<?= base_url('/img/' . $berita->sampul); ?>" class="img-thumbnail" style="height: 200px; display:block; margin:auto;" alt="Data Dengan Nama <?= $berita->sampul; ?>" title="KHS Mahasiswa">




                    </div>



                    <form class="form" action="<?= base_url('berita/updateInfo/' . $berita->info_id); ?>" method="POST" enctype="multipart/form-data">

                        <input type="hidden" class="form-control" placeholder="Nama Mahasiswa" aria-label="Username" aria-describedby="basic-addon1" name="zaazLama" value="<?= (old($berita->sampul)) ? old($berita->sampul) : $berita->sampul; ?>">

                        <div class="box mx-4" style="text-align: center;">
                            <input type="file" id="file-1" multiple="{count} file selected" class="masukanfile inputfile-1" data-multiple-caption="{count} files selected" name="zaaz" />

                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                </svg> <span>Choose a file&hellip;</span></label>
                        </div>
                </div>





                <div class="col-sm-12 ">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Judul</span>
                        <input type="text" class="form-control" placeholder="Judul" aria-label="Username" aria-describedby="basic-addon1" name="judul" value="<?= (old($berita->judul)) ? old($berita->judul) : $berita->judul; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tautan Video</span>
                        <input type="text" class="form-control" placeholder="Tautan" aria-label="Username" aria-describedby="basic-addon1" name="link" value="<?= (old($berita->tautan)) ? old($berita->tautan) : $berita->tautan; ?>">
                    </div>
                    <textarea name="isi_berita" id="ckeditor" class="ckeditor"><?php echo $berita->deskripsi ?></textarea>
                    <select name="kategori" class="form-select form-select-sm mt-3 mb-3" aria-label=".form-select-sm example" required>
                        <!-- <option selected>Jenis Informasi Harian</option> -->
                        <!-- <option value="1">Berita</option> -->
                        <option value="2">Informasi</option>

                    </select>
                    <br>









                    <button name="tambah_data" class="btn btn-warning mb-2 mt-1">Edit Data</button>
                    <small><a href="<?= base_url('utama/info'); ?>">&laquo; Back TO Info List</a>
                    </small>
                </div>











            </div>


            </form>








        </div>
    </div>

</div>

<?= $this->include('layout/footer'); ?>