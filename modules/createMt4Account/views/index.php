<?php include _BASEFILE_.'/default/views/header.php'; ?>


<script>



    $(document).ready(function(){
        $('.mt4loginTypeRadio').change(function(){

            $type= $('.mt4loginTypeRadio:checked').val();
            if($type==0){$('#newLogin').attr('disabled','disabled');}else{$('#newLogin').removeAttr('disabled');}
        });
    });



</script>

    <form class="appnitro" id="mainForm" method="post" >
        <div class="form_description">
            <p>This form is For Demonstration purposes only. check cfg.php file to configure your MT4 server.</p>
        </div>

        <ul>

            <li >

                <?php  $activePage="createMt4Account";include _BASEFILE_.'/default/views/mainMenu.php'; ?>
            </li>


            <li><br></li>



            <div id="createMt4Account" class="tab">


                <li>

                    <div id="loginTypeContainer">
                        <label><input type="radio"  checked class="mt4loginTypeRadio" name="mt4loginTypeRadio" value="0"/>Auto Generate </label>
                        <label><input type="radio"  class="mt4loginTypeRadio" name="mt4loginTypeRadio" value="1"/>Insert Login</label>
                        <input type="text" name="newLogin" id="newLogin"value="" placeholder="login" disabled>
                    </div>
                </li>
                <li>
                    <label class="description">Group</label>
                    <div>
                        <select name="group" class="element select medium" >
                            <?php foreach($groups as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>

                        </select>
                    </div>
                </li>

                <li>
                    <label class="description">Name</label>
                    <div>
                        <input name="name" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Password</label>
                    <div>
                        <input name="password1" class="element text medium" type="password" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Investor</label>
                    <div>
                        <input name="investor_password" class="element text medium" type="password" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Email</label>
                    <div>
                        <input name="email" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Country</label>
                    <div>
                        <select name="country" class="element select medium" >
                            <?php foreach($countriesArray as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>

                        </select>
                    </div>
                </li>

                <li>
                    <label class="description">State</label>
                    <div>
                        <input name="state" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">City</label>
                    <div>
                        <input name="city" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Address</label>
                    <div>
                        <input name="address" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Comment</label>
                    <div>
                        <input name="comment" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Phone</label>
                    <div>
                        <input name="phone" class="element text medium" type="tel" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Phone Password</label>
                    <div>
                        <input name="phone_password" class="element text medium" type="password" maxlength="255" value=""/>
                    </div>
                </li>



                <li>
                    <label class="description">Status</label>
                    <div>
                        <input name="status" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>

                <li>
                    <label class="description">Zipcode</label>
                    <div>
                        <input name="zipcode" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>


                <li>
                    <label class="description">Leverage</label>
                    <div>
                        <select name="leverage2" class="element select medium" >
                            <?php foreach($leverages as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>


                        </select>
                    </div>
                </li>


                <li>
                    <label class="description">Agent</label>
                    <div>
                        <input name="agent" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>



                <li>
                    <label class="description">Initial Deposit For Demo Account</label>
                    <div>
                        <select name="initial_deposit_for_demo_account" >
                            <?php foreach($initialDeposits as $key=>$value){echo '<option value="'.$key.'">'.$value.'</option>';}?>


                        </select>
                    </div>
                </li>



                <li>
                    <label class="description">National Identification</label>
                    <div>
                        <input name="nationalNum" class="element text medium" type="text" maxlength="255" value=""/>
                    </div>
                </li>


                <li>
                    <label class="description">&ensp;</label>
                    <div>

                        <label class="description"> <input name="send_reports" class="description"  type="checkbox"   value="1"/>Send Reports</label>

                    </div>
                </li>

                <li>
                    <label class="description">&ensp;</label>
                    <div>

                        <label class="description"> <input name="read_only" class="description"  type="checkbox"   value="1"/>Read Only</label>

                    </div>
                </li>



            </div>



            <li class="buttons">
                <input id="saveForm"  type="submit" name="submit" value="Submit"  />
            </li>
        </ul>
    </form>




<?php include _BASEFILE_.'/default/views/footer.php'; ?>