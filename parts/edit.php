<?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
        <form
          method="POST"
          action="<?php echo $_SERVER["REQUEST_URI"]; ?>"
          >
          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="name" class="form-label">Name</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="name"
                  name="name"
                  value="<?php echo $user['name']; ?>"
                  />
              </div>
              <div class="col">
                <label for="email" class="form-label">Email</label>
                <input 
                  type="email" 
                  class="form-control" 
                  id="email"
                  name="email"
                  value="<?php echo $user['email']; ?>"
                  />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="password" class="form-label">Password</label>
                <input 
                  type="password" 
                  class="form-control" 
                  id="password" 
                  name="password" 
                  />
              </div>
              <div class="col">
                <label for="confirm-password" class="form-label"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="confirm-password"
                  name="confirm_password"
                />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-control" id="role" name="role">
              <option value="">Select an option</option>
              <option value="user" <?php echo ( $user['role'] == 'user' ? 'selected' : '' ); ?>>User</option>
              <option value="editor" <?php echo ( $user['role'] == 'editor' ? 'selected' : '' ); ?>>Editor</option>
              <option value="admin" <?php echo ( $user['role'] == 'admin' ? 'selected' : '' ); ?>>Admin</option>
            </select>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken('edit_user_form'); ?>">
        </form>