<?php include _BASEFILE_.'/default/views/header.php'; ?>




    <form class="appnitro" id="mainForm" method="post" >
        <div class="form_description">
            <p>This form is For Demonstration purposes only. check cfg.php file to configure your MT4 server.</p>
        </div>

        <ul>

            <li >

                <?php  $activePage="modifyMt4Account";include _BASEFILE_.'/default/views/mainMenu.php'; ?>
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



            <div id="modifyMt4Account" class="tab">

                <li>
                    <label class="description">Email</label>
                    <div>
                        <input name="email4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Country</label>
                    <div>
                        <select name="country4" class="element select medium" >
                            <?php foreach($countriesArray as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>
                        </select>
                    </div>
                </li>

                <li>
                    <label class="description">State</label>
                    <div>
                        <input name="state4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">City</label>
                    <div>
                        <input name="city4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Address</label>
                    <div>
                        <input name="address4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>


                <li>
                    <label class="description">Phone</label>
                    <div>
                        <input name="phone4" class="element text medium" type="tel" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Phone Password</label>
                    <div>
                        <input name="phone_password4" class="element text medium" type="password" maxlength="255" value=""/>
                    </div>
                </li>



                <li>
                    <label class="description">Status</label>
                    <div>
                        <input name="status4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Zipcode</label>
                    <div>
                        <input name="zipcode4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>



                <li>
                    <label class="description">Agent</label>
                    <div>
                        <input name="agent4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>


                <li>
                    <label class="description">National Identification</label>
                    <div>
                        <input name="nationalNum4" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>


                <li>
                    <label class="description">&ensp;</label>
                    <div>
                        &ensp;
                    </div>
                </li>

        </ul>

                    <div style="width:45%; display:inline; clear: both; float:left;">

                        <label class="description"> <input name="send_reports4" class="description"  type="checkbox"   value="1"/>send reports</label>

                    </div>



                    <div style="width:45%; display:inline;">

                        <label class="description"> <input name="read_only4" class="description"  type="checkbox"   value="1"/>Read Only</label>

                    </div>






            <li class="buttons">
                <input id="saveForm"  type="submit" name="submit" value="Submit"  />
            </li>

        </div>




 </form>


<?php include _BASEFILE_.'/default/views/footer.php'; ?>