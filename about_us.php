<?php include('navigation.php'); ?>


<!-- About Us Content -->
<div class="container" >
    <div class="about-container">
        <h4>About Us</h4>
        <div class="profile-pic">
            <img src="images/image (2).jpg" alt="Profile Picture">
        </div>
        <p>
            Welcome to SmoHot Online, your number one source for all things marketplace and chat. 
            We're dedicated to providing you the very best of our platform, with an emphasis on dependability, customer service, and innovation.
        </p>
        <p>
            Founded in [year] by [founder name], SmoHot Online has grown rapidly to serve millions of users around Malawi. 
            We are passionate about creating a platform that connects people and provides them with the tools they need to succeed.
        </p>
        <p class="version" style="margin-top: 50px; font-size: 1.4em; color: rgb(197, 195, 195);">
            <strong>Current Version: 1.12.6 </strong>
        </p>
        <div class="links">
            <a href="terms.html"><i class="material-icons">description</i> Terms of Service</a>
            <a href="privacy.html"><i class="material-icons">lock</i> Privacy Policy</a>
            <a href="contact_us.php"><i class="material-icons">contact_mail</i> Contact Us</a>
        </div>
        <a href="https://play.google.com/store/apps/details?id=YOUR_APP_ID" class="btn-download download-btn " style="margin-bottom: 50px;">
            <i class="material-icons">download</i> Download from Playstore
        </a>
    </div>
</div>

<?php include('settings.php'); ?>

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown
    var elemsDropdown = document.querySelectorAll('.dropdown-trigger');
    var instancesDropdown = M.Dropdown.init(elemsDropdown, {
        coverTrigger: false,
        constrainWidth: false
    });

    // Initialize modal
    var elemsModal = document.querySelectorAll('.modal');
    var instancesModal = M.Modal.init(elemsModal);

        // Toggle active class on button click
        document.querySelectorAll('.transparent-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
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


        });

        // Navigation for mobile and tablet
        document.addEventListener('DOMContentLoaded', function() {
            var sidenavElems = document.querySelectorAll('.sidenav');
            var sidenavInstances = M.Sidenav.init(sidenavElems);

            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            var dropdownInstances = M.Dropdown.init(dropdownElems, { hover: false, coverTrigger: false });

            var collapsibleElems = document.querySelectorAll('.collapsible');
            var collapsibleInstances = M.Collapsible.init(collapsibleElems);
        });



</script>

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
