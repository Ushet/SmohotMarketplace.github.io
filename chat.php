<?php include('navigation.php'); ?>


<div class="container" style="width: 100%;">
    <div class="stories-container">
        <div class="content">
            <div class="previous-btn active">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </div>
            <div class="stories">
                <div class="single-create-story">
                    <img src="images/image (19).jpg" class="single-create-story-bg" alt="Create Story Background">
                    <div class="create-story-author">
                        <i class="fa fa-plus-circle fa-2x text-info"></i>
                        <p>Create a story</p>
                    </div>
                </div>
             
                <div class="story-authors">
                   
                </div>
            </div>
            <div class="next-btn active">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="stories-full-view">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </div>
        <div class="content">
            <div class="previous-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </div>
            <div class="story">
                <img src="images/image (20).jpg" alt="" />
                <div class="author" id="story-author">Author</div>
            </div>
            <div class="next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
            </div>
        </div>
        <div class="chat-message clearfix">
            <div class="input-group mb-0">
                <div class="input-field input-outlines">
                    <input id="search" type="text" class="validate" placeholder="Reply...">
                    <i class="material-icons prefix">insert_emoticon</i>
                    <i class="material-icons suffix camera">camera_alt</i>
                    <i class="material-icons suffix attachment" style="margin-right: -10px;">attach_file</i>
               
                </div>
                <a class="btn-floating btn-large waves-effect waves-light blue">
                    <i class="material-icons">mic</i>
                </a>
            </div>
        </div>
        
        
    </div>
