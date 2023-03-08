  <!-- Navbar -->
  
  <title>Soal Grup Soal Edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-2" style="text-align: center;"> Soal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="/home">Soal</a></li>
              <li class="breadcrumb-item active">Grup Soal</li> -->
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

        @php $i=1 @endphp
                @foreach($soal as $row)

                <div style="margin: 0 auto; font-size: 30px; width: 98%;">
                  <p style=""><b>{{ $i++ }}. {{ $row->soal }}</b></p>
                  <p><input type="radio" name="aa" id="1" style="margin-right: 20px; -webkit-transform: scale(2.5);" >A.</input><span style="margin-left: 10px;">{{ $row->a }}</span></p>
                  <p><input type="radio" name="aa" id="2" style="margin-right: 20px; -webkit-transform: scale(2.5);" >B.</input><span style="margin-left: 10px;">{{ $row->b }}</span></p>
                  <p><input type="radio" name="aa" id="3" style="margin-right: 20px; -webkit-transform: scale(2.5);" >C.</input><span style="margin-left: 10px;">{{ $row->c }}</span></p>
                  <p><input type="radio" name="aa" id="4" style="margin-right: 20px; -webkit-transform: scale(2.5);" >D.</input><span style="margin-left: 10px;">{{ $row->d }}</span></p>
                </div>

        @endforeach
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <a href="/grup_soal" onclick="return confirm('Apakah Yakin Mau Menyelesaikan Tes Ini?');" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Selesai</a>
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