<?php include('navigation.php'); ?>


    <div class="container" style="width: 100%;">

        <div class="cover-photo" style="margin-top: 10px;" id="coverPhoto">
            <div class="cover-image">
                <img src="images/image (14).jpg" alt="Cover Photo" id="coverImage">
                <span class="camera-icon" id="coverCamera"><i class="material-icons">camera_alt</i></span>
            </div>
            <div class="circle-with-border" id="circleWithBorder">
                <img src="images/image (11).jpg" alt="" class="circle-img" id="circleImg">
                <span class="camera-icon" id="profileCamera"><i class="material-icons">camera_alt</i></span>
            </div>
        </div>
        
        <!-- Hidden file inputs for changing photos -->
        <input type="file" id="coverPhotoInput" style="display: none;" accept="image/*">
        <input type="file" id="profilePhotoInput" style="display: none;" accept="image/*">
        
        <div class="company-details">
            <h3>Smohot Online</h3>
            <p class="followers">9M followers</p>
            <p>Helping to build a future right where people will have more ways to have many options on their lives</p>
            <p><i class="material-icons blue-text" style="display: inline;">location_on</i> Malawi, Lilongwe</p>
            <p><i class="material-icons blue-text" style="display: inline;">calendar_today</i> Created March 2024</p>
        </div>



        <h4 class="profile" style="font-weight: 500; margin-top: 60px; margin-bottom: 30px;" >Profile Settings</h4>
        <form>
            <!-- Username input -->
            <div class="input-field input-outlined">
                <input id="username" type="text">
                <label for="username">Username</label>
            </div>
            
            <!-- First name input -->
            <div class="input-field input-outlined">
                <input id="first_name" type="text">
                <label for="first_name">First Name</label>
            </div>
            
            <!-- Last name input -->
            <div class="input-field input-outlined">
                <input id="last_name" type="text">
                <label for="last_name">Last Name</label>
            </div>
            
             <!-- Gender dropdown -->
             <div class="input-field input-outlined">
                <select id="gender">
                    <option value="" disabled selected>Choose your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                
            </div>
            
            <!-- Date of Birth input -->
            <div class="input-field input-outlined">
                <input type="text" class="datepicker" id="date_of_birth">
                <label for="date_of_birth">Date of Birth</label>
            </div>
            
            <!-- Phone number input -->
            <div class="input-field input-outlined">
                <input id="phone_number" type="tel">
                <label for="phone_number">Phone Number</label>
            </div>
            
            <!-- Email input -->
            <div class="input-field input-outlined">
                <input id="email" type="email">
                <label for="email">Email</label>
            </div>
            
            <!-- Address input -->
            <div class="input-field input-outlined">
                <textarea id="address" class="materialize-textarea" ></textarea>
                <label for="address">Address</label>
            </div>
            
            <!-- Bio textarea -->
            <div class="input-field input-outlined">
                <textarea id="bio" class="materialize-textarea"></textarea>
                <label for="bio">Bio</label>
            </div>
            
            <!-- Location input -->
            <div class="input-field input-outlined">
                <input id="location" type="text">
                <label for="location">Location</label>
            </div>
            
        

            <!-- Submit button -->
        <div class="input-field input-outlined">
            <button type="submit" class="btn blue waves-effect waves-light save-button">Save Changes</button>
        </div>
        </form>
    </div>

    
<?php include('settings.php'); ?>



    <!-- Materialize JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
    <script>
        // Initialize dropdown for the three dots
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-triggers');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWidth: false
            });
        });

        // Initialize dropdown for the navigation
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWidth: false
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

        // Function to display selected photos
        function displaySelectedPhotos() {
            var files = document.getElementById("photoInput").files;
            var selectedPhotosDiv = document.getElementById("selectedPhotos");
            selectedPhotosDiv.innerHTML = ""; // Clear previous content

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var imgContainer = document.createElement("div");
                    imgContainer.className = "img-container";

                    var img = document.createElement("img");
                    img.src = e.target.result;
                    img.className = "uploaded-img";

                    // Calculate aspect ratio
                    var aspectRatio = img.width / img.height;

                    // Set width and height based on aspect ratio
                    if (aspectRatio >= 1) {
                        // Landscape or square image
                        img.style.width = "250px";
                        img.style.height = "auto";
                    } else {
                        // Portrait image
                        img.style.width = "auto";
                        img.style.height = "200px";
                    }

                    var closeButton = document.createElement("button");
                    closeButton.textContent = "Remove";
                    closeButton.className = "btn blue";
                    closeButton.onclick = function() {
                        imgContainer.remove();
                    };

                    imgContainer.appendChild(img);
                    imgContainer.appendChild(closeButton);
                    selectedPhotosDiv.appendChild(imgContainer);
                }

                reader.readAsDataURL(file);
            }
        }


        //for zooming in the cover photo and profile
        document.addEventListener('DOMContentLoaded', function() {
            var circleImg = document.getElementById('circleImg');

            circleImg.addEventListener('click', function() {
                window.location.href = circleImg.src;
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            var coverImage = document.querySelector('.cover-image img');

            coverImage.addEventListener('click', function() {
                window.location.href = coverImage.src;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var coverCamera = document.getElementById('coverCamera');
            var profileCamera = document.getElementById('profileCamera');
            var coverPhotoInput = document.getElementById('coverPhotoInput');
            var profilePhotoInput = document.getElementById('profilePhotoInput');

            coverCamera.addEventListener('click', function() {
                coverPhotoInput.click();
            });

            profileCamera.addEventListener('click', function() {
                profilePhotoInput.click();
            });

            coverPhotoInput.addEventListener('change', function() {
                var file = coverPhotoInput.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('coverImage').src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });

            profilePhotoInput.addEventListener('change', function() {
                var file = profilePhotoInput.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('circleImg').src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        });



          // profile settings on gendar
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);

            //  profile settings on Picker
            var datepickerElems = document.querySelectorAll('.datepicker');
            var datepickerInstances = M.Datepicker.init(datepickerElems, {
                format: 'yyyy-mm-dd',
                autoClose: true,
                yearRange: 100
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
