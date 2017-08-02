<h1>Page Manager</h1>

        <div class="row">
            <div class="col-md-3">

                <div class="list-group">

                    <a class="list-group-item" href="?page=pages">
                       <i class="fa fa-plus"></i> Add New Page
                    </a>

                    <?php 
                    
                        $q = "SELECT * FROM posts WHERE type = 1 ORDER BY title ASC";
                        $r = mysqli_query($dbc, $q);

                        while($list = mysqli_fetch_assoc($r)) { 
                          
                                $blurb = substr(strip_tags($list['body']),0,160);

                            ?>
                            

                          <div id="page_<?php echo $list['id']; ?>" class="list-group-item <?php selected($list['id'], $opened['id'], 'active') ?>">
                              <h4 class="list-group-item-heading"><?php echo $list['title']; ?></h4>
                              <span class="pull-right">
                                    <a id="del_<?php echo $list['id']; ?>" class="btn btn-delete" href="#"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                    <a href="index.php?page=pages&id=<?php echo $list['id']?>"><button class="btn btn-default"><i class="fa fa-chevron-right"></i></button></a>
                              </span>
                              <p class="list-group-itm-text"><?php echo $blurb; ?></p>
                          </div>

                        
                    <?php } ?>

                </div>
                
            </div>
            <div class="col-md-9">

                <?php if (isset($message)) { echo $message; }  ?>

                <form role="form" method="POST" action="index.php?page=pages&id=<?php echo $opened['id']; ?>">
                    
                    <div class="form-group">
                        
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="<?php echo $opened['title']; ?>" placeholder="Page Title">

                    </div>

                    <div class="form-group">
                        
                        <label for="user">User</label>
                        <select class="form-control" type="text" name="user" id="user">
                            

                            <option value="0">No user</option>

                            <?php
                            
                                $q = "SELECT id FROM users ORDER BY first ASC";
                                $r = mysqli_query($dbc, $q);

                                while ($user_list = mysqli_fetch_assoc($r)) {  
                                    
                                        $user_data = data_user($dbc, $user_list['id']); 

                                    ?>
                                   
                                <option value="<?php echo $user_data['id']; ?>" 
                                
                                <?php 
                                    if(isset($_GET['id'])) {
                                    selected($user_data['id'], $opened['user'], 'selected');
                                    } else {
                                     selected($user_data['id'], $user['id'], 'selected');
                                    }

                                ?>><?php echo $user_data['fullname']; ?></option>

                            <?php } ?>

                        </select>

                    </div>

                    <div class="form-group">
                        
                        <label for="slug">Slug</label>
                        <input class="form-control" type="text" name="slug" id="slug" value="<?php echo $opened['slug']; ?>" placeholder="Page Slug">

                    </div>

                    <div class="form-group">
                        
                        <label for="Label">Label</label>
                        <input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label']; ?>"placeholder="Page Label">

                    </div>

                    <div class="form-group">
                        
                        <label for="header">Header</label>
                        <input class="form-control" type="text" name="header" id="header" value="<?php echo $opened['header']; ?>"
                        placeholder="Page Header">

                    </div>

                    <div class="form-group">
                        
                        <label for="body">Body</label>
                        <textarea class="form-control editor" name="body" id="body" placeholder="Page Body" rows="8"><?php echo $opened['body']; ?>
                        </textarea>

                    </div>

                    <button type="submit" class="btn btn-default">Save</button>
                    <input type="hidden" name="submitted" value="1">
                    <?php if(isset($opened['id'])) { ?>
                        <input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
                    <?php } ?>


                </form>

            </div>
        </div>