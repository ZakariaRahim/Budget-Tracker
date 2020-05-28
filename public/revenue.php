 <?php
    include_once '../private/init.php';
    $title = 'Budget Revenue';
    include_once SHARED_PATH .'/header.php';
    include_once SHARED_PATH. "/header_nav.php";
      if(!isset($_SESSION['user'])){
      header('location: index.php');
  }

    if(isset($_POST['add'])){
        $decription = $_POST['title'] ?? '';
        $cost = $_POST['cost'] ?? '';
        $author = $_SESSION['user']['user_id'];

        // an expense cost should be negative

        if(Budget::addRevenue($decription, $cost, $author))
            echo "<script>confirm('Data added...')</script>";
        else 
            echo "<script>confirm('Data not added...')</script>";            }

    ?>

    <div class="container">
        <div class="revenue-area">
        <p class="revenue-title">Add Revenue</p>
            <form action="revenue.php" method="post">
                <div class="form-group">
                    <label for="title">Revenue Description</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="cost">Revenue Amount</label>
                    <input type="number" id="cost" class="form-control" name="cost"> 
                </div>

                <div class="form-group">
                <button class="btn btn-outline-danger btn-block" name="add">Submit Expense</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
