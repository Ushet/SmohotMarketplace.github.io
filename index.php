
<?php include('navigation.php'); ?>

 <!-- Marketplace content -->
 <div class="container" style="width: 100%;">

<!-- Modal for Category -->
<div id="categoryModal" class="modal modal-space-top">
    <div class="modal-content">
        <h4>Choose a Category</h4>
        <div class="input-field col s6">
            <i class="material-icons prefix">search</i>
            <input id="search" type="text" class="validate">
            <label for="search">Search categories...</label>
        </div>
        <form action="#">
            <div id="category-list"></div>
        </form>
        
    </div>
    <div class="modal-close-btn">
        <a href="#!" class="modal-close waves-effect waves-blue btn-flat"><i class="material-icons">close</i></a>
    </div>
</div>



<!-- Modal for Malawi Cities -->
<div id="malawiModal" class="modal modal-space-top">
    <div class="modal-content">
        <h4>Malawi Cities</h4>
        <div class="input-field col s6">
            <i class="material-icons prefix">search</i>
            <input id="search" type="text" class="validate">
            <label for="search">Search cities...</label>
        </div>
        <form action="#">
            <div id="district-list"></div>
        </form>
    </div>
    <div class="modal-close-btn">
        <a href="#!" class="modal-close waves-effect waves-blue btn-flat"><i class="material-icons">close</i></a>
    </div>
</div>


<!-- Modal for Distance (KM) -->
<div id="distanceModal" class="modal modal-space-top">
    <div class="modal-content">
        <h4>Distance (KM)</h4>
        <div class="input-field col s6">
            <i class="material-icons prefix">search</i>
            <input id="search" type="text" class="validate">
            <label for="search">Search distance...</label>
        </div>
        <form action="#">
            <div id="distance-list" class="radio-list"></div>
        </form>
    </div>
    <div class="modal-close-btn">
        <a href="#!" class="modal-close waves-effect waves-blue btn-flat"><i class="material-icons">close</i></a>
    </div>
</div>


<!-- Three buttons above the cards -->
<div class="row align-right">
    <div>
        <button class="btn-large waves-effect waves-light grey darken-4 modal-trigger" data-target="malawiModal">Malawi Cities</button>
        <button class="btn-large waves-effect waves-light grey darken-4 modal-trigger" data-target="distanceModal">Distance (KM)</button>
        <!-- Button to trigger the category modal -->
        <button class="btn-large waves-effect waves-light grey darken-4 modal-trigger" data-target="categoryModal">Choose Category</button>
    </div>
</div>


    

    
<!-- Cards -->
<div class="row card-wrapper">
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

    <div class="col s12 m6 l2">
        <div class="card">
            <div class="card-image">
                <img src="images/image (11).jpg">
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
                <img src="images/image (13).jpg">
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
                <img src="images/image (17).jpg">
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
                <img src="images/image (22).jpg">
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

        if (contentHeight - viewportHeight <= scrollPosition + 1) {
            footer.style.display = "block";
        } else {
            footer.style.display = "none";
        }
    };

    // Ensure footer is shown on page load if already at the bottom
    window.onload = function() {
        var footer = document.getElementById("main-footer");
        var contentHeight = document.body.scrollHeight;
        var viewportHeight = window.innerHeight;
        var scrollPosition = window.scrollY;

        if (contentHeight - viewportHeight <= scrollPosition + 1) {
            footer.style.display = "block";
        } else {
            footer.style.display = "none";
        }
    };


