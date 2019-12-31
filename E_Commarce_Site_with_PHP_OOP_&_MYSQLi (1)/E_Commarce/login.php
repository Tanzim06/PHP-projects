<?php include './inc/header.php'; ?>
<?php
$login= ec_Session::get("custlogin");
if($login==true){
    header("Location: order.php");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['login'])){
    $CustomerLogin= $ClassCustomer->CustomerLogin($_POST);
}
?>
<div class="main">
    <div class="content">
        <div class="login_panel">
            <?php
            if(isset($CustomerLogin)){
                echo $CustomerLogin;
            }
            ?>
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <form action="" method="post">
                <input name="email" placeholder="Email" type="text">
                <input name="password" placeholder="Password" type="password">
                <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
            </form>
        </div>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['register'])){
    $CustomerReg= $ClassCustomer->CustomerRegistration($_POST);
}
?>
        <div class="register_account">
            <?php
            if(isset($CustomerReg)){
                echo $CustomerReg;
            }
            ?>
            <h3>Register New Account</h3>
            <form action="" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="name" placeholder="Name">
                                </div>

                                <div>
                                    <input type="text" name="city" placeholder="City">
                                </div>

                                <div>
                                    <input type="text" name="zipcode" placeholder="Zipcode" >
                                </div>
                                <div>
                                    <input type="text" name="email" placeholder="E-mail">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="address" placeholder="Address">
                                </div>
                                <div>
                                    <input type="text" name="country" placeholder="Country">
                                </div>		        

                                <div>
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>

                                <div>
                                    <input type="text" name="password" placeholder="password">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey" name="register">Create Account</button></div></div>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
<?php include './inc/footer.php'; ?>