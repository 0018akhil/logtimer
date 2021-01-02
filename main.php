<div class="container">

<div class="buttons">

    <form action="index.php" method="post">
        <button type="submit" name="login" id="login">Login</button>
    </form>


    <form action="index.php" method="post">
        <button type="submit" name="logout" id="logout">Logout</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="reset" id="reset">Reset</button>
    </form>

</div>

<div class="table">

    <table>
        <tr>
            <th>Action</th>
            <th>Time</th>
        </tr>
        <tr>
            <td>Last Login Time</td>
            <td><?php echo $loginTime ?></td>
        </tr>
        <tr>
            <td>Last Logout Time</td>
            <td><?php echo $logoutTime ?></td>
        </tr>
        <tr>
            <td>Difference Time</td>
            <td><?php echo $differenceInTime ?></td>
        </tr>
        <tr>
            <td>Total Login Time</td>
            <td><?php echo isset($_SESSION['totalTime']) ? gmdate( 'H:i:s', $_SESSION['totalTime']) : "" ?></td>
        </tr>
    </table>

</div>

</div>