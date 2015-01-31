<!doctype html>
<html>

<head>

  <title>Material Delivery System</title>

  <meta name="viewport" 
  content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

  <script src="../components/webcomponentsjs/webcomponents.js">
  </script>
  <!-- <link rel="import" href="../components/font-roboto/roboto.html"> -->
  <link rel="import"
  href="../components/core-header-panel/core-header-panel.html">
<link rel="import"
  href="../components/core-toolbar/core-toolbar.html">
<link rel="import"
  href="../components/paper-tabs/paper-tabs.html">
  <link rel="import" href="post-list.html">
  <link rel="import" href="post-card.php">


  <link rel="import" href="../components/core-icons/core-icons.html">
<link rel="import" href="../components/core-icon/core-icon.html">
<link rel="import" href="../components/core-pages/core-pages.html">
<link rel="import" href="../components/paper-dialog/paper-dialog.html">
<link rel="import" href="add-form.html">
 <link rel="import" href="sp.html">
  <style>
  html,body {
    height: 100%;
    margin: 0;
    background-color: #E5E5E5;
    font-family: 'RobotoDraft', sans-serif;
  }
    core-header-panel {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
  }
  core-toolbar {
    background: #03a9f4;
    color: white;
  }
  #tabs {
    width: 100%;
    margin: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-transform: uppercase;
  }

  #container {
    width: 80%;
    margin: 50px auto;

  }
  @media (min-width: 481px) {
    #tabs {
      min-width: 200px;
    }
    .container {
      width: 400px;
    }
  }

  #pt{
    background: #4285f4;
    color:white;
  }

 
  </style>

</head>

<body unresolved>
  <core-header-panel>
    <core-toolbar>
        <core-icon-button id="addbtn" icon="add"></core-icon-button>
         <core-icon-button id="performance" icon="assessment"></core-icon-button>
         <core-icon-button id="admin" icon="accessibility"></core-icon-button>
        <h3>| Material Delivery System</h3>
    </core-toolbar>
        
        <div id="container">
        
          <paper-tabs id="pt">
            <paper-tab value="0">ON REVIEW</paper-tab>
            <paper-tab value="1">DISPATCHED</paper-tab>
            <paper-tab value="2">ARRIVED</paper-tab>
            <paper-tab value="3">SHOW ALL</paper-tab>
          </paper-tabs>
          <core-pages selected="0" >
            <div layout center>
               <h2>Deliveries not yet Dispatched</h2> 
              <post-list show="ON REVIEW"></post-list>
               
            </div>

            <div layout center>
              <h2>Dispatched Deliveries</h2>
               <post-list show="DISPATCHED"></post-list>
            </div>

             <div layout center>
              <h2>Arrived Deliveries</h2>
               <post-list show="ARRIVED"></post-list>
            </div>

             <div>
              <h1>All Deliveries</h1>
               <post-list></post-list>
            </div>

              <div>
                <h2>Performance Analysis</h2>

              </div>            

         </core-pages> 

          
                <paper-dialog id="pd" heading="Add a new Delivery Order">
                
                  <add-form></add-form>
                </paper-dialog>


                <paper-dialog id="pdadmin" heading="Add a new Supplier">
                    <supplier-form></supplier-form>
                </paper-dialog>
        </div>


       
  </core-header-panel>

<script>
  var tabs = document.querySelector('paper-tabs');
 

  tabs.addEventListener('core-select', function() {
     var pages = document.querySelector('core-pages');

    pages.selected = tabs.selected;
     document.getElementById('pt').style.display = 'block';
   
  });

  var addbtn = document.getElementById('addbtn');
  addbtn.onclick=function(){
   document.getElementById('pd').toggle();
  };

  var admin = document.getElementById('admin');

  admin.onclick=function(){
      document.getElementById('pdadmin').toggle();

  };


var performance = document.getElementById('performance');

  performance.onclick=function(){
     var pages = document.querySelector('core-pages');
      // alert("XD");
      // tabs.toggle();
         document.getElementById('pt').style.display = 'none';
      pages.selected = 4;
  }

 
</script>

</body>

</html>
