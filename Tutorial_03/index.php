    <link rel="stylesheet" href="css/style.css">

    <div class="position">
        <h1>Enter your birthday</h1>
        <p>We will calculate your age</p>
        <form action="" method="POST">
            <input type="date" name="date">
            <button type="submit" name="submit" value="submit" class="submit">
        </form>

        <?php

        if (isset($_POST['submit']))
        {
            $submit_date = $_POST['date'];
            $userinput_date = new DateTime($submit_date);
            $current_date = new DateTime();

            //checking if the user input future date to avoid calculating wrong values
            if ($userinput_date > $current_date) 
            {
                echo "<p class='error'>Sorry, the day you select is in future .. please choose your birthday</p>";
            } 
            else 
            {
                $_age = floor((time() - strtotime($submit_date)) / 31556926);
                echo "Your age is : $_age";
            }
        }
        
        ?>
    </div>
