@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

{{-- GRAFICO IMPRENSA --}}
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Grafico Imprensa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong> 1 Jan, 2019 - 30 Dez, 2019</strong>
                  </p>
                  <canvas id="imprensa" width="800" height="450"></canvas>
                  
                  <script type="text/javascript">
                      
                      let clipping = [];
                      let noticias = [];
                      let mes1 = [];
                      
                      @foreach($imprensa as $valor)
                        clipping.push({!! json_encode($valor->clipping) !!});
                        noticias.push({!! json_encode($valor->noticias) !!});
                        mes1.push({!! json_encode($valor->mes) !!});
                      @endforeach



                      new Chart(document.getElementById("imprensa"), {
                      type: 'bar',
                      data: {
                        labels: mes1,
                        datasets: [
                          {
                            label: "Clipping",
                            backgroundColor: "#3e95cd",
                            data: clipping
                          },
                          {
                            label: "Noticias",
                            backgroundColor: "#8e5ea2",
                            data: noticias
                          },
                        ]
                      },
                  });
                  </script>




                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div> 
      {{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Solicitação Design</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
              </p>






              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Facebook Jorge</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
              </p>






              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Facebook Prefeitura</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
              </p>






              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

@stop