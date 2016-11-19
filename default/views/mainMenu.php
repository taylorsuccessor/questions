<div id="tabsContainer">
    <a href="<?=baseUrl('/leverage');?>" id="leverage">
        Leverage
    </a>
    <a href="<?=baseUrl('/changePassword');?>" id="changePassword" >
        Change Password
    </a>
    <a href="<?=baseUrl('/payment');?>" id="payment">
        Payment
    </a>
    <a href="<?=baseUrl('/internalTransfer');?>"  id="internalTransfer" >
        Internal Transfer
    </a>
    <a href="<?=baseUrl('/createMt4Account');?>"  id="createMt4Account" >
        Create MT4 Account
    </a>
    <a href="<?=baseUrl('/modifyMt4Account');?>"  id="modifyMt4Account" >
        Modify MT4 Account
    </a>


</div>


<style type="text/css">
    #tabsContainer a#<?=$activePage;?>{
        color: #000000;
        background-color: #DEDEDE;
        font-weight: bold;
    }
</style>