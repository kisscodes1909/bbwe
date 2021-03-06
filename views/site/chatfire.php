<!DOCTYPE html>
<html>
   <head> 
     <!-- CSS -->
     <link href="<?=$this->theme->baseUrl?>/css/chat.css" rel="stylesheet"/>
   </head>
   <body>
     <!-- HTML -->
     <div id="chatws">
       <div class="tabs">Wakwaw</div>
       <div class="chat">
         <div id='message_box'>
           <!-- Display messages -->
         </div>
         <form id="msg_form">
           <input id="name" type="text" placeholder="Name.." />
           <input id="message" type="text" placeholder="Message.." />
           <button type="submit" id="save" style="display:none">Send</button>
         </form>
       </div>
     </div>   
     <!-- jQuery -->
     <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
     <!-- Include Firebase Library -->
     <script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
     <!-- chats JavaScript -->
     <script src="<?=$this->theme->baseUrl?>/js/wakwaw.js"></script>  
   </body>
</html>
