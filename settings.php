<!-- Settings Modal -->
<div id="settings-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Settings
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div class="section">
            <h5>Account</h5>
            <ul class="collection">
                <li class="collection-item"><i class="material-icons left">lock</i><a href="#change-password-modal" class="modal-trigger">Change Password</a></li>
                <li class="collection-item"><i class="material-icons left">delete</i><a href="#delete-account-modal" class="modal-trigger" id="delete-account-link">Delete Account</a></li>
            </ul>
        </div>
        <div class="section">
            <h5>Chats</h5>
            <ul class="collection">
                <li class="collection-item"><i class="material-icons left">archive</i><a href="#" id="archived-chats-link">Archived Chats</a></li>
                <li class="collection-item"><i class="material-icons left">block</i><a href="#" id="blocked-chats-link">Blocked Chats</a></li>
            </ul>
        </div>
        <div class="section">
            <h5>Notifications</h5>
            <ul class="collection">
                <li class="collection-item"><i class="material-icons left">email</i><a href="#" id="email-notifications-link">Email Notifications</a></li>
                <li class="collection-item"><i class="material-icons left">sms</i><a href="#" id="sms-notifications-link">SMS Notifications</a></li>
            </ul>
        </div>
        <!-- Add these links to the Settings Modal -->
        <div class="section">
            <h5>Security</h5>
            <ul class="collection">
                <li class="collection-item"><i class="material-icons left">security</i><a href="#account-privacy-modal" class="modal-trigger">Account Privacy</a></li>
                <li class="collection-item"><i class="material-icons left">share</i><a href="#data-sharing-modal" class="modal-trigger">Data Sharing</a></li>
                <li class="collection-item"><i class="material-icons left">verified_user</i><a href="#two-factor-auth-modal" class="modal-trigger">Two-Factor Authentication</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- Change Password Modal -->
<div id="change-password-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Change Password
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12 input-outlin">
                        <input id="current_password" type="password" class="validate">
                        <label for="current_password">Current Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 input-outlin">
                        <input id="new_password" type="password" class="validate">
                        <label for="new_password">New Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 input-outlin">
                        <input id="confirm_new_password" type="password" class="validate">
                        <label for="confirm_new_password">Confirm New Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect blue" type="submit" name="action">Change Password
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Account Modal -->
<div id="delete-account-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Confirm Delete Account
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
        <div class="row"> 
            <div class="col s12">
            <button id="confirm-delete" class="btn waves-effect red" type="button">Delete Account</button>
            <button class="btn waves-effect blue modal-close" type="button">Cancel</button>
        </div>
    </div>
</div>
</div>

<!-- Confirm Password Modal -->
<div id="confirm-password-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
<div class="modal-content">
    <h4>Confirm Password
        <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
    </h4>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12 input-outlin">
                    <input id="delete_password" type="password" class="validate">
                    <label for="delete_password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button id="final-delete" class="btn waves-effect red" type="submit">Confirm and Delete Account
                        <i class="material-icons right">delete</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Archived Chats Modal -->
<div id="archived-chats-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Archived Chats
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div>
              <!-- Buying messages-->
              <div class="card-panel grey lighten-5 z-depth-1" id="messageCard"  style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 15px;">
                        <img src="images/image (19).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 15px;">
                        <span class="black-text">
                            <span style="color: #666; font-size: 12px">Malawi Electronics Ltd <br> <span style="color: black; font-size: 16px; font-weight: bold;">Air Jordan 1</span></span><br>
                            <span style="color: #666;">Is this still available?</span>
                        </span>
                    </div>
                    
                    
                    <div class="col s2" style="margin-top: 15px; margin-right: 20px; position: relative;">
                        <span class="new badge blue" data-badge-caption="new" style="position: relative; z-index: 1; margin-top: 50px;">1</span>
                        <span style="position: absolute; top: 15px; right: 16px; font-size: 13px; z-index: 2;">Today</span>
                    </div>
                    
                </div>
            </div>
            
            <div class="card-panel grey lighten-5 z-depth-1" id="messageCard"  style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 15px;">
                        <img src="images/image (13).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 15px;">
                        <span class="black-text">
                            <span style="color: #666; font-size: 12px">Usher Kamwendo <br> <span style="color: black; font-size: 16px; font-weight: bold;">Nike football boots</span></span><br>
                            <span style="color: #666;">Tikumane patipo?</span>
                        </span>
                    </div>
                    
                    
                    <div class="col s2" style="margin-top: 15px; margin-right: 20px; position: relative;">
                        <span class="new badge blue" data-badge-caption="new" style="position: relative; z-index: 1; margin-top: 50px;">3</span>
                        <span style="position: absolute; top: 15px; right: 16px; font-size: 13px; z-index: 2;">Mon</span>
                    </div>
                    
                </div>
            </div>

            <div class="card-panel grey lighten-5 z-depth-1" id="messageCard"  style="margin-top: 10px; margin-bottom: 40px;">
                <div class="row valign-wrapper" style="height: 40px;">
                    <div class="col s1" style="width: 80px; height: 70px; margin-top: 15px;">
                        <img src="images/image (14).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s9" style="margin-top: 15px;">
                        <span class="black-text">
                            <span style="color: #666; font-size: 12px">Mary Kamwendo<br> <span style="color: black; font-size: 16px; font-weight: bold;">Headphones</span></span><br>
                            <span style="color: #666;">simungachotsele price?</span>
                        </span>
                    </div>
                    
                    
                    <div class="col s2" style="margin-top: 15px; margin-right: 20px; position: relative;">
                        <span class="new badge blue" data-badge-caption="new" style="position: relative; z-index: 1; margin-top: 50px;">1</span>
                        <span style="position: absolute; top: 15px; right: 16px; font-size: 13px; z-index: 2;">April 22</span>
                    </div>
                    
                </div>
            </div>
        </div>
              
        </div>
    </div>
