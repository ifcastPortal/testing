<div class="ifcast-style-card-1 p-2 mb-3">
    <div class="row px-2">
        <div class="col-12">
            <h6 class="text-left">Search a favorable job</h6>
            <form name="frm_login" id="frm_login" method="post" action="" onSubmit="return validateForm();">
                <div class="row p-2">
                    <div class="form-group col-md-5 col-sm-12 col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Job title here"
                                name="username">
                        </div>
                        <span class="err" id="err_username"> </span>
                    </div>
                    <div class="form-group col-md-5 col-sm-6 col-xs-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-suitcase" aria-hidden="true"
                                        id="user_role_icon_<?php echo $row_num; ?>"></i>

                                    <span class="loader" id="user_role_loader_<?php echo $row_num; ?>">
                                        <i class="fa fa-spinner fa-spin" style="font-size:14px; color:green;"></i>

                                    </span>
                                </span>
                            </div>

                            <select id="user_role_<?php echo $row_num; ?>" name="user_role[]" autofocus="autofocus" class="form-control" required>
                                <option value="">Select experience </option>
                                <option value="<?php echo $row->role_id; ?>">0</option>
                                <option value="<?php echo $row->role_id; ?>">1</option>
                                <option value="<?php echo $row->role_id; ?>">2</option>
                                <option value="<?php echo $row->role_id; ?>">3</option>
                                <option value="<?php echo $row->role_id; ?>">4</option>
                                <option value="<?php echo $row->role_id; ?>">5</option>
                            </select>
                        </div>
                        <span class="err" id="err_user_role_<?php echo $row_num; ?>"> </span>
                    </div>

                    <div class="form-group col-md-2 col-sm-2 col-12">
                        <div class="input-group">
                            <!-- <button type="submit" class="btn btn-primary" name="user_login">
                                Search
                            </button> -->

                            <a href="guestuser/joblistpage" class="btn btn-primary" name="user_login">
                                Search
</a>
                        </div>
                        <span class="err" id="err_login"> </span>
                    </div>
                </div>
            </form>
        </div>

        <!-- <div class="col-3">
            <h6>Sort your job</h6>
            <button type="submit" class="btn btn-primary mt-2" name="user_login">
                Up
            </button>
            <button type="submit" class="btn btn-primary mt-2" name="user_login">
                Down
            </button>
            <button type="submit" class="btn btn-primary mt-2" name="user_login">
                Hits
            </button>
        </div> -->
    </div>
</div>