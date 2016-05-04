<!DOCTYPE html>
<html>
<head>
     <title>Portal Dashboards R & F - CENAM</title>
     <link rel="stylesheet" href="{{asset('css/metro.css')}}">
     <link rel="stylesheet" href="{{asset('css/metro-responsive.css')}}">
     <link rel="stylesheet" href="{{asset('css/metro-icons.css')}}">
     <link rel="stylesheet" href="{{asset('css/metro-schemes.css')}}">
     <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/metro.js')}}"></script>
</head>
<body>
<div class="app-bar">
     <a class="app-bar-element" href="...">R & F Dashboards</a>
     <span class="app-bar-divider"></span>
     <div class="app-bar-element">
          <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
          <div class="app-bar-drop-container"
               data-role="dropdown"
               data-toggle-element="#toggle-tiles-dropdown"
               data-no-close="false" style="width: 500px;">
               <div class="tile-container">
                    <a href="/507" class="tile-small bg-red fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>CA</h2></span>
                         </div>
                    </a>
                    <a href="/502" class="tile-small bg-cyan fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>GT</h2></span>
                         </div>
                    </a>
                    <a href="/503" class="tile-small bg-magenta fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>SV</h2></span>
                         </div>
                    </a>
                    <a href="/504" class="tile-small bg-green fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>HN</h2></span>
                         </div>
                    </a>
                    <a href="/505" class="tile-small bg-orange fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>NI</h2></span>
                         </div>
                    </a>
                    <a href="/506" class="tile-small bg-blue fg-white" data-role="tile">
                         <div class="tile-content">
                              <span class="tile-label"><h2>CR</h2></span>
                         </div>
                    </a>
               </div>
          </div>
     </div>
</div>
<div class="flex-grid ">
     @yield('content')
</div>
</body>
</html>