</div>

<!-- Blocked Chats Modal -->
<div id="blocked-chats-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Blocked Chats
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div>
            <!-- Followers-->
            <div class="card-panel grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;"> <!-- Adjust margin-bottom to create space between elements -->
                <div class="row valign-wrapper" style="height: 40px;"> <!-- Increase the height as needed -->
                    <div class="col s1" style="width: 90px; height: 70px; margin-top: 20px;"> <!-- Adjust width and height as needed -->
                        <img src="images/image (23).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s10" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold; ">Malawi Electronics Ltd</span><br>
                            This is a new company that offers electronics such as phones, computers, etc.
                        </span>
                    </div>
                </div>
            </div>

            <div class="card-panel grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;"> <!-- Adjust margin-bottom to create space between elements -->
                <div class="row valign-wrapper" style="height: 40px;"> <!-- Increase the height as needed -->
                    <div class="col s1" style="width: 90px; height: 70px; margin-top: 20px;"> <!-- Adjust width and height as needed -->
                        <img src="images/image (11).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s10" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Smohot Online</span><br>
                            Helping to build a future right where people will have more ways to have many options on their lives
                        </span>
                    </div>
                </div>
            </div>

            <div class="card-panel grey lighten-5 z-depth-1" style="margin-top: 10px; margin-bottom: 10px;"> <!-- Adjust margin-bottom to create space between elements -->
                <div class="row valign-wrapper" style="height: 40px;"> <!-- Increase the height as needed -->
                    <div class="col s1" style="width: 90px; height: 70px; margin-top: 20px;"> <!-- Adjust width and height as needed -->
                        <img src="images/image (19).jpg" alt="" class="circle" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col s10" style="margin-top: 20px;">
                        <span class="black-text" id="myCard">
                            <span style="font-weight: bold;">Your 265 coder</span><br>
                            bringing your ideas to life.
                        </span>
                    </div>
                </div>
            </div> 
        </div>
        </div>
    </div>
</div>

<!-- Email Notifications Modal -->
<div id="email-notifications-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Email Notifications
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div class="section">
            <form>
                <div class="input-field input-outlin">
                    <input id="notification_email" type="email" class="validate" value="name@example.com">
                    <label for="notification_email">Default notification email</label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_account_changes" checked>
                        <span>Changes made to your account</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_account_groups" checked>
                        <span>Changes made to your listing</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_product_updates" checked>
                        <span>Product updates for products you've purchased or saved</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_product_new" checked>
                        <span>Information on new products and services</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_promotional">
                        <span>Marketing and promotional offers</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="email_security" checked disabled>
                        <span>Security alerts</span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- SMS Notifications Modal -->
<div id="sms-notifications-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>SMS Notifications
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <div class="section">
            <form>
                <div class="input-field input-outlin">
                    <input id="notification_sms" type="tel" class="validate" value="123-456-7890">
                    <label for="notification_sms">Default SMS number</label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="sms_comments" checked>
                        <span>Someone messages you about your listing</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="sms_shares">
                        <span>Someone shares your listing post</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="sms_follows" checked>
                        <span>A user follows your account</span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="sms_group_posts">
                        <span>New listing posts frm people you follow </span>
                    </label>
                </div>
                <div class="section custom-checkbox">
                    <label>
                        <input type="checkbox" id="sms_private_messages" checked>
                        <span>You receive a private message</span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Account Privacy Modal -->
<div id="account-privacy-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Account Privacy
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <p class="small text-muted">By setting your account to private, your profile information and posts will not be visible to users outside of your user groups.</p>
        <form>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-privacy" id="radioPrivacy1" type="radio" name="radioPrivacy" checked>
                    <span>Public (posts are available to all users)</span>
                </label>
            </div>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-privacy" id="radioPrivacy2" type="radio" name="radioPrivacy">
                    <span>Private (Listing posts are available to only users that are following you)</span>
                </label>
            </div>
        </form>
    </div>
</div>

<!-- Data Sharing Modal -->
<div id="data-sharing-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Data Sharing
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <p class="small text-muted">Sharing usage data can help us to improve our products and better serve our users as they navigate through our application. When you agree to share usage data with us, crash reports and usage analytics will be automatically sent to our development team for investigation.</p>
        <form>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-data" id="radioUsage1" type="radio" name="radioUsage" checked>
                    <span>Yes, share data and crash reports with app developers</span>
                </label>
            </div>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-data" id="radioUsage2" type="radio" name="radioUsage">
                    <span>No, limit my data sharing with app developers</span>
                </label>
            </div>
        </form>
    </div>
</div>

<!-- Two-Factor Authentication Modal -->
<div id="two-factor-auth-modal" class="modal" style="margin-top: 50px; border-radius: 20px;">
    <div class="modal-content">
        <h4>Two-Factor Authentication
            <a href="#!" class="modal-close right"><i class="material-icons">close</i></a>
        </h4>
        <p>Add another level of security to your account by enabling two-factor authentication. We will send you a text message to verify your login attempts on unrecognized devices and browsers.</p>
        <form>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-auth" id="twoFactorOn" type="radio" name="twoFactor" checked>
                    <span>On</span>
                </label>
            </div>
            <div class="section custom-radio">
                <label>
                    <input class="with-gap custom-radio-auth" id="twoFactorOff" type="radio" name="twoFactor">
                    <span>Off</span>
                </label>
            </div>
            <div class="input-field input-outlin">
                <input id="twoFactorSMS" type="tel" class="validate" placeholder="Enter a phone number" value="123-456-7890">
                <label for="twoFactorSMS">SMS Number</label>
            </div>
        </form>
    </div>
</div>
