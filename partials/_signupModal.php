

    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup for an CodingTalks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <form action="partials/_signuphandle.php" method="post">      
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputusername">Username</label>
                            <input type="text" class="form-control" id="signupusername" name="signupusername">   
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="signuppassword" name="signuppassword">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcpassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="signupcpassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>