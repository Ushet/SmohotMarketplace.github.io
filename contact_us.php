<?php include('navigation.php'); ?>

    <!-- Contact Us Content -->
    <div class="container" style=" margin-top: 50px; ">
        <h4 class="center-align" style="font-weight: 500;">Contact Us</h4>
        <div class="row">
            <div class="col s12 m6">
                <form>
                    <div class="row">
                        <div class="input-field col s12 m6 input-outlin">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s12 m6 input-outlin">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 input-outlin">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 m6 input-outlin">
                            <input id="phone" type="text" class="validate">
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 input-outlin">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Get In Touch
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s12 m6 get-in-touch">
                <h5>Get in Touch</h5>
                <p>
                    If you have any questions or concerns, feel free to reach out to us. You can also find us on social media.
                </p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="material-icons">email</i> <span>support@smohot.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="material-icons">phone</i> <span>+265 1234 5678</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('settings.php'); ?>

   
<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

        // If user want their inputs to be auto filled

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
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


