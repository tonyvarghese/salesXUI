<div class="row middle-container"  id="settings-profile">

    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-2 col-lg-1">
                <div class="box"><img src="../img/User-50.png" alt="Profile"></div>
            </div>
            <div class="col-xs-10 col-lg-11">
                <div class="box settings-profile">

                    <div class="settings-profile-name">
                        <small>NAME</small>
                        <div class="name">Bushair AP</div>
                    </div>


                    <div class="row">
                        <div class="col-xs-4">
                            <div class=""><small>MOBILE NUMBER</small><div>91-9895******</div></div>
                        </div>
                        <div class="col-xs-8">
                            <div class=""><small>EMAIL ADDRESS</small><div>m.everything@gmail.com</div></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="container-row">
                                <a class="container-link" href="#">+ ADD NEW STATUS</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="settings-hr">
    </div>
    <div class="col-xs-12">
        <div class="container-section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="middle-container-heading">Change Password</div>
                </div>
            </div>

            <div class="row" id="change-password-button">
                <div class="col-xs-offset-1 col-xs-11">
                    <div class="box">
                        <button class="blue-button">Change Password</button>
                    </div>
                </div>
            </div>

            <div style="display: none" class="row" id="edit-password">
                <div class="col-xs-offset-1 col-xs-11">
                    <div class="box">
                        <form>
                            <p><input required id="current-password" class="input-line" type="text" placeholder="Current Password"></p>
                            <p><input required id="new-password" class="input-line" type="text" placeholder="New Password"></p>
                            <p><input required id="confirm-new-password" class="input-line" type="text" placeholder="Confirm New Password"></p>
                            <p>
                                <button id="edit-password-change" class="grey-button">Change</button>
                                <button id="edit-password-cancel" class="blue-button">Cancel</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<script>

    $(document).ready(function(){

        $("#sidebar #sidebar_profile").addClass("active");

        Profile.init();

    });

</script>