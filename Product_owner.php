<?php include('navigation.php'); ?>

    <div class="container" style="width: 100%;">


            <div class="cover-photo" style="margin-top: 10px;">
                <div class="cover-image">
                    <img src="images/image (23).jpg" alt="Cover Photo">
                </div>
                <div class="circle-with-border">
                    <img src="images/image (23).jpg" alt="" class="circle-img">
                </div>
            </div>
        
            <div class="company-details">
                <h3>Malawi Electronic Limited</h3>
               
                <p class="followers">12M followers</p>
                <p>This is a new company that offers electronics such as phones, computers, etc.</p>
                <p><i class="material-icons blue-text" style="display: inline;">location_on</i> Malawi, Zomba</p>
                <p><i class="material-icons blue-text" style="display: inline;">calendar_today</i> Created June 2024</p>

                <div class="button-container">
                    <a href="#" class="btn-floating waves-effect waves blue blue"><i class="material-icons">phone</i></a>
                    <a href="#" class="btn-floating waves-effect waves blue blue"><i class="material-icons">message</i></a>
                    <a href="#" class="btn waves-effect waves blue blue right">Follow</a>
                </div>
                <div class="more">
                    <a id="more-btn" class="dropdown-triggers more-btn" href="#" data-target="more-menu">
                        <span class="more-dot"></span>
                        <span class="more-dot"></span>
                        <span class="more-dot"></span>
                    </a>
                    <ul id="more-menu" class="dropdown-content">
                        <li><a href="#" class="more-menu-btn">Share</a></li>
                        <li><a href="#" class="more-menu-btn">Copy</a></li>
                        <li><a href="#" class="more-menu-btn">Block</a></li>
                        <li><a href="#" class="more-menu-btn">Report</a></li>
                    </ul>
                </div>
                
                
                
            </div>
            
            
            
            <!-- Added margin-bottom to create space -->
             <h5 style="margin-top: 70px;">Product listings</h5>
        
             <div class="row card-wrapper   custom-hover">
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (19).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="view_item.html" class="transparent-btn">View Item</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (14).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="transparent-btn">View Item</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (15).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="transparent-btn">View Item</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (3).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="transparent-btn">View Item</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (16).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="transparent-btn">View Item</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l2">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/image (23).jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">bookmark</i></a>
                        </div>
                        <div class="card-content">
                            <p>MWK 260,000.00</p>
                            <p>Lenovo laptop</p>
                            <p>Malawi, Zomba</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="transparent-btn">View Item</a>
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

         // Select all "View Item" buttons
        document.addEventListener('DOMContentLoaded', function() {
            // Select all "View Item" buttons
            var viewItemButtons = document.querySelectorAll('.transparent-btn');

            // Add click event listener to each "View Item" button
            viewItemButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    // Prevent the default action of the link
                    event.preventDefault();

                    // Get the URL of the destination page
                    var destination = 'view_item.php'; // Assuming the destination is fixed

                    // Navigate to the destination page
                    window.location.href = destination;
                });
            });
        });


        //for zooming in the cover photo and profile
        document.addEventListener('DOMContentLoaded', function() {
            var coverPhoto = document.querySelector('.cover-photo');
            var coverImage = coverPhoto.querySelector('.cover-image img');
            var circleWithBorder = coverPhoto.querySelector('.circle-with-border img');

            coverImage.addEventListener('click', function() {
                window.location.href = coverImage.src;
            });

            circleWithBorder.addEventListener('click', function() {
                window.location.href = circleWithBorder.src;
            });
        });

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