// pop in for the buttn click event
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    var districts = [
        "Balaka", "Blantyre", "Chikwawa", "Chiradzulu", "Chitipa", "Dedza", "Dowa",
        "Karonga", "Kasungu", "Likoma", "Lilongwe", "Machinga", "Mangochi", "Mchinji",
        "Mulanje", "Mwanza", "Mzimba", "Nkhata Bay", "Nkhotakota", "Nsanje", "Ntcheu",
        "Ntchisi", "Phalombe", "Rumphi", "Salima", "Thyolo", "Zomba"
    ];

    var districtList = document.getElementById('district-list');
    
    // Add "All" option
    var allLabel = document.createElement('label');
    var allInput = document.createElement('input');
    allInput.type = 'checkbox'; // Change type to checkbox
    allInput.name = 'city';
    allInput.value = 'all'; // Value for "All"
    var allSpan = document.createElement('span');
    allSpan.textContent = 'All'; // Text for "All"
    allLabel.appendChild(allInput);
    allLabel.appendChild(allSpan);
    districtList.appendChild(allLabel);
    console.log('All option added'); // Add this line for debugging

    // Add other districts
    for (var i = 0; i < districts.length; i++) {
        var district = districts[i];
        var label = document.createElement('label');
        var input = document.createElement('input');
        input.type = 'checkbox'; // Change type to checkbox
        input.name = 'city';
        input.value = district.toLowerCase(); // Convert district name to lowercase
        var span = document.createElement('span');
        span.textContent = district;
        label.appendChild(input);
        label.appendChild(span);
        districtList.appendChild(label);
        console.log('District added: ' + district); // Add this line for debugging
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var categories = [
        "Electronics", "Clothing", "Furniture", "Books", "Home Appliances", 
        "Sports Equipment", "Toys", "Jewelry", "Art", "Tools", "Health & Beauty", 
        "Music Instruments", "Vehicles", "Pets", "Office Supplies", "Gaming", 
        "Collectibles", "Crafts", "Outdoor", "Other", "Kitchen Appliances", 
        "Mobile Phones", "Computers", "Garden Supplies", "Baby Products", 
        "Photography", "Food & Beverages", "Travel Accessories", "Fitness Equipment", 
        "Industrial Equipment", "Educational Supplies", "Party Supplies", 
        "Antiques", "Stationery", "Gifts", "Watches", "Musical Instruments", 
        "Cosmetics", "Pet Supplies", "Camping Gear", "Medical Equipment", 
        "Building Materials", "Accessories", "DVDs & Movies", "Board Games", 
        "Collectibles", "Costumes", "Home Decor", "Holiday Decor", 
        "Personal Care", "School Supplies", "Video Games", "Electrical Supplies", 
        "Restaurant Equipment", "Craft Supplies", "Auto Parts", "Art Supplies", 
        "Tools & Equipment", "Hobbies", "Instruments", "Workout Gear", 
        "Fitness Accessories", "Fashion Accessories", "Electrical Appliances", 
        "Smart Home Devices", "Headphones & Speakers", "Lighting", 
        "Car Accessories", "Healthcare Products", "Educational Toys", 
        "Outdoor Gear", "Bicycles", "Storage Solutions", "Security Equipment", 
        "Computer Accessories", "DIY Supplies", "Fashion", "Wearable Tech", 
        "Home Entertainment", "Gadgets", "Laptops & Tablets", "Collectibles & Art", 
        "Appliances", "Mobile Accessories", "Cookware", "DIY Tools", 
        "Outdoor Furniture", "DIY Materials", "Computer Components", "DIY Equipment", 
        "Computer Software", "Smartphones", "Kitchenware", "Books & Magazines", 
        "Home Security", "DIY Projects", "Fitness Gear", "Gaming Accessories", 
        "Home Office Furniture", "Fishing Gear", "Gaming Consoles", 
        "Home Improvement Tools", "Lawn & Garden", "DIY Supplies", 
        "Crafting Supplies", "Outdoor Equipment", "Home Office Supplies"
    ];

    var categoryList = document.getElementById('category-list');
    
    // Add "All" option
    var allLabel = document.createElement('label');
    var allInput = document.createElement('input');
    allInput.type = 'checkbox'; // Change type to checkbox
    allInput.name = 'category';
    allInput.value = 'all'; // Value for "All"
    var allSpan = document.createElement('span');
    allSpan.textContent = 'All'; // Text for "All"
    allLabel.appendChild(allInput);
    allLabel.appendChild(allSpan);
    categoryList.appendChild(allLabel);
    console.log('All option added'); // Add this line for debugging

    // Add other categories
    for (var i = 0; i < categories.length; i++) {
        var category = categories[i];
        var label = document.createElement('label');
        var input = document.createElement('input');
        input.type = 'checkbox'; // Change type to checkbox
        input.name = 'category';
        input.value = category.toLowerCase(); // Convert category name to lowercase
        var span = document.createElement('span');
        span.textContent = category;
        label.appendChild(input);
        label.appendChild(span);
        categoryList.appendChild(label);
        console.log('Category added: ' + category); // Add this line for debugging
    }
});


// radio buttn click event for the distanc of malawi 
document.addEventListener('DOMContentLoaded', function() {
    var distanceList = document.getElementById('distance-list');
    var startDistance = 5; // Starting distance in KM
    var endDistance = 840; // Ending distance in KM

    for (var distance = startDistance; distance <= endDistance; distance += 5) {
        var label = document.createElement('label');
        var input = document.createElement('input');
        input.type = 'radio';
        input.name = 'distance';
        input.classList.add('with-gap'); // Add Materialize class for radio buttons
        input.value = distance; // Set the distance value
        var span = document.createElement('span');
        span.textContent = distance + ' KM'; // Text for distance
        label.appendChild(input);
        label.appendChild(span);
        distanceList.appendChild(label);
        console.log('Distance added: ' + distance + ' KM'); // Add this line for debugging
    }
});



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
