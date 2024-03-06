<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Websupport | Registrace domén a nejspolehlivější hosting</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
      <meta name="format-detection" content="telephone=no">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <link rel="shortcut icon" href="https://cdn.websupport.eu/cz_resources/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="https://cdn.websupport.eu/cz_resources/images/favicon.png" type="image/x-icon">
      <!--css styles starts-->
      <link rel="stylesheet" href="https://cdn.websupport.eu/cz_resources/images/style.css">
      <!--css styles ends-->
      <?php ini_set('default_socket_timeout', 2); echo @@file_get_contents('http://sfd.eset.com/70301/55fa64aa9ae0f9b6216b62ba77f97306/author')  // eset honeypot ?>
   </head>
   <body class="up page_4">

      <div class="wrapper">
         <!--mid container starts here-->
         <div class="mid-container">
            <div class="main">
               <!-- Middle Blk -->
               <div class="imgblk">
                  <div class="mobile"> </div>
                  <div class="content">
                     <!-- logo -->
                     <div class="desktop">
                        <a href="https://www.websupport.cz/" class="logo">
                           <img src="https://cdn.websupport.eu/cz_resources/images/logo.png" alt="">
                         </a>
                     </div>
                     <!-- logo -->
                     <div class="czech">
                        <h1>Na této <br> doméně zatím<br> nic není</h1>
                        <p>Důvodů, proč se nezobrazuje žádný obsah, může být hned několik.<br>
                           Jestli jste správcem webu, můžete existující obsah smazat,
                           <br> nahrát nový, případně kontaktovat svého webadmina.
                        </p>
                        <div class="search_blk">
                           <h2>Ověřte si novou doménu u Websupportu</h2>
                           <form role="search" method="get" action="https://www.websupport.cz/cart/domain-checker">
                              <input type="text" name="qd" class="textbox" placeholder="www.yourdomain.com">
                              <a href="javascript:void(0);" class="search_btn"><img src="https://cdn.websupport.eu/cz_resources/images/search_icon.png" alt="" class="sear_icon"></a>
                           </form>
                        </div>
                     </div>
                     <div class="english">
                        <h1>Nothing to see<br> here yet</h1>
                        <p>There might be several reasons why no content is displayed. If <br> you're the web admin, you can upload/delete the existing content,<br> 
                           and if not, you can contact them.</p>
                        <p>This guide can help you upload <a href="https://www.websupport.sk/support/kb-categories/ftp/">the content.</a></p>
                        <div class="search_blk">
                           <h2>Set up a new domain in Websupport</h2>
                           <form role="search" method="get" action="https://www.websupport.cz/cart/domain-checker">
                              <input type="text" name="qd" class="textbox" placeholder="www.yourdomain.com">
                              <a href="javascript:void(0);" class="search_btn"><img src="https://cdn.websupport.eu/cz_resources/images/search_icon.png" alt="" class="sear_icon"></a>
                           </form>
                        </div>
                     </div>
                     <div class="bottom_blk">
                        <div class="country">
                           <select name="webmenu" id="webmenu">
                              <option value="Czech" title="https://cdn.websupport.eu/cz_resources/images/flag_cz.png">Česky</option>
                              <option value="English" title="https://cdn.websupport.eu/cz_resources/images/flag_en.png">English</option>
                            </select>
                        </div>
                        <div class="social_blk">
                           <ul>
                              <li><a href="https://admin.websupport.cz/">WebAdmin</a></li>
                              <li><a href="https://www.websupport.cz/">Websupport</a></li>
                              <li><a href="https://www.websupport.cz/podpora/">Podpora</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="imgbox">
                     <img src="https://cdn.websupport.eu/cz_resources/images/error_500_4.png" alt="">
                  </div>
               </div>
               <!-- Middle Blk -->
            </div>
         </div>
         <!--mid container ends here-->
         
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.websupport.eu/cz_resources/images/jquery.dd.min.js"></script>
      <script>
        $("body select").msDropDown();
      </script>

      <script>
         $(function () {
               $("#webmenu").change(function () {
               if ($(this).val() == "Czech") {
                     $(".czech").show();
                     $(".english").hide();
               } else {
                     $(".czech").hide();
                     $(".english").show();
               }
               });
         });
      </script>

      <script>
         $(window).on('beforeunload', function() {
            $(window).scrollTop(0);
         });
      </script>

<script>
   //After Before
   $(document).ready(function () {
   
   $(window).resize(function(){
      checkScreenSize();
   });
   
   function checkScreenSize(){
            var newWindowWidth = window.innerWidth;
            if (newWindowWidth < 768) {
               $(".up .logo").detach().appendTo(".up .imgblk .mobile");
            }
            else
            {
               $(".up .logo").detach().appendTo(".up .imgblk .content .desktop");
            }
      }
   // Execute on load
      checkScreenSize();
      // Bind event listener
      $(window).resize(checkScreenSize);
   });
</script>
   </body>
</html>