<?php include _BASEFILE_.'/default/views/header.php'; ?>




    <form class="appnitro" id="mainForm" method="post" >
        <div class="form_description">
            <p>This form is For Demonstration purposes only. check cfg.php file to configure your MT4 server.</p>
        </div>

        <ul>

            <li >

                <?php  $activePage="leverage";include _BASEFILE_.'/default/views/mainMenu.php'; ?>
            </li>
            <li>
                <ul id="loginInputsContainer">
                    <li>
                        <label class="description">Login </label>
                        <div>
                            <input name="login" class="element text medium" type="text" maxlength="255" value=""/>
                        </div>
                    </li>
                    <li>
                        <label class="description">Password</label><i>optional</i>
                        <div>
                            <input name="password" class="element text medium" type="password" maxlength="255" value=""/>
                        </div>
                    </li>
                </ul>
            </li>

            <li><br></li>


            <div id="leverage" class="tab">
                <ul>
                    <li>
                        <label class="description">Leverage </label>
                        <div>
                            <select class="element select medium" name="leverage">
                                <?php foreach($leverages as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>



            <li class="buttons">
                <input id="saveForm"  type="submit" name="submit" value="Submit"  />
            </li>
        </ul>
    </form>




<?php include _BASEFILE_.'/default/views/footer.php'; ?>