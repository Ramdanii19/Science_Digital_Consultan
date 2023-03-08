  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>Ujian</title>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
              <li class="breadcrumb-item active">Ujian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->

        <div style="width: 100%; margin: 0 auto;">
            <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                      <th class="tengah">No</th>
                      <th class="tengah">Judul Ujian</th>
                      <th class="tengah">Aksi</th>
                  </tr>
            </thead>   
            <tbody>  
                @php $i=1 @endphp
                @foreach($grupsoal as $row)
                <tr>
                    <td class="tengah">{{ $i++ }}</td>
                    <td class="tengah">{{ $row->nama_grup_soal }}</td>
                    <td class="tengah">
                      <a href="/soal/kerjakan/{{ $row->id_grup_soal }}" class="btn btn-warning"  style="margin-right: 15px; margin-left: 15px;">Kerjakan</a>
                    </td>
                </tr>
            <tbody>  
              @endforeach
            </table>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-hover">
                <form action="/siswa/tambah_data" method="post">
                    {{ csrf_field() }}
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="number" name="nisn" required="required"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" required="required"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required="required"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" required="required"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir" required="required"></input></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_lahir" required="required"></input></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="text" name="jk" required="required"></input></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><input type="text" name="agama" required="required"></input></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" required="required"></input></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" required="required"></input></td>
                    </tr>
                </table>
            </div>
         <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Simpan" class="btn btn-primary"></input>
            </form>
            </div> 
        </div>  
        </div>
    </div>
    </div>
    

    <!-- Footer -->
    @includeIf('layouts.footer')
