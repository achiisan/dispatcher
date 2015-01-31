<link rel="import" href="../components/polymer/polymer.html">
<link rel="import" href="../components/core-icon-button/core-icon-button.html">
<link rel="import" href="../components/core-icons/core-icons.html">
<link rel="import" href="../components/core-icon/core-icon.html">
<link rel="import" href="../components/paper-button/paper-button.html">
<link rel="import" href="../components/paper-dialog/paper-dialog.html">

<polymer-element name="post-card" attributes="d_id d_name d_status type" >
  <template id="card-template">
    <style>
    :host {
      display: block;
      position: relative;
      background-color: white;
      padding: 10px;
      width: 100%;
      font-size: 1.2rem;
      font-weight: 300;
    }
    .card-header {
      margin-bottom: 10px;
        width:100%;
        background: #03a9f4;
        color: white;
        padding: 5px;
    }
    .card-body {
      width: 100%;
    }
    
    polyfill-next-selector { content: '.card-header h2'; }
.card-header ::content h2 {
  margin: 0;
  font-size: .8rem;
  font-weight: 300;
}
polyfill-next-selector { content: '.card-header img'; }
.card-header ::content img {
  width: 70px;
  border-radius: 50%;
  margin: 10px;
}

.card-body ::content ch-text {
  font-size:15pt;

}
.card-body ::content main-panel {
 font-size: 25pt;
 font-weight: bold;
  width: 100%;
  margin-top:5px;
  margin-bottom: 5px;
  border-left:solid red; 
}

.card-body ::content time, .card-body ::content time2 {
  
}

paper-button {
  background: #26A30A;
  color:white; 
}
 
 

    </style>

    <!-- CARD CONTENTS GO HERE -->
          <div class="card-header" layout vertical left>
              
              <content select="ch-text"></content>
             
             
           </div>
           <div class="card-body" layout vertical left>
                
                
                <!-- <core-icon icon="schedule"></core-icon> -->
               
                  <content select="time"></content>
                  </br>
               
              

                <content select="main-panel"></content>

                  <content select="ch-status"></content>
                  &#09; <content select="ch-arrivaltime"></content>
                </br>
              <content select="time2"></content>
                
                
                </br>
            <template if="{{d_status != 'DISPATCHED' && type == 'ADMIN'}}">
                 <paper-button raised  disabled on-tap="{{toggle}}">Confirm Delivery Arrival</paper-button>
               
            </template>

             <template if="{{d_status == 'DISPATCHED' && type == 'ADMIN'}}">
                 <paper-button raised  on-tap="{{toggle}}">Confirm Delivery Arrival</paper-button>
                <paper-dialog id="pd" heading="You are about to confirm this delivery.">
                 
            </template>

              <template if="{{d_status == 'ON REVIEW' && type == 'USER'}}">
                 <paper-button raised  on-tap="{{toggle2}}">Deliver to Client</paper-button>
               
            </template>

             <template if="{{d_status != 'ON REVIEW' && type == 'USER'}}">
                 <paper-button raised disabled on-tap="{{toggle2}}">Deliver to Client</paper-button>
               
            </template>

             <paper-dialog id="pdarrive" heading="You are about to confirm this delivery.">
                  <p>Are you want to confirm the delivery of {{d_name}}?</p>
                  <paper-button on-tap="{{receive}}">Confirm Delivery</paper-button>
                  <paper-button on-tap="{{toggle}}">Cancel</paper-button>
                </paper-dialog>

             <paper-dialog id="pddeliver" heading="You are about to confirm this delivery.">
                  <p>You are about to deliver {{d_name}}. Proceed?</p>
                  <paper-button on-tap="{{receive2}}">Proceed Delivery</paper-button>
                  <paper-button on-tap="{{toggle2}}">Cancel</paper-button>
                </paper-dialog>
         </div>
  </template>
  <script>
  Polymer({receive: function(){
    //alert("Wee");
  
   
    // AJAX CODE :)
     var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //lert(xmlhttp.responseText);
    location.reload();
    }
  }
  var url = '../api/receive.php?d_id=';
  var token = this.d_id;

  url = url.concat(token);

xmlhttp.open("GET", url,true);
xmlhttp.send();

  
  }, receive2: function(){
    //alert("Wee");
  
   
    // AJAX CODE :)
     var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //alert(xmlhttp.responseText);
    location.reload();
    }
  }
  var url = '../api/deliver.php?d_id=';
  var token = this.d_id;

  url = url.concat(token);

xmlhttp.open("GET", url,true);
xmlhttp.send();

  
  },toggle:function(){
     this.$.pdarrive.toggle();

  }, toggle2:function(){
      this.$.pddeliver.toggle();
  }});
  </script>
</polymer-element>po