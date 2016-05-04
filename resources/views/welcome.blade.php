<!DOCTYPE html>
<html>
     <head>
          <title>Laravel</title>
          <link rel="stylesheet" href="{{asset('css/metro.css')}}">
          <link rel="stylesheet" href="{{asset('css/metro-responsive.css')}}">
          <link rel="stylesheet" href="{{asset('css/metro-icons.css')}}">
          <link rel="stylesheet" href="{{asset('css/metro-schemes.css')}}">
          <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
          <script type="text/javascript" src="{{asset('js/metro.js')}}"></script>
     </head>
     <body>
          <div class="app-bar">
               <a class="app-bar-element" href="...">Rentas CENAM</a>
               <span class="app-bar-divider"></span>
               <a class="app-bar-element">
                    <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
                    <div class="app-bar-drop-container"
                         data-role="dropdown"
                         data-toggle-element="#toggle-tiles-dropdown"
                         data-no-close="false" style="width: 500px;">
                         <div class="tile-container bg-white">
                              <div class="tile-small bg-red">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>CA</h2></span>
                                   </div>
                              </div>
                              <div class="tile-small bg-cyan">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>GT</h2></span>
                                   </div>
                              </div>
                              <div class="tile-small bg-magenta">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>SV</h2></span>
                                   </div>
                              </div>
                              <div class="tile-small bg-green">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>HN</h2></span>
                                   </div>
                              </div>
                              <div class="tile-small bg-orange">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>NI</h2></span>
                                   </div>
                              </div>
                              <div class="tile-small bg-blue">
                                   <div class="tile-content">
                                        <span class="tile-label"><h2>CR</h2></span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </a>
          </div>
          <div class="flex-grid ">

          </div>
     </body>
</html>
