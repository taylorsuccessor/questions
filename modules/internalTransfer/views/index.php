<?php include _BASEFILE_.'/default/views/header.php'; ?>




    <form class="appnitro" id="mainForm" method="post" >
        <div class="form_description">
            <p>This form is For Demonstration purposes only. check cfg.php file to configure your MT4 server.</p>
        </div>

        <ul>

            <li >

                <?php  $activePage="internalTransfer";include _BASEFILE_.'/default/views/mainMenu.php'; ?>
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


            <div id="internal" class="tab">
                <li>
                    <label class="description">Transfer To</label>
                    <div>
                        <input name="toaccount" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>
                <li>
                    <label class="description">Amount</label>
                    <div>
                        <input name="amount2" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>
            </div>



            <li class="buttons">
                <input id="saveForm"  type="submit" name="submit" value="Submit"  />
            </li>
        </ul>
    </form>




<?php include _BASEFILE_.'/default/views/footer.php'; ?>