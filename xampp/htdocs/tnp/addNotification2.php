<html>
    <body>
        <div>
            <marquee direction="left">   
            <?php     
                $con=mysqli_connect('localhost','root','','tnpsys');        
                $q="select * from addNotification";
                $rs=mysqli_query($con, $q);
                while($row=mysqli_fetch_array($rs))
         {
                echo"
                    Company Name: $row[cname]<br>
                    Place: $row[place]<br>
                    Date: $row[date] <br>
                    Rounds: $row[details]<br>
                    Campus Type:$row[type]                    
            ";
         }

        ?>
        </morquee>
        </div>


    </body>
</html>