<!-- css garbage from previous muste be added -->

<div class="wrapper">
    <h2>Reset Password</h2>
    <p>Please fill out this form to reset your password.</p>
    <!-- action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" -->
    <form method="post" action=".">
        <input type="hidden" name="action" value="reset">
        <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
            <label>New Password</label>
            <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
            <span class="help-block"><?php echo $new_password_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <a class="btn btn-link" href=".">Cancel</a>
        </div>
    </form>
</div>