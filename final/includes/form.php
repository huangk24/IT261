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

            <label>Age</label>
            <select name="ages">
                <option value="" NULL <?php if(isset($_POST['ages']) && $_POST['ages'] == NULL) 
                echo 'selected = "unselected" '; ?>>Select one</option>
                <option value="10-20" <?php if(isset($_POST['ages']) && $_POST['ages'] == '10-20') 
                echo 'selected = "selected" '; ?>>10 - 20 years old</option>
                <option value="21-30" <?php if(isset($_POST['ages']) && $_POST['ages'] == '21-30') 
                echo 'selected = "selected" '; ?>>21 - 30 years old</option>
                <option value="31-40" <?php if(isset($_POST['ages']) && $_POST['ages'] == '31-40') 
                echo 'selected = "selected" '; ?>>31 - 40 years old</option>
                <option value="41-50" <?php if(isset($_POST['ages']) && $_POST['ages'] == '41-50') 
                echo 'selected = "selected" '; ?>>41 - 50 years old</option>
                <option value="51-60" <?php if(isset($_POST['ages']) && $_POST['ages'] == '51-60') 
                echo 'selected = "selected" '; ?>>51 - 60 years old</option>
                <option value="60+" <?php if(isset($_POST['ages']) && $_POST['ages'] == '60+') 
                echo 'selected = "selected" '; ?>>60+ years old</option>
            </select>
            <span class="error"><?= $ages_err ?></span>

            <label>Which region do you come from?</label>
            <ul>
                <li>
                    <input type="radio" name="region" value="western_europe" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'western_europe') echo 
                        'checked = "checked" ' ; ?>>Western Europe
                </li>
                <li>
                    <input type="radio" name="region" value="central_and_eastern_europe" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'central_and_eastern_europe') echo 
                        'checked = "checked" ' ; ?>>Central and Eastern Europe
                </li>
                <li>
                    <input type="radio" name="region" value="asia" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'asia') echo 
                        'checked = "checked" ' ; ?>>Asia
                </li>
                <li>
                    <input type="radio" name="region" value="africa" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'africa') echo 
                        'checked = "checked" ' ; ?>>Africa
                </li>
                <li>
                    <input type="radio" name="region" value="mediterranean_and_middle_East" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'mediterranean_and_middle_East') echo 
                        'checked = "checked" ' ; ?>>Mediterranean & Middle East
                </li>
                <li>
                    <input type="radio" name="region" value="americas" <?php if(isset(
                        $_POST['region']) && $_POST['region'] == 'americas') echo 
                        'checked = "checked" ' ; ?>>Americas
                </li>
            </ul>
            <span class="error"><?= $region_err ?></span>

            <label>Language(s)</label>
            <ul>
                <li>
                    <input type="checkbox" name="languages[]" value="english" <?php if(isset(
                        $_POST['languages']) && in_array('english', $languages)) echo 
                        'checked = "checked" ' ; ?>>English
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="spanish" <?php if(isset(
                        $_POST['languages']) && in_array('spanish', $languages)) echo 
                        'checked = "checked" ' ; ?>>Spanish
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="french" <?php if(isset(
                        $_POST['languages']) && in_array('french', $languages)) echo 
                        'checked = "checked" ' ; ?>>French
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="chinese" <?php if(isset(
                        $_POST['languages']) && in_array('chinese', $languages)) echo 
                        'checked = "checked" ' ; ?>>Chinese
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="japanese" <?php if(isset(
                        $_POST['languages']) && in_array('japanese', $languages)) echo 
                        'checked = "checked" ' ; ?>>Japanese
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="korean" <?php if(isset(
                        $_POST['languages']) && in_array('korean', $languages)) echo 
                        'checked = "checked" ' ; ?>>Korean
                </li>
                <li>
                    <input type="checkbox" name="languages[]" value="others" <?php if(isset(
                        $_POST['languages']) && in_array('others', $languages)) echo 
                        'checked = "checked" ' ; ?>>Others (Let me know below!)
                </li>
            </ul>
            <span class="error"><?= $languages_err ?></span>

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