

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>assets/img/profile3.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Husna Haryadi</h1>
          <h3 class="lead">Mahasiswa</h3>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Tentang Nana</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/1.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Lahir di Kota Pariaman pada tanggal 4 Agustus 2004 dalam keadaan sehat dan cantik.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/2.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Dasar di SD Istiqamah Sicincin, kec.2x11 Enam Lingkung, kab.Padang pariaman, selama 6 tahun dan melanjutkan ke Sekolah Menengah Pertama di MTsN 01 Padang Pariaman, sumatera barat, selama 3 tahun.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/3.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Atas di MAN 1 Padang Pariaman dengan Jurusan MIPA selama 3 tahun dan Lulus di Tahun 2022.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Berkuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022 lewat jalur Span ptkin.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Memilih Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/6.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Hobi saya Bermain Memasak, mendengarkan Musik dan bernyanyi. Warna Kesukaan Saya Pink</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Kontak</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Hubungi Saya</h5>
                <p class="card-text">Jika Anda ingin mengenal saya lebih jauh, berdiskusi, atau memiliki pertanyaan seputar informasi yang saya bagikan, jangan ragu untuk menghubungi saya melalui:
                  <br>📧 Email: [husnaharyadi00@gmail.com]
                  <br>📱 WhatsApp: +62 851-6196-4484
                  <br>📍 Lokasi: Padang, Sumatera Barat, Indonesia
                  <br>atau hubungi saya lewat Web ini saja.
                  <br>Saya akan dengan senang hati merespon setiap pesan yang masuk. Terima kasih atas kunjungannya!.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Lokasi</h3></li>
              <li class="list-group-item">Rumah Nana :</li>
              <li class="list-group-item">Kampung paneh sigaung kec.2x11 Enam Lingkung Kab. Padang Pariaman.</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">No HP</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Pesan</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Kirim</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
