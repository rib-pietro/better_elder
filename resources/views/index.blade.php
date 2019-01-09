@extends('main')

@section('content')

<style type="text/css">
  #grid-1-1{
    height: 240px;
  }
  #grid-1-1 .graph{
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    width: 100%;
    height: 100%;
  }
  .graph .column{
    width: 15px;
    height: 50px;
    background: #000;
  }
  .board{
    height: 100%;
    width: 100%;
  }
  .board .vertical-subtitle, .board .horizontal-subtitle{
    display: flex;
    justify-content: space-between;
  }
  .vertical-subtitle{
    flex-direction: column-reverse;
    height: 100%;
  }
  .horizontal-subtitle{
    flex-direction: row;
    width: 100%;
  }
  .board .subtitle{
    font-size: 1.3em;
    color: #e3e3e3;
  }
</style>

<main class="main">
  <div class="keen-dashboard p-3">
    <div class="container-fluid">
      <h1 class="h1">
        Better Elder
      </h1>
      <div class="row">
        <div class="col-sm-8">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <div id="grid-1-1">
                <div class="graph">
                  <div class="board pb-2">
                    <div class="vertical-subtitle">
                      <span class="subtitle">
                        500
                      </span>
                      <span class="subtitle">
                        1000
                      </span>
                      <span class="subtitle">
                        1500
                      </span>
                      <span class="subtitle">
                        2000
                      </span>  
                    </div>
                    <div class="horizontal-subtitle">
                      <span class="subtitle">
                        Mar / 2018
                      </span>
                      <span class="subtitle">
                        Abr / 2018
                      </span>
                      <span class="subtitle">
                        Mai / 2018
                      </span>
                      <span class="subtitle">
                        Jun / 2018
                      </span>  
                    </div>
                  </div>
                  <div class="column" id="first">                    
                  </div>
                </div>
              </div>
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x240/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="chart-wrapper">
            <div class="chart-title">
              Cell Title
            </div>
            <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
            </div>
            <div class="chart-notes">
              Notes about this chart
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid">
      <p class="small text-muted">Built with &#9829; by <a href="https://keen.io">Keen IO</a></p>
    </div>

    <!-- Project Analytics -->
    <script type="text/javascript" src="../../assets/js/keen-analytics.js"></script>
  </div>
</main>

@endsection