 <?php
    include_once '../private/init.php';
    $title = 'Budget Expenses';
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

        if(substr($cost, 0,1) != '-')
            $cost = -$cost;

        if(Budget::addExpense($decription, $cost, $author))
            echo "<script>confirm('Data added...')</script>";
        else 
            echo "<script>confirm('Data not added...')</script>";            }

    ?>

    <div class="container">
        <div class="expence-area">
        <p class="expence-title">Add expence</p>
            <form action="expenses.php" method="post">
                <div class="form-group">
                    <label for="title">Expense Description</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="cost">Expense Cost</label>
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
