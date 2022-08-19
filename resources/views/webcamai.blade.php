@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION WEBCAMAI -------->
<!---------------------------------->
<div class="stovykla section bg-grad">
    <div class="content">    
        <div class="container-lg d-flex flex-wrap">
            <div class="container">
                <h1 class="mb-lg-0">WEBCAMAI</h1>
                <h2 class="mb-lg-3">Pasaulio spotai
            </div>

            <div class="col-lg-4">

                <div class="m-1">
                                            
                    <h2 class="side-title p-0">FAMARA</h2>
                    <div class="container column p-0" style="margin: 10px 0px;">
                        <iframe width="100%" height="240" frameborder="0" scrolling="no" src="http://stream.maesbyte.com/live.php?i=cruze.stream&amp;img=http://enhd.es/img/22/22.jpg"></iframe>
                    </div>

                </div>
   
            </div>
            <div class="col-lg-4">

                <div class="m-1">
                                            
                    <h2 class="side-title p-0">KLAIPEDA</h2>
                    <div class="container column p-0" style="margin: 10px 0px;">
                        <iframe width="100%" height="240" src="https://www.delfi.lt/video/transliacijos/24-7/stream.php?hls=https://s1.dcdn.lt/livecam/kl011.stream/playlist.m3u8&amp;autoplay=true" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" autoplay="true"></iframe>
                    </div>

                </div> 
     
            </div>
            <div class="col-lg-4">

                <div class="m-1">
                                            
                    <h2 class="side-title p-0">CORRALEJO</h2>
                    <div class="container column p-0" style="margin: 10px 0px;">
                        <iframe width="100%" height="240" src="https://streaming-lineup.service.aranova.cloud/api/live/player/lineup_canal1" frameborder="0" allowfullscreen="no"></iframe>
                    </div>

                </div> 
                <div class="m-1">
                                            
                    <h2 class="side-title p-0">ARRIETA</h2>
                    <div class="container column p-0" style="margin: 10px 0px;">
                        <iframe width="100%" height="300" frameborder="0" width="560" height="315" scrolling="no" src="https://g0.ipcamlive.com/player/player.php?alias=5bb1e2f9de73e"></iframe>
                    </div>

                </div>    
  
            </div>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Banglentė - pasaulio spotų webcamai!</title>
    <link rel="canonical" href="https://www.banglente.com/webcams/">
    <meta name="description" content="pasaulio spotų webcamai">
    <meta name="keywords" content="surf keliones, surf travel, banglenčių stovykla, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection