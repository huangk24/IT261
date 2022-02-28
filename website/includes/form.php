<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>Contact Kai</legend>

            <label>First Name</label>
            <input type="text" name="first_name" value="<?php 
            if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ; ?>">
            <span class="error"><?= $first_name_err ?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php 
            if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ; ?>">
            <span class="error"><?= $last_name_err ?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php 
            if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ; ?>">
            <span class="error"><?= $email_err ?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder='xxx-xxx-xxxx' value="<?php 
            if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ; ?>">
            <span class="error"><?= $phone_err ?></span>

            <label>Vehicle Type</label>
            <ul>
                <li>
                    <input type="checkbox" name="cars[]" value="sedan" <?php if(isset(
                        $_POST['cars']) && in_array('sedan', $cars)) echo 
                        'checked = "checked" ' ; ?>>4 Doors Sedan
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="coupe" <?php if(isset(
                        $_POST['cars']) && in_array('coupe', $cars)) echo 
                        'checked = "checked" ' ; ?>>2 Doors Coupé
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="hatch" <?php if(isset(
                        $_POST['cars']) && in_array('hatch', $cars)) echo 
                        'checked = "checked" ' ; ?>>Hatchback
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="convertible" <?php if(isset(
                        $_POST['cars']) && in_array('convertible', $cars)) echo 
                        'checked = "checked" ' ; ?>>Convertible
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="suv" <?php if(isset(
                        $_POST['cars']) && in_array('suv', $cars)) echo 
                        'checked = "checked" ' ; ?>>SUV
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="truck" <?php if(isset(
                        $_POST['cars']) && in_array('truck', $cars)) echo 
                        'checked = "checked" ' ; ?>>Truck
                </li>
                <li>
                    <input type="checkbox" name="cars[]" value="electric" <?php if(isset(
                        $_POST['cars']) && in_array('electric', $cars)) echo 
                        'checked = "checked" ' ; ?>>Electric Vehicle
                </li>
            </ul>
            <span class="error"><?= $cars_err ?></span>

            <label>Drive Type</label>
            <ul>
                <li>
                    <input type="radio" name="drive" value="four_wheel" <?php if(isset(
                        $_POST['drive']) && $_POST['drive'] == 'four_wheel') echo 
                        'checked = "checked" ' ; ?>>Four Wheels Drive
                </li>
                <li>
                    <input type="radio" name="drive" value="front_wheel" <?php if(isset(
                        $_POST['drive']) && $_POST['drive'] == 'front_wheel') echo 
                        'checked = "checked" ' ; ?>>Front Wheels Drive
                </li>
                <li>
                    <input type="radio" name="drive" value="rear_wheel" <?php if(isset(
                        $_POST['drive']) && $_POST['drive'] == 'rear_wheel') echo 
                        'checked = "checked" ' ; ?>>Rear Wheels Drive
                </li>
                <li>
                    <input type="radio" name="drive" value="no" <?php if(isset(
                        $_POST['drive']) && $_POST['drive'] == 'no') echo 
                        'checked = "checked" ' ; ?>>I do not care
                </li>
            </ul>
            <span class="error"><?= $drive_err ?></span>

            <label>Road Condition</label>
            <select name="roads">
                <option value="" NULL <?php if(isset($_POST['roads']) && $_POST['roads'] == NULL) 
                echo 'selected = "unselected" '; ?>>Select one</option>
                <option value="city" <?php if(isset($_POST['roads']) && $_POST['roads'] == 'city') 
                echo 'selected = "selected" '; ?>>City</option>
                <option value="highway" <?php if(isset($_POST['roads']) && $_POST['roads'] == 'highway') 
                echo 'selected = "selected" '; ?>>Highway</option>
                <option value="countryside" <?php if(isset($_POST['roads']) && $_POST['roads'] == 'countryside') 
                echo 'selected = "selected" '; ?>>Countryside</option>
                <option value="mountain" <?php if(isset($_POST['roads']) && $_POST['roads'] == 'mountain') 
                echo 'selected = "selected" '; ?>>Mountain</option>
                <option value="snow" <?php if(isset($_POST['roads']) && $_POST['roads'] == 'snow') 
                echo 'selected = "selected" '; ?>>Snow</option>
            </select>
            <span class="error"><?= $roads_err ?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars
            ($_POST['comments']) ;?></textarea>
            <span class="error"><?= $comments_err ?></span>

            <label>Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="privacy" value="yes" <?php if(isset(
                        $_POST['privacy']) && $_POST['privacy'] == 'yes') echo 
                        'checked = "checked" ' ; ?>>You must agree!
                </li>
            </ul>
            <span class="error"><?= $privacy_err ?></span>

            <input type="submit" value="Send it!">
            <p><a href="">Reset!</a></p>
        </fieldset> 
    </form>