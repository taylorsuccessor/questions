<?php include _BASEFILE_.'/default/views/header.php'; ?>




    <form class="appnitro" id="mainForm" method="post" >
        <div class="form_description">
            <p>This form is For Demonstration purposes only. check cfg.php file to configure your MT4 server.</p>
        </div>

        <ul>

            <li >

                <?php $activePage="payment";include _BASEFILE_.'/default/views/mainMenu.php'; ?>
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



            <div id="payment" class="tab">
                <ul>
                    <li>
                        <label class="description">Amount</label>
                        <div>
                            <input name="amount1" class="element text medium" type="text" maxlength="255" value=""/>
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="paymenttype" value="0" checked="checked"/>Deposit
                        <input type="radio" name="paymenttype" value="1" />Withdraw
                        <input type="radio" name="paymenttype" value="2" />Credit In
                        <input type="radio" name="paymenttype" value="3" />Credit Out
                    </li>
                    <li>
                        <label class="description">Comment</label>
                        <div>
                            <input name="comment1" class="element text medium" type="text" maxlength="255" value=""/>
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