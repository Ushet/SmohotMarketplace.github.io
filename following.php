<?php include('navigation.php'); ?>

    <div class="container" style="width: 100%;">

 
        <h5 class="following" style="font-weight: 600; margin-top: 40px; margin-bottom: 20px;" >4 following </h5>
        <div id="following" class="col s12">
            <!-- Followers-->
            <div class="card-panel unique-card grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 20px;">
                        <img src="images/image (23).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Malawi Electronics Ltd</span><br>
                            This is a new company that offers electronics.
                        </span>
                    </div>
                    <div class="col s2 following" style="margin-top: 20px; margin-right: 0;">
                        <a class="waves-effect waves-light blue btn">following</a>
                    </div>
                </div>
            </div>
        
            <div class="card-panel unique-card grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 20px;">
                        <img src="images/image (11).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Smohot Online</span><br>
                            Helping to build a bright future
                        </span>
                    </div>
                    <div class="col s2 following" style="margin-top: 20px; margin-right: 0;">
                        <a class="waves-effect waves-light blue btn">following</a>
                    </div>
                </div>
            </div>
        
            <div class="card-panel unique-card grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 20px;">
                        <img src="images/image (19).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Your 265 coder</span><br>
                            bringing your ideas to life.
                        </span>
                    </div>
                    <div class="col s2 following" style="margin-top: 20px; margin-right: 0;">
                        <a class="waves-effect waves-light blue btn">following</a>
                    </div>
                </div>
            </div>
        
            <div class="card-panel unique-card grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 60px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 20px;">
                        <img src="images/image (19).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Your 265 coder</span><br>
                            bringing your ideas to life.
                        </span>
                    </div>
                    <div class="col s2 following" style="margin-top: 20px; margin-right: 0;">
                        <a class="waves-effect waves-light blue btn">following</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <?php include('settings.php'); ?>   


<!-- Materialize JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
        // Initialize dropdown for the three dots
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-triggers');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWidth: false
            });
        });

        // Initialize dropdown for the navigation menu
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWidth: false
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Toggle active class on button click
            document.querySelectorAll('.transparent-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });
        });

        // If user scrolls to the bottom of the page, show the footer
                window.onscroll = function() {
            var footer = document.getElementById("main-footer");
            var contentHeight = document.body.scrollHeight;
            var viewportHeight = window.innerHeight;
            var scrollPosition = window.scrollY;

            if (contentHeight - viewportHeight <= scrollPosition) {
                footer.style.display = "block";
            } else {
                footer.style.display = "none";
            }
        };

          // All the javascript for the settings

        // Handle delete account process
        document.getElementById('confirm-delete').addEventListener('click', function() {
            var instance = M.Modal.getInstance(document.getElementById('confirm-password-modal'));
            instance.open();
        });

        document.getElementById('final-delete').addEventListener('click', function(e) {
            e.preventDefault();
            var password = document.getElementById('delete_password').value;
            if (password) {
                // Perform the account deletion process here
                console.log('Deleting account with password:', password);
                // Close the modal after deletion
                var instance = M.Modal.getInstance(document.getElementById('confirm-password-modal'));
                instance.close();
            } else {
                M.toast({html: 'Please enter your password to confirm'});
            }
        });

        // Add event listeners for archived and blocked chats links
        document.getElementById('archived-chats-link').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('archived-chats-modal'));
            instance.open();
        });

        document.getElementById('blocked-chats-link').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('blocked-chats-modal'));
            instance.open();
        });

        document.querySelector('#email-notifications-link').addEventListener('click', function(e) {
        e.preventDefault();
        var instance = M.Modal.getInstance(document.getElementById('email-notifications-modal'));
        instance.open();
        });

        document.querySelector('#sms-notifications-link').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('sms-notifications-modal'));
            instance.open();
        });

    
        // Open Account Privacy Modal
        document.querySelector('a[href="#account-privacy-modal"]').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('account-privacy-modal'));
            instance.open();
        });

        // Open Data Sharing Modal
        document.querySelector('a[href="#data-sharing-modal"]').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('data-sharing-modal'));
            instance.open();
        });

        // Open Two-Factor Authentication Modal
        document.querySelector('a[href="#two-factor-auth-modal"]').addEventListener('click', function(e) {
            e.preventDefault();
            var instance = M.Modal.getInstance(document.getElementById('two-factor-auth-modal'));
            instance.open();
        });




            document.addEventListener('DOMContentLoaded', function() {
            var sidenavElems = document.querySelectorAll('.sidenav');
            var sidenavInstances = M.Sidenav.init(sidenavElems);

            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            var dropdownInstances = M.Dropdown.init(dropdownElems, { hover: false, coverTrigger: false });

            var collapsibleElems = document.querySelectorAll('.collapsible');
            var collapsibleInstances = M.Collapsible.init(collapsibleElems);

            // Initialize modals
            var modalElems = document.querySelectorAll('.modal');
            var modalInstances = M.Modal.init(modalElems);
        });




 </script>

   
   <!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
