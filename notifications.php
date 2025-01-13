<?php include('navigation.php'); ?>

<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                    <div class="card-image">
                        <img src="images/image (8).jpg" alt="Responsive image">
                    </div>
                    <div class="card-content">
                        <p>Notifications</p>
                        <p>You’re all caught up! Check back later for new notifications</p>
                    </div>
                    <div class="card-action">
                        <a href="#settings-modal" class="transparent-btn modal-trigger">settings</a>
                    </div>
            </div>
             <div class="card">
                    <div class="card-image">
                        <img src="images/image (10).jpg" alt="Responsive image">
                    </div>
                    <div class="card-content">
                        <p>usher 265 just posted!</p>
                        <p>Check the new lisiting </p>
                    </div>
                    <div class="card-action">
                        <a href="view_item.php" class="transparent-btn">view item</a>
                    </div>
            </div>
        </div>
        <div class="col s12 m9">
            <ul class="collection with-header">
                <li class="collection-header" ><h5 style="font-weight: 600;">Recent</h5></li>
                <li class="collection-item avatar">
                    <img src="images/image (23).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Malawi Electronics Limited: sent a message on marketplace</span>
                    <p>is this item available?</p>
                   <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>

                </li>
                <li class="collection-item avatar">
                    <img src="images/image (1).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Jedai: posted a new listing!</span>
                    <p>Lenovo laptop, core i9, 32 GB ram, 2 TB Storage and 12 hours battery life</p>
                    <a href="view_item.php" class="btn btn-small blue waves-effect ">View Item</a>
                    <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>
                </li>
            </ul>
            <ul class="collection with-header">
                <li class="collection-header"><h5 style="font-weight: 600;">Earlier</h5></li>
                <li class="collection-item avatar">
                    <img src="images/image (19).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Your 265 coder: followed you back</span>
                    <p>you can now check each others stories and be able to chat in the chat section!</p>
                    <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="images/image (2).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Smohot: sent a message</span>
                    <p>kodi chief are you still working on the website?</p>
                    <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="images/image (1).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Jedai: is following you</span>
                    <p>follow him back!</p>
                    <a href="#!" class="btn btn-small blue waves-effect ">follow</a>
                    <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="images/image (21).jpg" alt="" class="circle">
                    <span class="title" style="font-weight: 600;" >Usher 265: sent a message</span>
                    <p>Bro i was calling you chama 5 koma simumumayankha?</p>
                    <a href="#!" class="secondary-content"><i class="material-icons" style="color: #2196F3;">delete</i></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php include('settings.php'); ?>


    <!-- Materialize JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
    <script>
        // Initialize dropdown
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
