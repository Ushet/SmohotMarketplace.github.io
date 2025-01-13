<?php include('navigation.php'); ?>


    <div class="container" style="width: 100%;   margin-top:20px; ">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="cards chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-field input-outlines">
                            <input id="search" type="text" class="validate" placeholder="Search...">
                            <i class="material-icons prefix blue-text" style="margin-left: 10px;">search</i> <!-- Emoji icon -->
                        </div>
                           
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <li class="clearfix" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Jedai Kamutu</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                    <div class="chat-badge">1</div> <!-- Circular badge -->
                                </div>
                            </li>
                            <li class="clearfix active" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Usher Kamwendo</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Anisha Kamwendo</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>                                    
                            <li class="clearfix" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Christian Kamwendo</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                    <div class="chat-badge">5</div> <!-- Circular badge -->  
                                </div>
                            </li>
                            <li class="clearfix" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Mary Kamwendo</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    <div class="chat-badge">10</div> <!-- Circular badge -->  
                                </div>
                            </li>
                            <li class="clearfix" onclick="openChat()">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Anisha Kamwendo</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 15px;">
                                    <button class="back-button" style="display: none;">Back</button>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">Usher Kamwendo</h6>
                                        <small style="font-size: 12px;">Last seen: 2 hours ago</small>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right float-right">
                                    <a href="javascript:void(0);" class="btn-floating waves-effect btn-outline-secondary blue " style="margin-right: 10px;"><i class="material-icons">videocam</i></a>
                                    <a href="javascript:void(0);" class="btn-floating waves-effect btn-outline-primary blue" style="margin-right: 20px;"><i class="material-icons">call</i></a>
                                    <div class="more" style=" margin-left: 99%; margin-top: -30px;">
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
                                
                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0">
                                <li class="clearfix">
                                    <div class="message-data text-right">
                                        <span class="message-data-times" style="font-size: 12px;">10:10 AM, Today</span>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                    </div>
                                    
                                    <div class="message other-message float-right"> Hi Chief, leloli zitheka? </div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        <span class="message-data-time" style="font-size: 12px;">10:12 AM, Today</span>
                                    </div>
                                    <div class="message my-message" >mensa ineyo am supposed to be asking you?</div>                                    
                                </li>                               
                                <li class="clearfix">
                                    <div class="message-data">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        <span class="message-data-time" style="font-size: 12px;">10:15 AM, Today</span>
                                    </div>
                                    <div class="message my-message">komano oky fine ndekuti ingotiyankhula kuti titani.</div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data text-right">
                                        <span class="message-data-times" style="font-size: 12px;">10:10 AM, Today</span>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                    </div>
                                    <div class="message other-message float-right"> oky bhobho ndekuti let me just call you pompano </div>
                                </li>
                                <li class="clearfix">  
                                    <div class="message other-message float-right"> something came up, give me 20 mins will call you then </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-messages clearfix">
                            <div class="input-group mb-0">
                                <div class="input-field input-outlines">
                                    <input id="message" type="text" class="validate" placeholder="Enter your message...">
                                    <i class="material-icons prefix">insert_emoticon</i> <!-- Emoji icon -->
                                    <i class="material-icons suffix camera">camera_alt</i> <!-- Camera icon -->
                                    <i class="material-icons suffix attachment">attach_file</i> <!-- Document attachment icon -->
                                </div>
                                <a class="btn-floating btn-large waves-effect waves-light blue">
                                    <i class="material-icons">mic</i>
                                </a>
                            </div>
                        </div>
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

        // for chats when it is in mobile mode

        document.addEventListener('DOMContentLoaded', function () {
    var chatListItems = document.querySelectorAll('.chat-list .clearfix');
    var chatArea = document.querySelector('.chat');
    var peopleList = document.querySelector('.people-list');

    chatListItems.forEach(function (item) {
        item.addEventListener('click', function () {
            chatArea.classList.add('open');
            peopleList.classList.add('closed');
        });
    });

    // Add a back button in the chat header to go back to the people list
    var backButton = document.createElement('button');
    backButton.textContent = 'Back';
    backButton.classList.add('back-button');
    backButton.addEventListener('click', function () {
        chatArea.classList.remove('open');
        peopleList.classList.remove('closed');
    });
    document.querySelector('.chat-header .row').appendChild(backButton);
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
