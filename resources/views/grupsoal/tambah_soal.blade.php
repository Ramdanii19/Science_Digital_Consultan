  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>Soal Grup Soal Edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Soal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Soal</a></li>
              <li class="breadcrumb-item active">Grup Soal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <!-- Button trigger modal -->
        <a href="/grup_soal" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
  <a href="/excel" class="btn btn-success" style="margin-left: 10px;"> Import Excel</a>
  <button type="button" class="btn btn-warning" style="margin-left: 10px;" data-toggle="modal" data-target="#exampleModalCenter">Tambah Satu Soal</button>
        <br><br>

        <div style="width: 100%; margin: 0 auto;">
        <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th class="tengah">No</th>
                      <th class="tengah">Soal</th>
                      <th class="tengah">Gambar</th>
                      <th class="tengah">A</th>
                      <th class="tengah">B</th>
                      <th class="tengah">C</th>
                      <th class="tengah">D</th>
                      <th class="tengah">Jawaban</th>
                      <th class="tengah">Aksi</th>
                  </tr>
                  </thead>   
          <tbody> 
                  @php $i=1 @endphp
                  @foreach($soal as $row)
                  <tr>
                      <td class="tengah">{{ $i++ }}</td>
                      <td class="tengah">{{ $row->soal }}</td>
                      <td class="tengah">{{ $row->gambar }}</td>
                      <td class="tengah">{{ $row->a }}</td>
                      <td class="tengah">{{ $row->b }}</td>
                      <td class="tengah">{{ $row->c }}</td>
                      <td class="tengah">{{ $row->d }}</td>
                      <td class="tengah">{{ $row->jawaban }}</td>
                      <td class="tengah">
                          <a href="/soal/edit/{{ $row->id_soal }}"><i class="fa-solid fa-pencil" style="margin-right: 15px;"></i></a>
                          <b>|</b>
                          <a href="/soal/delete/{{ $row->id_soal }}" onclick="return confirm('Are you sure you want to delete?');"><i class="fa-solid fa-trash" style="color: red; margin-left: 15px;"></i></a>
                      </td>
                  </tr>
                  </tbody> 
              @endforeach
          </table>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
              <form action="/grup_soal/tambah_data_soal" method="post">
                  {{ csrf_field() }}
                  <tr>
                      <td><input type="hidden" name="id_grup_soal" required="required" class="form-control" value="{{ $row->id_grup_soal }}" readonly></td>
                  </tr>
                  <!-- <tr>
                      <td>Soal</td>
                      <td>:</td>
                      <td><input type="text" name="id_grup_soal" required="required" class="form-control"></td>
                  </tr> -->
                  <tr>
                      <td>Soal</td>
                      <td>:</td>
                      <td><input type="text" name="soal" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Gambar</td>
                      <td>:</td>
                      <td><input type="text" name="gambar" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>A</td>
                      <td>:</td>
                      <td><input type="text" name="a" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>B</td>
                      <td>:</td>
                      <td><input type="text" name="b" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>C</td>
                      <td>:</td>
                      <td><input type="text" name="c" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>D</td>
                      <td>:</td>
                      <td><input type="text" name="d" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Jawaban</td>
                      <td>:</td>
                      <td><input type="text" name="jawaban" required="required" class="form-control"></td>
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

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>