<?php
include 'dbconfig.php';

// Execute the SQL query
$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result === false) {
    // Output the error message
    echo "Error: " . mysqli_error($conn);
    exit; // Stop further execution if query failed
}
?>

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">2</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Bike</h1>
        
        <div class="row">
            <?php while($i = mysqli_fetch_assoc($result)): $x = $i['pID']; ?>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="<?php echo $i['pImage']; ?>" alt="" style="height:238px; width:212px;">
                    <h4 class="text-uppercase mb-4"><?php echo $i['pTitle']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <span><?php echo $i['pModel']; ?></span>
                        </div>
                        <div class="px-2 border-left"></div>
                        <div class="px-2">
                            <span><?php echo $i['pMileage']; ?> KM/L</span>
                        </div>
                    </div>
                    <a href="">Rs.<?php echo $i['pPrice']; ?></a>
                    <a href="booking.php?id=<?php echo $x ?>">
                        <button class="btn btn-block btn-primary py-3" type="submit">Book Now</button>
                    </a>    
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        
    </div>
</div>