</div>

      
        <!-- messages chat -->
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
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    // Initialize Sidenav
    var sidenavElems = document.querySelectorAll('.sidenav');
    var sidenavInstances = M.Sidenav.init(sidenavElems);
    console.log('Sidenav initialized:', sidenavInstances);

    // Initialize Dropdowns
    var dropdownElems = document.querySelectorAll('.dropdown-trigger');
    var dropdownInstances = M.Dropdown.init(dropdownElems, { hover: false, coverTrigger: false });
    console.log('Dropdowns initialized:', dropdownInstances);

    // Initialize Collapsibles
    var collapsibleElems = document.querySelectorAll('.collapsible');
    var collapsibleInstances = M.Collapsible.init(collapsibleElems);
    console.log('Collapsibles initialized:', collapsibleInstances);

    // Initialize modals
    var modalElems = document.querySelectorAll('.modal');
    var modalInstances = M.Modal.init(modalElems);

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

    document.getElementById('email-notifications-link').addEventListener('click', function(e) {
        e.preventDefault();
        var instance = M.Modal.getInstance(document.getElementById('email-notifications-modal'));
        instance.open();
    });

    document.getElementById('sms-notifications-link').addEventListener('click', function(e) {
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

    // Initialize Chat List and Chat Area for mobile
    var chatListItems = document.querySelectorAll('.chat-list .clearfix');
    var chatArea = document.querySelector('.chat');
    var peopleList = document.querySelector('.people-list');

    chatListItems.forEach(function(item) {
        item.addEventListener('click', function() {
            chatArea.classList.add('open');
            peopleList.classList.add('closed');
        });
    });

    // Add a back button in the chat header to go back to the people list
    var backButton = document.createElement('button');
    backButton.textContent = 'Back';
    backButton.classList.add('back-button');
    backButton.addEventListener('click', function() {
        chatArea.classList.remove('open');
        peopleList.classList.remove('closed');
    });

    var chatHeaderRow = document.querySelector('.chat-header .row');
    if (chatHeaderRow) {
        chatHeaderRow.appendChild(backButton);
    }
    console.log('Chat list and back button initialized');
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

        const allStories = [
    { id: 0, author: "usher 265", imageUrl: "images/image (1).jpg" },
    { id: 1, author: "Jedai", imageUrl: "images/image (2).jpg" },
    { id: 2, author: "Mary", imageUrl: "images/image (3).jpg" },
    { id: 3, author: "Smohot", imageUrl: "images/image (14).jpg" },
    { id: 4, author: "Malawi eletronics", imageUrl: "images/image (5).jpg" },
    { id: 5, author: "Hazel", imageUrl: "images/image (6).jpg" },
    { id: 6, author: "Faith", imageUrl: "images/image (17).jpg" },
    { id: 7, author: "Flora Maeve", imageUrl: "images/image (8).jpg" },
    { id: 8, author: "Nathaniel Hayes", imageUrl: "images/image (9).jpg" },
    { id: 9, author: "Everett", imageUrl: "images/image (10).jpg" },
    { id: 10, author: "Owen", imageUrl: "images/image (11).jpg" },
    { id: 11, author: "Caleb Knox", imageUrl: "images/image (12).jpg" },
    { id: 12, author: "Felix", imageUrl: "images/image (13).jpg" },
];

let currentActive = 0;

function createStoryElements() {
    const storyAuthorsContainer = document.querySelector('.story-authors');
    allStories.forEach(story => {
        const storyElement = document.createElement('div');
        storyElement.classList.add('story-author');
        storyElement.innerHTML = `<p>${story.author}</p>`;
        storyElement.addEventListener('click', () => {
            window.location.href = 'product_owner.html';
        });
        storyAuthorsContainer.appendChild(storyElement);
    });
}

function setupFullViewStory() {
    const storyAuthorElement = document.getElementById('story-author');
    storyAuthorElement.addEventListener('click', () => {
        window.location.href = 'product_owner.html';
    });
}

document.addEventListener('DOMContentLoaded', (event) => {
    createStoryElements();
    setupFullViewStory();
});

const stories = document.querySelector(".stories");
const storiesFullView = document.querySelector(".stories-full-view");
const closeBtn = document.querySelector(".close-btn");
const storyImageFull = document.querySelector(".stories-full-view .story img");
const storyAuthorFull = document.querySelector(".stories-full-view .story .author");
const nextBtn = document.querySelector(".stories-container .next-btn");
const previousBtn = document.querySelector(".stories-container .previous-btn");
const nextBtnFull = document.querySelector(".stories-full-view .next-btn");
const previousBtnFull = document.querySelector(".stories-full-view .previous-btn");
const storiesContent = document.querySelector(".stories-container .content");

const createStories = () => {
    allStories.forEach((s, i) => {
        const story = document.createElement("div");
        story.classList.add("story");
        const img = document.createElement("img");
        img.src = s.imageUrl;
        const author = document.createElement("div");
        author.classList.add("author");
        author.innerHTML = s.author;

        story.appendChild(img);
        story.appendChild(author);

        stories.appendChild(story);

        story.addEventListener("click", () => {
            showFullView(i);
        });
    });
};

const showFullView = (index) => {
    currentActive = index;
    updateFullView();
    storiesFullView.classList.add("active");
};

const closeFullView = () => {
    storiesFullView.classList.remove("active");
};

closeBtn.addEventListener("click", closeFullView);

const updateFullView = () => {
    storyImageFull.src = allStories[currentActive].imageUrl;
    storyAuthorFull.innerHTML = allStories[currentActive].author;
};

// Full View Navigation
nextBtnFull.addEventListener("click", () => {
    if (currentActive >= allStories.length - 1) {
        return;
    }
    currentActive++;
    updateFullView();
});

previousBtnFull.addEventListener("click", () => {
    if (currentActive <= 0) {
        return;
    }
    currentActive--;
    updateFullView();
});

// Stories Container Navigation
nextBtn.addEventListener("click", () => {
    storiesContent.scrollLeft += 300;
});

previousBtn.addEventListener("click", () => {
    storiesContent.scrollLeft -= 300;
});

storiesContent.addEventListener("scroll", () => {
    if (storiesContent.scrollLeft <= 24) {
        previousBtn.classList.remove("active");
    } else {
        previousBtn.classList.add("active");
    }

    let maxScrollValue = storiesContent.scrollWidth - storiesContent.clientWidth - 24;

    if (storiesContent.scrollLeft >= maxScrollValue) {
        nextBtn.classList.remove("active");
    } else {
        nextBtn.classList.add("active");
    }
});

// Initial setup
createStories();
scrollToStory(currentActive);
updateNavigationButtons();

    



 </script>

   
   <!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
